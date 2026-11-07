<?php
require_once __DIR__ . '/src/bootstrap.php';
header('Content-Type: text/html; charset=UTF-8');
// admin.php
// Подключение к базе данных
$pdo = Database::connect(null, 'utf8mb4');

$date = date('Y-m-d');
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    for ($i = 1; $i <= 3; $i++) {
        $content = isset($_POST["content$i"]) ? $_POST["content$i"] : '';
        // Проверяем, есть ли запись
        $stmt = $pdo->prepare("SELECT id FROM content WHERE interface_id=? AND date=?");
        $stmt->execute([$i, $date]);
        $existing = $stmt->fetchColumn();
        if ($existing !== false) {
            // Обновляем
            $stmt2 = $pdo->prepare("UPDATE content SET content=? WHERE interface_id=? AND date=?");
            $stmt2->execute([$content, $i, $date]);
            $stmt2->closeCursor();
        } else {
            // Вставляем
            $stmt2 = $pdo->prepare("INSERT INTO content (interface_id, content, date) VALUES (?, ?, ?)");
            $stmt2->execute([$i, $content, $date]);
            $stmt2->closeCursor();
        }
        $stmt->closeCursor();
    }
    $message = 'Данные сохранены';
}

// Получаем текущий контент
$interface_content = array();
for ($i = 1; $i <= 3; $i++) {
    $stmt = $pdo->prepare("SELECT content FROM content WHERE interface_id=? AND date=?");
    $stmt->execute([$i, $date]);
    $content = $stmt->fetchColumn();
    $interface_content[$i] = $content === false ? '' : $content;
    $stmt->closeCursor();
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


