<?php
require_once __DIR__ . '/src/bootstrap.php';  
$user_flag = $_COOKIE['user_flag'] ?? 0; 
$page_id = $_POST['list_page'] ?? ''; 
$page_user = $_POST['adresat'] ?? ''; 
$work_id = $_GET['work'] ?? ''; 
$user_logon = $_COOKIE['user_logon'] ?? ''; 
$user_name = $_COOKIE['user_name'] ?? ''; 
$user_fname = $_COOKIE['user_fname'] ?? ''; 
$user_sname = $_COOKIE['user_sname'] ?? ''; 
global $ar;
global $am;
global $ai;
global $ao;
global $ac;
global $an;
global $ak;
global $ap;

global $page_lname_ins;
global $page_fname_ins;
global $page_name_ins;
global $page_user_ins;
global $page_email_ins;
global $page_otdel_ins;
global $page_office_ins;
global $page_key_page_ins1;
global $page_tel_ins;
global $page_id_ins1;
global $page_adress_ins;
global $page_date_ins;
global $radiobutton;
global $page_num_otdel_ins;

$action = $_POST["action"] ?? '';
$ar = $_POST["ar"] ?? [];
$am = $_POST["am"] ?? [];
$ai = $_POST["ai"] ?? '';
$ao = $_POST["ao"] ?? '';
$ac = $_POST["ac"] ?? [];
$an = $_POST["an"] ?? '';
$ak = $_POST["ak"] ?? '';
$ap = $_POST["ap"] ?? '';
$idx = $_POST["idx"] ?? '';
$rad = $_POST["rad"] ?? '';

$page_lname_ins = $_POST["page_lname_ins"] ?? [];
$page_fname_ins = $_POST["page_fname_ins"] ?? [];
$page_name_ins = $_POST["page_name_ins"] ?? [];
$page_user_ins = $_POST["page_user_ins"] ?? [];
$page_email_ins = $_POST["page_email_ins"] ?? [];
$page_otdel_ins = $_POST["page_otdel_ins"] ?? [];
$page_office_ins = $_POST["page_office_ins"] ?? [];
$page_key_page_ins1 = $_POST["page_key_page_ins1"] ?? [];
$page_tel_ins = $_POST["page_tel_ins"] ?? [];
$page_id_ins1 = $_POST["page_id_ins1"] ?? '';
$page_adress_ins = $_POST["page_adress_ins"] ?? [];
$page_date_ins = $_POST["page_date_ins"] ?? [];
$radiobutton = $_POST["radiobutton"] ?? [];
$page_num_otdel_ins = $_POST["page_num_otdel_ins"] ?? [];

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<LINK REL=STYLESHEET TYPE="text/css" HREF="css/style2.css">
<title>OSV-CMS</title>
 <link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
 <link rel="stylesheet" href="jav/dhtmlwindow.css" type="text/css" />
<script src="highslide/highslide-full.js" type="text/javascript"></script>
<script type="text/javascript">// <![CDATA[
	hs.graphicsDir = 'highslide/graphics/';
	hs.align = 'center';
	hs.transitions = ['expand', 'crossfade'];
	hs.wrapperClassName = 'dark borderless floating-caption';
	hs.fadeInOut = true;
	hs.dimmingOpacity = .75;
</script>
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
		theme_advanced_buttons2 : "styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons3 : "undo,redo,|,link,unlink,anchor,image,insertfile,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
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
<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">
<tr>
<td align="center" class="trans" height="40"><h3>Система Управления Справочником сотрудников предприятия:</h3><h4>Здравствуйте,  

<?php
echo  (" ".$user_fname." ");
echo  (" ".$user_name." ");
echo  (" ".$user_sname." - ");
echo ("(".$user_logon.")");
echo (" - (".$user_flag.")");
?>

</h4></td></tr>
</table>

<table width="1200" border="0" align="center" cellpadding="0" cellspacing="1">  
<tr>
<td align="left" width="110"><a href="index.php" class="menur">На www.rw</a></td>    
<td align="center" width="120"><a href="main.php?work=5" class="menur">Справочник персонала</a></td>  
<td align="center" width="140"><a href="main.php?work=7" class="menur">Глобальное редакт СП</a></td>  
<td align="center" width="130"><a href="main.php?work=3" class="menur">Менеджер страниц</a></td>
<td align="center" width="100"><a href="main.php?work=10" class="menur">Меню</a></td>    
<td align="center" width="100"><a href="main.php?work=1" class="menur">Доб отдел</a></td>    
<td align="center" width="100"><a href="main.php?work=2" class="menur">Ред отдел</a></td>  
</tr>
</table>



<table width="1200" border="0" align="center">

<tr><td align="center" width="100%">




<?php
include("db.php");    		

if($work_id==1){   
print ("<table width=1200 border='0' align=center cellpadding='0' cellspacing='0' class='trans'>
<tr><td align='left' class='zagl'  colspan='2'>Создать новую страницу:<span class='zaglc'></span></td></tr><tr><td><br>");

print('<form id="form_ins" action="insert_page.php" method="post" >');  
print('<span class="menu3">Имя страницы:</span><input name="page_name_ins" type="text" size="28">'); 
  print('<input type="submit" id="page_ins" value="Сохранить" class="butt"><br>');



//print('<textarea name="view_page_ins"  cols="100" rows="50">');   
if (is_file(__DIR__ . '/ed/examples/full11.html')) { include __DIR__ . '/ed/examples/full11.html'; } else { echo '<textarea name="view_page_ins" cols="100" rows="25"></textarea>'; }
//print('</textarea>');   
print('</form></td></tr></table>');
  }  



if($work_id==2){
print ("<table width=1200 border='0' align=center cellpadding='0' cellspacing='0' class='trans'>
<tr><td align='left' class='zagl'  colspan='2'>Редактировать страницу:<span class='zaglc'></span></td></tr>
<tr><td align='center'  colspan='2'>");
	print('<form id="form1" action="main.php?work=2" method="post" valign="top">');
	$connect=Database::connect();
$qr=Database::query('SET NAMES cp1251');

$db=Database::selectDatabase($db_name);	
$qr=Database::query('SELECT * FROM richstone_page ORDER BY richstone_page_name');	

print('<br><select  name="list_page"> ');
	while($res=Database::fetchRow($qr))
{		
print('<option>'.$res[1].'</option>');	
}	
print('</select>');


$qr=Database::query(Database::statement('SELECT * FROM richstone_page WHERE richstone_page_name=?', [($page_id)]));	
$res=Database::fetchRow($qr) ?: array_fill(0, 32, '');	
print('<input type="submit" id="sub1" value="Выбрать" class="butt">');	
print('</form></td></tr>');	


print('<tr><td colspan=2>');
$qr=Database::query("SELECT * FROM richstone_page WHERE richstone_page_view_flag=1 ORDER BY id DESC");
$rsk=Database::fetchRow($qr);
print('</td></tr>');




print("<tr><td align='left' class='zagl' colspan='2'>Выбрана страница - <span class='zaglc'>$res[1]</span>, <span class='zaglb'>прямая ссылка - <a class='zaglb' href="); 

$rr=$res[0]-1;

$rs=' не выбрана страница';


if ($res[0] > 0) echo "http://www.rw/tels/35/index.php?link=$rr>http://www.rw/tels/35/index.php?link=$rr";
//if ($res[0] = '') echo "$rs";
//else echo "не выбрана страница";
//if ($res[0]  '') echo "$rs> не выбрана страница";

//print("http://www.rw/tels/35/index.php?link=$res[0]</span></span></td><tr>");
                                                                                                    
print("</a></span></span></td><tr><tr><td align='left' width='830'>");         

                                                       	
print('<form id="form_ins" action="update_page.php" method="post" >');
    print('<input name="hid_id" type="hidden" value="'. $res[0].'"/>');
    print('

<span class="textin">Определить видимость страницы (1-видима, 0-нет)</span><br><input name="page_num" type="text"  value="'.$res[3].'" class="coll_is"/><br>
<span class="textin">Включить в страницу галерею (1-вкл, 0-выкл)</span><br><input name="page_kat" type="text"  value="'.$res[4].'" class="coll_is"/><br>
<span class="textin">Определить уникальный номер галереи (1-2-3-4...любой свободный, 0-выкл)</span><br><input name="page_kat_num" type="text"  value="'.$res[6].'" class="coll_is"/><br>
<span class="textin">Определить положение в меню (1-Материалы; 2-Благоустройство; 3-Изделия: 4-Другое; 0-неопределен)</span><br><input name="page_menu_num" type="text"  value="'.$res[7].'" class="coll_is"/><br>
<span class="textin">Имя страницы:</span><br><input name="page_name_upd" type="text"  value="'.$res[1].'" class="info_is"/><br>     
<span class="textin">Альтернативное имя для меню:</span><br><input name="page_alt_name" type="text"  value="'.$res[9].'" class="info_is"/><p> ');    



print('<input type="submit" id="page_upd" value="Сохранить" class="butt"><br>');    
print('</td>

<td align="left" valign="top">
<table width="170" border="0" align=center cellpadding="0" cellspacing="0" class="textin3">
<tr><td class="textin2">Справка по страницам</td></tr>
<tr><td>- <span class="textin1">'.$rsk[0].'</span> страниц</td></tr>
</table>
</td></tr>');    

print('<tr><td colspan="2">');    
if (is_file(__DIR__ . '/ed/examples/full1.html')) { include __DIR__ . '/ed/examples/full1.html'; } else { echo '<textarea name="view_page" cols="100" rows="25">'; }
print($res[2]);    
print('</textarea><br></form>');	
print('</td><tr>');    
print('</table>');	
Database::close($connect); 
}











if($work_id==3){   
print ("<table width=1200 border='0' align=center cellpadding='0' cellspacing='0' class='trans'>
<tr><td colspan='7' align='left' class='zagl'>Менеджер страниц отдела - <span class='zaglc'>www.rw</span></td></tr></table>");
print('<form id="form1" action="main.php?work=3" method="post" valign="top">');
$connect=Database::connect();
$qr=Database::query('SET NAMES cp1251');
$db=Database::selectDatabase($db_name);	

if ($action=="" || $action=="null") 
{
?>
<form name="Edit" method="POST">
<table class='trans'>
<tr><td valign=top align="center">
<TABLE border='0' width='1200' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff'>

<?php
  echo ("<tr>
<td align='center' class='textr'><b>№ ID</b></td>
<td align='center' class='textr'><b>Наименование</b></td>
<td align='center' class='textr'><b>Альтернативное имя</b></td>
<td align='center' class='textr'><b>Вк.Гал</b></td>
<td align='center' class='textr'><b>№ Гал</b></td>
<td align='center' class='textr'><b>№ Меню</b></td>
<td align='center' class='textr'><b>Пор № М</b></td>
<td align='center' class='textr'><b>Видимость</b></td>
</tr>");

$old = Database::query("SELECT * FROM richstone_page ORDER BY id");

 echo "<input type=hidden name='action' value='ok'><br>";

while($row2 = Database::fetchRow($old)) {   

$tabl=$row2[0]-1;

 echo "<TR><TD class='textrm' align='center' width='40'>$row2[0]</TD>";
 echo "<TD class='textrm' align='left' width='510'><a class='textcolg2' href='index.php?link=$tabl'>$row2[1]</a></TD>";
 echo "<TD class='textrm' align='left' width='200'><input class='coll_6' type=text name=ac[".$row2[0]."] value='$row2[9]' align='left'></TD>";
 echo "<TD class='textrm' align='center' width='50'>$row2[4]</TD>";
 echo "<TD class='textrm' align='center' width='50'>$row2[5]</TD>";
 echo "<TD class='textrm' align='center' width='50'><input class='coll_4' type=text name=ar[".$row2[0]."] value='$row2[7]' align='center'></TD>";
 echo "<TD class='textrm' align='center' width='50'><input class='coll_4' type=text name=am[".$row2[0]."] value='$row2[8]' align='center'></TD>";
 echo "<TD class='textrm' align='center' width='50'>$row2[3]</TD>";
 echo "</TR>";
}
?>
</TABLE>
    </td>
</tr>
<tr>
    <td>
<input type="submit" Name="SmbIt" value="Обновить инфо &raquo;&raquo;&raquo;">
    </td>
</tr>
</table>
    </form>                                       


<?php
} 
else {
while ((list($idx,$val) = next_form_item($ar)) and (list($idx,$val) = next_form_item($am)) and (list($idx,$val) = next_form_item($ac)))
{
     Database::query(Database::statement('UPDATE richstone_page SET menu=?,menu_num=?,alt_name=? WHERE id=?', [($ar[$idx]), ($am[$idx]), ($ac[$idx]), ($idx)]))or die(Database::error());
header("Location: main.php?work=3");
}
}
Database::close($connect); 

}


if($work_id==4){

$sql = Database::query("SELECT * FROM richstone_news ORDER BY id DESC");
print("
<table width=1200 border='0' align=center cellpadding='0' cellspacing='0'>

<tr><td align='left' class='zagl'>Раздел Спец предложений</td></tr>

<form id='form_inst' action='ins_news.php' method='post' >

<tr><td align='left' class='text'>Дата (дд.мм.гггг)</td></tr>
<tr><td align='left' valign='top'><input name='date' type='text' maxlength='10' class='news_date'></td> </tr>
<tr><td align='left' class='text'>Текст предложения</td></tr>
<tr><td align='left' valign='top'><textarea id='elm22' name='page_info_ins' rows='15' cols='80' style='width: 80%'></textarea></td></tr>
<tr><td align='left' class='text'>Действие</td></tr>
<tr><td align='left' valign='top' align=left><input type='submit' value='Добавить' class='butt'></td></tr>
<tr><td align='left' valign='top' align=left class='zagl'>Результат</td></tr>
<tr><td valign='top' align=left><br></td></tr>
</table>
</form>");
  echo ("
<table width=1200 border='0' align=center cellpadding='0' cellspacing='0' bgcolor='#ffffff'>
<tr>
<td align='center' class='textr' width='40'><b>ID</b></td>
<td align='center' class='textr' width='40'><b>Дата</b></td>
<td align='center' class='textr' width='840'><b>Информация</b></td>
<td align='center' class='textr' width='80'><b>Опер</b></td>
<td align='center' class='textr' width='80'><b>Опер</b></td>
</tr>");
  while ($tablerows = Database::fetchRow($sql))
{
echo ("
<tr><form action='savernews.php?code=".$tablerows["0"]."' method='post'>
<td align='center' class='textr'>$tablerows[0]<input name='page_id_ins1' type='hidden' value='$tablerows[0]'></td>
<td align='center' class='textr'><input name='page_date_ins1' type='text' class='coll_2' value='$tablerows[1]' align='center'></td>
<td align='center' class='textr'><textarea  name='page_info_ins1' rows='15' cols='80' style='width: 80%'>$tablerows[2]</textarea></td>
<td align='center' class='textrm' width='45'><input type='submit' value='Сохр' class='but'></td></form>
<td align='center' class='textr'><form id='form_del' action='del_news.php?code=".$tablerows["0"]."' method='post'><input type='submit' value='Удал' class='but'></td></form>

</tr>");                                                                                                      
}

  echo "</table>";
Database::close($connect); 
}





if($work_id==5){   

print ("<table width=1200 border='0' align=center cellpadding='0' cellspacing='0'  class='trans'>
<tr><td colspan='7' align='left' class='zagl'>Справочник - <span class='zaglc'>Персонала</span></td></tr><tr><td align='left'>");
print('<form id="form1" action="main.php?work=5" method="post" valign="top">');
$connect=Database::connect();
$qr=Database::query('SET NAMES cp1251');
$db=Database::selectDatabase($db_name);	
$qr=Database::query('SELECT * FROM richstone_page WHERE key_menu=1 ORDER BY id');	
print('<select  name="list_page">');	
while($res=Database::fetchRow($qr))
{		
print('<option>'.$res[1].'</option>');	
}	
print('</select> ');



$qr=Database::query(Database::statement('SELECT * FROM richstone_page WHERE richstone_page_name=?', [($page_id)]));	
$res=Database::fetchRow($qr) ?: array_fill(0, 32, '');
print('<input type="submit" id="sub1" value="Выбрать" class="butt">');	
print('</form>');	 
print ("</td></tr><tr><td class='zagl' align='left'>Выбран отдел - <span class='zaglc'>");    
print ($res[1]);    
print ("</span></td></tr></table>");    

$sql = Database::query(Database::statement('SELECT * FROM richstone_katalog WHERE key_page=? ORDER BY key_num', [($res[6])]));
  echo ("<table width=1200 border='0' align='center' cellpadding='0' cellspacing='0'bgcolor='ffffff'>");
  echo ("<tr>
<td align='center' class='textr'><b>ID</b></td>
<td align='center' class='textr'><b>Фамилия</b></td>
<td align='center' class='textr'><b>Имя</b></td>
<td align='center' class='textr'><b>Отчество</b></td>
<td align='center' class='textr'><b>Должность</b></td>
<td align='center' class='textr'><b>E-mail</b></td>
<td align='center' class='textr'><b>Отдел</b></td>
<td align='center' class='textr'><b>Адрес</b></td>
<td align='center' class='textr'><b>Комната</b></td>
<td align='center' class='textr'><b>№</b></td>
<td align='center' class='textr'><b>Телефон</b></td>
<td align='center' class='textr'><b>Дата</b></td>
<td align='center' class='textr'><b>Пол</b></td>
<td align='center' class='textr'><b>Превью фото</b></td>
<td align='center' class='textr'><b>Опер</b></td>
<td align='center' class='textr'><b>Опер</b></td>
<td align='center' class='textr'><b>Опер</b></td>
</tr>");


  while ($tablerows = Database::fetchRow($sql))
{
if (preg_match_all ("!src=\"(.*?)\"!si", $tablerows[21], $out))
$v=$out[1][0];
$checkok=$tablerows[0];
$date_today = date("d.m.Y"); //присвоено 03.12.01

  echo("<tr><form action='saver.php?code=".$tablerows["0"]."' method='post'>

            <td align='center' class='textrm' width='20' align='center'>$tablerows[0]</td>
            <td align='center' class='textrm' width='90'><input name='page_lname_ins' type='text' value='$tablerows[15]' class='coll_2'></td>
            <td align='center' class='textrm' width='90'><input name='page_fname_ins' type='text' value='$tablerows[14]' class='coll_2' align='center'></td>
            <td align='center' class='textrm' width='90'><input name='page_name_ins' type='text' value='$tablerows[13]' class='coll_5' align='center'></td>
            <td align='center' class='textrm' width='90'><input name='page_user_ins' type='text' value='$tablerows[11]' class='coll_5' align='center'><input name='page_id_ins1' type='hidden' value='$tablerows[0]'></td>
            <td align='center' class='textrm' width='90'><input name='page_email_ins' type='text' value='$tablerows[16]' class='coll_5' align='center'></td>
            <td align='center' class='textrm' width='90'><input name='page_otdel_ins' type='text' maxlength='10' value='$tablerows[18]' class='coll_3' align='center'></td>
            <td align='center' class='textrm' width='90'><input name='page_adress_ins' type='text' maxlength='20' value='$tablerows[19]' class='coll_5' align='center'></td>
            <td align='center' class='textrm' width='90'><input name='page_office_ins' type='text' maxlength='4' value='$tablerows[12]' class='coll_3' align='center'></td>
            <td align='center' class='textrm' width='20'><input name='page_key_page_ins1' type='text' maxlength='3' value='$tablerows[6]' class='coll_1' align='center'></td>
            <td align='center' class='textrm' width='90'><input name='page_tel_ins' type='text' value='$tablerows[17]' class='coll_5' align='center'></td>
            <td align='center' class='textrm' width='90'><input name='page_date_ins' type='text' value='$date_today' class='coll_3' align='center'>ст.$tablerows[5]</td>
            <td align='center' class='textrm' width='90'><input name='radiobutton' type='text' value='$tablerows[23]' class='coll_1' align='center'></td>



            <td align='center' class='textrm' width='56' height='56'><a class=highslide onclick=\"return hs.expand(this)\" href='$v'>$tablerows[20]</a></td>
            <td align='center' class='textrm' width='45'><input type='submit' value='Сохр' class='but'></td></form>
            <form id='form_кув' action='red_kat.php?code=".$tablerows["0"]."' method='post'><td align='center' class='textrm' width='45'><input type='submit' value='Редак' class='but' onclick=\"window.open('red_kat.php?code=".$tablerows["0"]."','MyWin','menubar=1,resizable=1,width=1010,height=600'); return false;\" ></td></form>
            <form id='form_del' action='del_kat.php?code=".$tablerows["0"]."' method='post'><td align='center' class='textrm' width='45'><input type='submit' value='Удал' class='but'></td></form>
            </tr>");


  }
//$m="м<sup>2</sup>";

$date_today = date("d.m.Y"); //присвоено 03.12.01

  echo "</table>";
print ("
<form id='form_inst' action='insert_katalog.php' method='post' >
<table width=1200 border='0' align='center' cellpadding='0' cellspacing='0'  class='trans'>
<tr><td colspan='7' align='left' class='zagl'>Добавить персонал</td></tr>
<tr><td align='left' class='text'>№</td></tr>
<tr><td align='left' valign='top'><input name='page_key_num_ins' type='text' maxlength='3' class='coll_is' align='center'></td></tr>

<tr><td align='left' class='text'>Имя</td></tr>
<tr><td align='left' valign='top'><input name='page_fname_ins' type='text' maxlength='255' class='info_is'></td></tr>



<tr><td align='left' class='text'>Фамилия</td></tr>
<tr><td align='left' valign='top'><input name='page_lname_ins' type='text' maxlength='255' class='info_is'></td></tr>




<tr><td align='left' class='text'>Отчество</td></tr>
<tr><td align='left' valign='top'><input name='page_name_ins' type='text' maxlength='255' class='info_is'></td></tr>



<tr><td align='left' class='text'>Должность</td></tr>
<tr><td align='left' valign='top'><input name='page_user_ins' type='text' maxlength='255' class='info_is'></td></tr>

<tr><td align='left' valign='top' class='text'><input name='radiobutton' type='radio' value='4' checked>Фотография</td></tr>
<tr><td align='left' valign='top' class='text'><input name='radiobutton' type='radio' value='1'>Мужчина</td></tr>
<tr><td align='left' valign='top' class='text'><input name='radiobutton' type='radio' value='2'>Женщина</td></tr>
<tr><td align='left' valign='top' class='text'><input name='radiobutton' type='radio' value='3'>Дикретный отпуск</td></tr>
<tr><td align='left' valign='top' class='text'><input name='radiobutton' type='radio' value='5'>Профгруппорг отдела</td></tr>

<tr><td align='left' class='text'>E-mail</td></tr>
<tr><td align='left' valign='top'><input name='page_email_ins' type='text' maxlength='255' class='info_is'></td></tr>



<tr><td align='left' class='text'>Отдел</td></tr>
<tr><td align='left' valign='top'><input name='page_otdel_ins' type='text' maxlength='255' class='coll_5'></td></tr>



<tr><td align='left' class='text'>Комната</td></tr>
<tr><td align='left' valign='top'><input name='page_office_ins' type='text' maxlength='255' class='coll_5'></td></tr>


<tr><td align='left' class='text'>Адрес</td></tr>
<tr><td align='left' valign='top'><input name='page_adress_ins' type='text' maxlength='255' class='coll_5' value='пер. Стекольный 5'></td></tr>



<tr><td align='left' class='text'>Телефон</td></tr>
<tr><td align='left' valign='top'><input name='page_tel_ins' type='text' maxlength='255' class='coll_5'></td></tr>

<tr><td align='left' class='text'>Дата последнего редактирования</td></tr>
<tr><td align='left' valign='top'><input name='page_date_ins' type='text' maxlength='255' class='coll_5' value='$date_today' align='center'></td></tr>

<tr><td align='left' class='text'>Загрузка большого изображения</td></tr>");

print ("<tr><td align='left'>");
print ("<textarea name='page_b_ins' rows='15' cols='80' style='width: 80%'>");
print ("</textarea>");
print ("</td></tr>");
print ("<tr><td align='left' class='text'>Загрузка малого изображения</td></tr>");
print ("<tr><td align='left'>");
print ("<textarea name='page_s_ins' rows='15' cols='80' style='width: 80%'>");
print ("</textarea>");
print ("</td></tr>");

print ("
<tr><td align='left' valign='top'><input name='page_key_page_ins' type='hidden' maxlength='3' value='".$res[6]."' class='date_is'  align='center'></td></tr>
<tr><td valign='top' align=left><input type='hidden' value='3' name='ras'><p></td></tr>
<tr><td valign='top' align=left><input type='submit' value='Сохранить' class='butt'><p></td></tr>
</table></form>");
Database::close($connect); 
}


if($work_id==6){   

print ("<table width=1200 border='0' align=center cellpadding='0' cellspacing='0'>
<tr><td colspan='7' align='left' class='zagl'>Пользователи ресурса - <span class='zaglc'>www.www.rw/tels/35</span></td></tr></table>");

$sql = Database::query("SELECT * FROM richstone_user ORDER BY id");
  echo ("<table width=1200 border='0' align=center cellpadding='2' cellspacing='0' bgcolor='#ffffff'>");
  echo ("<tr>
<td align='center' class='textr'><b>№ ID</b></td>
<td align='center' class='textr'><b>Логин</b></td> 
<td align='center' class='textr'><b>Имя</b></td>
<td align='center' class='textr'><b>Признак</b></td>
<td align='center' class='textr'><b>Пр</b></td>
<td align='center' class='textr'><b>Скидка</b></td>
<td align='center' class='textr'><b>Дата входа</b></td>
<td align='center' class='textr'><b>e-mail</b></td>
<td align='center' class='textr'><b>Операция</b></td>
<td align='center' class='textr'><b>Операция</b></td>
</tr>");
  while ($tablerows = Database::fetchRow($sql))


{
$tabl=$tablerows[0]-1;

  echo("<tr>
            
            <td align='center' class='textrm' width='35'>$tablerows[0]</td>
            <td align='center' class='textrm' width='115'>$tablerows[1]</td>
            <td align='center' class='textrm' width='220'>$tablerows[4]</td>
            <td align='center' class='textrm' width='100'>$tablerows[5]</td>
            <td align='center' class='textrm' width='10'>$tablerows[9]</td>
            <td align='center' class='textrm' width='50'>$tablerows[6]</td>
            <td align='center' class='textrm' width='100'>$tablerows[7]</td>
            <td align='center' class='textrm' width='100'>$tablerows[8]</td>
            <form id='form_del' action='red_user.php?code=".$tablerows["0"]."' method='post'><td align='center' class='textrm' width='100'><input type='submit' value='Редактировать' class='red' onclick=\"window.open('red_user.php?code=".$tablerows["0"]."','MyWin','menubar=1,resizable=1,width=1010,height=600'); return false;\" ></td></form>
            <form id='form_del' action='del_user.php?code=".$tablerows["0"]."' method='post'><td align='center' class='textrm' width='90'><input type='submit' value='Удалить' class='del'></td></form>
            </tr> ");
}


  echo "</table>";

Database::close($connect); 
}
?>





<?php

if($work_id==9){   

$rest=Database::query("select * from richstone_user order by id"); // Сразу выводим все строки БД чтобы видеть что добавили с единой формой.
$rr=Database::numRows($rest);
print ("<table width='1200' border='0' align=left cellpadding='0' cellspacing='0'>
<tr><td align='left' class='zagl'>Рассылка новостей - <span class='zaglc'>www.www.rw/tels/35</span> / Всего - $rr пользователей </td></tr></table>");
print ("<table width='1200' border='0' align=left cellpadding='0' cellspacing='0' class='textin'>
<tr><td align='left' class='textcolg'>");

 
if (isset($_POST['submit']))
  {
    $arr = $_POST["checks"] ?? '';
    $arrs = $_POST["value"] ?? '';
    $len = sizeof($arr); 
    echo('Всего отправлено - '.$len); // чисто для себя смотрим сколько элементов к отправке
    echo ('<br>'.$page_user);

       {
// $_POST['title'] содержит данные из поля "Тема", trim() - убираем все лишние пробелы и переносы строк, htmlspecialchars() - преобразует специальные символы в HTML сущности, будем считать для того, чтобы простейшие попытки взломать наш сайт обломались, ну и  substr($_POST['title'], 0, 1200) - урезаем текст до 1200 символов. Для переменных $_POST['mess'], $_POST['name'], $_POST['tel'], $_POST['email'] все аналогично 
        $_POST['title'] =  substr(htmlspecialchars(trim($_POST['title'])), 0, 1200); 
//        $_POST['mess'] =  substr(htmlspecialchars(trim($_POST['mess'])), 0, 1200000); 
        $_POST['name'] =  substr(htmlspecialchars(trim($_POST['name'])), 0, 30); 
        $_POST['tel'] =  substr(htmlspecialchars(trim($_POST['tel'])), 0, 30); 
        $_POST['email'] =  substr(htmlspecialchars(trim($_POST['email'])), 0, 50); 

        if (empty($_POST['name'])) 
             output_err(0); 
        if(!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $_POST['email'])) 
             output_err(1); 
        if(empty($_POST['mess'])) 
             output_err(2);

        $mess = '
<b>Имя отправителя:</b>'.$_POST['name'].'<br /> 
<b>Контактный телефон:</b>'.$_POST['tel'].'<br /> 
<b>Контактный email:</b>'.$_POST['email'].'<br /> 
'.$_POST['mess']; 

// подключаем файл класса для отправки почты 
require 'class.phpmailer.php'; 
for ($i=0; $i<$len; $i++) { 
$tmpp=$arr[$i];

        $mail = new PHPMailer(); 
        $mail->From = 'tst-minsk@mail.ru';      // от кого 
        $mail->FromName = 'Richston.by';   // от кого 
        $mail->AddAddress($tmpp, $tmpp); // кому - адрес, Имя 
        $mail->IsHTML(true);        // выставляем формат письма HTML 
        $mail->Subject = $_POST['title'];  // тема письма 

        // если был файл, то прикрепляем его к письму 
        if(isset($_FILES['attachfile'])) { 
                 if($_FILES['attachfile']['error'] == 0){ 
                    $mail->AddAttachment($_FILES['attachfile']['tmp_name'], $_FILES['attachfile']['name']); 
                 } 
        } 
        // если было изображение, то прикрепляем его в виде картинки к телу письма. 
        if(isset($_FILES['attachimage'])) { 
                 if($_FILES['attachimage']['error'] == 0){ 
                    if (!$mail->AddEmbeddedImage($_FILES['attachimage']['tmp_name'], 'my-attach', 'image.gif', 'base64', $_FILES['attachimage']['type'])) 
                         die ($mail->ErrorInfo); 
                    $mess1.= '<img src="cid:my-attach" border=0>'; 
                 } 
        } 
        $mail->Body = $mess; 
        // отправляем наше письмо 
        if (!$mail->Send()) die ('Mailer Error: '.$mail->ErrorInfo); 
        echo '<br><span class="textin1">Письмо отправлено на</span> - <a class="rassl" href="mailto:'.$tmpp.'">'.$tmpp.'</a>'; 
}
   }
function output_err($num) 
{ 
    $err[0] = 'ОШИБКА! Не введено имя.'; 
    $err[1] = 'ОШИБКА! Неверно введен e-mail.'; 
    $err[2] = 'ОШИБКА! Не введено сообщение.'; 
    echo '<p>'.$err[$num].'</p>'; 
    show_form(); 
    exit(); 
} 
}

$res=Database::query("select * from richstone_user order by id"); // Сразу выводим все строки БД чтобы видеть что добавили с единой формой.
$rows=Database::numRows($res);
if($rows>0)
   {
    echo('<form id="form4" name="form4" method="post" action="" enctype="multipart/form-data">');
$num2 = 200;
$cols2 = 4;
$i = 0;
$tab=1200;
$w=$tab/$cols2;

echo "<table class='textin'  width='$tab' border='0' align=left cellpadding='0' cellspacing='0'><tr>";
 
$result2 = Database::query(Database::statement('SELECT * FROM richstone_user WHERE richstone_user_pr=1 order by id LIMIT 0 , ?', [(int)($num2)]));
$n = Database::numRows($result2); 
$m = $cols2 * ceil($n / $cols2);
while($i < $m)
 {
 $i++; 
//   Database::seek($result2,$i);
// $row = Database::fetchAssoc($result2);
   $ares=Database::fetchArray($result2);
// $res = Database::fetchArray($result2);
$col=$i+1;

 if ($i <= $n){


 echo('<td class="textin" width="'.$w.'">'.$i.'<input type="checkbox" name="checks[]" checked value="'.$ares["8"].'"> - <span class="textin1">'.$ares[5].'</span> '.$ares[4].' '.$ares[9].'</td>');
// echo "<td class='textin'>Проверка $row[4] </td> ";

 }
 else
 {
 
     echo "<td> </td>";
 }
 
 if ($i < $m and $i % $cols2 == 0)
     echo "</tr><tr>";
 }
echo "</tr></table>";
print ("<table width='1200' border='0' align=left cellpadding='0' cellspacing='0'>
<tr><td align='left' class='zagl'>Отправка почты - <span class='zaglc'>www.www.rw/tels/35</span></td></tr></table>");

    echo('    <div align="left"> 
              <br>Выберите получателя*<br> 
              <select name="adresat">
    	      <option value="1">Дизайнеру</option>
	      <option value="2">Строителю</option>
	      <option value="3">Архитектору</option>
	      </select>
              <br>Имя*<br> 
              <input type="text" name="name" size="40"> 
              <br>Контактный телефон<br /> 
              <input type="text" name="tel" size="40"> 
              <br />Контактный email*<br /> 
              <input type="text" name="email" size="40"> 
              <br>Teма<br>
              <input type="text" name="title" size="40" value="Новости компании"> 
              <br>Добавить файл<br> 
              <input name="attachfile" type="file" size="28"> 
              <br>Добавить изображение<br> 
              <input name="attachimage" type="file" size="28"><br> 
              Сообщение<br> 
              <textarea name="mess" rows="10" cols="80" ></textarea><br> 

    <input name="submit" type="submit" id="mail" value="Отправить">
</p>
</form>');
   }
print ("</td></tr></table>");
Database::close($connect); 
}
?>



<?php

if($work_id==11){   
print ("<table width='1200' border='0' align=left cellpadding='0' cellspacing='0'>
<tr><td align='left' class='zagl'>Рассылка новостей пакетно - <span class='zaglc'>www.www.rw/tels/35</span></td></tr></table>");
print ("<table width='1200' border='0' align=left cellpadding='0' cellspacing='0' class='textin'>
<tr><td align='left' class='textcolg'>");


    echo('
              <div align="left"> 
              <br>Выберите получателя*<br> 
              <select name="adresat">
    	      <option value="1">Дизайнеру</option>
	      <option value="2">Строителю</option>
	      <option value="3">Архитектору</option>
	      </select>
              <br>Имя*<br> 
              <input type="text" name="name" size="40"> 
              <br>Контактный телефон<br /> 
              <input type="text" name="tel" size="40"> 
              <br />Контактный email*<br /> 
              <input type="text" name="email" size="40"> 
              <br>Teма<br>
              <input type="text" name="title" size="40" value="Новости компании"> 
              <br>Добавить файл<br> 
              <input name="attachfile" type="file" size="28"> 
              <br>Добавить изображение<br> 
              <input name="attachimage" type="file" size="28"><br> 
              Сообщение<br> 
              <textarea name="mess" rows="10" cols="80" ></textarea><br> 

    <input name="submit" type="submit" id="mail" value="Отправить">
</p>
</form>');


print ("</td></tr></table>");


}
?>







<?php

if($work_id==8){   

$rest=Database::query("select * from richstone_user order by id"); // Сразу выводим все строки БД чтобы видеть что добавили с единой формой.
$rr=Database::numRows($rest);
print ("<table width='1200' border='0' align=left cellpadding='0' cellspacing='0'>
<tr><td align='left' class='zagl'>Рассылка новостей - <span class='zaglc'>www.www.rw/tels/35</span> / Всего - $rr пользователей </td></tr></table>");
print ("<table width='1200' border='0' align=left cellpadding='0' cellspacing='0' class='textin'>
<tr><td align='left' class='textcolg'>");

 
if (isset($_POST['submit']))
  {
    $arr = $_POST["checks"] ?? '';
    $arrs = $_POST["value"] ?? '';
    $len = sizeof($arr); 
    echo('Всего отправлено - '.$len); // чисто для себя смотрим сколько элементов к отправке

       {
// $_POST['title'] содержит данные из поля "Тема", trim() - убираем все лишние пробелы и переносы строк, htmlspecialchars() - преобразует специальные символы в HTML сущности, будем считать для того, чтобы простейшие попытки взломать наш сайт обломались, ну и  substr($_POST['title'], 0, 1200) - урезаем текст до 1200 символов. Для переменных $_POST['mess'], $_POST['name'], $_POST['tel'], $_POST['email'] все аналогично 
        $_POST['title'] =  substr(htmlspecialchars(trim($_POST['title'])), 0, 1200); 
//        $_POST['mess'] =  substr(htmlspecialchars(trim($_POST['mess'])), 0, 1200000); 
        $_POST['name'] =  substr(htmlspecialchars(trim($_POST['name'])), 0, 30); 
        $_POST['tel'] =  substr(htmlspecialchars(trim($_POST['tel'])), 0, 30); 
        $_POST['email'] =  substr(htmlspecialchars(trim($_POST['email'])), 0, 50); 

        if (empty($_POST['name'])) 
             output_err(0); 
        if(!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $_POST['email'])) 
             output_err(1); 
        if(empty($_POST['mess'])) 
             output_err(2);

        $mess = '
<b>Имя отправителя:</b>'.$_POST['name'].'<br /> 
<b>Контактный телефон:</b>'.$_POST['tel'].'<br /> 
<b>Контактный email:</b>'.$_POST['email'].'<br /> 
'.$_POST['mess']; 

// подключаем файл класса для отправки почты 
require 'class.phpmailer.php'; 
for ($i=0; $i<$len; $i++) { 
$tmpp=$arr[$i];

        $mail = new PHPMailer(); 
        $mail->From = 'tst-minsk@mail.ru';      // от кого 
        $mail->FromName = 'Richston.by';   // от кого 
        $mail->AddAddress($tmpp, $tmpp); // кому - адрес, Имя 
        $mail->IsHTML(true);        // выставляем формат письма HTML 
        $mail->Subject = $_POST['title'];  // тема письма 

        // если был файл, то прикрепляем его к письму 
        if(isset($_FILES['attachfile'])) { 
                 if($_FILES['attachfile']['error'] == 0){ 
                    $mail->AddAttachment($_FILES['attachfile']['tmp_name'], $_FILES['attachfile']['name']); 
                 } 
        } 
        // если было изображение, то прикрепляем его в виде картинки к телу письма. 
        if(isset($_FILES['attachimage'])) { 
                 if($_FILES['attachimage']['error'] == 0){ 
                    if (!$mail->AddEmbeddedImage($_FILES['attachimage']['tmp_name'], 'my-attach', 'image.gif', 'base64', $_FILES['attachimage']['type'])) 
                         die ($mail->ErrorInfo); 
                    $mess1.= '<img src="cid:my-attach" border=0>'; 
                 } 
        } 
        $mail->Body = $mess; 
        // отправляем наше письмо 
        if (!$mail->Send()) die ('Mailer Error: '.$mail->ErrorInfo); 
        echo '<br><span class="textin1">Письмо отправлено на</span> - <a class="rassl" href="mailto:'.$tmpp.'">'.$tmpp.'</a>'; 
}
   }
function output_err($num) 
{ 
    $err[0] = 'ОШИБКА! Не введено имя.'; 
    $err[1] = 'ОШИБКА! Неверно введен e-mail.'; 
    $err[2] = 'ОШИБКА! Не введено сообщение.'; 
    echo '<p>'.$err[$num].'</p>'; 
    show_form(); 
    exit(); 
} 
}

$res=Database::query("select * from richstone_user order by id"); // Сразу выводим все строки БД чтобы видеть что добавили с единой формой.
$rows=Database::numRows($res);
if($rows>0)
   {
    echo('<form id="form4" name="form4" method="post" action="" enctype="multipart/form-data">');
$num2 = 200;
$cols2 = 4;
$i = 0;
$tab=1200;
$w=$tab/$cols2;

echo "<table class='textin'  width='$tab' border='0' align=left cellpadding='0' cellspacing='0'><tr>";
 
$result2 = Database::query(Database::statement('SELECT * FROM richstone_user order by id LIMIT 0 , ?', [(int)($num2)]));
$n = Database::numRows($result2); 
$m = $cols2 * ceil($n / $cols2);
while($i < $m)
 {
 $i++; 
//   Database::seek($result2,$i);
// $row = Database::fetchAssoc($result2);
   $ares=Database::fetchArray($result2);
// $res = Database::fetchArray($result2);
$col=$i+1;

 if ($i <= $n){
 echo('<td class="textin" width="'.$w.'">'.$i.'<input type="checkbox" name="checks[]" value="'.$ares["8"].'"> - <span class="textin1">'.$ares[5].'</span> '.$ares[4].'</td>');
// echo "<td class='textin'>Проверка $row[4] </td> ";

 }
 else
 {
 
     echo "<td> </td>";
 }
 
 if ($i < $m and $i % $cols2 == 0)
     echo "</tr><tr>";
 }
echo "</tr></table>";
print ("<table width='1200' border='0' align=left cellpadding='0' cellspacing='0'>
<tr><td align='left' class='zagl'>Отправка почты - <span class='zaglc'>www.www.rw/tels/35</span></td></tr></table>");

    echo('    <div align="left"> 
              <br>Имя*<br> 
              <input type="text" name="name" size="40"> 
              <br>Контактный телефон<br /> 
              <input type="text" name="tel" size="40"> 
              <br />Контактный email*<br /> 
              <input type="text" name="email" size="40"> 
              <br>Teма<br>
              <input type="text" name="title" size="40" value="Новости компании"> 
              <br>Добавить файл<br> 
              <input name="attachfile" type="file" size="28"> 
              <br>Добавить изображение<br> 
              <input name="attachimage" type="file" size="28"><br> 
              Сообщение<br> 
              <textarea name="mess" rows="10" cols="80" ></textarea><br> 

    <input name="submit" type="submit" id="mail" value="Отправить">
</p>
</form>');
   }
print ("</td></tr></table>");
Database::close($connect); 
}
?>























<?php

if($work_id==7){   

print ("<table width=1200 border='0' align=center cellpadding='0' cellspacing='0' class='trans'>
<tr><td colspan='7' align='left' class='zagl'>Справочник - <span class='zaglc'>Глобальное редактирование Персонала</span></td></tr><tr><td align='left'>");
print('<form id="form1" action="main.php?work=7" method="post" valign="top">');
$connect=Database::connect();
$qr=Database::query('SET NAMES cp1251');
$db=Database::selectDatabase($db_name);	
$qr=Database::query('SELECT * FROM richstone_page WHERE key_menu=1 ORDER BY id');	
print('<select  name="list_page">');	
while($res=Database::fetchRow($qr))
{		
print('<option>'.$res[1].'</option>');	
}	
print('</select> ');



$qr=Database::query(Database::statement('SELECT * FROM richstone_page WHERE richstone_page_name=?', [($page_id)]));	
$res=Database::fetchRow($qr) ?: array_fill(0, 32, '');
print('<input type="submit" id="sub1" value="Выбрать" class="butt">');	
print('</form>');	 
print ("</td></tr><tr><td class='zagl' align='left'>Выбран - <span class='zaglc'>");    
print ($res[1]);    
print ("</span></td></tr></table>");    

if ($action=="" || $action=="null") 
{

       ?>
<form name="Edit" method="POST">
<table class='trans'>
<tr><td valign=top align="center">
<TABLE border='0' width='1200' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff'>
<tr>
<td align='center' class='textr'><b>ID</b></td>
<td align='center' class='textr'><b>П/№</b></td>
<td align='center' class='textr'><b>Фамилия</b></td>
<td align='center' class='textr'><b>Имя</b></td>
<td align='center' class='textr'><b>Отчество</b></td>
<td align='center' class='textr'><b>Должность</b></td>
<td align='center' class='textr'><b>E-mail</b></td>
<td align='center' class='textr'><b>Отдел</b></td>
<td align='center' class='textr'><b>Комната</b></td>
<td align='center' class='textr'><b>Адресс</b></td>
<td align='center' class='textr'><b>№</b></td>
<td align='center' class='textr'><b>Телефон</b></td>
<td align='center' class='textr'><b>Дата</b></td>
<td align='center' class='textr'><b>Пол</b></td>
<td align='center' class='textr'><b>Превью фото</b></td>
</tr>
<?php
//$old = Database::query("SELECT id,cod,date,information,opis,coll,prev,key_num,key_i,key_page FROM richstone_katalog WHERE key_page='".$res[6]."' ORDER BY key_num");
$old = Database::query(Database::statement('SELECT * FROM richstone_katalog WHERE key_page=? ORDER BY num_otdel', [($res[6])]));
$date_today = date("d.m.Y"); //присвоено 03.12.01

 echo "<input type=hidden name='action' value='ok'><br>";

while($row2 = Database::fetchRow($old)) {   

 echo "<TR>

            <td align='center' class='textrm' width='20' align='center'>$row2[0]</td>
            <td align='center' class='textrm' width='20'><input name=page_num_otdel_ins[".$row2[0]."] type='text' value='$row2[22]' class='coll_1' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=page_lname_ins[".$row2[0]."] type='text' value='$row2[15]' class='coll_5'></td>
            <td align='center' class='textrm' width='90'><input name=page_fname_ins[".$row2[0]."] type='text' value='$row2[14]' class='coll_2' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=page_name_ins[".$row2[0]."] type='text' value='$row2[13]' class='coll_5' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=page_user_ins[".$row2[0]."] type='text' value='$row2[11]' class='coll_5' align='center'><input name=idx[".$row2[0]."] type='hidden' value='$row2[0]'></td>
            <td align='center' class='textrm' width='90'><input name=page_email_ins[".$row2[0]."] type='text' value='$row2[16]' class='coll_5' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=page_otdel_ins[".$row2[0]."] type='text' maxlength='10' value='$row2[18]' class='coll_3' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=page_office_ins[".$row2[0]."] type='text' maxlength='20' value='$row2[12]' class='coll_3' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=page_adress_ins[".$row2[0]."] type='text' maxlength='30' value='$row2[19]' class='coll_5' align='center'></td>
            <td align='center' class='textrm' width='20'><input name=page_key_page_ins1[".$row2[0]."] type='text' maxlength='3' value='$row2[6]' class='coll_1' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=page_tel_ins[".$row2[0]."] type='text' value='$row2[17]' class='coll_2' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=page_date_ins[".$row2[0]."] type='text' value='$date_today' class='coll_2' align='center'></td>
            <td align='center' class='textrm' width='20'><input name=radiobutton[".$row2[0]."] type='text' value='$row2[23]' class='coll_1' align='center'></td>
            <td align='center' class='textrm' width='56' height='56'><a class=highslide onclick=\"return hs.expand(this)\" href='$v'>$row2[20]</a></td>";


// echo "<TD class='textrm' align='center'><input class='coll_5' type=text name=ai[".$row2[0]."] value='$row2[3]' align='center'></TD>";
// echo "<TD class='textrm' align='center'><textarea type='text' name=ao[".$row2[0]."] value='$row2[4]' class='coll_6' maxlength='255' rows='22' cols='25'>$row2[4]</textarea></TD>";
// echo "<TD class='textrm' align='center'><input class='coll_2' type=text name=ac[".$row2[0]."] value='$row2[5]' align='center'></TD>";
// echo "<TD class='textrm' align='center'><input class='coll_2' type=text name=am[".$row2[0]."] value='$row2[2]' align='center'></TD>";
// echo "<TD class='textrm' align='center'><input class='coll_4' type=text name=ar[".$row2[0]."] value='$row2[1]' align='center'></TD>";
// echo "<TD class='textrm' align='center'><input class='coll_1' type=text name=ap[".$row2[0]."] value='$row2[9]' align='center'></TD>";
// echo "<TD class='textrm' align='center'><input class='coll_1' type=text name=ak[".$row2[0]."] value='$row2[8]' align='center'></TD>";
// echo "<TD class='textrm' align='center'><input class='coll_1' type=text name=an[".$row2[0]."] value='$row2[7]' align='center'></TD>";
// echo "<TD class='textrm' align='center'><a class=highslide onclick=\"return hs.expand(this)\" href='$v'>$row2[6]</a></TD>";
//echo "</TR>";
}
?>
</TABLE>
    </td>
</tr>
<tr>
    <td>
<input type="submit" Name="SmbIt" value="Обновить инфо &raquo;&raquo;&raquo;">
    </td>
</tr>
</table>
    </form>                                       

<?php
} 
else {
while ((list($idx,$val) = next_form_item($page_lname_ins)) and (list($idx,$val) = next_form_item($page_fname_ins)) and (list($idx,$val) = next_form_item($page_name_ins)) and (list($idx,$val) = next_form_item($page_user_ins)) and (list($idx,$val) = next_form_item($page_email_ins)) and (list($idx,$val) = next_form_item($page_otdel_ins)) and (list($idx,$val) = next_form_item($page_office_ins)) and (list($idx,$val) = next_form_item($page_key_page_ins1)) and (list($idx,$val) = next_form_item($page_tel_ins)) and (list($idx,$val) = next_form_item($page_adress_ins)) and (list($idx,$val) = next_form_item($page_date_ins)) and (list($idx,$val) = next_form_item($radiobutton)) and (list($idx,$val) = next_form_item($page_num_otdel_ins)))
{                                                                                                                                                                                                                                                                                                                                                                                                                                                  
     Database::query(Database::statement('UPDATE richstone_katalog SET lname=?, fname=?, name=?, user=?, email=?, otdel=?, office=?, key_page=?, tel=?, adress=?, date=?, radiobutton=?, num_otdel=? WHERE id=?', [($page_lname_ins[$idx]), ($page_fname_ins[$idx]), ($page_name_ins[$idx]), ($page_user_ins[$idx]), ($page_email_ins[$idx]), ($page_otdel_ins[$idx]), ($page_office_ins[$idx]), ($page_key_page_ins1[$idx]), ($page_tel_ins[$idx]), ($page_adress_ins[$idx]), ($page_date_ins[$idx]), ($radiobutton[$idx]), ($page_num_otdel_ins[$idx]), ($idx)]))or die(Database::error());

header("Location: main.php?work=7");
}
}
Database::close($connect); 
}
?>



<?php

if($work_id==10){   


print ("<table width=1100 border='0' align=center cellpadding='0' cellspacing='0'>
<tr><td colspan='7' align='left' class='zagl'>Менеджер редактирования меню - <span class='zaglc'>www.rw</span>");

$sql = Database::query("SELECT * FROM rishstone_page ORDER BY id");
  echo ("<table width=1100 border='0' align=center cellpadding='2' cellspacing='0' class='textin'><tr><td align='center'>");


$GLOBAL_TABLE = 'menu';
$GLOBAL_FILE = 'main.php?work=10';
$dbpf = 'tb'; // префикс таблиц prefix_menu если оставить пусто имя таблицы должно быть _menu
$sql=Database::query('set names cp1251');  
if (isset($_GET['des'])){ //___________________________________БЛОК ОБРАБОТКИ ДЕЙСТВИЙ
	if ($_GET['des'] == 'edit') echo edit_table($_GET['id']);//РЕДАКТИРОВАНИЕ МЕНЮ
	if ($_GET['des'] == 'add') echo edit_table();//____________ДОБАВЛЕНИЕ МЕНЮ
	if ($_GET['des'] == 'st') {
		$sql = Database::statement('UPDATE ' . Database::identifier($dbpf) . '_' . Database::identifier($GLOBAL_TABLE) . ' SET status=? WHERE id = ?', [(int)($_GET['st']), (int)($_GET['id'])]);
		$qur = Database::query($sql);
//if ($qur) echo '<font color="GREEN">Пункт меню успешно изменен.</font>';
//else echo '<font color="RED">Пункт меню не изменен. Ошибка БД.</font>';
		echo show_table();
	}
	if ($_GET['des'] == 'up') {//______________________________ИЗМЕНЕНИЕ ПОЗИЦИИ МЕНЮ
		$sql = Database::statement('UPDATE ' . Database::identifier($dbpf) . '_' . Database::identifier($GLOBAL_TABLE) . ' SET pos=pos-1 WHERE id = ?', [(int)($_GET['id'])]);
		$qur = Database::query($sql);
		if ($qur) echo '<h3>Пункт меню успешно изменен.</h3>';
		else echo '<font color="RED">Пункт меню не изменен. Ошибка БД.</font>';
		echo show_table();
	}
	if ($_GET['des'] == 'down') {//____________________________
		$sql = Database::statement('UPDATE ' . Database::identifier($dbpf) . '_' . Database::identifier($GLOBAL_TABLE) . ' SET pos=pos+1 WHERE id = ?', [(int)($_GET['id'])]);
		$qur = Database::query($sql);
		if ($qur) echo '<h3>Пункт меню успешно изменен.</h3>';
		else echo '<font color="RED">Пункт меню не изменен. Ошибка БД.</font>';
		echo show_table();
	}
	if ($_GET['des'] == 'delete') {//__________________________УДАЛЕНИЕ МЕНЮ
		$sql = Database::statement('DELETE FROM ' . Database::identifier($dbpf) . '_' . Database::identifier($GLOBAL_TABLE) . ' WHERE id = ?', [(int)($_GET['id'])]);
		$qur = Database::query($sql);
		if ($qur) echo '<h3>Пункт меню успешно удален.</h3>';
		else echo '<font color="RED">Пункт меню не удален. Ошибка БД.</font>';
		echo show_table();
	}
}else{
	if (isset($_POST['edit'])) {//_____________________________РЕДАКТИРОВАНИЕ МЕНЮ - СОХРАНЕНИЕ В БД
		$page = $_POST['page'] ?? '';
		$id = $_POST['id'] ?? '';
		$par = $_POST['par'] ?? '';
		$pos = (int)$_POST['pos'];
		$name = ($_POST['name'] ?? '');
		if (isset($_POST['status'])) $status = 1; else $status=0;
		$sql = Database::statement('UPDATE ' . Database::identifier($dbpf) . '_' . Database::identifier($GLOBAL_TABLE) . ' SET pos = ?,name=?,par=?,status=?,page=? WHERE id = ?', [(int)($pos), ($name), (int)($par), (int)($status), (int)($page), (int)($id)]);
		$qur = Database::query($sql);
		if ($qur) echo '<h3>Пункт меню успешно изменен.</font>';
		else echo '<font color="RED">Пункт меню не изменен. Ошибка БД.</font>';
	}
	if (isset($_POST['add'])) {//______________________________ДОБАВЛЕНИЕ МЕНЮ - СОХРАНЕНИЕ В БД
		$page = ($_POST['page'] ?? '');
		$name = ($_POST['name'] ?? '');
		$par = ($_POST['par'] ?? '');
		$pos = (int)($_POST['pos'] ?? ''); if ($_POST['pos']=='') $pos=0;
		if (isset($_POST['status'])) $status = 1; else $status=0;
		$sql = Database::statement('INSERT INTO ' . Database::identifier($dbpf) . '_' . Database::identifier($GLOBAL_TABLE) . ' (id,name,par,pos,status,page,link,chek) VALUES (0,?,?,?,?,?,\'\',\'0\')', [($name), (int)($par), (int)($pos), (int)($status), (int)($page)]);
		$qur = Database::query($sql);
		if ($qur) echo '<h3>Пункт меню успешно добавлен.</h3>';
		else echo '<font color="RED">Пункт меню не добавлен. Ошибка БД.</font>'.Database::error();
	}
	if (isset($_POST['edit_group'])){//________________________ГРУППОВОЕ УДАЛЕНИЕ МЕНЮ
		if (isset($_POST['del'])){
			foreach ($_POST['del'] as $key => $val){
				$sql = Database::statement('DELETE FROM ' . Database::identifier($dbpf) . '_' . Database::identifier($GLOBAL_TABLE) . ' WHERE id=?', [(int)($key)]);
				$qur = Database::query($sql); 
			}
		}
	}
         	echo show_table();
}
}


function edit_table($id=0){//__________________________________ДОБАВЛЕНИЕ/РЕДАКТИРОВАНИЕ ПУНКТА МЕНЮ
GLOBAL $GLOBAL_TABLE,$GLOBAL_FILE,$dbpf;	$out = '';
	if ($id){
		$sql = Database::statement('SELECT * FROM ' . Database::identifier($dbpf) . '_' . Database::identifier($GLOBAL_TABLE) . ' WHERE id = ?', [(int)($id)]);
		$qur = Database::query($sql);
		$rez = Database::fetchAssoc($qur);
		$regim = 'Редактирование меню';
		$button = '<input type="HIDDEN" name="id" value="'.$id.'"><input type="SUBMIT" name="edit" value="Изменить">';
	}else{
		$rez['id'] = 0;
		$rez['name'] = '';
		$rez['pos'] = 0;
		$rez['status']=1;
		$rez['page']=$rez['0'];
		$regim = 'Добавление меню';
		$button = '<input type="HIDDEN" name="id" value="0"><input type="SUBMIT" name="add" value="Добавить">';
	}
	
	$out .= '<form method="POST" action="'.$GLOBAL_FILE.'" enctype="multipart/form-data">';
	$out .= '<table border="0" cellpadding="0" cellspacing="0" width="60%" align="center">';
	$out .= '<tr><td colspan="2"><h2>'.$regim.'</h2></td></tr>';
	$out .= '<tr><td width="25%" align="right"><b>Имя меню :</b></td><td><input type="TEXT" name="name" value="'.stripslashes($rez['name']).'" style="width:98%"></td></tr>';
	$out .= '<tr><td width="25%" align="right"><b>Подкатегория :</b></td><td>'.sel_cat1('par',@$rez['par']).'</td></tr>';
	$out .= '<tr><td width="25%" align="right"><b>Позиция меню :</b></td><td><input type="TEXT" name="pos" value="'.$rez['pos'].'" style="width:98%"></td></tr>';	
	$out .= '<tr><td width="25%" align="right"><b>Назначить меню :</b></td>
<td>';
	$out .= '<select name="page" style="width:98%">';

$qr=Database::query('SELECT * FROM richstone_page WHERE richstone_page_view_flag=1 ORDER BY richstone_page_name');
while($res=Database::fetchRow($qr)) {
	$out .= '<option value='.$res[0].'>'.$res[1].'</option>';
	                         }
	$out .= '</select>';
	$out .= '</td></tr>';


	if ($rez['status']==1)
		$out .= '<tr><td colspan="2"><input type="CHECKBOX" name="status" CHECKED> - видимость пункта меню на сайте<br><span class="descrip">Если поставить галочку пункт меню будет отображаться в верхней части сайта.</span></td></tr>';
	else
		$out .= '<tr><td colspan="2"><input type="CHECKBOX" name="status"> - видимость пункта меню на сайте<br><span class="descrip">Если поставить галочку пункт меню будет отображаться в верхней части сайта.</span></td></tr>';
	$out .= '<tr><td colspan="2" align="CENTER">'.$button.'</td></tr>';
	$out .= '</table>';
	$out .= '</form>';
return $out;
}

function show_table(){//_______________________________________ОТОБРАЖЕНИЕ МЕНЮ
GLOBAL $GLOBAL_TABLE,$dbpf; $out = '';
	$out .= '<form method="POST"><table border="0" width="100%" align="center">';
	$out .= '<tr><td colspan="4" align="RIGHT"><a href="?work=10&des=add" class="text">Добавить меню</a><hr></td></tr>';
	$out .= '<tr class="table_tr">
		<td width="50%" align="center"><strong>Название меню</strong></td>
		<td width="10%" align="CENTER"><strong>Видимость</strong></td>
		<td width="20%" align="CENTER"><strong>Позиция</strong></td>
		<td width="20%" align="CENTER"><strong>Действия</strong></td>
	</tr>';
	$out .= show_cat();
	$out .= '<tr><td colspan="4" align="RIGHT"><input type="SUBMIT" name="edit_group" value="Удалить"></td></tr>';
	$out .= '</table></form>';
	return $out;
}  

function show_cat($par=0,$old=0){
  global $dbpf,$GLOBAL_TABLE,$lev; $out = ''; $lev++;
	$sql = Database::statement('SELECT * FROM ' . Database::identifier($dbpf) . '_' . Database::identifier($GLOBAL_TABLE) . ' WHERE par=? ORDER BY pos', [(int)($par)]);
	$qur = Database::query($sql); $kol = Database::numRows($qur);
	if ($qur && $kol){
		while($rez = Database::fetchAssoc($qur)){
			if ($rez['par'] == 0){ $str_s='<b>';$str_e='</b>'; $bg_c='#E8E8E8';}
			else { $str_s='';$str_e=''; $bg_c='#fff3f3'; }
			$out .= '<tr bgcolor="'.$bg_c.'" align="left">';
			$out .= '<td class="textr"><p style="margin:5px;padding:0px;" >'.$str_s;
			$out1 = '';
			for($i=2;$i<=$lev;$i++) { $out .= '--'; $out1 .= '&nbsp;&nbsp;'; }
			$out .= stripslashes($rez['name']).$str_e.'</p></td>';
			if ($rez['status']==0) $out .= '<td align="Center"><a href="?work=10&des=st&st=1&id='.$rez['id'].'">АКТИВ.</a></td>';
			else $out .= '<td align="center"><a href="?work=10&des=st&st=0&id='.$rez['id'].'">СКРЫТЬ</a></td>';
			$out .= '<td class="textr" align="center">'.$out1.'';
			$out .= '<a href="?work=10&des=up&id='.$rez['id'].'">';
			$out .= 'Поднять<a/>';
			$out .= '['.$rez['pos'].']';
			$out .= '<a href="?work=10&des=down&id='.$rez['id'].'">';
			$out .= 'Опустить<a/>';
			$out .= '</td>';
			$out .= '<td nowarp align="right">'.$out1.'';
			$out .= '<a href="?work=10&des=edit&id='.$rez['id'].'">Редактировать<a/>';
			$out .= '<a href="?work=10&des=delete&id='.$rez['id'].'">Удалить<a/>';
			$out .= ' <input type="CHECKBOX" name="del['.$rez['id'].']">';
			$out .= '</td>';
			$out .= '</tr>';
			$out .= show_cat($rez['id'],$rez['par']);
			$lev--;
		}
	}
	return $out;
}




function sel_cat($name,$par=0){
  global $dbpf; $out = '';
	$out = '<select name="'.$name.'" style="width:98%">';
	$out .= '<option value="0">Корневой раздел</option>';
	$out .= sel_cat_r(0,0,$par);
	$out .= '</select>';
  return $out;
}






function sel_cat_r($par=0,$old=0,$id=0){
  global $dbpf,$GLOBAL_TABLE,$lev; $out = ''; $lev++;
	$sql = Database::statement('SELECT * FROM ' . Database::identifier($dbpf) . '_' . Database::identifier($GLOBAL_TABLE) . ' WHERE par=? ORDER BY pos, name ASC', [(int)($par)]);
	$qur = Database::query($sql);
	while($rez = Database::fetchAssoc($qur)){
	  if ($rez['par'] == $old) $old--;
	  $out .= '<option value="'.$rez['id'].'"'; if ($rez['id'] == $id) $out .= ' SELECTED'; $out .= '>';
	  for($i=0;$i<=$lev;$i++) $out .= '--';  $out .= $rez['name'].'</option>';
	  $out .= sel_cat_r($rez['id'],$rez['par'],$id);
	  $lev--;
	}
  return $out;
}






function sel_cat1($name,$par=0){
  global $dbpf; $out = '';
	$out = '<select name="'.$name.'" style="width:98%">';
	$out .= '<option value="0">Корневой раздел</option>';
	$out .= sel_cat_r(0,0,$par);
	$out .= '</select>';
  return $out;
}

function sel_cat_r1($par=0,$old=0,$id=0){
  global $dbpf,$GLOBAL_TABLE,$lev; $out = ''; $lev++;
	$sql = Database::statement('SELECT * FROM ' . Database::identifier($dbpf) . '_' . Database::identifier($GLOBAL_TABLE) . ' WHERE par=? ORDER BY pos, name ASC', [(int)($par)]);
	$qur = Database::query($sql);
	while($rez = Database::fetchAssoc($qur)){
	  if ($rez['par'] == $old) $old--;
	  $out .= '<option value="'.$rez['id'].'"'; if ($rez['id'] == $id) $out .= ' SELECTED'; $out .= '>';
	  for($i=0;$i<=$lev;$i++) $out .= '--';  $out .= $rez['name'].'</option>';
	  $out .= sel_cat_r1($rez['id'],$rez['par'],$id);
	  $lev--;
	}
  return $out;
}








?>

</td></tr></table></body></html>