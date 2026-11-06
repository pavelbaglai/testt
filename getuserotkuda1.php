<?php

// пример строит список городов по начальным буквам и выбирает из него

require_once($_SERVER['DOCUMENT_ROOT'].'/db.php');



if(!isset($_GET['city'])){

}elseif(empty($_GET['city'])) die('пусто');

else{

   $city=trim(urldecode($_GET['city']));

   $city1=@iconv("UTF-8", "windows-1251//IGNORE",$city); // все AJAX запросы приходят в Юникоде

   if($city1)$city=$city1;  // на случай если на Windows-машине

   $city=addslashes($city);

   $res = sql('SELECT * FROM '.db_prefix.'city WHERE LOWER(name)

        LIKE CONCAT("'.strtolower($city).'","%") LIMIT 5');

   while($row = mysql_fetch_array($res)){

    $r=($row['area']?'area':'country');

    echo "<option value='" . $row['name'] . "'>" . $row['name']."

        (".GetName($r,intval($row[$r])).")</option>\n";

        }

   mysql_close();

   die;

}

?>