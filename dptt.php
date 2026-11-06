


<?php
// admin.php
// Подключение к базе данных
$mysqli = new mysqli('localhost', 'root', 'web2012irc', 'telephone');
if ($mysqli->connect_errno) { die('Ошибка: ' . $mysqli->connect_error); }

$date = date('Y-m-d');
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    for ($i = 1; $i <= 3; $i++) {
        $content = isset($_POST["content$i"]) ? $_POST["content$i"] : '';
        // Проверяем, есть ли запись
        $stmt = $mysqli->prepare("SELECT id FROM content WHERE interface_id=? AND date=?");
        $stmt->bind_param('is', $i, $date);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            // Обновляем
            $stmt2 = $mysqli->prepare("UPDATE content SET content=? WHERE interface_id=? AND date=?");
            $stmt2->bind_param('sis', $content, $i, $date);
            $stmt2->execute();
            $stmt2->close();
        } else {
            // Вставляем
            $stmt2 = $mysqli->prepare("INSERT INTO content (interface_id, content, date) VALUES (?, ?, ?)");
            $stmt2->bind_param('iss', $i, $content, $date);
            $stmt2->execute();
            $stmt2->close();
        }
        $stmt->close();
    }
    $message = 'Данные сохранены';
}

// Получаем текущий контент
$interface_content = array();
for ($i = 1; $i <= 3; $i++) {
    $stmt = $mysqli->prepare("SELECT content FROM content WHERE interface_id=? AND date=?");
    $stmt->bind_param('is', $i, $date);
    $stmt->execute();
    $stmt->bind_result($content);
    $stmt->fetch();
    $interface_content[$i] = $content;
    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin</title>
</head>
<body>
<h1>Админка (<?= $date ?>)</h1>
<?php if ($message): ?><p style="color:green"><?= $message ?></p><?php endif; ?>
<form method="post">
    <?php for ($i = 1; $i <= 3; $i++): ?>
        <h3>Интерфейс <?= $i ?></h3>
        <textarea name="content<?= $i ?>" rows="4" cols="50"><?= htmlspecialchars($interface_content[$i]) ?></textarea><br>
    <?php endfor; ?>
    <button type="submit">Сохранить</button>
</form>
</body>
</html>


