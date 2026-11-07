<?php

declare(strict_types=1);

$fixture = tempnam(sys_get_temp_dir(), 'testt-config-');
$original = [];
foreach (['DB_HOST', 'DB_PORT', 'DB_NAME', 'DB_USER', 'DB_PASSWORD', 'TESTT_DB_CONFIG'] as $key) {
    $original[$key] = getenv($key);
    putenv($key);
}
$bootstrap = var_export(dirname(__DIR__) . '/src/Database.php', true);
$checks = 0;
function childCheck(string $body, string $label): void
{
    global $bootstrap, $checks;
    $process = proc_open([PHP_BINARY, '-r', "require $bootstrap; $body"],
        [1 => ['pipe', 'w'], 2 => ['pipe', 'w']], $pipes);
    if (!is_resource($process)) {
        throw new RuntimeException('Cannot start configuration test');
    }
    foreach ($pipes as $pipe) {
        stream_get_contents($pipe);
        fclose($pipe);
    }
    if (proc_close($process) !== 0) {
        throw new RuntimeException('FAIL: ' . $label);
    }
    $checks++;
}
try {
    file_put_contents($fixture, "<?php return ['DB_USER' => 'fixture_user', 'DB_PORT' => 3307, 'DB_PASSWORD' => 'fixture_only', 'UNRELATED' => 'ignored'];");
    putenv('TESTT_DB_CONFIG=' . $fixture);
    childCheck("exit(Database::setting('DB_USER') === 'fixture_user' ? 0 : 1);", 'local credentials');
    childCheck("exit(Database::setting('DB_PORT') === '3307' ? 0 : 1);", 'integer setting');
    childCheck("exit(Database::setting('DB_HOST', '127.0.0.1') === '127.0.0.1' ? 0 : 1);", 'defaults');
    childCheck("exit(Database::setting('UNRELATED', 'fallback') === 'fallback' ? 0 : 1);", 'only known database settings');
    putenv('DB_USER=environment_user');
    childCheck("exit(Database::setting('DB_USER') === 'environment_user' ? 0 : 1);", 'environment precedence');
    putenv('DB_PASSWORD=');
    childCheck("exit(Database::setting('DB_PASSWORD') === '' ? 0 : 1);", 'intentional empty environment value');
    putenv('DB_USER');
    putenv('DB_PASSWORD');
    file_put_contents($fixture, "<?php return 'invalid';");
    childCheck("try { Database::setting('DB_USER'); exit(1); } catch (RuntimeException \$e) { exit(0); }", 'invalid config rejected');
    file_put_contents($fixture, "<?php return ['DB_PORT' => []];");
    childCheck("try { Database::setting('DB_PORT'); exit(1); } catch (RuntimeException \$e) { exit(0); }", 'invalid values rejected');
    putenv('TESTT_DB_CONFIG=' . $fixture . '.missing');
    childCheck("try { Database::setting('DB_USER'); exit(1); } catch (RuntimeException \$e) { exit(0); }", 'explicit missing file rejected');
    echo "Configuration: PASS ($checks checks)\n";
} finally {
    unlink($fixture);
    foreach ($original as $key => $value) {
        putenv($value === false ? $key : $key . '=' . $value);
    }
}
