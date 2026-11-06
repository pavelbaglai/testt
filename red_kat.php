<html>
<head>
<title>test2 OSV</title>
<meta http-equiv="content-type" content="text/html; charset=cp1251" />
<link href="css/style2.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="ed/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
    tinyMCE.init({
        mode:"textareas",
        theme:"advanced",
forced_root_block : "false",
force_br_newlines : "true",
force_p_newlines : "false",
		plugins : "imagemanager,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,preview,media,,contextmenu,paste,fullscreen,template,wordcount,advlist,autosave",

		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,image,code,fullscreen",
		theme_advanced_buttons2 : "",
		theme_advanced_buttons3 : "undo,redo,|,link,unlink,anchor,image,insertfile,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",//
		theme_advanced_buttons4 : "tablecontrols,|,hr,removeformat,visualaid,",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

        language:"ru"
    });
</script>
</head>
<body>
 

<?php
require_once __DIR__ . '/src/bootstrap.php';
$id = $_GET['code'] ?? '';
include("db.php");    		
$sql = Database::query(Database::statement('SELECT * FROM richstone_katalog WHERE id = ?', [(int)($id)]));
  echo ("<table width=800 border='0' align=center cellpadding='0' cellspacing='0'>");
while ($tablerows = Database::fetchRow($sql))

{
print ("
<form id='form_inst' action='update_kat.php' method='post' >
<table width=1100 border='0' align='center' cellpadding='0' cellspacing='0'  class='trans'>
<tr><td colspan='7' align='left' class='zagl'>Добавить персонал</td></tr>
<tr><td align='left' class='text'>№</td></tr>
<tr><td align='left' valign='top'><input name='page_key_num_ins' type='text' maxlength='3' class='coll_1' align='center' value='$tablerows[0]'></td></tr>

<tr><td align='left' class='text'>Имя</td></tr>
<tr><td align='left' valign='top'><input name='page_fname_ins' type='text' maxlength='255' class='info_is' value='$tablerows[14]'></td></tr>



<tr><td align='left' class='text'>Фамилия</td></tr>
<tr><td align='left' valign='top'><input name='page_lname_ins' type='text' maxlength='255' class='info_is' value='$tablerows[15]'></td></tr>




<tr><td align='left' class='text'>Отчество</td></tr>
<tr><td align='left' valign='top'><input name='page_name_ins' type='text' maxlength='255' class='info_is' value='$tablerows[13]'></td></tr>



<tr><td align='left' class='text'>Должность</td></tr>
<tr><td align='left' valign='top'><input name='page_user_ins' type='text' maxlength='255' class='info_is' value='$tablerows[11]'></td></tr>





<tr><td align='left' class='text'>E-mail</td></tr>
<tr><td align='left' valign='top'><input name='page_email_ins' type='text' maxlength='255' class='info_is' value='$tablerows[16]'></br><input name='page_email2_ins' type='text' maxlength='255' class='info_is' value='$tablerows[27]'></td></tr>




<tr><td align='left' class='text'>Отдел</td></tr>
<tr><td align='left' valign='top'><input name='page_otdel_ins' type='text' maxlength='255' class='coll_2' value='$tablerows[18]' align='center'></td></tr>



<tr><td align='left' class='text'>Комната</td></tr>
<tr><td align='left' valign='top'><input name='page_office_ins' type='text' maxlength='255' class='coll_is' value='$tablerows[12]' align='center'></td></tr>


<tr><td align='left' class='text'>Адрес</td></tr>
<tr><td align='left' valign='top'><input name='page_adress_ins' type='text' maxlength='255' class='coll_5' value='$tablerows[19]'></td></tr>


<tr><td align='left' class='text'>Телефон</td></tr>
<tr><td align='left' valign='top'><input name='page_tel_ins' type='text' maxlength='255' class='coll_2' value='$tablerows[17]' align='center'></td></tr>
<tr><td align='left' valign='top'><input name='hid_id' type='text' maxlength='255' class='coll_2' value='$tablerows[0]' align='center'></td></tr>


<tr><td align='left' class='text'>Загрузка большого изображения</td></tr>");

print ("<tr><td align='left'>");
print ("<textarea name='page_b_ins' rows='15' cols='80' style='width: 80%'>$tablerows[21]");
print ("</textarea>");
print ("</td></tr>");
print ("<tr><td align='left' class='text'>Загрузка малого изображения</td></tr>");
print ("<tr><td align='left'>");
print ("<textarea name='page_s_ins' rows='15' cols='80' style='width: 80%'>$tablerows[20]");
print ("</textarea>");
print ("</td></tr>");

print ("
<tr><td valign='top' align=left><input type='hidden' value='3' name='ras'><p></td></tr>
<tr><td valign='top' align=left><input type='submit' value='Сохранить' class='butt'><p></td></tr>
</table></form>");

}
?>

</body>
</html>