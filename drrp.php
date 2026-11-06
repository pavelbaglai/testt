<?php
date_default_timezone_set('Europe/Moscow');

$db = mysql_connect('localhost', 'root', 'web2012irc');
if (!$db) die('Ошибка подключения: ' . mysql_error());
mysql_select_db('telephone', $db);

$day = (int)date('j');
$month = (int)date('n');
$year = (int)date('Y');

$res = mysql_query("SELECT row_type FROM interface_types WHERE day=$day AND month=$month AND year=$year");
$row_type = 1;
if ($r = mysql_fetch_assoc($res)) $row_type = (int)$r['row_type'];

$dr_list = array();
$res = mysql_query("SELECT * FROM richstone_katalog WHERE dr LIKE '" . sprintf('%02d.%02d.%%', $day, $month) . "'");
while ($row = mysql_fetch_assoc($res)) {
    $dr_list[] = $row;
}
if ($row_type == 3) { 
	$sql = mysql_query("SELECT * FROM `dr` WHERE id");
	while ($row = mysql_fetch_row($sql))
echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = mysql_fetch_assoc($sqls)); $i++) 
	 {
	 $dd=$rows['dr'];
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
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 if ($tom_date!==$cut)
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
	}
	 elseif ($row_type == 2) { 
		$sql = mysql_query("SELECT * FROM `dr` WHERE id");
		while ($row = mysql_fetch_row($sql))
	echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
			echo"<tr><td class='mail1' align='left'>";
			$sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
		 
		 
		 for ($i=0; $i<($rows = mysql_fetch_assoc($sqls)); $i++) 
		 {
		 $dd=$rows['dr'];
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
		 $ipus=$_SERVER["REMOTE_ADDR"];
		 echo "</td></tr></table><br>";
		 }
		 //}else {echo "Больше трех";}
		 }
		 //}
		 echo "</td></tr>";
		
		 echo "</table>";
		 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		 echo"<tr><td class='mail1' align='left'>";
		
		 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
		 
		 if ($tom_date!==$cut)
		 {  
		 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
		 }
		 
			  while ($rows = mysql_fetch_assoc($sqls)) {
		 $tomm_date=time()+60*60*24;
		 $tom_date=date("d.m.",$tomm_date);
		 $dd=$rows['dr'];
		 $cut = substr($dd, 0, 6);
		 if ($tom_date==$cut)
		 {
		 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
		 $ipus=$_SERVER["REMOTE_ADDR"];
		 echo "</td></tr>";
		 }
		 }
		 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
		 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
		 while ($rows = mysql_fetch_assoc($sqls)) {
		 $tomm_date=time()+((60*60*24)*2);
		 $tom_date=date("d.m.",$tomm_date);
		 $dd=$rows['dr'];
		 $cut = substr($dd, 0, 6);
		 if ($tom_date==$cut)
		 {
		 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
		 
		 $ipus=$_SERVER["REMOTE_ADDR"];
		 
		 echo "</td></tr>";
		 }
		 $tomm_date=time()+((60*60*24)*3);
		 $tom_date=date("d.m.",$tomm_date);
		 $dd=$rows['dr'];
		 $cut = substr($dd, 0, 6);
		 if ($tom_date==$cut)
		 {
		 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
		 $ipus=$_SERVER["REMOTE_ADDR"];
		 echo "</td></tr>";
		 }
		 }
		
		 echo "</table>";}
	else {
		echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	
echo"<tr><td class='mail1' align='left'>";
$sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");


for ($i=0; $i<($rows = mysql_fetch_assoc($sqls)); $i++) 
{
$dd=$rows['dr'];
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
$ipus=$_SERVER["REMOTE_ADDR"];
echo "</td></tr></table><br>";
}
//}else {echo "Больше трех";}
}
//}
echo "</td></tr>";

//echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
$sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");

if ($tom_date!==$cut)
{  
echo"<tr><strong><td class='mail1' align='left'>Завтра день рождения празднуют:</td></strong></tr>";
}
while ($rows = mysql_fetch_assoc($sqls)) {
$tomm_date=time()+60*60*24;
$tom_date=date("d.m.",$tomm_date);
$dd=$rows['dr'];
$cut = substr($dd, 0, 6);
if ($tom_date==$cut)
{
echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
$ipus=$_SERVER["REMOTE_ADDR"];
echo "</td></tr>";
}}
echo"<tr><td class='mail1' align='left'>";
echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
$sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
while ($rows = mysql_fetch_assoc($sqls))
{
$tomm_date=time()+((60*60*24)*2);
$tom_date=date("d.m.",$tomm_date);
$dd=$rows['dr'];
$cut = substr($dd, 0, 6);
if ($tom_date==$cut)
{
echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
$ipus=$_SERVER["REMOTE_ADDR"];
echo "</td></tr>";
}
$tomm_date=time()+((60*60*24)*3);
$tom_date=date("d.m.",$tomm_date);
$dd=$rows['dr'];
$cut = substr($dd, 0, 6);
if ($tom_date==$cut)
{
echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
$ipus=$_SERVER["REMOTE_ADDR"];
echo "</td></tr>";
}}
echo "</table>";}

	 /*
$start = strtotime('2025-08-27 00:02:00');
$end = strtotime('2025-08-28 00:02:00'); 
if (time() >= $start && time() <= $end) 
{
	$sql = mysql_query("SELECT * FROM `dr` WHERE id");
	while ($row = mysql_fetch_row($sql))
echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 for ($i=0; $i<($rows = mysql_fetch_assoc($sqls)); $i++) 
	 {
	 $dd=$rows['dr'];
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
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 if ($tom_date!==$cut)
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
	
	
}
 else
  {
	$sql = mysql_query("SELECT * FROM `dr` WHERE id");
	while ($row = mysql_fetch_row($sql))
	if ($row[1]==2)
	{
		echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = mysql_fetch_assoc($sqls)); $i++) 
	 {
	 $dd=$rows['dr'];
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
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 if ($tom_date!==$cut)
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 }
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
	
	
	}
	elseif($row[1]==3){
		echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = mysql_fetch_assoc($sqls)); $i++) 
	 {
	 $dd=$rows['dr'];
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
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 if ($tom_date!==$cut)
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
	
	}
	
	else                                                                                                         
	
	{
		echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	
		echo"<tr><td class='mail1' align='left'>";
		$sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = mysql_fetch_assoc($sqls)); $i++) 
	 {
	 $dd=$rows['dr'];
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
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	 
	 //echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 if ($tom_date!==$cut)
	 {  
	 echo"<tr><strong><td class='mail1' align='left'>Завтра день рождения празднуют:</td></strong></tr>";
	 }
	 while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }}
	 echo"<tr><td class='mail1' align='left'>";
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
		while ($rows = mysql_fetch_assoc($sqls))
	 {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }}
	 echo "</table>";
	}  

}*/


/************************************************************************************************************************************* */

/*
$start = strtotime('2025-08-02 00:02:00');
$pro7 = strtotime('2025-08-03 00:02:00');
$pro8 = strtotime('2025-08-04  00:02:00');
$pro9 = strtotime('2025-08-05 00:02:00');
$end = strtotime('2025-08-06 00:02:00');
 
$current_time = time(); // Get the current time
 
if ($current_time < $start) {
	$sql = mysql_query("SELECT * FROM `dr` WHERE id");
	while ($row = mysql_fetch_row($sql))
echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = mysql_fetch_assoc($sqls)); $i++) 
	 {
	 $dd=$rows['dr'];
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
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 if ($tom_date!==$cut)
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
	
	
} 
else if ($current_time >= $start && $current_time < $pro7) {
	$sql = mysql_query("SELECT * FROM `dr` WHERE id");
	while ($row = mysql_fetch_row($sql))
echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = mysql_fetch_assoc($sqls)); $i++) 
	 {
	 $dd=$rows['dr'];
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
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 if ($tom_date!==$cut)
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 }
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
	
}
 

 else if ($current_time >= $pro7 && $current_time <= $pro8) 
 {
    $sql = mysql_query("SELECT * FROM `dr` WHERE id");
	while ($row = mysql_fetch_row($sql))
echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = mysql_fetch_assoc($sqls)); $i++) 
	 {
	 $dd=$rows['dr'];
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
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 if ($tom_date!==$cut)
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 }
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";

} 
 else if ($current_time >= $pro8 && $current_time <= $pro9) 
 {
	echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	
	echo"<tr><td class='mail1' align='left'>";
	$sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
 
 
 for ($i=0; $i<($rows = mysql_fetch_assoc($sqls)); $i++) 
 {
 $dd=$rows['dr'];
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
 $ipus=$_SERVER["REMOTE_ADDR"];
 echo "</td></tr></table><br>";
 }
 //}else {echo "Больше трех";}
 }
 //}
 echo "</td></tr>";
 
 //echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
 
 if ($tom_date!==$cut)
 {  
 echo"<tr><strong><td class='mail1' align='left'>Завтра день рождения празднуют:</td></strong></tr>";
 }
 while ($rows = mysql_fetch_assoc($sqls)) {
 $tomm_date=time()+60*60*24;
 $tom_date=date("d.m.",$tomm_date);
 $dd=$rows['dr'];
 $cut = substr($dd, 0, 6);
 if ($tom_date==$cut)
 {
 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
 $ipus=$_SERVER["REMOTE_ADDR"];
 echo "</td></tr>";
 }}
 echo"<tr><td class='mail1' align='left'>";
 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	while ($rows = mysql_fetch_assoc($sqls))
 {
 $tomm_date=time()+((60*60*24)*2);
 $tom_date=date("d.m.",$tomm_date);
 $dd=$rows['dr'];
 $cut = substr($dd, 0, 6);
 if ($tom_date==$cut)
 {
 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
 $ipus=$_SERVER["REMOTE_ADDR"];
 echo "</td></tr>";
 }
 $tomm_date=time()+((60*60*24)*3);
 $tom_date=date("d.m.",$tomm_date);
 $dd=$rows['dr'];
 $cut = substr($dd, 0, 6);
 if ($tom_date==$cut)
 {
 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
 $ipus=$_SERVER["REMOTE_ADDR"];
 echo "</td></tr>";
 }}
 echo "</table>";
} 
 else if ($current_time >= $pro9 && $current_time <= $end) 
{
	echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	
		echo"<tr><td class='mail1' align='left'>";
		$sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = mysql_fetch_assoc($sqls)); $i++) 
	 {
	 $dd=$rows['dr'];
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
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	 
	 //echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 if ($tom_date!==$cut)
	 {  
	 echo"<tr><strong><td class='mail1' align='left'>Завтра день рождения празднуют:</td></strong></tr>";
	 }
	 while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }}
	 echo"<tr><td class='mail1' align='left'>";
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
		while ($rows = mysql_fetch_assoc($sqls))
	 {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }}
	 echo "</table>";
} 
else 
{
	$sql = mysql_query("SELECT * FROM `dr` WHERE id");
	while ($row = mysql_fetch_row($sql))
	if ($row[1]==2)
	{
		echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = mysql_fetch_assoc($sqls)); $i++) 
	 {
	 $dd=$rows['dr'];
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
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 if ($tom_date!==$cut)
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 }
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
	
	
	}
	elseif($row[1]==3){
		echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = mysql_fetch_assoc($sqls)); $i++) 
	 {
	 $dd=$rows['dr'];
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
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 if ($tom_date!==$cut)
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
	
	}
	
	else                                                                                                         
	
	{
		echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	
		echo"<tr><td class='mail1' align='left'>";
		$sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = mysql_fetch_assoc($sqls)); $i++) 
	 {
	 $dd=$rows['dr'];
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
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	 
	 //echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 if ($tom_date!==$cut)
	 {  
	 echo"<tr><strong><td class='mail1' align='left'>Завтра день рождения празднуют:</td></strong></tr>";
	 }
	 while ($rows = mysql_fetch_assoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }}
	 echo"<tr><td class='mail1' align='left'>";
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = mysql_query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
		while ($rows = mysql_fetch_assoc($sqls))
	 {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd=$rows['dr'];
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus=$_SERVER["REMOTE_ADDR"];
	 echo "</td></tr>";
	 }}
	 echo "</table>";
	 

}

}*/
?>
