<?php
require_once __DIR__ . '/src/bootstrap.php'; 

    include("db.php");
    $connect=Database::connect();
    $db=Database::selectDatabase($db_name);	

$ipus = $_SERVER["REMOTE_ADDR"] ?? '';
preg_match("/^[0-9]{1,3}[\\.][0-9]{1,3}[\\.]/",$ipus,$ip_clear);
echo $ip_clear[0];
$ip=$ip_clear[0];

echo "<br>";
     if ($ip == "10.1."){$sql=Database::query("SELECT * FROM pogoda WHERE 6days=26850");}
                               
else if ($ip == "10.2."){$sql=Database::query("SELECT * FROM pogoda WHERE 6days=26941");}

else if ($ip == "10.3."){$sql=Database::query("SELECT * FROM pogoda WHERE 6days=33008");}

else if ($ip == "10.4."){$sql=Database::query("SELECT * FROM pogoda WHERE 6days=33041");}

else if ($ip == "10.5."){$sql=Database::query("SELECT * FROM pogoda WHERE 6days=26863");}

else if ($ip == "10.6."){$sql=Database::query("SELECT * FROM pogoda WHERE 6days=26666");}

else {$sql=Database::query("SELECT * FROM pogoda");}

$newss=Database::fetchRow($sql);
echo "<table><tr><td>".$newss[1]."</td><td class='spis7' align='right'>œÓ ‰‡ÌÌ˚Ï pogoda.by</td></tr>";
echo "<tr><td colspan='2'>";

echo $newss[2];
echo "</td></tr>";
echo "<tr><td colspan='2'>";

$sql=Database::query("SELECT * FROM pogoda");

while ($newss = Database::fetchRow($sql))
{
echo "<a class='spis5' href='index.php?link=89&pogoda=".$newss[0]."'>".$newss[1]."</a> ";
}
echo "</td></tr></table>";
?>




<?php 

//$ip = $_SERVER["REMOTE_ADDR"] ?? '';

//echo $ip;


//echo "<br>";

//$str=$ip;

//$str=preg_replace('/[0-9] [0-9]\..*/',   '',$str);


//echo($str);

//echo "<br>";

//echo $ip;

//if ($str=='10.1.2') {
//
//echo '- ¬˚ ËÁ ÃËÌÒÍ‡';

//include("pogminsk.html");

//}

//else {

//echo '¬˚ ÌÂ ËÁ ÃËÌÒÍ‡';
//}






?>


<?php
/*

 $stt="Ù˚‡‰ÚÎ¸Ú‰Âdvvdvdv";

 function encodestring($st)
 {
 $st=strtr($st,"‡·‚„‰Â∏ÁËÈÍÎÏÌÓÔÒÚÛÙı˙˚˝_", "abvgdeeziyklmnoprstufhíiei");
 $st=strtr($st,"¿¡¬√ƒ≈®«»… ÀÃÕŒœ–—“”‘’⁄€›_", "ABVGDEEZIYKLMNOPRSTUFHíIEI");
 return $st;


 }
     

echo "<br>";
echo $stt;
echo "<br>";
echo "<br>";
echo strtr($st,$stt);

?>


<?php

$tr="Ghjdthrf";


function translit($str) 
{
    $tr = array(
        "¿"=>"A","¡"=>"B","¬"=>"V","√"=>"G",
        "ƒ"=>"D","≈"=>"E","∆"=>"J","«"=>"Z","»"=>"I",
        "…"=>"Y"," "=>"K","À"=>"L","Ã"=>"M","Õ"=>"N",
        "Œ"=>"O","œ"=>"P","–"=>"R","—"=>"S","“"=>"T",
        "”"=>"U","‘"=>"F","’"=>"H","÷"=>"TS","◊"=>"CH",
        "ÿ"=>"SH","Ÿ"=>"SCH","⁄"=>"","€"=>"YI","‹"=>"",
        "›"=>"E","ﬁ"=>"YU","ﬂ"=>"YA","‡"=>"a","·"=>"b",
        "‚"=>"v","„"=>"g","‰"=>"d","Â"=>"e","Ê"=>"j",
        "Á"=>"z","Ë"=>"i","È"=>"y","Í"=>"k","Î"=>"l",
        "Ï"=>"m","Ì"=>"n","Ó"=>"o","Ô"=>"p",""=>"r",
        "Ò"=>"s","Ú"=>"t","Û"=>"u","Ù"=>"f","ı"=>"h",
        "ˆ"=>"ts","˜"=>"ch","¯"=>"sh","˘"=>"sch","˙"=>"y",
        "˚"=>"yi","¸"=>"'","˝"=>"e","˛"=>"yu","ˇ"=>"ya",
   "."=>"_"," "=>"_","?"=>"_","/"=>"_","\\"=>"_",
   "*"=>"_",":"=>"_","*"=>"_","\""=>"_","<"=>"_",
   ">"=>"_","|"=>"_"
    );
    return strtr($str,$tr);
}

echo $str;
?>




<?php

$hi="jcflxbq";
$trans = array(

"q"=>"È","w"=>"ˆ","e"=>"Û","r"=>"Í",  "t"=>"Â","y"=>"Ì","u"=>"„","i"=>"¯", "o"=>"˘","p"=>"Á","["=>"ı","]"=>"˙",


"a"=>"Ù","s"=>"˚","d"=>"‚","f"=>"‡",  "g"=>"Ô","h"=>"","j"=>"Ó","k"=>"Î", "l"=>"‰",";"=>"Ê","'"=>"˝",


"z"=>"ˇ","x"=>"˜","c"=>"c","v"=>"Ï",  "b"=>"Ë","n"=>"Ú","m"=>"¸",","=>"·", "."=>"˛"

);

//echo strtr("œË‚ÂÚ ˇ ÒÍ‡Á‡Î Á‰‡‚ÒÚ‚ÛÈ", $trans);
echo strtr($hi, $trans);
*/
?>


