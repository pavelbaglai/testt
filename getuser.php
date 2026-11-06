<?php
require_once __DIR__ . '/src/bootstrap.php';
include("db.php");    		
Database::connect() or die("Ошибка подключения к базе");
Database::selectDatabase("$db_name") or die("База не найдена");
header("Content-Type: text/html;charset=windows-1251;");
$user_get = $_GET['q'] ?? '';
$user_get = iconv("utf-8", "WINDOWS-1251", $user_get);  
$sql=Database::query('SET NAMES cp1251');                                                                                                                                         





function calculate_age($birthday) {
  $birthday_timestamp = strtotime($birthday);
  $age = date('Y') - date('Y', $birthday_timestamp);
  if (date('md', $birthday_timestamp) > date('md')) {
    $age--;
  }
  return $age;
}



$trans = array(

"q"=>"й","w"=>"ц","e"=>"у","r"=>"к",  "t"=>"е","y"=>"н","u"=>"г","i"=>"ш", "o"=>"щ","p"=>"з","["=>"х","]"=>"ъ",


"a"=>"ф","s"=>"ы","d"=>"в","f"=>"а",  "g"=>"п","h"=>"р","j"=>"о","k"=>"л", "l"=>"д",";"=>"ж","'"=>"э",


"z"=>"я","x"=>"ч","c"=>"с","v"=>"м",  "b"=>"и","n"=>"т","m"=>"ь",","=>"б", "."=>"ю",


"Q"=>"Й","W"=>"Ц","E"=>"У","R"=>"К",  "T"=>"Е","Y"=>"Н","U"=>"Г","I"=>"Ш", "O"=>"Щ","P"=>"З","["=>"Х","]"=>"Ъ",


"A"=>"Ф","S"=>"Ы","D"=>"В","F"=>"А",  "G"=>"П","H"=>"Р","J"=>"О","K"=>"Л", "L"=>"Д",";"=>"Ж","'"=>"Э",


"Z"=>"Я","X"=>"Ч","C"=>"С","V"=>"М",  "B"=>"И","N"=>"Т","M"=>"Ь",","=>"Б", "."=>"Ю" , ">"=>"Ю"  , ">"=>"ю"
                                                                             
);

$user_get=strtr($user_get, $trans);


//$('#myform').trigger( 'reset' );




if ((isset($user_get))) {
   $sql = Database::query(Database::statement('SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) and  ((`tel` LIKE ?) OR (`fname` LIKE ? COLLATE cp1251_general_ci) OR (`lname` LIKE ? COLLATE cp1251_general_ci) OR (`office` LIKE ?) OR (`information` LIKE ? COLLATE cp1251_general_ci) OR (`email` LIKE ?) OR (`email2` LIKE ?) OR (`sotovi1` LIKE ? COLLATE cp1251_general_ci) OR (`sotovi2` LIKE ? COLLATE cp1251_general_ci) OR (`dr` LIKE ? COLLATE cp1251_general_ci)) order by num_otdel ASC LIMIT 11 ', ['%' . ($user_get) . '%', '%' . ($user_get) . '%', '%' . ($user_get) . '%', '%' . ($user_get) . '%', '%' . ($user_get) . '%', '%' . ($user_get) . '%', '%' . ($user_get) . '%', '%' . ($user_get) . '%', '%' . ($user_get) . '%', '%' . ($user_get) . '%']));
//   $sql = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) and  ((`tel` LIKE '%{$user_get}%') OR (`fname` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`lname` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`office` LIKE '%{$user_get}%') OR (`information` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`email` LIKE '%{$user_get}%') OR (`name` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`sotovi1` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`sotovi2` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`otdel` LIKE '%{$user_get}%' COLLATE cp1251_general_ci)) order by num_otdel ASC LIMIT 9 ");
//   $sql = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) and  ((`tel` LIKE '%{$user_get}%') OR (`fname` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`lname` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`office` LIKE '%{$user_get}%') OR (`information` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`email` LIKE '%{$user_get}%') OR (`name` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`otdel` LIKE '%{$user_get}%' COLLATE cp1251_general_ci)) order by num_otdel ASC LIMIT 9 ");
//   $sql = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) and  ((`tel` LIKE '%{$user_get1}%') OR (`fname` LIKE '%{$user_get1}%' COLLATE cp1251_general_ci) OR (`lname` LIKE '%{$user_get1}%' COLLATE cp1251_general_ci) OR (`office` LIKE '%{$user_get1}%') OR (`information` LIKE '%{$user_get1}%' COLLATE cp1251_general_ci) OR (`email` LIKE '%{$user_get1}%') OR (`name` LIKE '%{$user_get1}%' COLLATE cp1251_general_ci) OR (`otdel` LIKE '%{$user_get1}%' COLLATE cp1251_general_ci)) order by num_otdel ASC LIMIT 9 ");
//   $sql = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) and  ((`tel` LIKE '%{$user_get}%') OR (`fname` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`lname` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`office` LIKE '%{$user_get}%') OR (`information` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`email` LIKE '%{$user_get}%') OR (`name` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`otdel` LIKE '%{$user_get}%' COLLATE cp1251_general_ci)) order by num_otdel ASC LIMIT 9 ");
   $sqll = Database::query(Database::statement('SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) and  ((`tel` LIKE ?) OR (`fname` LIKE ? COLLATE cp1251_general_ci) OR (`lname` LIKE ?  COLLATE cp1251_general_ci) OR (`office` LIKE ?) OR (`information` LIKE ? COLLATE cp1251_general_ci) OR (`email` LIKE ?) OR (`email2` LIKE ?) OR (`name` LIKE ? COLLATE cp1251_general_ci) OR (`dr` LIKE ? COLLATE cp1251_general_ci))', ['%' . ($user_get) . '%', '%' . ($user_get) . '%', '%' . ($user_get) . '%', '%' . ($user_get) . '%', '%' . ($user_get) . '%', '%' . ($user_get) . '%', '%' . ($user_get) . '%', '%' . ($user_get) . '%', '%' . ($user_get) . '%']));
$county = Database::numRows($sqll);
    if (Database::numRows($sql) != 0) {

            echo "
<table cellpadding='0' cellspacing='0' border='0' width='470'>
<tr>
<td class='tl' width='27' height='26'></td>
<td class='tc'>&nbsp;</td>
<td class='tr' width='27' height='26'></td>
</tr>
";


        while ($row = Database::fetchAssoc($sql)) {
$i++;
if (preg_match_all ("!src=\"(.*?)\"!si", $row['bfoto'], $out))
$v=$out[1][0];
            echo "<tr><td class='ml' width='27' height='26'></td><td class='mc'>


                  <table border='0' width='410' cellpadding='0' cellspacing='0' class='divs'>";




$d=date('d.m');
$dd=$row['dr'];
$cut = substr($dd, 0, 5);

if ($d == $cut) 
{
echo" <tr><td id='td$row[id]' onMouseover='td$row[id].bgColor=\"#d4ebfa\"' onMouseOut='td$row[id].bgColor=\"white\"'  ><table  border='0' cellpadding='0' cellspacing='0'>";
}
else
{
echo" <tr><td id='td$row[id]' onMouseover='td$row[id].bgColor=\"#d4ebfa\"' onMouseOut='td$row[id].bgColor=\"white\"' bgcolor='#ffffff'><table  border='0' cellpadding='0' cellspacing='0'>";
}
echo "
  <tr>";
if ($row['radiobutton']==1)
//if ($row['sfoto']==1)
{
 echo "<td rowspan='4' height='56' width='57' class='foto'><a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$row[id]'><img src='img/def1.png' title='Отсутствует изображение'></a></td>";
}
if ($row['radiobutton']==2)
//if ($row['sfoto']==1)
{
 echo "<td rowspan='4' height='56' width='57' class='foto'><a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$row[id]'><img src='img/def2.png' title='Отсутствует изображение'></a></td>";
}
if ($row['radiobutton']==3)
//if ($row['sfoto']==1)
{
 echo "<td rowspan='4' height='56' width='57' class='foto'><a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$row[id]'><img src='img/def3(57).png' title='Отсутствует изображение. Декретный отпуск'></a></td>";
}
if ($row['radiobutton']==4)
 {
echo "<td rowspan='4' height='56' width='57' class='foto'><a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$row[id]'>$row[sfoto]</a></td>";
}

if ($row['radiobutton']==5)
 {
echo "<td rowspan='4' height='56' width='57' class='foto'><a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$row[id]'>$row[sfoto]</a></td>";
}

if ($row['radiobutton']==6)
 {
 echo "<td rowspan='4' height='56' width='57' class='foto'><a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$row[id]'><img src='img/def1.png' title='Отсутствует изображение'></a></td>";
}

if ($row['radiobutton']==0)
 {
 echo "<td rowspan='4' height='56' width='57' class='foto'><a class=highslide onclick=\"return hs.expand(this)\" href='$v'  title='Посмотреть профиль'>".$row['sfoto']."</a></td>";
}
$pattern = "/(".$user_get.")/";
$pattern=str_replace (' ', ' ', $pattern);
$pattern=str_replace ('.', '  ', $pattern);
$pattern=str_replace (',', '  ', $pattern);
$pattern=str_replace ('/', '  ', $pattern);
$replacement = "<span class='red'>".$user_get."</span>";
$row['tel']=preg_replace($pattern, $replacement, $row['tel']);
$row['office']=preg_replace($pattern, $replacement, $row['office']);
$row['name']=preg_replace($pattern, $replacement, $row['name']);
$row['fname']=preg_replace($pattern, $replacement, $row['fname']);
$row['lname']=preg_replace($pattern, $replacement, $row['lname']);
$row['otdel']=preg_replace($pattern, $replacement, $row['otdel']);

$c=date('d.m.');
$d=date(Y);
$dd=$row['dr'];
$cut = substr($dd, 0, 6);
//дата, для которой ведется отсчет  
$date=$cut."$d"; 
//$date=$row['dr'];  
//Преобразует текстовое представление даты на английском языке в метку времени Unix.    
$date=strtotime($date);   
$curr=time();  
//вычитание из Даты, для которой ведется отсчет текущей (те. получаем разницу между текущим и ожидаемым днем в секундах)  
$delta=abs($curr-$date); // получение МОДУЛЯ разности.  
//получение количества полных оставшихся годов  
$d_year=floor($delta/(60*60*24*365));    
$delta=$delta-(60*60*24*365)*$d_year;  
//получение количества оставшихся полных месяцев. Тк число дней в месяце разное, то берем среднее (30.41)  
$d_mounth=floor($delta/(60*60*24*30.41));   
//округляем, чтобы число вычитаемых месяцев было целым  
$delta=$delta-$d_mounth*round(60*60*24*30.41);    
//получение кол-ва оставшихся дней  
$d_day=ceil($delta/(60*60*24));   
$d_days=ceil($delta/(60*60*24))+ceil($d_mounth*30.41);   
// формирование текста  
// определение текста в зависимости от разности дат  

if ($curr-$date < 0)
{  
$text1="Ост";
$text2=$d_days;
}

else 
{
$text1="-";
$text2="-";
//$text2=$d_days;
} 

 echo "

<td colspan='6' class='name'>". $row['lname'] . "&nbsp;" . $row['fname'] . "&nbsp;" . $row['name'] . "</td><td align='center' class='infbs1' width='25'>$i</td></tr>";

if ($row['dr']==!null) {
 echo "
<tr><td colspan='6' class='dol'><b>". $row['user'] ."</b> | (".$row['adress'].")</td><td align='center' class='infbs2' width='25'>$text1</td></tr>
<tr><td colspan='6' class='mail'>e-mail:<a class='email' title='Отправить письмо' href='mailto:".$row['email']."'>".$row['email']."</a>,<a class='email' title='Отправить письмо' href='mailto:".$row['email2']."'>".$row['email2']."</a> | Изменен - ".$row['date']."</td><td align='center' class='infbs2' width='25'>$text2</td></tr>";
}
else {
 echo "
<tr><td colspan='7' class='dol'><b>". $row['user'] ."</b> | (".$row['adress'].")</td></tr>
<tr><td colspan='7' class='mail'>e-mail:<a class='email' title='Отправить письмо' href='mailto:".$row['email']."'>".$row['email']."</a>,<a class='email' title='Отправить письмо' href='mailto:".$row['email2']."'>".$row['email2']."</a> | Изменен - ".$row['date']."</td></tr>";
}
 echo "
<tr>
<td width='35' class='inf' align='left' valign='bottom'>отдел&nbsp;</td>
<td width='75' class='infb' align='left' valign='bottom'><a class='email' href='index.php?link=". $row['key_page'] ."' title='Перейти на страницу отдела'>". $row['otdel'] ."</a></td>
<td width='10' class='inf' align='left' valign='bottom'>к.</td>
<td width='35' class='infb' align='left' valign='bottom'>". $row['office'] ."</td>
<td width='35' class='inf' align='right' valign='bottom'>тел.&nbsp;</td>";
echo "<td width='163' class='infbs' align='left' valign='bottom'>". $row['tel'] ."</td><td class='infbs3' align='center'>";



$ipus = $_SERVER["REMOTE_ADDR"] ?? '';
if ($ipus== "10.1.1.141")
 {
if ($row['dr']==null)
{
echo $row['dr'];
echo "&nbsp;&nbsp;&nbsp;"; 
}
else 
{
echo calculate_age($row['dr']);
}
 }
$ipus = $_SERVER["REMOTE_ADDR"] ?? '';
if ($ipus== "10.1.1.1")
 {
if ($row['dr']==null)
{
echo $row['dr'];
echo "&nbsp;&nbsp;&nbsp;"; 
}
else 
{
echo calculate_age($row['dr']);
}
 }
$ipus = $_SERVER["REMOTE_ADDR"] ?? '';
if ($ipus== "10.1.2.128")
 {
if ($row['dr']==null)
{
echo $row['dr'];
echo "&nbsp;&nbsp;&nbsp;"; 
}
else 
{
echo calculate_age($row['dr']);
}
 }
$ipus = $_SERVER["REMOTE_ADDR"] ?? '';
if ($ipus== "10.1.0.137")
 {
if ($row['dr']==null)
{
echo $row['dr'];
echo "&nbsp;&nbsp;&nbsp;"; 
}
else 
{
echo calculate_age($row['dr']);
}
 }



echo "</td></tr>";
 echo "</table></td></tr></table></td>
<td class='mr' width='27' height='26'></td>
</tr>
";
        }
 echo "
<tr><td class='ml' width='27' height='26'></td><td class='mc'>

<table border='0' width='410' height='20' cellpadding='0' cellspacing='0'>




<tr><td class='nameor' align='center'>Совпадений - $county </td></tr><tr><td class='mail' align='left'>Сегодня день рождения празднуют: <b>";




   $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
//   $sqls = Database::query("SELECT * FROM richstone_katalog");


        while ($rows = Database::fetchAssoc($sqls)) {

$dd = $rows['dr'] ?? '';
$cut = substr($dd, 0, 6);
$d=date('d.m.');

if ($cut==$d)
{

$fname=$rows['fname'];
$cut = substr($fname, 0, 1);

$name=$rows['name'];
$cutname = substr($name, 0, 1);

//echo $cut;

echo $rows['lname']. "&nbsp;".$rows['fname']."&nbsp;".$rows['name']."., ";



//echo $rows['lname']. "&nbsp;" .$rows['fname'].",&nbsp;";
}


}

echo "</b></td></tr>

<tr><td class='mail' align='left'>Завтра день рождения празднуют: <b>";




   $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
        while ($rows = Database::fetchAssoc($sqls)) {

$tomm_date=time()+60*60*24; 
$tom_date=date("d.m.",$tomm_date);
$dd = $rows['dr'] ?? '';
$cut = substr($dd, 0, 6);
if ($tom_date==$cut)
{


$fname=$rows['fname'];
$cut = substr($fname, 0, 1);

$name=$rows['name'];
$cutname = substr($name, 0, 1);

//echo $cut;

echo $rows['lname']. "&nbsp;".$cut.".".$cutname."., ";

}
}

echo "</b></td></tr>";
echo "</table>
</td>
<td class='mr' width='27' height='26'></td>
</tr>

<tr>
<td class='bl' width='27' height='26'></td>
<td class='bc'>&nbsp;</td>
<td class='br' width='27' height='26'></td>
</tr>
</table>
";

    } else {
        echo "
<table cellpadding='0' cellspacing='0' border='0' width='470'>
<tr>
<td class='tl' width='27' height='26'></td>
<td class='tc'>&nbsp;</td>
<td class='tr' width='27' height='26'></td>
</tr>
<tr><td class='ml' width='27'></td>

<td class='mc'>

<table border='0' width='410' height='60' cellpadding='0' cellspacing='0' >
<tr><td class='nameor' align='center'>Информация не найдена!</td></tr>
<tr><td class='infb' align='center'>Проверьте правильность заполнения данных.</td></tr>
</table>



</td>

<td class='mr' width='27' height='26'></td>

</tr>

<tr>
<td class='bl' width='27' height='26'></td>
<td class='bc'>&nbsp;</td>
<td class='br' width='27' height='26'></td>
</tr>
</table>


";
    }
} else {
    echo "Ничего нет";
}
?>