<html>
<head>
<title>www.rw</title>
<meta http-equiv="content-type" content="text/html; charset=cp1251" />
<link href="css/style2.css" rel="stylesheet" type="text/css">
</head>
<body>
 


<?php


$id=$_GET['code'];
include("db.php");    		

$sql = mysql_query("SELECT * FROM richstone_user WHERE id = $id");
  echo ("<table width=800 border='0' align=center cellpadding='0' cellspacing='0'>");

while ($tablerows = mysql_fetch_row($sql))

{
print ("
<form id='form_inst' action='update_user.php' method='post' >
<table width=1000 border='0' align='center' cellpadding='0' cellspacing='0' class='trans'>
<tr><td colspan='7' align='left' class='zagl'>Редактировать <span class='zaglc'>$tablerows[1]</span></td></tr>
<tr><td align='left' class='text'>Логин:</td></tr>
<tr><td valign='top'><input name='hid_id' type='hidden' maxlength='6' class='cod_in' align='center' value='$id'></td></tr>
<tr><td valign='top'><input name='page_login' type='text' maxlength='50' class='info_is' value='$tablerows[1]' class='date_is'  align='left'><br><br></td></tr>
<tr><td align='left' class='text'>Имя:</td></tr>
<tr><td valign='top'><input name='page_fname' type='text' maxlength='50' class='info_is' value='$tablerows[4]' class='date_is'  align='left'><br><br></td></tr>
<tr><td align='left' class='text'>Признак: Новости предприятия - 1, Новости ЕК ИСУФР - 2, Новости Профкома - 3, Изменения АСУС -4, БРСМ - 5</td></tr>
<tr><td valign='top'><input name='page_pr' type='text' maxlength='50' value='$tablerows[9]' class='date_is'  align='center'><br><br></td></tr>
<tr><td align='left' class='text'>Дата входа:</td></tr>
<tr><td valign='top'><input name='page_data' type='text' maxlength='50' class='info_is' value='$tablerows[7]' class='date_is'  align='left'><br><br></td></tr>
<tr><td align='left' class='text'>E-mail:</td></tr>
<tr><td valign='top'><input name='page_email' type='text' maxlength='50' class='info_is' value='$tablerows[8]' class='date_is'  align='left'><br><br></td></tr>
<tr><td valign='top' align=left><input type='submit' value='Сохранить' class='butt'><p></td></tr>
</table></form>");
}
?>

</body>
</html>