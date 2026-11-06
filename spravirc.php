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
$news = $_COOKIE['news'] ?? 0;
$stran = $_COOKIE['stran'] ?? '';
$pochta = $_COOKIE['pochta'] ?? 0;

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
global $page_email2_ins;
global $page_otdel_ins;
global $page_office_ins;
global $page_key_page_ins1;
global $page_tel_ins;
global $page_tel1_ins;
global $page_tel2_ins;
global $page_id_ins1;
global $page_adress_ins;
global $page_date_ins;
global $dr;
global $radiobutton;
global $page_num_otdel_ins;


$action = $_POST["action"] ?? '';
$ar = $_POST["ar"] ?? '';
$am = $_POST["am"] ?? '';
$ai = $_POST["ai"] ?? '';
$ao = $_POST["ao"] ?? '';
$ac = $_POST["ac"] ?? '';
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
$page_email2_ins = $_POST["page_email2_ins"] ?? [];
$page_otdel_ins = $_POST["page_otdel_ins"] ?? [];
$page_office_ins = $_POST["page_office_ins"] ?? [];
$page_key_page_ins1 = $_POST["page_key_page_ins1"] ?? [];
	$page_tel_ins = $_POST["page_tel_ins"] ?? [];
$page_tel1_ins = $_POST["page_tel1_ins"] ?? [];
$page_tel2_ins = $_POST["page_tel2_ins"] ?? [];
$page_id_ins1 = $_POST["page_id_ins1"] ?? '';
$page_adress_ins = $_POST["page_adress_ins"] ?? [];
$page_date_ins = $_POST["page_date_ins"] ?? [];
$dr = $_POST["dr"] ?? [];
$radiobutton = $_POST["radiobutton"] ?? [];
$page_num_otdel_ins = $_POST["page_num_otdel_ins"] ?? [];


if($user_flag==0){  
header("Location: error.php"); exit; 
}




?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<LINK REL=STYLESHEET TYPE="text/css" HREF="css/style2.css">
<title>OSV-CMS</title>
<meta http-equiv="Content-Type" content="text/html; charset=cp1251;">
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
force_br_newlines : "true",
force_p_newlines : "false",
		mode : "textareas",
		theme : "advanced",
		plugins : "imagemanager,filemanager,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull",
		theme_advanced_buttons2 : "undo,redo,|,link,unlink,anchor,image,insertfile,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,fullscreen",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,


		content_css : "css/styletextarea.css",
		

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
//echo (" - (".$user_flag.")");
//echo (" - (".$news.")");
//echo (" - (".$pochta.")");
?>

</h4></td></tr>
</table>

<table width="1320" border="0" align="center" cellpadding="0" cellspacing="1">  
<tr>
<td align="center" width="15%"><a href="index.php" class="menur">На www.rw</a></td>    
<td align="center" width="15%"><a href="spravirc.php?work=12" class="menur">Новости</a></td>
<td align="center" width="15%"><a href="spravirc.php?work=9" class="menur">Рассылка</a></td>
<td align="center" width="15%"><a href="spravirc.php?work=5" class="menur">Справочник персонала</a></td>  
<td align="center" width="15%"><a href="spravirc.php?work=7" class="menur">Глобальное редакт СП</a></td>  
<td align="center" width="15%"><a href="spravirc.php?work=2" class="menur">Редактирование страниц</a></td>  
<td align="center" width="15%"><a href="spravirc.php?work=16" class="menur">Каталог бланков</a></td>  
</tr>
</table>

<table width="1100" border="0" align="center">
<tr><td align="center" width="100%">

<?php
include("db.php");    		
if($work_id==12){
if($news==1){
$sql = Database::query("SELECT * FROM news ORDER BY id DESC LIMIT 10");
$date=date("d-m-Y") ;
$time=date("H:i:s") ;


$dd=strtotime($date);
$tt=strtotime($time);
$summa=$dd+$tt;


//$tablerows = Database::fetchRow($sql);

//if ($tablerows[7]==1){

//$date=date("d-m-Y") ;
//$time=date("H:i:s") ;
$datkont=date("d-m-Y");
$ddd=strtotime($datkont);

print("
<table width='1320' border='0' align=center cellpadding='0' cellspacing='0' class='trans'>

<tr><td align='left' class='zagl'>Раздел Спец предложений</td></tr>

<form id='form_inst' action='ins_news.php' method='post' >

<tr><td align='left' class='text'>Опубликовать Новость (1-Да, 0-Нет)</td></tr>
<tr><td align='left' valign='top'><input name='page_key_news' type='text' maxlength='10' class='coll_2' value='1' align='center'></td> </tr>
<tr><td align='left' class='text'>Дата (дд.мм.гггг)</td></tr>
<tr><td align='left' valign='top'><input name='page_date' type='text' maxlength='10' class='coll_2' value='$date' align='center'>
<input name='page_dt' type='hidden' class='coll_2' value='$ddd' align='center'>
<br></td> </tr>
<tr><td align='left' valign='top'><input name='page_dt' type='hidden' maxlength='10' class='coll_2' value='$summa' align='center'></td> </tr>
<tr><td align='left' class='text'>Время (дд.мм.гггг)</td></tr>
<tr><td align='left' valign='top'><input name='page_time' type='text' maxlength='10' class='coll_2' value='$time' align='center'></td> </tr>
<tr><td align='left' class='text'>Текст заголовка</td></tr>
<tr><td align='left' valign='top'><input name='page_news' size='80' value=''></td></tr>
<tr><td align='left' class='text'>Текст расширенно</td></tr>
<tr><td align='left' valign='top'><textarea id='elm24' name='page_bigtext' rows='10' cols='60' style='width: 40%'></textarea></td></tr>


<tr><td align='left' class='text'>Фото превью. Размер фото должен быть 60*60</td></tr>
<tr><td align='left' valign='top'><textarea id='elm25' name='page_fotosmall' rows='10' cols='60' style='width: 40%'></textarea></td></tr>

<tr><td align='left' class='text'>Фото большое. Размер фото должен быть 600*300</td></tr>
<tr><td align='left' valign='top'><textarea id='elm26' name='page_fotobig' rows='10' cols='60' style='width: 40%'></textarea></td></tr>

<tr><td align='left' class='text'>Действие</td></tr>
<tr><td align='left' valign='top' align=left><input type='submit' value='Добавить' class='butt'></td></tr>
<tr><td align='left' valign='top' align=left class='zagl'>Результат</td></tr>
<tr><td valign='top' align=left><br></td></tr>
</table>
</form>");
  echo ("
<table width='1320' border='0' align=center cellpadding='0' cellspacing='0' bgcolor='#ffffff'>
<tr>
<td align='center' class='textr' width='40'><b>ID</b></td>
<td align='center' class='textr' width='40'><b>Дата<br>время<br>сек</b></td>
<td align='center' class='textr' width='40'><b>Дата оконч показа</b></td>
<td align='center' class='textr' width='40'><b>Публ</b></td>
<td align='center' class='textr' width='40'><b>Заголовок</b></td>
<td align='center' class='textr' width='300'><b>Расширенно</b></td>
<td align='center' class='textr' width='80'><b>Фото мал</b></td>
<td align='center' class='textr' width='130'><b>Фото бол</b></td>
<td align='center' class='textr' width='80'><b>Опер</b></td>
<td align='center' class='textr' width='80'><b>Опер</b></td>
</tr>");

  while ($tablerows = Database::fetchRow($sql))
{

if (preg_match_all ("!src=\"(.*?)\"!si", $tablerows[7], $out))
$v=$out[1][0];




echo ("
<tr><form action='savernews.php?code=".$tablerows["0"]."' method='post'>
<td align='center' class='textr'>$tablerows[0]<input name='page_id_ins1' type='hidden' value='$tablerows[0]'></td>
<td align='center' class='textr'><input name='page_date' type='text' class='coll_2' value='$tablerows[1]' align='center'><input name='page_time' type='text' class='coll_2' value='$tablerows[2]' align='center'><input name='page_dt' type='text' class='coll_2' value='$tablerows[10]' align='center'></td>
<td align='center' class='textr'>М/Д<input name='page_date_kon' type='text' class='coll_1r' value='$tablerows[4]' align='center'><input name='page_date_kon1' type='hidden' class='coll_1r' value='$tablerows[9]' align='center'></td>
<td align='center' class='textr'>1-да<input name='page_key_news' type='text' class='coll_1r' value='$tablerows[5]' align='center'></td>
<td align='center' class='textr'><input name='page_news' type='text'  size='30' value='$tablerows[3]' align='center'></td>
<td align='center' class='textr'><textarea id='$tablerows[0]' name='page_bigtext' rows='6' cols='50' style='width: 100%'>$tablerows[8]</textarea></td>
<td align='center' class='textr'>$tablerows[6]</td>
<td align='center' class='textr'><img src='$v' width='120'</td>
<td align='center' class='textrm' width='45'><input type='submit' value='Сохр' class='but'></td></form>
<td align='center' class='textr'><form id='form_del' action='del_news.php?code=".$tablerows["0"]."' method='post'><input type='submit' value='Удал' class='but'></td></form>

</tr>");                                                                                                      
}

  echo "</table>";
}
else {echo "<h2>Вам запрещено добавлять новости!</h2>";}
Database::close($connect); 
}



if($work_id==16){   
if($pochta == 10){

//echo $pochta;


print ("<table width='1320' border='0' align=center cellpadding='0' cellspacing='0'  class='trans'>
<tr><td colspan='7' align='left' class='zagl'>Бланки - <span class='zaglc'>БЖД</span></td></tr><tr><td align='left'>");
print('<form id="form1" action="spravirc.php?work=16" method="post" valign="top">');
$connect=Database::connect();
$qr=Database::query('SET NAMES cp1251');
$db=Database::selectDatabase($db_name);	
$qr=Database::query('SELECT * FROM blankiname WHERE id>0 ORDER BY id');	
print('<select  name="list_page">');	
while($res=Database::fetchRow($qr))
{		
print('<option>'.$res[1].'</option>');	
}	
print('</select> ');

$qr=Database::query(Database::statement('SELECT * FROM blankiname WHERE name=? ORDER BY id ASC', [($page_id)]));	
//$qr=Database::query("SELECT * FROM blankibzd WHERE priznak='".$page_id."'");
$res=Database::fetchRow($qr) ?: array_fill(0, 32, '');
print('<input type="submit" id="sub1" value="Выбрать" class="butt">');	
print('</form>');
	 


print ("</td></tr>");


if(isset($page_id)){

print ("<tr><td class='zagl' align='left'>Выбрана Служба - <span class='zaglc'>");    
print ($res[1]);    

print ("</span></td></tr>");    




echo "<tr>
<td align='left' class='text'><br>Ответственный за содержание и актуализацию информации в службе<form action='saveblankname1.php' method='post'>
<textarea  name='opisdop' rows='8' cols='100'  width='100%'>$res[3]</textarea>";



//<input name='opisdop' type='text' value='$res[3]' class='coll_15' align='center'>

echo "<input name='pageblankid' type='hidden' value='$res[0]'>

<input type='submit' value='Сохранить' class='but1'></form><br><br></td>
</tr>";


print ("</table>");    


$sql = Database::query(Database::statement('SELECT * FROM blankibzd WHERE priznak=? ORDER BY id', [($res[2])]));

  echo ("<table width='1320' border='0' align='center' cellpadding='0' cellspacing='0'bgcolor='ffffff'>");
  echo ("<tr>
<td align='center' class='textr'><b>ID</b></td>
<td align='center' class='textr'><b>Название службы</b></td>
<td align='center' class='textr'><b>Перечень бланков</b></td>
<td align='center' class='textr'><b>Назначение бланков</b></td>
<td align='center' class='textr'><b>Дата изменения</b></td>
<td align='center' class='textr'><b>Ссылка</b></td>
<td align='center' class='textr'><b>Пр Сл</b></td>
<td align='center' class='textr'><b>Опер</b></td>
</tr>");


  while ($tablerows = Database::fetchRow($sql))
{

if (preg_match_all ("!src=\"(.*?)\"!si", $tablerows[21], $out))
$v=$out[1][0];
$checkok=$tablerows[0];
$date_today = date("d.m.Y"); //присвоено 03.12.01

  echo("<tr><form action='saverblank1.php?code=".$tablerows["0"]."' method='post'>

            <td align='center' class='textrm' width='20' align='center'>$tablerows[0]</td>
            <td align='center' class='textrm' width='50'><input name='namesl' type='text' value='$tablerows[1]' class='coll_2'></td>



            <td align='center' class='textr'><textarea  name='perechen' rows='15' cols='20' style='width: 100%'>$tablerows[2]</textarea></td>


            <td align='center' class='textrm' width='90'><input name='opisdop' type='text' value='$tablerows[3]' class='coll_5' align='center'></td>
            <td align='center' class='textrm' width='50'><input name='dataizm' type='text' value='$tablerows[4]' class='coll_2' align='center'><input name='page_id_ins1' type='hidden' value='$tablerows[0]'></td>
            <td align='center' class='textrm' width='150'><textarea  name='deistvie' rows='15' cols='20' style='width: 100%'>$tablerows[5]</textarea></td>



            <td align='center' class='textrm'><input name='priznak' type='text'  value='$tablerows[7]' class='coll_1' align='center'></td>

            <td align='center' class='textrm' width='45'><input type='submit' value='Сохр' class='but'></td></form>
            </tr>");


  }

}
$date_today = date("d.m.Y"); //присвоено 03.12.01

  echo "</table>";
}
}
if($work_id==5555){
  $sql = Database::query("SELECT * FROM news ORDER BY id ");
  if($stran == 0){
    print ("<table width='1320' border='0' align=center cellpadding='0' cellspacing='0' class='trans'>
    <tr><td align='left' class='zagl'  colspan='2'>Редактировать страницу:<span class='zaglc'></span></td></tr>
    <tr><td align='center'  colspan='2'>");
      print('<form id="form1" action="spravirc.php?work=2" method="post" valign="top">');
      $connect=Database::connect();
    $qr=Database::query('SET NAMES cp1251');
    
    
    //echo $page_user;
    //echo $user_flag;
    //echo $page_id;
    
    
    $db=Database::selectDatabase($db_name);	
    //$qr=Database::query('SELECT * FROM richstone_page ORDER BY richstone_page_name');	
    //$db=Database::selectDatabase($db_name);	
    $qr=Database::query(Database::statement('SELECT * FROM richstone_page WHERE (redakt = ?) or (key_menu_num = ?) ORDER BY richstone_page_name ', [(int)($user_flag), (int)($user_flag)]));	
    //$qr=Database::query("SELECT * FROM richstone_page WHERE redakt='".$user_flag."' ORDER BY richstone_page_name ");	
    
    
    
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
    
    
    if ($res[0] > 0) echo "http://www.rw/index.php?link=$rr>http://www.rw/index.php?link=$rr";
    
    
    $date=date("d-m-Y") ;
    $time=date("H:i:s") ;
    $datkon=date("d-m-Y");
    $dd=strtotime($datkon);
    
    //echo $time;
    //echo $date;
    $datkon=date("d-m-Y");
    $dd=strtotime($datkon);
    $tt=strtotime($time);
    $summa=$dd+$tt;
    
    
    
                                                                                                        
    print("</a></span></span></td><tr><tr><td align='left' width='830'>");         
                                                          
    print('<form id="form_ins" action="update_page.php" method="post" >');
        print('<input name="hid_id" type="hidden" value="'. $res[0].'"/>');
        print('
    <span class="textin"></span><input name="page_num" type="hidden"  value="'.$res[3].'" class="coll_is"/>
    <span class="textin"></span><input name="page_kat" type="hidden"  value="'.$res[4].'" class="coll_is"/>
    <span class="textin"></span><input name="page_kat_num" type="hidden"  value="'.$res[6].'" class="coll_is"/>
    <span class="textin"></span><input name="page_menu_num" type="hidden"  value="'.$res[7].'" class="coll_is"/>
    <span class="textin">Имя страницы:</span><input name="page_name_upd" type="text"  value="'.$res[1].'" class="info_is"/>     
    <span class="textin"></span><input name="page_alt_name" type="hidden"  value="'.$res[9].'" class="info_is"/>     
    
    <span class="textin"></span><input name="page_alt_date" type="hidden"  value="'.$date.'"  class="coll_2" align="center">     
    <span class="textin"></span><input name="page_alt_time" type="hidden"  value="'.$time.'"  class="coll_2" align="center"> 
    <input name="page_alt_dd" type="hidden"  value="'.$summa.'"  class="coll_2" align="center">');     
    
    
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
  else{
    echo "<h2>Запрещено !</h2>";}
  Database::close($connect); 
  }

if($work_id==5){   
print ("<table width='1320' border='0' align=center cellpadding='0' cellspacing='0'  class='trans'>
<tr><td colspan='7' align='left' class='zagl'>Справочник - <span class='zaglc'>Персонала</span></td></tr><tr><td align='left'>");
print('<form id="form1" action="spravirc.php?work=5" method="post" valign="top">');
$connect=Database::connect();
$qr=Database::query('SET NAMES cp1251');
$db=Database::selectDatabase($db_name);	
$qr=Database::query(Database::statement('SELECT * FROM richstone_page WHERE key_num=? ORDER BY id', [(int)($user_flag)]));	
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
print ("</td></tr>");    


print ("<tr><td class='zagl' align='left'>Выбран отдел - <span class='zaglc'>");
print ($res[1]);    
print ("</span></td></tr></table>");    

$sql = Database::query(Database::statement('SELECT * FROM richstone_katalog WHERE key_page=? ORDER BY num_otdel', [($res[6])]));
  echo ("<table width='1320' border='0' align='center' cellpadding='0' cellspacing='0'bgcolor='ffffff'>");
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
<td align='center' class='textr'><b>Др</b></td>
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
            <td align='center' class='textrm' width='90'><input name='page_email_ins' type='text' value='$tablerows[16]' class='coll_5' align='center'></br><input name='page_email2_ins' type='text' value='$tablerows[27]' class='coll_5' align='center'></td>
            <td align='center' class='textrm' width='90'><input name='page_otdel_ins' type='text' maxlength='10' value='$tablerows[18]' class='coll_3' align='center'></td>
            <td align='center' class='textrm' width='90'><input name='page_adress_ins' type='text' maxlength='20' value='$tablerows[19]' class='coll_5' align='center'></td>
            <td align='center' class='textrm' width='90'><input name='page_office_ins' type='text' maxlength='4' value='$tablerows[12]' class='coll_3' align='center'></td>
            <td align='center' class='textrm' width='20'><input name='page_key_page_ins1' type='text' maxlength='3' value='$tablerows[6]' class='coll_1' align='center'></td>
            <td align='center' class='textrm' width='90'><input name='page_tel_ins' type='text' value='$tablerows[17]' class='coll_5' align='center'></td>
            <td align='center' class='textrm' width='90'><input name='page_date_ins' type='text' value='$date_today' class='coll_3' align='center'><br>ст.$tablerows[5]</td>
            <td align='center' class='textrm' width='90'><input name='dr' type='text' value='$tablerows[24]' class='coll_3' align='center'></td>
            <td align='center' class='textrm' width='90'><input name='radiobutton' type='text' value='$tablerows[23]' class='coll_1' align='center'></td>
            <td align='center' class='textrm' width='56' height='56'><a class=highslide onclick=\"return hs.expand(this)\" href='$v'>$tablerows[20]</a></td>
            <td align='center' class='textrm' width='45'><input type='submit' value='Сохр' class='but'></td></form>
            <form id='form_кув' action='red_kat.php?code=".$tablerows["0"]."' method='post'><td align='center' class='textrm' width='45'><input type='submit' value='Редак' class='but' onclick=\"window.open('red_kat.php?code=".$tablerows["0"]."','MyWin','menubar=1,resizable=1,width=1010,height=600'); return false;\" ></td></form>
            <form id='form_del' action='del_kat.php?code=".$tablerows["0"]."' method='post'><td align='center' class='textrm' width='45'><input type='submit' value='Удал' class='but'></td></form>
            </tr>");
  }
//$m="м<sup>2</sup>";

$date_today = date("d.m.Y"); //присвоено 03.12.01
$qr=Database::query(Database::statement('SELECT * FROM richstone_page WHERE richstone_page_name=?', [($page_id)]));	
$res=Database::fetchRow($qr) ?: array_fill(0, 32, '');

echo "</table>";

print ("
<form id='form_inst' action='insert_katalog.php' method='post' >
<table width='1320' border='0' align='center' cellpadding='0' cellspacing='0'  class='trans'>
<tr><td colspan='7' align='left' class='zagl'>Добавить персонал</td></tr>

<tr><td align='left' valign='top'><input name='page_key_num_ins' type='hidden' maxlength='3' class='coll_is' align='center'></td></tr>


<tr><td align='left' class='text'>Фамилия</td></tr>
<tr><td align='left' valign='top'><input name='page_lname_ins' type='text' maxlength='255' class='info_is'></td></tr>

<tr><td align='left' class='text'>Имя</td></tr>
<tr><td align='left' valign='top'><input name='page_fname_ins' type='text' maxlength='255' class='info_is'></td></tr>

<tr><td align='left' class='text'>Отчество</td></tr>
<tr><td align='left' valign='top'><input name='page_name_ins' type='text' maxlength='255' class='info_is'></td></tr>



<tr><td align='left' class='text'>Должность</td></tr>
<tr><td align='left' valign='top'><input name='page_user_ins' type='text' maxlength='255' class='info_is'></td></tr>

<tr><td align='left' valign='top' class='text'><input name='radiobutton' type='radio' value='6' checked>Вне категории (без фото, аватара, пола)</td></tr>
<tr><td align='left' valign='top' class='text'><input name='radiobutton' type='radio' value='7'>Вне категории (с фото)</td></tr>
<tr><td align='left' valign='top' class='text'><input name='radiobutton' type='radio' value='4'>Фотография (мужчина)</td></tr>
<tr><td align='left' valign='top' class='text'><input name='radiobutton' type='radio' value='5'>Фотография (женщина)</td></tr>
<tr><td align='left' valign='top' class='text'><input name='radiobutton' type='radio' value='1'>Мужчина (без фотографии)</td></tr>
<tr><td align='left' valign='top' class='text'><input name='radiobutton' type='radio' value='2'>Женщина (без фотографии)</td></tr>
<tr><td align='left' valign='top' class='text'><input name='radiobutton' type='radio' value='3'>Декретный отпуск</td></tr>

<tr><td align='left' class='text'>E-mail</td></tr>
<tr><td align='left' valign='top'><input name='page_email_ins' type='text' maxlength='255' class='info_is'></td></tr>

<tr><td align='left' class='text'>E-mail (2)</td></tr>
<tr><td align='left' valign='top'><input name='page_email2_ins' type='text' maxlength='255' class='info_is'></td></tr>



<tr><td align='left' class='text'>Отдел</td></tr>
<tr><td align='left' valign='top'><input name='page_otdel_ins' type='text' maxlength='255' class='coll_5' value='$res[1]'></td></tr>



<tr><td align='left' class='text'>Комната</td></tr>
<tr><td align='left' valign='top'><input name='page_office_ins' type='text' maxlength='255' class='coll_5'></td></tr>


<tr><td align='left' class='text'>Адрес</td></tr>
<tr><td align='left' valign='top'><input name='page_adress_ins' type='text' maxlength='255' class='coll_5' value='пер. Стекольный 5'></td></tr>



<tr><td align='left' class='text'>Телефон</td></tr>
<tr><td align='left' valign='top'><input name='page_tel_ins' type='text' maxlength='255' class='coll_5'></td></tr>

<tr><td align='left' class='text'>Дата последнего редактирования</td></tr>
<tr><td align='left' valign='top'><input name='page_date_ins' type='text' maxlength='255' class='coll_5' value='$date_today' align='center'></td></tr>

<tr><td align='left' class='text'>Загрузка большого изображения (Размер не должен превышать фотографию 100*100px, формата-png с вырезанным задним фоном) </td></tr>");

print ("<tr><td align='left'>");
print ("<textarea name='page_b_ins' rows='15' cols='80' style='width: 80%'>");
print ("</textarea>");
print ("</td></tr>");
print ("<tr><td align='left' class='text'>Загрузка малого изображения (Размер не должен превышать фотографию 57*57px, формата-png с вырезанным задним фоном)</td></tr>");
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



if($work_id==9){   
if($pochta > 0){
$rest=Database::query(Database::statement('select * from richstone_user where richstone_user_pr=? order by id', [(int)($pochta)])); // Сразу выводим все строки БД чтобы видеть что добавили с единой формой.
$rr=Database::numRows($rest);
print ("<table width='1320' border='0' align=left cellpadding='0' cellspacing='0' class='trans'>
<tr><td align='left' class='zagl'>Рассылка новостей - <span class='zaglc'>www.rw</span> / Всего - $rr пользователей </td></tr></table>");
print ("<table width='1320' border='0' align=left cellpadding='0' cellspacing='0' class='trans'>
<tr><td align='left' class='text'>");

 









if (isset($_POST['submit']))
  {
    $arr = $_POST["checks"] ?? '';
    $arr1 = $_POST["checks1"] ?? '';
    $arrt = $_POST["fio"] ?? '';
    $arrs = $_POST["value"] ?? '';
    $len = sizeof($arr); 

       {
        $_POST['title'] =  substr(htmlspecialchars(trim($_POST['title'])), 0, 1100); 
        $_POST['name'] =  substr(htmlspecialchars(trim($_POST['name'])), 0, 30); 
        $_POST['tel'] =  substr(htmlspecialchars(trim($_POST['tel'])), 0, 30); 
        $_POST['email'] =  substr(htmlspecialchars(trim($_POST['email'])), 0, 50); 

        if (empty($_POST['name'])) 
             output_err(0); 
        if(!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $_POST['email'])) 
             output_err(1); 
        if(empty($_POST['mess'])) 
             output_err(2);

//for ($i=0; $i<$len; $i++) { 
//$tmpp1=$arr1[$i];
//echo "<input type='text' value='$tmpp1' name='names'>";
//}
//} 
// подключаем файл класса для отправки почты 

require 'class.phpmailer.php'; 
for ($i=0; $i<$len; $i++) { 

$tmpp=$arr[$i];
$tmpp1=$arr1[$i];

$mess = 'Здравствуйте <b>'.$tmpp1.'.</b> Меня зовут <b>'.$_POST['name'].'</b><br /> 
<b>Контактный телефон:</b> '.$_POST['tel'].'<br />                       
<b>Контактный email:</b> '.$_POST['email'].'<br /> 
'.$_POST['mess'];

        $mail = new PHPMailer(); 
        $mail->From = 'webmaster@mnsk.rw';      // от кого 
        $mail->FromName = 'www.rw';   // от кого 
        $mail->AddAddress($tmpp); // кому - адрес, Имя 
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
        echo '<br><span class="textin1">Письмо отправлено на</span> - <a href="mailto:'.$tmpp.'">'.$tmpp.'</a>'; 
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
$num2 = 200;
print('<form id="form5" action="spravirc.php?work=9" method="post" valign="top">');
//$qr=Database::query("SELECT * FROM richstone_user WHERE richstone_user_pr=$page_user order by id LIMIT 0 , $num2");	

//echo $pochta;
//echo $page_user;


$result3 = Database::query(Database::statement('SELECT * FROM pochta where po=?', [(int)($pochta)]));
print("<br>Выберите получателя*<br><select name='adresat'>");
while($restext=Database::fetchRow($result3))
{		
print '<option value='.$restext[2].'>'.$restext[1].'</option>';	
}	
print("</select>");



$result2 = Database::query(Database::statement('SELECT * FROM richstone_user WHERE richstone_user_pr=? order by id LIMIT 0 , ?', [(int)($page_user), (int)($num2)]));


print('<input type="submit" id="form5" value="Выбрать" class="butt">');	
print('</form>');	 






if ($page_user !== null)
{

$sql = Database::query("SELECT * FROM richstone_user WHERE richstone_user_pr=555 ORDER BY id");
  echo ("<table width='1320' border='0' align=center cellpadding='2' cellspacing='0' bgcolor='#ffffff'>");
  echo ("<tr>
<td align='center' class='textr'><b>Имя</b></td>
<td align='center' class='textr'><b>Пр</b></td>
<td align='center' class='textr'><b>Дата входа</b></td>
<td align='center' class='textr'><b>IP</b></td> 
<td align='center' class='textr'><b>e-mail</b></td>
<td align='center' class='textr'><b>Операция</b></td>
<td align='center' class='textr'><b>Операция</b></td>
</tr>");
  while ($tablerows = Database::fetchRow($sql))
{
$tabl=$tablerows[0]-1;
  echo("<tr>
            <td align='center' class='textrm' width='220'>$tablerows[4]</td>
            <td align='center' class='textrm' width='10'>$tablerows[9]</td>
            <td align='center' class='textrm' width='100'>$tablerows[7]</td>
            <td align='center' class='textrm' width='115'>$tablerows[1]</td>
            <td align='center' class='textrm' width='100'>$tablerows[8]</td>
            <form id='form_del' action='red_user.php?code=".$tablerows["0"]."' method='post'><td align='center' class='textrm' width='100'><input type='submit' value='Редактировать' class='red' onclick=\"window.open('red_user.php?code=".$tablerows["0"]."','MyWin','menubar=1,resizable=1,width=1010,height=600'); return false;\" ></td></form>
            <form id='form_del' action='del_user_p.php?code=".$tablerows["0"]."' method='post'><td align='center' class='textrm' width='90'><input type='submit' value='Удалить' class='del'></td></form>
            </tr> ");
}
  echo "</table>";
Database::close($connect); 




    echo('<form id="form4" name="form4" method="post" action="" enctype="multipart/form-data">');
$num2 = 200;
$cols2 = 4;
$i = 0;
$tab=1100;
$w=$tab/$cols2;

echo "<table class='textin'  width='$tab' border='0' align=left cellpadding='0' cellspacing='0'><tr>";
$n = Database::numRows($result2); 
$m = $cols2 * ceil($n / $cols2);
while($i < $m)                                                                                                	
 {
 $i++; 
   $ares=Database::fetchArray($result2);
$col=$i+1;

 if ($i <= $n){
 echo('<td class="textin" width="'.$w.'">'.$i.'<input type="checkbox" name="checks[]" checked value="'.$ares["8"].'"><input type="hidden" name="checks1[]" value="'.$ares["4"].'"> - '.$ares[4].' - <i>('.$ares[8].')</i></td>');
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
print ("<table width='1100' border='0' align=left cellpadding='0' cellspacing='0'>
<tr><td align='left' class='zagl'>Отправка почты - <span class='zaglc'>www.rw</span></td></tr></table>");

    echo('    <table class="text"><tr><td class="textcolg"><div align="left"> 
              <br>Имя*<br> 
              <input type="text" name="name" size="40" value="-"> 
              <br>Контактный телефон<br /> 
              <input type="text" name="tel" size="40" value="-"> 
              <br />Контактный email*<br /> 
              <input type="text" name="email" size="40" value="webmaster@mnsk.rw"> 
              <br>Teма<br>
              <input type="text" name="title" size="40" value="Новости"> 
              <br>Добавить файл<br> 
              <input name="attachfile" type="file" size="28"> 
              <br>Добавить изображение<br> 
              <input name="attachimage" type="file" size="28"><br> 
              Сообщение<br> 
              <textarea name="mess" rows="10" cols="80" >-</textarea><br> 
                                                         
    <input name="submit" type="submit" id="mail" value="Отправить">
</p>
</form></td></tr></table>');
   }
}
print ("</td></tr></table>");
} 
else {echo "<h2>Вам запрещено пользоваться рассылкой!</h2>";}
Database::close($connect);
}




if($work_id==7){   


print ("<table width='1320' border='0' align=center cellpadding='0' cellspacing='0' class='trans'>
<tr><td colspan='7' align='left' class='zagl'>Каталог - <span class='zaglc'>Персонала</span></td></tr><tr><td align='left'>");
print('<form id="form1" action="spravirc.php?work=7" method="post" valign="top">');
$connect=Database::connect();
$qr=Database::query('SET NAMES cp1251');
$db=Database::selectDatabase($db_name);	
$qr=Database::query(Database::statement('SELECT * FROM richstone_page WHERE key_num=? ORDER BY id', [(int)($user_flag)]));	
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
<table class='trans' cellpadding='0' cellspacing='0' border='0'>
<tr><td valign=top align="center">
<TABLE border='0' width='1320' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff'>
<form name="Edit" method="POST">
<tr>
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
<td align='center' class='textr'><b>Ст1</b></td>
<td align='center' class='textr'><b>Ст2</b></td>
<td align='center' class='textr'><b>Дата</b></td>
<td align='center' class='textr'><b>ДР</b></td>
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

            <td align='center' class='textrm' width='20'><input name=page_num_otdel_ins[".$row2[0]."] type='text' value='$row2[22]' class='coll_1' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=page_lname_ins[".$row2[0]."] type='text' value='$row2[15]' class='coll_5'></td>
            <td align='center' class='textrm' width='90'><input name=page_fname_ins[".$row2[0]."] type='text' value='$row2[14]' class='coll_2' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=page_name_ins[".$row2[0]."] type='text' value='$row2[13]' class='coll_5' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=page_user_ins[".$row2[0]."] type='text' value='$row2[11]' class='coll_5' align='center'><input name=idx[".$row2[0]."] type='hidden' value='$row2[0]'></td>
            <td align='center' class='textrm' width='90'><input name=page_email_ins[".$row2[0]."] type='text' value='$row2[16]' class='coll_5' align='center'></br><input name=page_email2_ins[".$row2[0]."] type='text' value='$row2[27]' class='coll_5' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=page_otdel_ins[".$row2[0]."] type='text' maxlength='10' value='$row2[18]' class='coll_3' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=page_office_ins[".$row2[0]."] type='text' maxlength='20' value='$row2[12]' class='coll_3' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=page_adress_ins[".$row2[0]."] type='text' maxlength='30' value='$row2[19]' class='coll_5' align='center'></td>
            <td align='center' class='textrm' width='20'><input name=page_key_page_ins1[".$row2[0]."] type='text' maxlength='3' value='$row2[6]' class='coll_1' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=page_tel_ins[".$row2[0]."] type='text' value='$row2[17]' class='coll_2' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=page_tel1_ins[".$row2[0]."] type='text' value='$row2[25]' class='coll_2' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=page_tel2_ins[".$row2[0]."] type='text' value='$row2[26]' class='coll_2' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=page_date_ins[".$row2[0]."] type='text' value='$date_today' class='coll_2' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=dr[".$row2[0]."] type='text' value='$row2[24]' class='coll_2' align='center'></td>
            <td align='center' class='textrm' width='20'><input name=radiobutton[".$row2[0]."] type='text' value='$row2[23]' class='coll_1' align='center'></td>
            <td align='center' class='textrm' width='56' height='56'><a class=highslide onclick=\"return hs.expand(this)\" href='$v'>$row2[20]</a></td>";

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
while ((list($idx,$val) = next_form_item($page_lname_ins)) and (list($idx,$val) = next_form_item($page_fname_ins)) and (list($idx,$val) = next_form_item($page_name_ins)) and (list($idx,$val) = next_form_item($page_user_ins)) and (list($idx,$val) = next_form_item($page_email_ins)) and (list($idx,$val) = next_form_item($page_email2_ins)) and (list($idx,$val) = next_form_item($page_otdel_ins)) and (list($idx,$val) = next_form_item($page_office_ins)) and (list($idx,$val) = next_form_item($page_key_page_ins1)) and (list($idx,$val) = next_form_item($page_tel_ins)) and (list($idx,$val) = next_form_item($page_tel1_ins)) and (list($idx,$val) = next_form_item($page_tel2_ins)) and (list($idx,$val) = next_form_item($page_adress_ins)) and (list($idx,$val) = next_form_item($page_date_ins)) and (list($idx,$val) = next_form_item($radiobutton)) and (list($idx,$val) = next_form_item($page_num_otdel_ins)) and (list($idx,$val) = next_form_item($dr)))
{                                                                                                                                                                                                                                                                                                                                                                                                                                                  
     Database::query(Database::statement('UPDATE richstone_katalog SET lname=?, fname=?, name=?, user=?, email=?,email2=?, otdel=?, office=?, key_page=?, tel=?, sotovi1=?, sotovi2=?, adress=?, date=?, radiobutton=?, num_otdel=?, dr=? WHERE id=?', [($page_lname_ins[$idx]), ($page_fname_ins[$idx]), ($page_name_ins[$idx]), ($page_user_ins[$idx]), ($page_email_ins[$idx]), ($page_email2_ins[$idx]), ($page_otdel_ins[$idx]), ($page_office_ins[$idx]), ($page_key_page_ins1[$idx]), ($page_tel_ins[$idx]), ($page_tel1_ins[$idx]), ($page_tel2_ins[$idx]), ($page_adress_ins[$idx]), ($page_date_ins[$idx]), ($radiobutton[$idx]), ($page_num_otdel_ins[$idx]), ($dr[$idx]), ($idx)]))or die(Database::error());
//while ((list($idx,$val) = next_form_item($page_lname_ins)) and (list($idx,$val) = next_form_item($page_fname_ins)) and (list($idx,$val) = next_form_item($page_name_ins)) and (list($idx,$val) = next_form_item($page_user_ins)) and (list($idx,$val) = next_form_item($page_email_ins)) and (list($idx,$val) = next_form_item($page_otdel_ins)) and (list($idx,$val) = next_form_item($page_office_ins)) and (list($idx,$val) = next_form_item($page_key_page_ins1)) and (list($idx,$val) = next_form_item($page_tel_ins)) and (list($idx,$val) = next_form_item($page_adress_ins)) and (list($idx,$val) = next_form_item($page_date_ins)) and (list($idx,$val) = next_form_item($radiobutton)) and (list($idx,$val) = next_form_item($page_num_otdel_ins)))
//{                                                                                                                                                                                                                                                                                                                                                                                                                                                  
//     Database::query("UPDATE richstone_katalog SET lname='".$page_lname_ins[$idx]."', fname='".$page_fname_ins[$idx]."', name='".$page_name_ins[$idx]."', user='".$page_user_ins[$idx]."', email='".$page_email_ins[$idx]."', otdel='".$page_otdel_ins[$idx]."', office='".$page_office_ins[$idx]."', key_page='".$page_key_page_ins1[$idx]."', tel='".$page_tel_ins[$idx]."', adress='".$page_adress_ins[$idx]."', date='".$page_date_ins[$idx]."', radiobutton='".$radiobutton[$idx]."', num_otdel='".$page_num_otdel_ins[$idx]."' WHERE id='$idx'")or die(Database::error());



//while ((list($idx,$val) = next_form_item($page_lname_ins)) and (list($idx,$val) = next_form_item($page_fname_ins)) and (list($idx,$val) = next_form_item($page_name_ins)) and (list($idx,$val) = next_form_item($page_user_ins)) and (list($idx,$val) = next_form_item($page_email_ins)) and (list($idx,$val) = next_form_item($page_otdel_ins)) and (list($idx,$val) = next_form_item($page_office_ins)) and (list($idx,$val) = next_form_item($page_key_page_ins1)) and (list($idx,$val) = next_form_item($page_tel_ins)) and (list($idx,$val) = next_form_item($page_adress_ins)) and (list($idx,$val) = next_form_item($page_date_ins)) and (list($idx,$val) = next_form_item($radiobutton)))

//{                                                                                                                                                                                                                                                                                                                                         
//     Database::query("UPDATE richstone_katalog SET lname='".$page_lname_ins[$idx]."', fname='".$page_fname_ins[$idx]."', name='".$page_name_ins[$idx]."', user='".$page_user_ins[$idx]."', email='".$page_email_ins[$idx]."', otdel='".$page_otdel_ins[$idx]."', office='".$page_office_ins[$idx]."', key_page='".$page_key_page_ins1[$idx]."', tel='".$page_tel_ins[$idx]."', adress='".$page_adress_ins[$idx]."', date='".$page_date_ins[$idx]."', radiobutton='".$radiobutton[$idx]."' WHERE id='$idx'")or die(Database::error());

//     Database::query("UPDATE richstone_katalog SET lname='".$page_lname_ins[$idx]."', fname='".$page_fname_ins[$idx]."', name='".$page_name_ins[$idx]."', user='".$page_user_ins[$idx]."', email='".$page_email_ins[$idx]."', otdel='".$page_otdel_ins[$idx]."', office='".$page_office_ins[$idx]."', key_page='".$page_key_page_ins1[$idx]."', tel='".$page_tel_ins[$idx]."', adress='".$page_adress_ins[$idx]."', date='".$page_date_ins[$idx]."' WHERE id='$idx'")or die(Database::error());

header("Location: spravirc.php?work=7");
}
}
Database::close($connect); 
}
?>

<?php
if($work_id==2){

print ("<table width='1320' border='0' align=center cellpadding='0' cellspacing='0' class='trans'>
<tr><td align='left' class='zagl'  colspan='2'>Редактировать страницу:<span class='zaglc'></span></td></tr>
<tr><td align='center'  colspan='2'>");
	print('<form id="form1" action="spravirc.php?work=2" method="post" valign="top">');
	$connect=Database::connect();
$qr=Database::query('SET NAMES cp1251');


//echo $page_user;
//echo $user_flag;
//echo $page_id;


$db=Database::selectDatabase($db_name);	
//$qr=Database::query('SELECT * FROM richstone_page ORDER BY richstone_page_name');	
//$db=Database::selectDatabase($db_name);	
$qr=Database::query(Database::statement('SELECT * FROM richstone_page WHERE (redakt = ?) or (key_menu_num = ?) ORDER BY richstone_page_name ', [(int)($user_flag), (int)($user_flag)]));	
//$qr=Database::query("SELECT * FROM richstone_page WHERE redakt='".$user_flag."' ORDER BY richstone_page_name ");	



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


if ($res[0] > 0) echo "http://www.rw/index.php?link=$rr>http://www.rw/index.php?link=$rr";


$date=date("d-m-Y") ;
$time=date("H:i:s") ;
$datkon=date("d-m-Y");
$dd=strtotime($datkon);

//echo $time;
//echo $date;
$datkon=date("d-m-Y");
$dd=strtotime($datkon);
$tt=strtotime($time);
$summa=$dd+$tt;



                                                                                                    
print("</a></span></span></td><tr><tr><td align='left' width='830'>");         
                                                    	
print('<form id="form_ins" action="update_page.php" method="post" >');
    print('<input name="hid_id" type="hidden" value="'. $res[0].'"/>');
    print('
<span class="textin"></span><input name="page_num" type="hidden"  value="'.$res[3].'" class="coll_is"/>
<span class="textin"></span><input name="page_kat" type="hidden"  value="'.$res[4].'" class="coll_is"/>
<span class="textin"></span><input name="page_kat_num" type="hidden"  value="'.$res[6].'" class="coll_is"/>
<span class="textin"></span><input name="page_menu_num" type="hidden"  value="'.$res[7].'" class="coll_is"/>
<span class="textin">Имя страницы:</span><input name="page_name_upd" type="text"  value="'.$res[1].'" class="info_is"/>     
<span class="textin"></span><input name="page_alt_name" type="hidden"  value="'.$res[9].'" class="info_is"/>     

<span class="textin"></span><input name="page_alt_date" type="hidden"  value="'.$date.'"  class="coll_2" align="center">     
<span class="textin"></span><input name="page_alt_time" type="hidden"  value="'.$time.'"  class="coll_2" align="center"> 
<input name="page_alt_dd" type="hidden"  value="'.$summa.'"  class="coll_2" align="center">');     


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
?>



</td></tr></table></body></html>