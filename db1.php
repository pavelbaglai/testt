<?php
$host='localhost';
$username='root';
$passwd='web2012irc';
$db_name='telephone'; 
$sock=mysql_connect($host,$username,$passwd);  
$db = mysql_connect("localhost","root","web2012irc");
$sql=mysql_query('SET NAMES cp1251');
mysql_select_db("telephone" ,$db);


?>