<?php  
$user_flag=$_COOKIE['user_flag']; 
$page_id=$_POST['list_page']; 
$page_user=$_POST['adresat']; 
$work_id=$_GET['work']; 
$user_logon=$_COOKIE['user_logon']; 
$user_name=$_COOKIE['user_name']; 
$user_fname=$_COOKIE['user_fname']; 
$user_sname=$_COOKIE['user_sname']; 
$news=$_COOKIE['news'];
$pochta=$_COOKIE['pochta'];

if (isset($_POST['dir'])) {$dir = $_POST['dir'];}
 
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
global $radiobutton;
global $dr;
global $page_num_otdel_ins;

$action = $_POST["action"];
$ar = $_POST["ar"];
$am = $_POST["am"];
$ai = $_POST["ai"];
$ao = $_POST["ao"];
$ac = $_POST["ac"];
$an = $_POST["an"];
$ak = $_POST["ak"];
$ap = $_POST["ap"];
$idx = $_POST["idx"];
$rad = $_POST["rad"];

$page_lname_ins = $_POST["page_lname_ins"];
$page_fname_ins = $_POST["page_fname_ins"];
$page_name_ins = $_POST["page_name_ins"];
$page_user_ins = $_POST["page_user_ins"];
$page_email_ins = $_POST["page_email_ins"];
$page_email2_ins = $_POST["page_email2_ins"];
$page_otdel_ins = $_POST["page_otdel_ins"];
$page_office_ins = $_POST["page_office_ins"];
$page_key_page_ins1 = $_POST["page_key_page_ins1"];
$page_tel_ins = $_POST["page_tel_ins"];
$page_tel1_ins = $_POST["page_tel1_ins"];
$page_tel2_ins = $_POST["page_tel2_ins"];
$page_id_ins1 = $_POST["page_id_ins1"];
$page_adress_ins = $_POST["page_adress_ins"];
$page_date_ins = $_POST["page_date_ins"];
$radiobutton = $_POST["radiobutton"];
$dr = $_POST["dr"];
$page_num_otdel_ins = $_POST["page_num_otdel_ins"];


if($user_flag<990){  
header("Location: spravirc.php"); 
}

//if($user_flag==100){  

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
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "imagemanager,filemanager,pagebreak,style,layer,table,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

		// Theme options
		theme_advanced_buttons1 : "newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,insertfile,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content2.css",
		
		language: "ru",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
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
echo (" - (".$user_flag.")111");
echo (" - (".$news.")111");

?>

</h4></td></tr>
</table>

<table width="1320" border="0" align="center" cellpadding="0" cellspacing="1">  
<tr>
<td align="left" width="60"><a href="index.php" class="menur">На www.rw</a></td>    
<td align="center" width="60"><a href="main.php?work=12" class="menur">Новости</a></td> 
<td align="center" width="60"><a href="main.php?work=14" class="menur">Доска</a></td>
<td align="center" width="90"><a href="main.php?work=13" class="menur">Польз. системы</a></td>
<td align="center" width="90"><a href="main.php?work=6" class="menur">Польз. рассылки</a></td> 
<td align="center" width="60"><a href="main.php?work=9" class="menur">Рассылка</a></td>  
<td align="center" width="80"><a href="main.php?work=5" class="menur">Справ персон</a></td>  
<td align="center" width="80"><a href="main.php?work=7" class="menur">Глоб ред СП</a></td>  
<td align="center" width="90"><a href="main.php?work=3" class="menur">Менеджер стр</a></td>
<td align="center" width="50"><a href="main.php?work=10" class="menur">Меню</a></td>    
<td align="center" width="80"><a href="main.php?work=1" class="menur">Доб Страницу</a></td>    
<td align="center" width="80"><a href="main.php?work=2" class="menur">Ред Страницы</a></td>  
<td align="center" width="80"><a href="main.php?work=15" class="menur">Загрузка фото</a></td>  
<td align="center" width="80"><a href="main.php?work=16" class="menur">Бланки</a></td>   
<td align="center" width="1"><a href="main.php?work=80" class="menur"></a></td>  
</tr>
</table>



<table width="1320" border="0" align="center">

<tr><td align="center" width="100%">




<?php
include("db.php");

    		
if($work_id==15)
{
echo "<table><tr><td align='left'>

<br><br><form action='main.php?work=15' method='post' enctype='multipart/form-data'>";


echo "<select name='dir'>";

$array_of_dirs = glob('ed/upload-files/*' , GLOB_ONLYDIR);

for($i=0; $i<10; $i++){ 

echo '<option value="'.$array_of_dirs[$i].'">';  

echo $array_of_dirs[$i];

echo '</option>';  
                      }


echo "</select>


<input name='file[]' type='file' multiple='true' />

<input type='submit' value='Загрузить' />
</form>
                                                   ";






//ширина и высота в пикселях
$pic_weight = 6000;
$pic_height = 4000;
 
if (isset($_FILES))
{
  //пролистываем весь массив изображений по одному $_FILES['file']['name'] as $k=>$v

if ( empty($_FILES) ) { 

echo "";

}

else

{


  foreach ($_FILES['file']['name'] as $k=>$v)
{
    //директория загрузки
    $uploaddir = "uploads/";
    //новое имя изображения
//    $apend=date('YmdHis').rand(100,1000).'.png';
    $apend=date('Y_m_d').rand(100,1000).'.jpg';

    $s="s";

    //путь к новому изображению
    $uploadfile = "$apend";
//    $uploadfile1 = "$s$apend";
//    $uploadfile = "$uploaddir$apend";
//    $uploadfile = "$apend";
 
    //Проверка расширений загружаемых изображений
    if($_FILES['file']['type'][$k] == "image/gif" || $_FILES['file']['type'][$k] == "image/png" ||
    $_FILES['file']['type'][$k] == "image/jpg" || $_FILES['file']['type'][$k] == "image/jpeg")
    {
      //черный список типов файлов
      $blacklist = array(".php", ".phtml", ".php3", ".php4");
      foreach ($blacklist as $item)
      {
        if(preg_match("/$item\$/i", $_FILES['file']['name'][$k]))
        {
          echo "Нельзя загружать скрипты.";
          exit;
        }
      }
 
      //перемещаем файл из временного хранилища
      if (move_uploaded_file($_FILES['file']['tmp_name'][$k], $uploadfile))
      {
        //получаем размеры файла
        $size = getimagesize($uploadfile);
        //проверяем размеры файла, если они нам подходят, то оставляем файл
        if ($size[0] < $pic_weight && $size[1] < $pic_height)
        {
          //.....код
          //я обычно заношу пути к изображениям в бд
          //.....код
 
          echo "<center><br>Файл ($uploadfile) загружен.</center>";


$up1="$dir/big";
$uploadfilee="$up1$uploadfile";
  require ('imgresize.php');
  if (img_resize(''.$uploadfile.'', ''.$uploadfilee.'', 600, 400	))
    echo '<br>Изображение загружено<br>';
  else
    echo 'Resize failed!';
echo "$uploadfilee <br><img src='$uploadfilee' border='1'><br>";

//echo "<br>";
//echo $up1;
//echo "<br>";
//echo $uploadfile;
//echo "<br>";
//echo $uploadfilee;
//echo "<br><br><br>";


$up2="$dir/2resize";
$uploadfilee1="$up2$uploadfile";
  if (img_resize(''.$uploadfile.'', ''.$uploadfilee1.'', 115, 76))
    echo '<br>Изображение загружено<br>';
  else
    echo 'Resize failed!';
//echo "$uploadfilee1 <br><img src='$uploadfilee1' border='1'><br>";
//echo "<br>";
//echo $up2;
//echo "<br>";
//echo $uploadfile;
//echo "<br>";
//echo $uploadfilee1;
//echo "<br><br><br>";

$up3="$dir/small";
$uploadfilee2="$up3$uploadfile";
crop(''.$uploadfilee1.'', ''.$uploadfilee2.'', array(20, 0, -20, -1)); 
echo "<img src='$uploadfilee2' border='1'><br>";
//echo "<br>";
//echo $up3;
//echo "<br>";
//echo $uploadfile;
//echo "<br>";
echo $uploadfilee2;
echo "<br><br><br>";
unlink($uploadfilee1);
unlink($uploadfile);

        }
        //если размеры файла нам не подходят, то удаляем файл unlink($uploadfile);
        else
        {
          echo "<center><br>Размер пикселей превышает допустимые нормы.</center>";
          unlink($uploadfile);
        }
      }
      else
        echo "<center><br>Файл не загружен, вернитесь и попробуйте еще раз.</center>";
    }
    else
      echo "<center><br>Можно загружать только изображения в форматах jpg, jpeg, gif и png.</center>";
  }
}
}
echo "</td></tr>";
echo "</table>";
}

if($work_id==1)
{   
print ("<table width=1320 border='0' align=center cellpadding='0' cellspacing='0' class='trans'>
<tr><td align='left' class='zagl'  colspan='2'>Создать новую страницу:<span class='zaglc'></span></td></tr><tr><td><br>");
print('<form id="form_ins" action="insert_page.php" method="post" >');  
print('<span class="menu3">Имя страницы:</span><input name="page_name_ins" type="text" size="28">'); 
print('<input type="submit" id="page_ins" value="Сохранить" class="butt"><br>');
//print('<textarea name="view_page_ins"  cols="100" rows="50">');   
include('ed/examples/full11.html');
//print('</textarea>');   
print('</form></td></tr></table>');
  }  

if($work_id==14){
$sql = mysql_query("SELECT * FROM doska ORDER BY id asc");

echo "<table width=1320 border='0' align=center cellpadding='2' cellspacing='0' class='trans'><tr><td>
<table width=1320 border='0' align=center cellpadding='2' cellspacing='0'>
<tr><td colspan='9' align='left' class='zagl'>Доска почета</td></tr></table>
<form id='form_inst_doska' action='ins_news_doska.php' method='post' >
<tr><td align='left' class='text'>Имя</td></tr>
<tr><td align='left' valign='top'><input name='page_name' size='80' value=''></td></tr>
<tr><td align='left' class='text'>Информация расширенно</td></tr>
<tr><td align='left' valign='top'><textarea id='elm24' name='page_info' rows='10' cols='60' style='width: 40%'></textarea></td></tr>
<tr><td align='left' class='text'>Фото превью</td></tr>
<tr><td align='left' valign='top'><textarea id='elm25' name='page_fotosmall' rows='10' cols='60' style='width: 40%'></textarea></td></tr>
<tr><td align='left' class='text'>Фото большое</td></tr>
<tr><td align='left' valign='top'><textarea id='elm26' name='page_fotobig' rows='10' cols='60' style='width: 40%'></textarea></td></tr>
<tr><td align='left' class='text'>Действие</td></tr>
<tr><td align='left' valign='top' align=left><input type='submit' value='Добавить' class='butt'></td></tr>
<tr><td align='left' valign='top' align=left class='zagl'>Результат</td></tr>
<tr><td valign='top' align=left><br></td></tr>
</table>
</form>";

echo "<table width=1320 border='0' align=center cellpadding='2' cellspacing='0' bgcolor='#ffffff'>";

echo "<tr>
<td class='textr'>№<td>
<td class='textr'>Имя<td>
<td class='textr'>Инфо<td>
<td class='textr'>Фото большое<td>
<td class='textr'>Фото маленькое<td>
</tr>";
  while ($tablerows = mysql_fetch_row($sql))
{
echo "<tr>
<td class='textrm'>$tablerows[0]<td>
<td class='textrm'>$tablerows[1]<td>
<td class='textrm' align='left'>$tablerows[2]<td>
<td class='textrm'>$tablerows[4]<td>
<td class='textrm'>$tablerows[3]<td>
</tr>";
}

echo "</td></tr></table>";
}
if($work_id==13){
$sql = mysql_query("SELECT * FROM osv_user ORDER BY id asc");

echo "<table width=1320 border='0' align=center cellpadding='2' cellspacing='0'>
<tr><td colspan='9' align='left' class='zagl'>Список пользователь</td></tr></table>
<table width=1320 border='0' align=center cellpadding='2' cellspacing='0' bgcolor='#ffffff'>";
echo "<tr>
<td class='textr'>№<td>
<td class='textr'>Логин<td>
<td class='textr'>Пароль<td>
<td class='textr'>Пароль MD5<td>
<td class='textr'>Ун номер (key_menu_num)<td>
<td class='textr'>Фамилия<td>
<td class='textr'>Имя<td>
<td class='textr'>Отчество<td>
<td class='textr'>Новость<td>
<td class='textr'>Почта<td>
</tr>";
  while ($tablerows = mysql_fetch_row($sql))
{
echo "<tr>
<td class='textrm'>$tablerows[0]<td>
<td class='textrm'>$tablerows[1]<td>
<td class='textrm'>$tablerows[9]<td>
<td class='textrm'>$tablerows[2]<td>
<td class='textrm'>$tablerows[3]<td>
<td class='textrm'>$tablerows[5]<td>
<td class='textrm'>$tablerows[4]<td>
<td class='textrm'>$tablerows[6]<td>
<td class='textrm'>$tablerows[7]<td>
<td class='textrm'>$tablerows[8]<td>
</tr>";
}
  echo "</table>";
  mysql_close($connect); 
}
if($work_id==80)
{
$sql = mysql_query("SELECT * FROM dr ORDER BY id ");

 echo ("<table width=1320 border='0' align=center cellpadding='0' cellspacing='0' bgcolor='#ffffff'>
<tr>
<td align='center' class='textr' width='40'><b>ID</b></td>
<td align='center' class='textr' width='40'><b>Показ</b></td>
<td align='center' class='textr' width='80'><b></b></td>
</tr>");
  while ($tablerowss = mysql_fetch_row($sql))
{
echo ("<tr><form action='saverdr.php?code=".$tablerowss["0"]."' method='post'>
<td align='center' class='textr'>$tablerowss[0]<input name='page_id' type='hidden' value='$tablerowss[0]'></td>
<td align='center' class='textr'><input name='page_dr' type='text' class='coll_2' value='$tablerowss[1]' align='center'></td>
<td align='center' class='textrm' width='45'><input type='submit' value='Сохр' class='but'></td></form>
</tr>");                                                                                                      
}
echo "</table>";
echo mysql_close($connect);
echo "</table>";
}

if($work_id==12)
{
$sql = mysql_query("SELECT * FROM news ORDER BY id DESC limit 47");
$date=date("d-m-Y") ;
$time=date("H:i:s") ;
$dd=strtotime($date);
$tt=strtotime($time);
$summa=$dd+$tt;

print ("<table width=1320 border='0' align=center cellpadding='0' cellspacing='0' class='trans'>
<tr><td align='left' class='zagl'>Раздел Спец предложений</td></tr>
<form id='form_inst' action='ins_news.php' method='post' >
<tr><td align='left' class='text'>Опубликовать Новость (1-Да, 0-Нет)</td></tr>
<tr><td align='left' valign='top'><input name='page_key_news' type='text' maxlength='10' class='coll_2' value='1' align='center'></td> </tr>
<tr><td align='left' class='text'>Дата (дд.мм.гггг)</td></tr>
<tr><td align='left' valign='top'><input name='page_date' type='text' maxlength='10' class='coll_2' value='$date' align='center'></td> </tr>
<tr><td align='left' class='text'>Время (дд.мм.гггг)</td></tr>
<tr><td align='left' valign='top'><input name='page_time' type='text' maxlength='10' class='coll_2' value='$time' align='center'></td> </tr>
<tr><td align='left' class='text'>Контрольная сумма</td></tr>
<tr><td align='left' valign='top'><input name='page_dt' type='text' maxlength='10' class='coll_2' value='$summa' align='center'></td> </tr>
<tr><td align='left' class='text'>Текст заголовка</td></tr>
<tr><td align='left' valign='top'><input name='page_news' size='80' value=''></td></tr>
<tr><td align='left' class='text'>Текст расширенно</td></tr>
<tr><td align='left' valign='top'><textarea id='elm24' name='page_bigtext' rows='10' cols='60' style='width: 40%'></textarea></td></tr>
<tr><td align='left' class='text'>Фото превью</td></tr>
<tr><td align='left' valign='top'><textarea id='elm25' name='page_fotosmall' rows='10' cols='60' style='width: 40%'></textarea></td></tr>
<tr><td align='left' class='text'>Фото большое</td></tr>
<tr><td align='left' valign='top'><textarea id='elm26' name='page_fotobig' rows='10' cols='60' style='width: 40%'></textarea></td></tr>
<tr><td align='left' class='text'>Действие</td></tr>
<tr><td align='left' valign='top' align=left><input type='submit' value='Добавить' class='butt'></td></tr>
<tr><td align='left' valign='top' align=left class='zagl'>Результат</td></tr>
<tr><td valign='top' align=left><br></td></tr>
</table>
</form>");
 echo ("<table width=1320 border='0' align=center cellpadding='0' cellspacing='0' bgcolor='#ffffff'>
<tr>
<td align='center' class='textr' width='40'><b>ID</b></td>
<td align='center' class='textr' width='40'><b>Дата</b></td>
<td align='center' class='textr' width='40'><b>Дата оконч показа</b></td>
<td align='center' class='textr' width='40'><b>Доб в архив</b></td>
<td align='center' class='textr' width='40'><b>Заголовок</b></td>
<td align='center' class='textr' width='300'><b>Расширенно</b></td>
<td align='center' class='textr' width='80'><b>Фото мал (70*70)</b></td>
<td align='center' class='textr' width='130'><b>Фото бол (600*300)</b></td>
<td align='center' class='textr' width='80'><b>Опер</b></td>
<td align='center' class='textr' width='80'><b>Опер</b></td>
</tr>");
  while ($tablerows = mysql_fetch_row($sql))
{
if (preg_match_all ("!src=\"(.*?)\"!si", $tablerows[7], $out))
$v=$out[1][0];
echo ("<tr><form action='savernews.php?code=".$tablerows["0"]."' method='post'>
<td align='center' class='textr'>$tablerows[0]<input name='page_id_ins1' type='hidden' value='$tablerows[0]'></td>
<td align='center' class='textr'><input name='page_date' type='text' class='coll_2' value='$tablerows[1]' align='center'><input name='page_time' type='text' class='coll_2' value='$tablerows[2]' align='center'><input name='page_dt' type='text' class='coll_2' value='$tablerows[10]' align='center'><input name='page_securit' type='text' class='coll_1r' value='$tablerows[11]' align='center'></td>
<td align='center' class='textr'>Г/М/Д<input name='page_date_kon' type='text' class='coll_1r' value='$tablerows[4]' align='center'><input name='page_date_kon1' type='hidden' class='coll_1r' value='$tablerows[9]' align='center'></td>
<td align='center' class='textr'><input name='page_key_news' type='text' class='coll_1r' value='$tablerows[5]' align='center'></td>
<td align='center' class='textr'><input name='page_news' type='text' size='30' value='$tablerows[3]' align='center'></td>
<td align='center' class='textr'><textarea id='$tablerows[0]' name='page_bigtext' rows='6' cols='50' style='width: 100%'>$tablerows[8]</textarea></td>
<td align='center' class='textr'>$tablerows[6]</td>
<td align='center' class='textr'><img src='$v' width='120'</td>
<td align='center' class='textrm' width='45'><input type='submit' value='Сохр' class='but'></td></form>
<td align='center' class='textr'><form id='form_del' action='del_news.php?code=".$tablerows["0"]."' method='post'><input type='submit' value='Удал' class='but'></td></form>
</tr>");                                                                                                      
}
echo "</table>";
mysql_close($connect); 
}

if($work_id==2)
{
print ("<table width=1320 border='0' align=center cellpadding='0' cellspacing='0' class='trans'>
<tr><td align='left' class='zagl'  colspan='2'>Редактировать страницу:<span class='zaglc'></span></td></tr>
<tr><td align='center'  colspan='2'>");
print('<form id="form1" action="main.php?work=2" method="post" valign="top">');
$connect=mysql_connect($host,$username,$passwd);
$qr=mysql_query('SET NAMES cp1251');
$db=mysql_select_db($db_name);	
$qr=mysql_query('SELECT * FROM richstone_page ORDER BY richstone_page_name');	
print('<br><select  name="list_page"> ');
	while($res=mysql_fetch_row($qr))
{		
print('<option>'.$res[1].'</option>');	
}	
print('</select>');
$qr=mysql_query("SELECT * FROM richstone_page WHERE richstone_page_name='".$page_id."'");	
$res=mysql_fetch_row($qr);	
print('<input type="submit" id="sub1" value="Выбрать" class="butt">');	
print('</form></td></tr>');	
print('<tr><td colspan=2>');
$qr=mysql_query("SELECT * FROM richstone_page WHERE richstone_page_view_flag=1 ORDER BY id DESC");
$rsk=mysql_fetch_row($qr);
print('</td></tr>');
print("<tr><td align='left' class='zagl' colspan='2'>Выбрана страница - <span class='zaglc'>$res[1]</span>, <span class='zaglb'>прямая ссылка - <a class='zaglb' href="); 
$rr=$res[0]-1;
$rs=' не выбрана страница';
if ($res[0] > 0) echo "./index.php?link=$rr>./index.php?link=$rr";
//if ($res[0] = '') echo "$rs";
//else echo "не выбрана страница";
//if ($res[0]  '') echo "$rs> не выбрана страница";
//print("./index.php?link=$res[0]</span></span></td><tr>");                                                                                                 
print("</a></span></span></td><tr><tr><td align='left' width='830'>");                                                        	
print('<form id="form_ins" action="update_page.php" method="post" >');
print('<input name="hid_id" type="hidden" value="'. $res[0].'"/>');
$date=date("d-m-Y") ;
$time=date("H:i:s") ;
echo $time;
echo $date;
$datkon=date("d-m-Y");
$dd=strtotime($datkon);
$tt=strtotime($time);
$summa=$dd+$tt;
print('<span class="textin">Определить видимость страницы (1-видима, 0-нет)</span><br><input name="page_num" type="text"  value="'.$res[3].'" class="coll_is"/><br>
<span class="textin">Включить в страницу галерею (1-вкл, 0-выкл)</span><br><input name="page_kat" type="text"  value="'.$res[4].'" class="coll_is"/><br>
<span class="textin">Определить уникальный номер галереи (1-2-3-4...любой свободный, 0-выкл)</span><br><input name="page_kat_num" type="text"  value="'.$res[6].'" class="coll_is"/><br>
<span class="textin">Определить положение в меню (1-Материалы; 2-Благоустройство; 3-Изделия: 4-Другое; 0-неопределен)</span><br><input name="page_menu_num" type="text"  value="'.$res[7].'" class="coll_is"/><br>
<span class="textin">Имя страницы:</span><br><input name="page_name_upd" type="text"  value="'.$res[1].'" class="info_is"/><br>     
<span class="textin">Альтернативное имя для меню:</span><br><input name="page_alt_name" type="text"  value="'.$res[9].'" class="info_is"/><p>     
<span class="textin">Дата создания:</span><br><input name="page_alt_date" type="text"  value="'.$date.'"  class="coll_2" align="center"><p>     
<span class="textin">Время создания:</span><br><input name="page_alt_time" type="text"  value="'.$time.'"  class="coll_2" align="center"><p>     
<span class="textin">Контрольная сумма создания:</span><br><input name="page_alt_dd" type="hide"  value="'.$summa.'"  class="coll_2" align="center"><p>     
<p class="text">&lt;table cellpadding="0" cellspacing="0" border="0" width="100%"&gt;<br />&lt;tr&gt;<br />&lt;td class="tl" width="27" height="26"&gt;&lt;/td&gt;<br />&lt;td class="tc"&gt;&amp;nbsp;&lt;/td&gt;<br />&lt;td class="tr" width="27" height="26"&gt;&lt;/td&gt;<br />&lt;/tr&gt;<br />&lt;tr&gt;<br />&lt;td class="ml" width="27" height="26"&gt;&lt;/td&gt;<br />&lt;td class="mc"&gt;&lt;/td&gt;<br />&lt;td class="mr" width="27" height="26"&gt;&lt;/td&gt;<br />&lt;/tr&gt;<br />&lt;tr&gt;<br />&lt;td class="bl" width="27" height="26"&gt;&lt;/td&gt;<br />&lt;td class="bc"&gt;&amp;nbsp;&lt;/td&gt;<br />&lt;td class="br" width="27" height="26"&gt;&lt;/td&gt;<br />&lt;/tr&gt;<br />&lt;/table&gt;</p>');
print('<input type="submit" id="page_upd" value="Сохранить" class="butt"><br>');    
print('</td>
<td align="left" valign="top">
<table width="170" border="0" align=center cellpadding="0" cellspacing="0" class="textin3">
<tr><td class="textin2">Справка по страницам</td></tr>
<tr><td>- <span class="textin1">'.$rsk[0].'</span> страниц</td></tr>
</table>
</td></tr>');    
print('<tr><td colspan="2">');    
include('ed/examples/full1.html');
print($res[2]);    
print('</textarea><br></form>');	
print('</td><tr>');    
print('</table>');	
mysql_close($connect); 
}
if($work_id==3){   
print ("<table width=1320 border='0' align=center cellpadding='0' cellspacing='0' class='trans'>
<tr><td colspan='7' align='left' class='zagl'>Менеджер страниц отдела - <span class='zaglc'>www.rw</span></td></tr></table>");
print('<form id="form1" action="main.php?work=3" method="post" valign="top">');
$connect=mysql_connect($host,$username,$passwd);
$qr=mysql_query('SET NAMES cp1251');
$db=mysql_select_db($db_name);	
if ($action=="" || $action=="null") 
{
?>
<form name="Edit" method="POST">
<table class='trans'>
<tr><td valign=top align="center">
<TABLE border='0' width='1320' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff'>
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
$old = mysql_query("SELECT * FROM richstone_page ORDER BY id");
 echo "<input type=hidden name='action' value='ok'><br>";
while($row2 = mysql_fetch_row($old)) {   
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
while ((list($idx,$val) = each($ar)) and (list($idx,$val) = each($am)) and (list($idx,$val) = each($ac)))
{
     mysql_query("UPDATE richstone_page SET menu='".$ar[$idx]."',menu_num='".$am[$idx]."',alt_name='".$ac[$idx]."' WHERE id='$idx'")or die(mysql_error());
header("Location: main.php?work=3");
}
}
mysql_close($connect); 
}

if($work_id==4){
$sql = mysql_query("SELECT * FROM richstone_news ORDER BY id DESC");
print(
"<table width=1320 border='0' align=center cellpadding='0' cellspacing='0'>
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

echo ("<table width=1320 border='0' align=center cellpadding='0' cellspacing='0' bgcolor='#ffffff'>
<tr>
<td align='center' class='textr' width='40'><b>ID</b></td>
<td align='center' class='textr' width='40'><b>Дата</b></td>
<td align='center' class='textr' width='840'><b>Информация</b></td>
<td align='center' class='textr' width='80'><b>Опер</b></td>
<td align='center' class='textr' width='80'><b>Опер</b></td>
</tr>");
  while ($tablerows = mysql_fetch_row($sql))
{
echo (
"<tr><form action='savernews.php?code=".$tablerows["0"]."' method='post'>
<td align='center' class='textr'>$tablerows[0]<input name='page_id_ins1' type='hidden' value='$tablerows[0]'></td>
<td align='center' class='textr'><input name='page_date_ins1' type='text' class='coll_2' value='$tablerows[1]' align='center'></td>
<td align='center' class='textr'><textarea  name='page_info_ins1' rows='15' cols='80' style='width: 80%'>$tablerows[2]</textarea></td>
<td align='center' class='textrm' width='45'><input type='submit' value='Сохр' class='but'></td></form>
<td align='center' class='textr'><form id='form_del' action='del_news.php?code=".$tablerows["0"]."' method='post'><input type='submit' value='Удал' class='but'></td></form>
</tr>");                                                                                                      
}
echo "</table>";
mysql_close($connect); 
}

if($work_id==5)
{   
print ("<table width=1320 border='0' align=center cellpadding='0' cellspacing='0'  class='trans'>
<tr><td colspan='7' align='left' class='zagl'>Справочник - <span class='zaglc'>Персонала</span></td></tr><tr><td align='left'>");
print('<form id="form1" action="main.php?work=5" method="post" valign="top">');
$connect=mysql_connect($host,$username,$passwd);
$qr=mysql_query('SET NAMES cp1251');
$db=mysql_select_db($db_name);	
$qr=mysql_query('SELECT * FROM richstone_page WHERE key_menu=1 ORDER BY id');	
print('<select  name="list_page">');	
while($res=mysql_fetch_row($qr))
{		
print('<option>'.$res[1].'</option>');	
}	
print('</select> ');
$qr=mysql_query("SELECT * FROM richstone_page WHERE richstone_page_name='".$page_id."'");	
$res=mysql_fetch_row($qr);
print('<input type="submit" id="sub1" value="Выбрать" class="butt">');	
print('</form>');	 
print ("</td></tr><tr><td class='zagl' align='left'>Выбран отдел - <span class='zaglc'>");    
print ($res[1]);    
print ("</span></td></tr></table>");    
$sql = mysql_query("SELECT * FROM richstone_katalog WHERE key_page='".$res[6]."' ORDER BY key_num");
echo ("<table width=1320 border='0' align='center' cellpadding='0' cellspacing='0'bgcolor='ffffff'>");
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
<td align='center' class='textr'><b>Тел сот</b></td>
<td align='center' class='textr'><b>Дата</b></td>
<td align='center' class='textr'><b>ДР</b></td>
<td align='center' class='textr'><b>Пол</b></td>
<td align='center' class='textr'><b>Превью фото</b></td>
<td align='center' class='textr'><b>Опер</b></td>
<td align='center' class='textr'><b>Опер</b></td>
<td align='center' class='textr'><b>Опер</b></td>
</tr>");

  while ($tablerows = mysql_fetch_row($sql))
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
            <td align='center' class='textrm' width='90'><input name='page_office_ins' type='text' maxlength='5' value='$tablerows[12]' class='coll_3' align='center'></td>
            <td align='center' class='textrm' width='20'><input name='page_key_page_ins1' type='text' maxlength='3' value='$tablerows[6]' class='coll_1' align='center'></td>
            <td align='center' class='textrm' width='90'><input name='page_tel_ins' type='text' value='$tablerows[17]' class='coll_5' align='center'></td>
            <td align='center' class='textrm' width='90'><input name='page_tel1_ins' type='text' value='$tablerows[25]' class='coll_5' align='center'></br><input name='page_tel2_ins' type='text' value='$tablerows[26]' class='coll_5' align='center'></td>
            <td align='center' class='textrm' width='90'><input name='page_date_ins' type='text' value='$date_today' class='coll_3' align='center'>ст.$tablerows[5]</td>
            <td align='center' class='textrm' width='90'><input name='dr' type='text' value='$tablerows[24]' class='coll_3' align='center'></td>
            <td align='center' class='textrm' width='90'><input name='radiobutton' type='text' value='$tablerows[23]' class='coll_1' align='center'></td>
            <td align='center' class='textrm' width='56' height='56'><a class=highslide onclick=\"return hs.expand(this)\" href='$v'>$tablerows[20]</a></td>
            <td align='center' class='textrm' width='45'><input type='submit' value='Сохр' class='but'></td></form>
            <form id='form_кув' action='red_kat.php?code=".$tablerows["0"]."' method='post'><td align='center' class='textrm' width='45'><input type='submit' value='Редак' class='but' onclick=\"window.open('red_kat.php?code=".$tablerows["0"]."','MyWin','menubar=0,resizable=0, scrollbars=yes, width=1010,height=600'); return false;\" ></td></form>
            <form id='form_del' action='del_kat.php?code=".$tablerows["0"]."' method='post'><td align='center' class='textrm' width='45'><input type='submit' value='Удал' class='but'></td></form>
            </tr>");
  }
//$m="м<sup>2</sup>";
$date_today = date("d.m.Y"); //присвоено 03.12.01
echo "</table>";
print ("<form id='form_inst' action='insert_katalog.php' method='post' >
<table width=1320 border='0' align='center' cellpadding='0' cellspacing='0'  class='trans'>
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
<tr><td align='left' valign='top' class='text'><input name='radiobutton' type='radio' value='4' checked>Фотография мужская (4)</td></tr>
<tr><td align='left' valign='top' class='text'><input name='radiobutton' type='radio' value='5'>Фотография женская (5)</td></tr>
<tr><td align='left' valign='top' class='text'><input name='radiobutton' type='radio' value='1'>Мужчина (1)</td></tr>
<tr><td align='left' valign='top' class='text'><input name='radiobutton' type='radio' value='2'>Женщина (2)</td></tr>
<tr><td align='left' valign='top' class='text'><input name='radiobutton' type='radio' value='3'>Дикретный отпуск (3)</td></tr>
<tr><td align='left' valign='top' class='text'><input name='radiobutton' type='radio' value='6'>Профгруппорг отдела (6)</td></tr>
<tr><td align='left' valign='top' class='text'><input name='radiobutton' type='radio' value='7'>Профгруппорг отдела (с фото) (7)</td></tr>
<tr><td align='left' class='text'>E-mail</td></tr>
<tr><td align='left' valign='top'><input name='page_email_ins' type='text' maxlength='255' class='info_is'></td></tr>
<tr><td align='left' class='text'>E-mail (2)</td></tr>
<tr><td align='left' valign='top'><input name='page_email2_ins' type='text' maxlength='255' class='info_is'></td></tr>
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
<tr><td align='left' class='text'>Загрузка большого изображения (Размер не должен превышать фотографию 100*100px, формата-png с вырезанным задним фоном)</td></tr>");
print ("<tr><td align='left'>");
print ("<textarea name='page_b_ins' rows='15' cols='80' style='width: 80%'>");
print ("</textarea>");
print ("</td></tr>");
print ("<tr><td align='left' class='text'>Загрузка малого изображения (Размер не должен превышать фотографию 57*57px, формата-png с вырезанным задним фоном)</td></tr>");
print ("<tr><td align='left'>");
print ("<textarea name='page_s_ins' rows='15' cols='80' style='width: 80%'>");
print ("</textarea>");
print ("</td></tr>");
print ("<tr><td align='left' valign='top'><input name='page_key_page_ins' type='hidden' maxlength='3' value='".$res[6]."' class='date_is'  align='center'></td></tr>
<tr><td valign='top' align=left><input type='hidden' value='3' name='ras'><p></td></tr>
<tr><td valign='top' align=left><input type='submit' value='Сохранить' class='butt'><p></td></tr>
</table></form>");
mysql_close($connect); 
}
if($work_id==6)
{   
print ("<table width=1320 border='0' align=center cellpadding='0' cellspacing='0'>
<tr><td colspan='7' align='left' class='zagl'>Пользователи ресурса - <span class='zaglc'>www.www.rw</span></td></tr></table>");
$sql = mysql_query("SELECT * FROM richstone_user ORDER BY id");
echo ("<table width=1320 border='0' align=center cellpadding='2' cellspacing='0' bgcolor='#ffffff'>");
echo ("<tr>
<td align='center' class='textr'><b>№ ID</b></td>
<td align='center' class='textr'><b>Имя</b></td>
<td align='center' class='textr'><b>Пр</b></td>
<td align='center' class='textr'><b>Дата входа</b></td>
<td align='center' class='textr'><b>IP</b></td> 
<td align='center' class='textr'><b>e-mail</b></td>
<td align='center' class='textr'><b>Операция</b></td>
<td align='center' class='textr'><b>Операция</b></td>
</tr>");
  while ($tablerows = mysql_fetch_row($sql))
{
$tabl=$tablerows[0]-1;
  echo("<tr>
            <td align='center' class='textrm' width='35'>$tablerows[0]</td>
            <td align='center' class='textrm' width='220'>$tablerows[4]</td>
            <td align='center' class='textrm' width='10'>$tablerows[9]</td>
            <td align='center' class='textrm' width='100'>$tablerows[7]</td>
            <td align='center' class='textrm' width='115'>$tablerows[1]</td>
            <td align='center' class='textrm' width='100'>$tablerows[8]</td>
            <form id='form_del' action='red_user.php?code=".$tablerows["0"]."' method='post'><td align='center' class='textrm' width='100'><input type='submit' value='Редактировать' class='red' onclick=\"window.open('red_user.php?code=".$tablerows["0"]."','MyWin','menubar=1,resizable=1,width=1010,height=600'); return false;\" ></td></form>
            <form id='form_del' action='del_user.php?code=".$tablerows["0"]."' method='post'><td align='center' class='textrm' width='90'><input type='submit' value='Удалить' class='del'></td></form>
            </tr> " );
}
  echo "</table>";
  mysql_close($connect); 
}
?>
<?php
if($work_id==11){   
print ("<table width='1320' border='0' align=left cellpadding='0' cellspacing='0'>
<tr><td align='left' class='zagl'>Рассылка новостей пакетно - <span class='zaglc'>www.www.rw</span></td></tr></table>");
print ("<table width='1320' border='0' align=left cellpadding='0' cellspacing='0' class='textin'>
<tr><td align='left' class='textcolg'>");
    echo(' <div align="left"> 
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
$rest=mysql_query("select * from richstone_user order by id"); // Сразу выводим все строки БД чтобы видеть что добавили с единой формой.
$rr=mysql_num_rows($rest);
print ("<table width='1100' border='0' align=left cellpadding='0' cellspacing='0' class='trans'>
<tr><td align='left' class='zagl'>Рассылка новостей - <span class='zaglc'>www.rw</span> / Всего - $rr пользователей </td></tr></table>");
print ("<table width='1100' border='0' align=left cellpadding='0' cellspacing='0' class='trans'>
<tr><td align='left' class='textcolg'>");
if (isset($_POST['submit']))
  {
    $arr=$_POST["checks"];
    $arrs=$_POST["value"];
    $len = sizeof($arr); 
    echo('Всего отправлено - '.$len); // чисто для себя смотрим сколько элементов к отправке

       {
// $_POST['title'] содержит данные из поля "Тема", trim() - убираем все лишние пробелы и переносы строк, htmlspecialchars() - преобразует специальные символы в HTML сущности, будем считать для того, чтобы простейшие попытки взломать наш сайт обломались, ну и  substr($_POST['title'], 0, 1100) - урезаем текст до 1100 символов. Для переменных $_POST['mess'], $_POST['name'], $_POST['tel'], $_POST['email'] все аналогично 
        $_POST['title'] =  substr(htmlspecialchars(trim($_POST['title'])), 0, 1100); 
//        $_POST['mess'] =  substr(htmlspecialchars(trim($_POST['mess'])), 0, 1100000); 
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
        $mail->From = 'tst_minsk@mail.ru';      // от кого 
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
$res=mysql_query("select * from richstone_user order by id"); // Сразу выводим все строки БД чтобы видеть что добавили с единой формой.
$rows=mysql_num_rows($res);
if($rows>0)
   {
    echo('<form id="form4" name="form4" method="post" action="" enctype="multipart/form-data">');
$num2 = 500;
$cols2 = 4;
$i = 0;
$tab=1100;
$w=$tab/$cols2;

echo "<table class='textin'  width='$tab' border='0' align=left cellpadding='0' cellspacing='0'><tr>";
$result2 = mysql_query("SELECT * FROM richstone_user order by id LIMIT 0 , $num2");
$n = mysql_num_rows($result2); 
$m = $cols2 * ceil($n / $cols2);
while($i < $m)
 {
 $i++; 
//   mysql_data_seek($result2,$i);
// $row = mysql_fetch_assoc($result2);
   $ares=mysql_fetch_array($result2);
// $res = mysql_fetch_array($result2);
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
print ("<table width='1100' border='0' align=left cellpadding='0' cellspacing='0'>
<tr><td align='left' class='zagl'>Отправка почты - <span class='zaglc'>www.rw</span></td></tr></table>");

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
mysql_close($connect); 
}
?>

<?php
if($work_id==9)
{   
$rest=mysql_query("select * from richstone_user order by id"); // Сразу выводим все строки БД чтобы видеть что добавили с единой формой.
$rr=mysql_num_rows($rest);
print ("<table width='1320' border='0' align=left cellpadding='0' cellspacing='0' class='trans'>
<tr><td align='left' class='zagl'>Рассылка новостей - <span class='zaglc'>www.rw</span> / Всего - $rr пользователей </td></tr></table>");
print ("<table width='1320' border='0' align=left cellpadding='0' cellspacing='0' class='trans'>
<tr><td align='left' class='text'>");

if (isset($_POST['submit']))
  {
    $arr=$_POST["checks"];
    $arr1=$_POST["checks1"];
    $arrt=$_POST["fio"];
    $arrs=$_POST["value"];
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
<b>Контактный email:</b> '.$_POST['email'].'<br />'.$_POST['mess'];
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
$res=mysql_query("select * from richstone_user order by id"); // Сразу выводим все строки БД чтобы видеть что добавили с единой формой.
$rows=mysql_num_rows($res);
if($rows>0)
  {
$num2 = 200;
print('<form id="form5" action="main.php?work=9" method="post" valign="top">');
//$qr=mysql_query("SELECT * FROM richstone_user WHERE richstone_user_pr=$page_user order by id LIMIT 0 , $num2");	
$result3 = mysql_query("SELECT * FROM pochta order by id");
print("<br>Выберите получателя*<br><select name='adresat'>");
while($restext=mysql_fetch_row($result3))
{		
print '<option value='.$restext[2].'>'.$restext[1].'</option>';	
}	
print("</select>");
$result2 = mysql_query("SELECT * FROM richstone_user WHERE richstone_user_pr=$page_user order by id LIMIT 0 , $num2");
print('<input type="submit" id="form5" value="Выбрать" class="butt">');	
print('</form>');	 
if ($page_user !== null)
{
echo('<form id="form4" name="form4" method="post" action="" enctype="multipart/form-data">');
$num2 = 200;
$cols2 = 4;
$i = 0;
$tab=1100;
$w=$tab/$cols2;
echo "<table class='textin'  width='$tab' border='0' align=left cellpadding='0' cellspacing='0'><tr>";
$n = mysql_num_rows($result2); 
$m = $cols2 * ceil($n / $cols2);
while($i < $m)                                                                                                	
 {
 $i++; 
   $ares=mysql_fetch_array($result2);
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
mysql_close($connect); 
}
?>

<?php
if($work_id==16)
{   
print ("<table width=1320 border='0' align=center cellpadding='0' cellspacing='0'  class='trans'>
<tr><td colspan='7' align='left' class='zagl'>Бланки - <span class='zaglc'>БЖД</span></td></tr><tr><td align='left'>");
print('<form id="form1" action="main.php?work=16" method="post" valign="top">');
$connect=mysql_connect($host,$username,$passwd);
$qr=mysql_query('SET NAMES cp1251');
$db=mysql_select_db($db_name);	
$qr=mysql_query('SELECT * FROM blankiname WHERE id>0 ORDER BY id');	
print('<select  name="list_page">');	
while($res=mysql_fetch_row($qr))
{		
print('<option>'.$res[1].'</option>');	
}	
print('</select> ');
$qr=mysql_query("SELECT * FROM blankiname WHERE name='".$page_id."' ORDER BY id ASC");	
//$qr=mysql_query("SELECT * FROM blankibzd WHERE priznak='".$page_id."'");
$res=mysql_fetch_row($qr);
print('<input type="submit" id="sub1" value="Выбрать" class="butt">');	
print('</form>');	 
print ("</td></tr><tr><td class='zagl' align='left'>Выбрана Служба - <span class='zaglc'>");    
print ($res[1]);    
print ("</span></td></tr>");    
echo "<tr>
<td align='left' class='text'><br>Ответственный за содержание и актуализацию информации в службе<form action='saveblankname.php' method='post'>
<textarea  name='opisdop' rows='8' cols='100'  width='100%'>$res[3]</textarea>";
//<input name='opisdop' type='text' value='$res[3]' class='coll_15' align='center'>

echo "<input name='pageblankid' type='hidden' value='$res[0]'>
<input type='submit' value='Сохранить' class='but1'></form><br><br></td>
</tr>";

print ("</table>");    
$sql = mysql_query("SELECT * FROM blankibzd WHERE priznak='".$res[2]."' ORDER BY id");

  echo ("<table width=1320 border='0' align='center' cellpadding='0' cellspacing='0'bgcolor='ffffff'>");
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

  while ($tablerows = mysql_fetch_row($sql))
{
if (preg_match_all ("!src=\"(.*?)\"!si", $tablerows[21], $out))
$v=$out[1][0];
$checkok=$tablerows[0];
$date_today = date("d.m.Y"); //присвоено 03.12.01
  echo("<tr><form action='saverblank.php?code=".$tablerows["0"]."' method='post'>

            <td align='center' class='textrm' width='20' align='center'>$tablerows[0]</td>
            <td align='center' class='textrm' width='50'><input name='namesl' type='text' value='$tablerows[1]' class='coll_2'></td>



            <td align='center' class='textr'><textarea  name='perechen' rows='15' cols='15'  width='50%'>$tablerows[2]</textarea></td>


            <td align='center' class='textrm' width='90'><input name='opisdop' type='text' value='$tablerows[3]' class='coll_5' align='center'></td>
            <td align='center' class='textrm' width='50'><input name='dataizm' type='text' value='$tablerows[4]' class='coll_2' align='center'><input name='page_id_ins1' type='hidden' value='$tablerows[0]'></td>

            <td align='center' class='textrm' width='150'><textarea  name='deistvie' rows='15' cols='20' width='50%'>$tablerows[5]</textarea></td>



            <td align='center' class='textrm'><input name='priznak' type='text'  value='$tablerows[7]' class='coll_1' align='center'></td>

            <td align='center' class='textrm' width='45'><input type='submit' value='Сохр' class='but'></td></form>
            </tr>");


  }
//$m="м<sup>2</sup>";

$date_today = date("d.m.Y"); //присвоено 03.12.01
  echo "</table>";
mysql_close($connect); 
}













if($work_id==7){   

  
print ("<table width=1320 border='0' align=center cellpadding='0' cellspacing='0' class='trans'>
<tr><td colspan='7' align='left' class='zagl'>Справочник - <span class='zaglc'>Глобальное редактирование Персонала</span></td></tr><tr><td align='left'>");
print('<form id="form1" action="main.php?work=7" method="post" valign="top">');
$connect=mysql_connect($host,$username,$passwd);
$qr=mysql_query('SET NAMES cp1251');
$db=mysql_select_db($db_name);	
$qr=mysql_query('SELECT * FROM richstone_page WHERE key_menu=1 ORDER BY id');	
print('<select  name="list_page">');	
while($res=mysql_fetch_row($qr))
{		
print('<option>'.$res[1].'</option>');	
}	
print('</select> ');



$qr=mysql_query("SELECT * FROM richstone_page WHERE richstone_page_name='".$page_id."'");	
$res=mysql_fetch_row($qr);
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
<TABLE border='0' width='1320' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff'>
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
<td align='center' class='textr'><b>Ст</b></td>
<td align='center' class='textr'><b>Дата</b></td>
<td align='center' class='textr'><b>ДР</b></td>
<td align='center' class='textr'><b>Пол</b></td>
<td align='center' class='textr'><b>Превью фото</b></td>
</tr>
<?php

//$old = mysql_query("SELECT id,cod,date,information,opis,coll,prev,key_num,key_i,key_page FROM richstone_katalog WHERE key_page='".$res[6]."' ORDER BY key_num");
$old = mysql_query("SELECT * FROM richstone_katalog WHERE key_page='".$res[6]."' ORDER BY num_otdel");
$date_today = date("d.m.Y"); //присвоено 03.12.01

 echo "<input type=hidden name='action' value='ok'><br>";

while($row2 = mysql_fetch_row($old)) {   

 echo "<TR>

            <td align='center' class='textrm' width='20' align='center'>$row2[0]</td>
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
            <td align='center' class='textrm' width='90'><input name=page_tel1_ins[".$row2[0]."] type='text' value='$row2[25]' class='coll_2' align='center'></br><input name=page_tel2_ins[".$row2[0]."] type='text' value='$row2[26]' class='coll_2' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=page_date_ins[".$row2[0]."] type='text' value='$date_today' class='coll_2' align='center'></td>
            <td align='center' class='textrm' width='90'><input name=dr[".$row2[0]."] type='text' value='$row2[24]' class='coll_2' align='center'></td>
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
while ((list($idx,$val) = each($page_lname_ins)) and (list($idx,$val) = each($page_fname_ins)) and (list($idx,$val) = each($page_name_ins)) and (list($idx,$val) = each($page_user_ins)) and (list($idx,$val) = each($page_email_ins)) and (list($idx,$val) = each($page_email2_ins)) and (list($idx,$val) = each($page_otdel_ins)) and (list($idx,$val) = each($page_office_ins)) and (list($idx,$val) = each($page_key_page_ins1)) and (list($idx,$val) = each($page_tel_ins)) and (list($idx,$val) = each($page_tel1_ins)) and (list($idx,$val) = each($page_tel2_ins)) and (list($idx,$val) = each($page_adress_ins)) and (list($idx,$val) = each($page_date_ins)) and (list($idx,$val) = each($radiobutton)) and (list($idx,$val) = each($page_num_otdel_ins)) and (list($idx,$val) = each($dr)))
{                                                                                                                                                                                                                                                                                                                                                                                                                                                  
     mysql_query("UPDATE richstone_katalog SET lname='".$page_lname_ins[$idx]."', fname='".$page_fname_ins[$idx]."', name='".$page_name_ins[$idx]."', user='".$page_user_ins[$idx]."', email='".$page_email_ins[$idx]."',email2='".$page_email2_ins[$idx]."', otdel='".$page_otdel_ins[$idx]."', office='".$page_office_ins[$idx]."', key_page='".$page_key_page_ins1[$idx]."', tel='".$page_tel_ins[$idx]."', sotovi1='".$page_tel1_ins[$idx]."', sotovi2='".$page_tel2_ins[$idx]."', adress='".$page_adress_ins[$idx]."', date='".$page_date_ins[$idx]."', radiobutton='".$radiobutton[$idx]."', num_otdel='".$page_num_otdel_ins[$idx]."', dr='".$dr[$idx]."' WHERE id='$idx'")or die(mysql_error());

header("Location: main.php?work=7");
}
}
mysql_close($connect); 
}
?>



<?php

if($work_id==10){   


print ("<table width=1320 border='0' align=center cellpadding='0' cellspacing='0' class='trans'>
<tr><td colspan='7' align='left' class='zagl'>Менеджер редактирования меню - <span class='zaglc'>www.rw</span>");

$sql = mysql_query("SELECT * FROM rishstone_page ORDER BY id");
echo ("<table width=100% border='0' align=center cellpadding='2' cellspacing='0' class='textin'><tr><td align='center'>");
$GLOBAL_TABLE = 'menu';
$GLOBAL_FILE = 'main.php?work=10';
$dbpf = 'tb'; // префикс таблиц prefix_menu если оставить пусто имя таблицы должно быть _menu
$sql=mysql_query('set names cp1251');  
if (isset($_GET['des'])){ //___________________________________БЛОК ОБРАБОТКИ ДЕЙСТВИЙ
	if ($_GET['des'] == 'edit') echo edit_table($_GET['id']);//РЕДАКТИРОВАНИЕ МЕНЮ
	if ($_GET['des'] == 'add') echo edit_table();//____________ДОБАВЛЕНИЕ МЕНЮ
	if ($_GET['des'] == 'st') {
		$sql = 'UPDATE '.$dbpf.'_'.$GLOBAL_TABLE.' SET status='.$_GET['st'].' WHERE id = '.$_GET['id'].'';
		$qur = mysql_query($sql);
//if ($qur) echo '<font color="GREEN">Пункт меню успешно изменен.</font>';
//else echo '<font color="RED">Пункт меню не изменен. Ошибка БД.</font>';
		echo show_table();
	}
	if ($_GET['des'] == 'up') {//______________________________ИЗМЕНЕНИЕ ПОЗИЦИИ МЕНЮ
		$sql = 'UPDATE '.$dbpf.'_'.$GLOBAL_TABLE.' SET pos=pos-1 WHERE id = '.$_GET['id'].'';
		$qur = mysql_query($sql);
		if ($qur) echo '<h3>Пункт меню успешно изменен.</h3>';
		else echo '<font color="RED">Пункт меню не изменен. Ошибка БД.</font>';
		echo show_table();
	}
	if ($_GET['des'] == 'down') {//____________________________
		$sql = 'UPDATE '.$dbpf.'_'.$GLOBAL_TABLE.' SET pos=pos+1 WHERE id = '.$_GET['id'].'';
		$qur = mysql_query($sql);
		if ($qur) echo '<h3>Пункт меню успешно изменен.</h3>';
		else echo '<font color="RED">Пункт меню не изменен. Ошибка БД.</font>';
		echo show_table();
	}
	if ($_GET['des'] == 'delete') {//__________________________УДАЛЕНИЕ МЕНЮ
		$sql = 'DELETE FROM '.$dbpf.'_'.$GLOBAL_TABLE.' WHERE id = '.$_GET['id'].'';
		$qur = mysql_query($sql);
		if ($qur) echo '<h3>Пункт меню успешно удален.</h3>';
		else echo '<font color="RED">Пункт меню не удален. Ошибка БД.</font>';
		echo show_table();
	}
}else{
	if (isset($_POST['edit'])) {//_____________________________РЕДАКТИРОВАНИЕ МЕНЮ - СОХРАНЕНИЕ В БД
		            $page = $_POST['page'];
		                $id = $_POST['id'];
		              $par = $_POST['par'];
		            $chek = $_POST['chek'];
		         $pos = (int)$_POST['pos'];
		$link = addslashes($_POST['link']);
		$name = addslashes($_POST['name']);
		if (isset($_POST['status'])) $status = 1; 
    else $status=0;
		$sql = 'UPDATE '.$dbpf.'_'.$GLOBAL_TABLE.' SET pos = '.$pos.',name="'.$name.'",par='.$par.',status='.$status.',page='.$page.',link="'.$link.'",chek='.$chek.' WHERE id = '.$id.'';
		$qur = mysql_query($sql);
		if ($qur) echo '<h3>Пункт меню успешно изменен.</font>';
		else echo '<font color="RED">Пункт меню не изменен. Ошибка БД.</font>';
	}
	if (isset($_POST['add'])) {//______________________________ДОБАВЛЕНИЕ МЕНЮ - СОХРАНЕНИЕ В БД
		$page = addslashes($_POST['page']);
		$name = addslashes($_POST['name']);
		$par = addslashes($_POST['par']);
		$link = addslashes($_POST['link']);
		$chek = addslashes($_POST['chek']);
		$pos = (int)addslashes($_POST['pos']); 
    if ($_POST['pos']=='') $pos=0;
		if (isset($_POST['status'])) $status = 1;
    else $status=0;
		$sql = 'INSERT INTO '.$dbpf.'_'.$GLOBAL_TABLE.' VALUE (0,"'.$name.'",'.$par.','.$pos.','.$status.','.$page.',"'.$link.'",'.$chek.')';
		$qur = mysql_query($sql);
		if ($qur) echo '<h3>Пункт меню успешно добавлен.</h3>';
		else echo '<font color="RED">Пункт меню не добавлен. Ошибка БД.</font>'.$sql.mysql_error();
	}
	if (isset($_POST['edit_group'])){//________________________ГРУППОВОЕ УДАЛЕНИЕ МЕНЮ
		if (isset($_POST['del'])){
			foreach ($_POST['del'] as $key => $val){
				$sql = 'DELETE FROM '.$dbpf.'_'.$GLOBAL_TABLE.' WHERE id='.$key.'';
				$qur = mysql_query($sql); 
			}
		}
	}
         	echo show_table();
}
}


function edit_table($id=0){//__________________________________ДОБАВЛЕНИЕ/РЕДАКТИРОВАНИЕ ПУНКТА МЕНЮ
GLOBAL $GLOBAL_TABLE,$GLOBAL_FILE,$dbpf;	$out = '';
	if ($id){
		$sql = 'SELECT * FROM '.$dbpf.'_'.$GLOBAL_TABLE.' WHERE id = '.$id.'';
		$qur = mysql_query($sql);
		$rez = mysql_fetch_assoc($qur);
		$regim = 'Редактирование меню';
		$button = '<input type="HIDDEN" name="id" value="'.$id.'"><input type="SUBMIT" name="edit" value="Изменить">';
	}
  else
  {
		$rez['id'] = 0;
		$rez['name'] = '';
		$rez['pos'] = 0;
		$rez['link'] = 0;
		$rez['status']=1;
		$rez['chek']=0;
		$rez['page']=$rez['0'];
		$regim = 'Добавление меню';
		$button = '<input type="HIDDEN" name="id" value="0"><input type="SUBMIT" name="add" value="Добавить">';
	}
	
	$out .= '<form method="POST" action="'.$GLOBAL_FILE.'" enctype="multipart/form-data">';
	$out .= '<table border="0" cellpadding="0" cellspacing="0" width="60%" align="center">';
	$out .= '<tr><td colspan="2"><h2>'.$regim.'</h2></td></tr>';
	$out .= '<tr><td width="20%" align="right"><b>Имя меню :</b></td><td><input type="TEXT" name="name" value="'.stripslashes($rez['name']).'" style="width:98%"></td></tr>';
	$out .= '<tr><td width="20%" align="right"><b>Подкатегория :</b></td><td>'.sel_cat1('par',@$rez['par']).'</td></tr>';
	$out .= '<tr><td width="20%" align="right"><b>Позиция меню :</b></td><td><input type="TEXT" name="pos" value="'.$rez['pos'].'" style="width:98%"></td></tr>';	
	$out .= '<tr><td width="20%" align="right"><b>Прямая ссылка :</b></td><td><input type="TEXT" name="link" value="'.$rez['link'].'" style="width:98%"></td></tr>';
	$out .= '<tr><td width="20%" align="right"><b>Включить ссылку(1):</b></td><td><input type="text" name="chek" value="'.$rez['chek'].'" style="width:98%"></td></tr>';
	$out .= '<tr><td width="20%" align="right"><b>Назначить меню :</b></td>

<td>';
	$out .= '<select name="page" style="width:98%">';

$qr=mysql_query('SELECT * FROM richstone_page WHERE richstone_page_view_flag=1 ORDER BY richstone_page_name');
while($res=mysql_fetch_row($qr)) {
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
	$sql = "SELECT * FROM ".$dbpf."_".$GLOBAL_TABLE." WHERE par=".$par." ORDER BY pos";
	$qur = mysql_query($sql); $kol = mysql_num_rows($qur);
	if ($qur && $kol){
		while($rez = mysql_fetch_assoc($qur)){
			if ($rez['par'] == 0){ $str_s='<b>';$str_e='</b>'; $bg_c='#E8E8E8';}
			else { $str_s='';$str_e=''; $bg_c='#fff3f3'; }
			$out .= '<tr bgcolor="'.$bg_c.'" align="left">';
			$out .= '<td class="ss"><p style="margin:5px;padding:0px;" >'.$str_s;
			$out1 = '';
			for($i=2;$i<=$lev;$i++) { $out .= '--'; $out1 .= '&nbsp;&nbsp;'; }
			$out .= stripslashes($rez['name']).'- ('.$rez['link'].')'. $str_e.'</p></td>';
			if ($rez['status']==0) $out .= '<td align="Center"><a href="?work=10&des=st&st=1&id='.$rez['id'].'">АКТИВ.</a></td>';
			else $out .= '<td align="center" class="ss"><a href="?work=10&des=st&st=0&id='.$rez['id'].'">СКРЫТЬ</a></td>';
			$out .= '<td class="ss" align="center">'.$out1.'';
			$out .= '<a href="?work=10&des=up&id='.$rez['id'].'">';
			$out .= 'Поднять<a/>';
			$out .= '['.$rez['pos'].']';
			$out .= '<a href="?work=10&des=down&id='.$rez['id'].'">';
			$out .= 'Опустить<a/>';
			$out .= '</td>';
			$out .= '<td nowarp align="right" class="ss">'.$out1.'';
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






function sel_cat_r($par=0,$old=0,$id){
  global $dbpf,$GLOBAL_TABLE,$lev; $out = ''; $lev++;
	$sql = "SELECT * FROM ".$dbpf."_".$GLOBAL_TABLE." WHERE par=".$par." ORDER BY pos, name ASC";
	$qur = mysql_query($sql);
	while($rez = mysql_fetch_assoc($qur)){
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

function sel_cat_r1($par=0,$old=0,$id){
  global $dbpf,$GLOBAL_TABLE,$lev; $out = ''; $lev++;
	$sql = "SELECT * FROM ".$dbpf."_".$GLOBAL_TABLE." WHERE par=".$par." ORDER BY pos, name ASC";
	$qur = mysql_query($sql);
	while($rez = mysql_fetch_assoc($qur)){
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