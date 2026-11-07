<html>
<head>
<title>www.rw</title>
 <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
 <link rel="stylesheet" type="text/css" href="css/style33.css" />
</head>
<?php
require_once __DIR__ . '/src/bootstrap.php'; 	


$id = $_GET['code'] ?? '';

 include("db.php");    		

{ $sql = Database::query(Database::statement('SELECT * FROM richstone_katalog WHERE id=? ORDER BY key_num', [(int)($id)]),$db);
while ($tablerowss = Database::fetchRow($sql))

{

echo "<div  class='highslide-caption'>

<table border='0' cellpadding='0' cellspacing='0' width='400' background='img/pozdp.jpg'><tr>
  <td valign='top' width='100' align='left'>";

if ($tablerowss['23']==1)
{
echo "<img src='img/def1(100).png' title='Отсутствует изображение'>";
}

if ($tablerowss['23']==2)
{
echo "<img src='img/def2(100).png' title='Отсутствует изображение'>";
}

if ($tablerowss['23']==3)
{
echo "<img src='img/def3(100).png' title='Отсутствует изображение'>";
}

if ($tablerowss['23']==4)
{
echo $tablerowss[21];
}

if ($tablerowss['23']==5)
{
echo $tablerowss[21];
//echo "<img src='img/def1(100).png' title='Отсутствует изображение'>";
}

if ($tablerowss['23']==6)
{
echo "<img src='img/def1(100).png' title='Отсутствует изображение'>";
}

if ($tablerowss['23']==7)
{
echo $tablerowss[21];
}


echo "</td><td valign='top' width='300' align='left'>
<span class='text'>
$tablerowss[15]
$tablerowss[14]
$tablerowss[13]</span><br>
<span class='text1'>$tablerowss[11]</span>
<span class='text1'>($tablerowss[18])</span>
<br>
<span class='text1'>телефон: $tablerowss[17]</span>
<br>
<span class='text1'>$tablerowss[19] ком. $tablerowss[12]</span><br><br>

</td>
</tr>";

if ($tablerowss[3] == !null)
{

echo "<tr>
  <td valign='top' colspan='2'><h4>Расширенная информация</h4>
<span class='text1'>$tablerowss[3]</span><br><br>
</td>
</tr>";
}


echo "
<tr>
  <td valign='top' colspan='2' align='center'>";



if ($tablerowss[16] == !null)
{

print("	
<table width='400' cellpadding='0' cellspacing='0' align='center'  background='img/pozdp.jpg'><tr>
      <td align='center'><h4>Поздравить с днем рождения по е-mail</h4><br></td>
      </tr><form method='POST' action='sends.php'>
      <tr>
        <td class='news_zagg' align='center'><input name='mail' type='hidden'  value='$tablerowss[16]'></td>
        </tr>
      <tr>
        <td class='text2' align='center'>Ваше имя</td>
        </tr>
      <tr>
        <td class='news_zagg' align='center'><input name='name' class='mail_kon'  placeholder='Ваше имя'></td>
        </tr>
      <tr>
        <td class='text2' align='center'>Ваш e-mail</td>
        </tr>
      <tr>
        <td class='news_zagg' align='center'><input name='email' class='mail_kon' placeholder='Ваш e-mail'></td>
        </tr>
      <tr>
        <td class='text2' align='center'>Ваше сообщение</td>
        </tr>
      <tr>
        <td class='news_zagg' align='center'><textarea name='mess' class='mess_kon'  placeholder='Ваше сообщение'></textarea></td>
        </tr>
      <tr>
        <td align='right'><p><input type='submit' value='Отправить' class='mailsub'>&nbsp;<input type='reset' value='Очистить' class='mailsub'></p></td>
        </tr>
</form>
    </table> ");
}
echo " 
</td>
</tr>
</table></div>";
}}
  Database::close($db);  

?>
</html>