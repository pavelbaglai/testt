<?php
require_once __DIR__ . '/src/bootstrap.php';
$host1 = Database::setting('DB_HOST', '127.0.0.1');
$username1 = Database::setting('DB_USER', '');
$passwd1 = Database::setting('DB_PASSWORD', '');
$db_name1 = Database::setting('DB_STAT_NAME', 'stat');
$sock1 = $db1 = Database::connect($db_name1);
