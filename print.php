<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
	<html>
	<title>Телефонный справочник РУП "Главный расчетный информационный центр" БЖД</title>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
        <link rel="stylesheet" type="text/css" href="css/print.css" />
	<LINK href="css/print.css" rel="stylesheet" type="text/css">
			<script language="JavaScript">
		<!--
			function printdoc() {
				window.print();
			}
		//-->
		</script>
		</head>
	<body onload="javascript:printdoc();">

<?php
require_once __DIR__ . '/src/bootstrap.php';


$id = $_GET['code'] ?? '';


include("db.php");    		

$time=date("d-m-Y");

$qr=Database::query(Database::statement('SELECT * FROM richstone_page where id=?', [(int)($id)]));
$res=Database::fetchRow($qr); 

echo "
<h5>$res[2]</h5>&nbsp;&nbsp;&nbsp;Справочник составлен по состоянию на  $time";


$sql = Database::query(Database::statement('SELECT * FROM richstone_katalog where key_page=? order by num_otdel ASC', [(int)($res[6])]));

echo ('
<table cellpadding="0" cellspacing="0" border="0" width="1000">
<tr>
<td class="tl" width="27" height="26"></td>
<td class="tc">&nbsp;</td>
<td class="tr" width="27" height="26"></td>
</tr>
<tr>
<td class="ml" width="27" height="26"></td>
<td class="mc">');



echo ("
<table cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;'><tr>
<td align='center' class='spisz' width='25' height='25'>№</td>
<td align='center' class='spisz' width='200' >Должность</td>
<td align='center' class='spisz' width='55'>Офис</td>
<td align='center' colspan='3' class='spisz' width='410'>ФИО</td>
<td align='center' class='spisz' width='150'>e-mail</td>
<td align='center' class='spisz' width='65'>Телефон</td>
<td align='center' class='spisz' width='65'>Сот тел</td>
<td align='center' class='spisz' width='50'>Отдел</td>
<td align='center' class='spisz' width='110'>Адрес</td></tr>");
 for ($i=1; $i<($tablerows = Database::fetchRow($sql)); $i++) 
{


//iconv("UTF-8", "WINDOWS-1251", $tablerows[15]);

echo ("
<tr><td align='center' class='spis'>$i</td>
<td align='left' class='spis'>$tablerows[11]</td>
<td align='center' class='spis'>$tablerows[12]</td>
<td align='left' colspan='3' class='spis'>$tablerows[15] $tablerows[14] $tablerows[13]</td>
<td align='left' class='spis2'>$tablerows[16]</a></td>
<td align='center' class='spis'>$tablerows[17]</td>
<td align='center' class='spis2'>$tablerows[25]<br>$tablerows[26]</td>
<td align='center' class='spis2'>$tablerows[18]</td>
<td align='center' class='spis1'>$tablerows[19]</td>
</tr>");
}
echo ("</table>");                                                                                                      
echo ('</td>
<td class="mr" width="27" height="26"></td>
</tr>
<tr>
<td class="bl" width="27" height="26"></td>
<td class="bc">&nbsp;</td>
<td class="br" width="27" height="26"></td>
</tr>
</table>
');
echo "<a href='#'  class='avto' onclick=\"javascript:window.close();return false;\">закрыть</a><br><br>";                                                                                                      

?>
</body>
</html>
