<?php

declare(strict_types=1);
require_once __DIR__ . '/../src/bootstrap.php';

if (getenv('TESTT_TEST_DATABASE') !== '1') {
    throw new RuntimeException('Run only against the disposable development database with TESTT_TEST_DATABASE=1');
}
error_reporting(E_ALL);
set_error_handler(static function (int $severity, string $message, string $file, int $line): never {
    throw new ErrorException($message, 0, $severity, $file, $line);
});
$checks = 0;
function check(bool $condition, string $label): void
{
    global $checks;
    if (!$condition) {
        throw new RuntimeException('FAIL: ' . $label);
    }
    $checks++;
}
function request(string $path, ?array $post = null, string $cookie = ''): array
{
    $options = ['method' => $post === null ? 'GET' : 'POST', 'ignore_errors' => true,
        'follow_location' => 0, 'timeout' => 40,
        'header' => "Cookie: $cookie\r\nContent-Type: application/x-www-form-urlencoded\r\n"];
    if ($post !== null) {
        $options['content'] = http_build_query($post);
    }
    $body = file_get_contents('http://127.0.0.1:8080/' . $path, false,
        stream_context_create(['http' => $options]));
    return [$http_response_header, $body];
}
function location(array $headers): string
{
    foreach ($headers as $header) {
        if (str_starts_with($header, 'Location: ')) {
            return substr($header, 10);
        }
    }
    return '';
}

check(PHP_MAJOR_VERSION === 8 && PHP_MINOR_VERSION === 3, 'PHP 8.3 runtime');
check(extension_loaded('pdo_mysql') && extension_loaded('calendar') && extension_loaded('gd'), 'required extensions');
$pdo = Database::connect();
check($pdo instanceof PDO, 'PDO connection');
$pdo->exec('CREATE TEMPORARY TABLE migration_test (id INT PRIMARY KEY, value TEXT) CHARACTER SET cp1251');
$value = iconv('UTF-8', 'CP1251', "Тест O'Reilly \\ ? ' OR 1=1 --");
check(Database::query(Database::statement('INSERT INTO migration_test VALUES (?, ?)', [1, $value])) === true, 'bound INSERT');
check(Database::query(Database::statement('INSERT INTO migration_test VALUES (?, ?)', [2, 'second'])) === true, 'second INSERT');
$result = Database::query(Database::statement('SELECT * FROM migration_test ORDER BY id LIMIT ?', [2]));
check(Database::numRows($result) === 2, 'buffered row count and integer LIMIT');
check(Database::fetchAssoc($result)['value'] === $value, 'cp1251/quotes/backslash round trip');
check(Database::fetchRow($result) === ['2', 'second'], 'numeric row preserves column order');
check(Database::fetchRow($result) === false, 'end of result');
check(Database::seek($result, 0), 'rewind result');
$row = Database::fetchArray($result);
check($row[0] === $row['id'] && $row[1] === $row['value'], 'numeric and associative keys');
check(Database::result($result, 1, 'value') === 'second', 'random field access');
check(Database::query(Database::statement('UPDATE migration_test SET value=? WHERE id=?', ['updated', 2])) === true, 'bound UPDATE');
check(Database::query(Database::statement('DELETE FROM migration_test WHERE id=?', [2])) === true, 'bound DELETE');
check(!Database::seek($result, 50), 'invalid seek');
Database::freeResult($result);
check(Database::numRows($result) === 0, 'free result');
$items = [7 => 'a', 9 => 'b'];
check(next_form_item($items)[0] === 7 && next_form_item($items)[1] === 'b' && next_form_item($items) === false, 'parallel form cursor');
try {
    Database::identifier('menu; DROP TABLE menu');
    throw new RuntimeException('Invalid identifier accepted');
} catch (InvalidArgumentException) {
    check(true, 'reject invalid identifiers');
}

$login = 'php83_' . bin2hex(random_bytes(4));
$password = bin2hex(random_bytes(12));
$insert = $pdo->prepare('INSERT INTO osv_user (osv_user_name, osv_user_password, osv_user_type, pass) VALUES (?, MD5(?), 999, ?)');
$insert->execute([$login, $password, '']);
$userId = $pdo->lastInsertId();
try {
    [$headers] = request('getpwd.php', ['login' => $login, 'pswd' => $password]);
    check(location($headers) === 'main.php', 'successful login');
    [$headers] = request('getpwd.php', ['login' => "' OR 1=1 -- ", 'pswd' => 'wrong']);
    check(location($headers) === 'index.php', 'SQL injection does not authenticate');
    foreach (['index.php', 'getuser.php?q=O%27Reilly', 'drt.php', 'drr.php', 'pogodat.php',
        'main.php?work=1', 'main.php?work=3', 'main.php?work=7', 'main.php?work=10',
        'main1.php?work=1', 'spravirc.php', 'ppp.php'] as $path) {
        [$headers, $body] = request($path, null, 'user_flag=999; news=1; pochta=1');
        check(str_contains($headers[0], '200 OK') && strlen($body) > 100, 'HTTP ' . $path);
    }
} finally {
    $delete = $pdo->prepare('DELETE FROM osv_user WHERE id=?');
    $delete->execute([$userId]);
}

// Exercise legacy form handlers against strict SQL mode with bound values.
$tag = 'migration_' . bin2hex(random_bytes(5));
$pageId = null;
$contactId = null;
try {
    [$headers] = request('insert_page.php', ['page_name_ins' => $tag, 'view_page_ins' => $value], 'user_flag=999');
    check(location($headers) === 'main.php?work=1', 'page create redirect');
    $lookup = $pdo->prepare('SELECT id, richstone_page_source FROM richstone_page WHERE richstone_page_name=?');
    $lookup->execute([$tag]);
    $page = $lookup->fetch();
    check($page !== false && $page['richstone_page_source'] === $value, 'page create persists quotes and cp1251');
    $pageId = $page['id'];
    [$headers] = request('update_page.php', ['hid_id' => $pageId, 'page_num' => 1,
        'page_kat' => 0, 'page_kat_num' => 0, 'page_menu_num' => 0, 'page_name_upd' => $tag,
        'view_page_upd' => 'updated ' . $value, 'page_alt_name' => 0,
        'page_alt_date' => '', 'page_alt_time' => '', 'page_alt_dd' => ''], 'user_flag=999');
    $lookup->execute([$tag]);
    check($lookup->fetch()['richstone_page_source'] === 'updated ' . $value, 'page update persists bound values');
    [$headers] = request('insert_katalog.php', ['page_fname_ins' => $tag, 'page_name_ins' => $value,
        'page_key_num_ins' => 0, 'page_key_page_ins' => 0, 'radiobutton' => 1], 'user_flag=999');
    $lookup = $pdo->prepare('SELECT id, name FROM richstone_katalog WHERE fname=?');
    $lookup->execute([$tag]);
    $contact = $lookup->fetch();
    check($contact !== false && $contact['name'] === $value, 'contact create with strict SQL defaults');
    $contactId = $contact['id'];
    request('del_kat.php?code=' . $contactId, null, 'user_flag=999');
    $lookup->execute([$tag]);
    check($lookup->fetch() === false, 'contact delete');
    [$headers] = request('insert_page.php', ['page_name_ins' => $tag . '_denied'], '');
    check(location($headers) === 'error.php', 'denied form stops before write');
    $lookup = $pdo->prepare('SELECT COUNT(*) FROM richstone_page WHERE richstone_page_name=?');
    $lookup->execute([$tag . '_denied']);
    check((int)$lookup->fetchColumn() === 0, 'denied form leaves database unchanged');
} finally {
    $pdo->prepare('DELETE FROM richstone_page WHERE richstone_page_name IN (?, ?)')->execute([$tag, $tag . '_denied']);
    $pdo->prepare('DELETE FROM richstone_katalog WHERE fname=?')->execute([$tag]);
}

// Exercise both INSERT and UPDATE branches of the native PDO content handler.
$utf8 = Database::connect(null, 'utf8mb4');
$today = date('Y-m-d');
$select = $utf8->prepare('SELECT interface_id, content FROM content WHERE date=? AND interface_id BETWEEN 1 AND 3');
$select->execute([$today]);
$original = $select->fetchAll(PDO::FETCH_KEY_PAIR);
try {
    $delete = $utf8->prepare('DELETE FROM content WHERE date=? AND interface_id BETWEEN 1 AND 3');
    $delete->execute([$today]);
    foreach (["Первый O'Reilly \\ ?", 'Обновлено 😀'] as $text) {
        [$headers] = request('dptt.php', ['content1' => $text, 'content2' => '', 'content3' => 'test']);
        check(str_contains($headers[0], '200 OK'), 'content handler response');
        $select->execute([$today]);
        check($select->fetchAll(PDO::FETCH_KEY_PAIR)[1] === $text, 'UTF-8 content insert/update round trip');
    }
} finally {
    $delete->execute([$today]);
    $restore = $utf8->prepare('INSERT INTO content (interface_id, content, date) VALUES (?, ?, ?)');
    foreach ($original as $id => $text) {
        $restore->execute([$id, $text, $today]);
    }
}
echo "PASS: $checks checks\n";
