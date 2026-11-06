<?php
// Keep this entry point parseable on old PHP so it can report a version mismatch.
if (PHP_SAPI !== 'cli') {
    http_response_code(404);
    exit;
}
echo 'PHP: ' . PHP_VERSION . PHP_EOL;
if (PHP_VERSION_ID < 80300) {
    fwrite(STDERR, "FAIL: this application requires PHP 8.3 or newer; check the Apache/FPM version too.\n");
    exit(1);
}
$missing = array();
foreach (array('pdo_mysql', 'calendar', 'gd') as $extension) {
    if (!extension_loaded($extension)) {
        $missing[] = $extension;
    }
}
if ($missing) {
    fwrite(STDERR, 'FAIL: missing PHP extensions: ' . implode(', ', $missing) . PHP_EOL);
    exit(1);
}
echo "Extensions: PASS\n";
require_once dirname(__DIR__) . '/src/Database.php';
try {
    if (Database::setting('DB_USER') === '') {
        fwrite(STDERR, "FAIL: DB_USER is not configured. Copy config/database.example.php to config/database.local.php and configure your server credentials.\n");
        exit(1);
    }
    $pdo = Database::connect();
    $pdo->query('SELECT 1')->fetchColumn();
    echo "Database connection: PASS\n";
    $query = $pdo->prepare('SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = DATABASE() AND table_name = ?');
    $missing = array();
    foreach (array('richstone_page', 'richstone_katalog', 'osv_user', 'statistics', 'online', 'content') as $table) {
        $query->execute(array($table));
        if ((int)$query->fetchColumn() === 0) {
            $missing[] = $table;
        }
    }
    if ($missing) {
        fwrite(STDERR, 'FAIL: missing tables: ' . implode(', ', $missing) . PHP_EOL);
        exit(1);
    }
    echo "Required tables: PASS\n";
} catch (Throwable $error) {
    if ($error instanceof PDOException) {
        $state = preg_match('/\A[A-Z0-9]{5}\z/', (string)$error->getCode()) ? $error->getCode() : 'unknown';
        $driver = isset($error->errorInfo[1]) ? (int)$error->errorInfo[1] : 0;
        fwrite(STDERR, "FAIL: database connection/query failed (SQLSTATE $state; driver $driver). Check host, port, credentials, permissions and database name.\n");
    } else {
        fwrite(STDERR, "FAIL: database configuration cannot be loaded. Check file path, permissions, PHP syntax and the returned settings array.\n");
    }
    exit(1);
}
