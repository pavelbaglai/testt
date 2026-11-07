<?php
require_once __DIR__ . '/src/bootstrap.php';
date_default_timezone_set('Europe/Moscow');
$db = Database::connect();
if (!$db) die('Ошибка подключения: ' . Database::error());
Database::selectDatabase(Database::setting('DB_NAME', 'telephone'), $db);

$day = (int)date('j');
$month = (int)date('n');
$year = (int)date('Y');

$birthdayResult = Database::query(Database::statement('SELECT row_type FROM interface_types WHERE day=? AND month=? AND year=?', [(int)($day), (int)($month), (int)($year)]));
$row_type = 1;
if ($r = Database::fetchAssoc($birthdayResult)) $row_type = (int)$r['row_type'];

$dr_list = array();
$birthdayResult = Database::query(Database::statement('SELECT * FROM richstone_katalog WHERE dr LIKE ?', [(sprintf('%02d.%02d.%%', $day, $month))]));
while ($row = Database::fetchAssoc($birthdayResult)) {
    $dr_list[] = $row;
}
?>
<?php
if ($row_type == 3): ?>
        <?php 
	$sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? ''; 
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? ''; 
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? ''; 
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? ''; 
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
        ?>
 
<?php elseif ($row_type == 2): 
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? ''; 
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? ''; 
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? ''; 
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? ''; 
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
else: ?>

        <?php
echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	
echo"<tr><td class='mail1' align='left'>";
$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");


for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
{
$dd = $rows['dr'] ?? ''; 
$cut = substr($dd, 0, 6);
$d=date('d.m.');


if ($cut==$d)
{
echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
if ($rows['radiobutton']==1)
{ 
 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
}
else if ($rows['radiobutton']==2)
{ 
 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
}
else if ($rows['radiobutton']==3)
{
  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
}
else if ($rows['radiobutton']==4)
{
  $foto= "<p>".$rows['sfoto']."</p>";
}
else if ($rows['radiobutton']==5)
{
  $foto= "<p >".$rows['sfoto']."</p>";
}
else if ($rows['radiobutton']==6)
{ 
 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
}
else if ($rows['radiobutton']==7)
{
  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
}
else 
$foto="<p>".$rows['sfoto']."</p>";
echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
</tr>
<tr>
 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
</tr>
<tr>
<td class='mail1'><b>Поздравляем!!!</b>
<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
$ipus = $_SERVER["REMOTE_ADDR"] ?? '';
echo "</td></tr></table><br>";
}
//}else {echo "Больше трех";}
}
//}
echo "</td></tr>";

//echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");

$tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
{  
echo"<tr><strong><td class='mail1' align='left'>Завтра день рождения празднуют:</td></strong></tr>";
}
while ($rows = Database::fetchAssoc($sqls)) {
$tomm_date=time()+60*60*24;
$tom_date=date("d.m.",$tomm_date);
$dd = $rows['dr'] ?? ''; 
$cut = substr($dd, 0, 6);
if ($tom_date==$cut)
{
echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
$ipus = $_SERVER["REMOTE_ADDR"] ?? '';
echo "</td></tr>";
}}
echo"<tr><td class='mail1' align='left'>";
echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
while ($rows = Database::fetchAssoc($sqls))
{
$tomm_date=time()+((60*60*24)*2);
$tom_date=date("d.m.",$tomm_date);
$dd = $rows['dr'] ?? ''; 
$cut = substr($dd, 0, 6);
if ($tom_date==$cut)
{
echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
$ipus = $_SERVER["REMOTE_ADDR"] ?? '';
echo "</td></tr>";
}
$tomm_date=time()+((60*60*24)*3);
$tom_date=date("d.m.",$tomm_date);
$dd = $rows['dr'] ?? ''; 
$cut = substr($dd, 0, 6);
if ($tom_date==$cut)
{
echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
$ipus = $_SERVER["REMOTE_ADDR"] ?? '';
echo "</td></tr>";
}}
echo "</table>";
        ?>
<?php endif; ?>
