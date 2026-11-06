<?php
$host1='localhost';
$username1='root';
$passwd1='web2012irc';
$db_name1='stat'; 
$sock1=mysql_connect($host1,$username1,$passwd1);  
$db1 = mysql_connect("localhost","root","web2012irc");
$sql1=mysql_query('SET NAMES cp1251');
mysql_select_db("stat" ,$db1);
?>