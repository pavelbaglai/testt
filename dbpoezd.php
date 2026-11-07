<?php
require_once __DIR__ . '/src/bootstrap.php';
$host = Database::setting('DB_HOST', '127.0.0.1');
$username = Database::setting('DB_USER', '');
$passwd = Database::setting('DB_PASSWORD', '');
$db_name = Database::setting('DB_TRAIN_NAME', 'train_timetable');
$sock = $db = Database::connect($db_name);
