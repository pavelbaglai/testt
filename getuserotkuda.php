<?php
require_once __DIR__ . '/src/bootstrap.php';
include("dbpoezd.php");    		
Database::connect() or die("Ошибка подключения к базе");
Database::selectDatabase("$db_name") or die("База не найдена");
header("Content-Type: text/html;charset=windows-1251;");
$user_get = $_GET['q'] ?? '';
$user_get = iconv("utf-8", "WINDOWS-1251", $user_get);  
$sql=Database::query('SET NAMES cp1251');                                                                                                                                         



$trans = array(

"q"=>"й","w"=>"ц","e"=>"у","r"=>"к",  "t"=>"е","y"=>"н","u"=>"г","i"=>"ш", "o"=>"щ","p"=>"з","["=>"х","]"=>"ъ",


"a"=>"ф","s"=>"ы","d"=>"в","f"=>"а",  "g"=>"п","h"=>"р","j"=>"о","k"=>"л", "l"=>"д",";"=>"ж","'"=>"э",


"z"=>"я","x"=>"ч","c"=>"с","v"=>"м",  "b"=>"и","n"=>"т","m"=>"ь",","=>"б", "."=>"ю",


"Q"=>"Й","W"=>"Ц","E"=>"У","R"=>"К",  "T"=>"Е","Y"=>"Н","U"=>"Г","I"=>"Ш", "O"=>"Щ","P"=>"З","["=>"Х","]"=>"Ъ",


"A"=>"Ф","S"=>"Ы","D"=>"В","F"=>"А",  "G"=>"П","H"=>"Р","J"=>"О","K"=>"Л", "L"=>"Д",";"=>"Ж","'"=>"Э",


"Z"=>"Я","X"=>"Ч","C"=>"С","V"=>"М",  "B"=>"И","N"=>"Т","M"=>"Ь",","=>"Б", "."=>"Ю" , ">"=>"Ю"  , ">"=>"ю"
                                                                             
);

//$user_get = strtoupper($user_get);

$user_get=strtr($user_get, $trans);

//echo "$user_get";



if ((isset($user_get))) {
   $sql = Database::query(Database::statement('SELECT * FROM train_station WHERE LOWER(sf) LIKE CONCAT(?,"%") COLLATE cp1251_general_ci LIMIT 8', [(strtolower($user_get))]));
//   $sql = Database::query("SELECT * FROM `train_station` WHERE `sf` LIKE '%{$user_get}%' COLLATE cp1251_general_ci order by sf ASC LIMIT 10");


//   $sql = Database::query("SELECT * FROM `train_station` WHERE `sf` LIKE '%{$user_get}%' COLLATE cp1251_general_ci order by sf ASC LIMIT 10");
//   $sql = Database::query("SELECT * FROM `train_station` WHERE (`ss` LIKE '%{$user_get}%' COLLATE cp1251_general_ci)) order by num_otdel ASC LIMIT 9 ");
//   $sql = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) and  ((`tel` LIKE '%{$user_get1}%') OR (`fname` LIKE '%{$user_get1}%' COLLATE cp1251_general_ci) OR (`lname` LIKE '%{$user_get1}%' COLLATE cp1251_general_ci) OR (`office` LIKE '%{$user_get1}%') OR (`information` LIKE '%{$user_get1}%' COLLATE cp1251_general_ci) OR (`email` LIKE '%{$user_get1}%') OR (`name` LIKE '%{$user_get1}%' COLLATE cp1251_general_ci) OR (`otdel` LIKE '%{$user_get1}%' COLLATE cp1251_general_ci)) order by num_otdel ASC LIMIT 9 ");
//   $sql = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) and  ((`tel` LIKE '%{$user_get}%') OR (`fname` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`lname` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`office` LIKE '%{$user_get}%') OR (`information` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`email` LIKE '%{$user_get}%') OR (`name` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`otdel` LIKE '%{$user_get}%' COLLATE cp1251_general_ci)) order by num_otdel ASC LIMIT 9 ");
//   $sqll = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) and  ((`tel` LIKE '%{$user_get}%') OR (`fname` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`lname` LIKE '%{$user_get}%'  COLLATE cp1251_general_ci) OR (`office` LIKE '%{$user_get}%') OR (`information` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`email` LIKE '%{$user_get}%') OR (`name` LIKE '%{$user_get}%' COLLATE cp1251_general_ci) OR (`otdel` LIKE '%{$user_get}%' COLLATE cp1251_general_ci))");
$county = Database::numRows($sqll);
    if (Database::numRows($sql) != 0) {


/*
<select id="test" size=5 style='visibility:hidden;position:absolute;z-index:999;'
	onChange="getObj('city').value=ot=this.options[this.selectedIndex].value"
	onkeyup='PressKey2(event)' ondblclick='this.form.submit()'>
</select>                                                          */

//echo"<select id="test" size=5 style='visibility:hidden;position:absolute;z-index:999;' onChange="getObj('sf').value=ot=this.options[this.selectedIndex].value" onkeyup='PressKey2(event)' ondblclick='this.form.submit()'>";



     echo'<select MULTIPLE class="search1">';

        while ($row = Database::fetchAssoc($sql)) {


// echo "<input class='search' value='".$row['sf']."'></input><br>";
 echo "<option class='search' value='". $row['sc']."'>". $row['sf']." \n";

        }

       echo"</option></select>";

    } else {
        echo "
<table cellpadding='0' cellspacing='0' border='0' width='330'>
<tr>
<td class='tl' width='27' height='26'></td>
<td class='tc'>&nbsp;</td>
<td class='tr' width='27' height='26'></td>
</tr>
<tr><td class='ml' width='27'></td>

<td class='mc'>

<table border='0' width='270' height='60' cellpadding='0' cellspacing='0' >
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