

<?php
require_once __DIR__ . '/src/bootstrap.php';
/********************************************************************
 * Подключение к базе
 ********************************************************************/
Database::connect() or die("Ошибка MySQL");
Database::selectDatabase(Database::setting('DB_NAME', 'telephone')) or die("Ошибка БД");
Database::query("SET NAMES cp1251");

/********************************************************************
 * Сохранение порядка из формы админки
 ********************************************************************/
$post = isset($_POST) ? $_POST : $HTTP_POST_VARS;

if (isset($post['save']) && isset($post['order'])) {

    foreach ($post['order'] as $id => $pp) {
        $id = intval($id);
        $pp = intval($pp); // это и есть твой $pp

        Database::query(Database::statement('UPDATE richstone_page SET menu_num = ? WHERE id = ?', [$pp, $id]));
    }

    header("Location: ppp.php");
    exit;
}

/********************************************************************
 * Выборка страниц
 ********************************************************************/
$q = Database::query("
    SELECT id,
           richstone_page_name,
           richstone_page_source,
           menu_num,
           key_menu
    FROM richstone_page
    WHERE alt_name = 1
    ORDER BY menu_num ASC, id ASC
");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Редактирование порядка (menu_num)</title>

<style>
body { font-family: Tahoma; font-size: 12px; }
table { border-collapse: collapse; }
th, td { border: 1px solid #888; padding: 4px 6px; }
.textgreen { color: green; }
.zag { font-weight: bold; text-decoration: none; }
</style>
</head>
<body>

<h3>Админка – Изменить порядок (поле menu_num)</h3>

<form method="post" action="ppp.php">
<table>
<tr>
    <th>ID</th>
    <th>Название</th>
    <th>Порядок ($pp ? menu_num)</th>
</tr>

<?php
Database::seek($q, 0);
while ($row = Database::fetchArray($q)) {
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo htmlspecialchars($row['richstone_page_name']); ?></td>
    <td>
        <input type="text" name="order[<?php echo $row['id']; ?>]"
               value="<?php echo intval($row['menu_num']); ?>"
               size="3">
    </td>
</tr>
<?php } ?>

</table>
<br>
<input type="submit" name="save" value="Сохранить порядок">
</form>

<hr>

<h3>Вывод меню (используем $pp и menu_num)</h3>

<?php
Database::seek($q, 0);
$pp = 1;   // ? вот твой порядковый номер

while ($row = Database::fetchArray($q)) {

    // считаем количество элементов каталога
    $rr = Database::query(Database::statement('SELECT id FROM richstone_katalog WHERE key_page = ?', [(int)($row['key_menu'])]));
    $count = Database::numRows($rr);

    echo $pp.". <a href='index.php?link=".$row['richstone_page_source']."' class='zag'>"
         .$row['richstone_page_name']
         ." (<span class='textgreen'>".$count."</span>)</a>";

    $pp++;
}
?>

</body>
</html>
