<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=cp1251;">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />


<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<script type="text/javascript" src="js/jquery-1.7.min.js"></script>
<script language="javascript" type="text/javascript" src="js/mootools.svn.js"></script>
<script language="javascript" type="text/javascript" src="js/lofslidernews.mt11.js"></script>



<script type="text/javascript" src="js/ddaccordion.js"></script>
</head>
<body bgcolor="#fff">

<?php 
    include("db1.php");
    $connect=mysql_connect($host,$username,$passwd);
    $db=mysql_select_db($db_name);	
    mysql_query("create table if not exists TEST_TABLE(num varchar(255) , name text,  kurs1 varchar(255), kurs2 varchar(255), kurs3 varchar(255))");     
    mysql_query("delete from TEST_TABLE"); 

$date_today = date("Y-m-d");
$text = file("http://www.rw/kurs/nbrates-$date_today.txt"); 
    while ($s = array_shift($text))
{ 
$arr = explode(";", $s);
$arr[2]=trim ($arr[2]);
        mysql_query("insert into TEST_TABLE (num, name, kurs1, kurs2, kurs3) values ('".$arr[0]."','".$arr[1]."', '".$arr[2]."', '".$arr[3]."','".$arr[4]."')"); 
}    

$time=date( "Hi" );
$date=date( "d/m" );

$tom=date('d/m', strtotime('tomorrow'));

$yes=date('d/m', strtotime('yesterday'));
//echo date( "Hi" );


if ($time>1314) {




$sql = mysql_query("SELECT * FROM TEST_TABLE join TEST_TABLE2 ON TEST_TABLE.name = TEST_TABLE2.name LIMIT 2,30");


//$sql = mysql_query("SELECT * FROM TEST_TABLE join TEST_TABLE2  where ( TEST_TABLE.kurs1 = TEST_TABLE2.kurs1 and ( TEST_TABLE.kurs1='EUR' || TEST_TABLE.kurs1='USD' || TEST_TABLE.kurs1='RUB' || TEST_TABLE.kurs1='UAH' || TEST_TABLE.kurs1='CHF'  || TEST_TABLE.kurs1='LTL'  || TEST_TABLE.kurs1='LVL'))");
//$sql = mysql_query("SELECT * FROM TEST_TABLE join TEST_TABLE1  where ( TEST_TABLE.kurs1 = TEST_TABLE1.kurs1 and ( TEST_TABLE1.kurs1='EUR' || TEST_TABLE1.kurs1='USD' || TEST_TABLE1.kurs1='RUB' || TEST_TABLE1.kurs1='UAH' || TEST_TABLE1.kurs1='CHF'  || TEST_TABLE1.kurs1='LTL'  || TEST_TABLE1.kurs1='LVL'))");

    echo ("<table  cellspacing='0' cellpadding='4' border='0'  style='border-collapse: collapse;' bgcolor='#fff' align='center' width='430'>
<tr>
<td align='left' class='zag4' width='15'>Код</td>
<td align='center' width='130' class='zag4'>Валюта</td>
<td align='center' width='35' class='zag4'>за 1 USD</td>
<td align='center' width='35' class='zag4'>$date</td>
<td align='center' width='35' class='zag4'>$tom</td>
<td align='center' width='30' class='zag4'>Инд</td>
</tr>
");
 while ($tablerows = mysql_fetch_row($sql))
{

$raznica=$tablerows[8] - $tablerows[3];
echo ("
<tr>
<td align='left' class='spis6'>$tablerows[2]</td>
<td align='left' class='spis6' >$tablerows[1]</td>
<td align='left' class='spis6'  bgcolor='#d5e5f7'>$tablerows[4]</td>
<td align='left' class='spis6'  bgcolor='#d5e5f7'>$tablerows[3]</td>
<td align='left' class='spis6' >$tablerows[8]</td>

");

if  ($raznica>0){
echo "<td align='left' class='spis6u'><img src='img/up.gif'>&nbsp;&nbsp;";
echo "+";
echo round($raznica,2);
//echo ceil($raznica);
}

else if ($raznica==0){
echo "<td align='left' class='spis6n'><img src='img/up.gif'>&nbsp;&nbsp;+0";
}

else  { 
echo "<td align='left' class='spis6d'><img src='img/down.gif'>&nbsp;&nbsp;";
echo round($raznica,2);
//echo ceil($raznica);
      }



echo ("</td></tr>");
}
echo ("</table>");

}

else {

$sql = mysql_query("SELECT * FROM TEST_TABLE join TEST_TABLE1 ON TEST_TABLE.name = TEST_TABLE1.name LIMIT 2,30");



//$sql = mysql_query("SELECT * FROM TEST_TABLE join TEST_TABLE1 where ( TEST_TABLE.kurs1 = TEST_TABLE1.kurs1 and ( TEST_TABLE1.kurs1='EUR' || TEST_TABLE1.kurs1='USD' || TEST_TABLE1.kurs1='RUB' || TEST_TABLE1.kurs1='UAH' || TEST_TABLE1.kurs1='CHF'  || TEST_TABLE1.kurs1='LTL'  || TEST_TABLE1.kurs1='LVL') ) ");

    echo ("<table  cellspacing='0' cellpadding='0' border='0'  style='border-collapse: collapse;' bgcolor='#fff' align='center' width='430'>
<tr>
<td align='left' class='zag4' width='15'>Код</td>
<td align='center' width='130' class='zag4'>Валюта</td>
<td align='center' width='45' class='zag4'>$yes</td>
<td align='center' width='45' class='zag4'>$date</td>
<td align='center' width='45' class='zag4'>за 1 USD</td>
<td align='center' width='30' class='zag4'>Инд</td>
</tr>
");
 while ($tablerows = mysql_fetch_row($sql))
{

$raznica=$tablerows[3] - $tablerows[8];
echo ("
<tr>
<td align='left' class='spis6' >$tablerows[2]</td>
<td align='left' class='spis6' >$tablerows[1]</td>
<td align='left' class='spis6' >$tablerows[8]</td>
<td align='left' class='spis6' bgcolor='#d5e5f7'>$tablerows[3]</td>
<td align='left' class='spis6' bgcolor='#d5e5f7'>$tablerows[4]</td>
");

if  ($raznica>0){
echo "<td align='left' class='spis6u'><img src='img/up.gif'>&nbsp;&nbsp;";
echo "+";
echo round($raznica,2);
//echo ceil($raznica);
}

else if ($raznica==0){
echo "<td align='left' class='spis6n'><img src='img/up.gif'>&nbsp;&nbsp;+0";
}

else  { 
echo "<td align='left' class='spis6d'><img src='img/down.gif'>&nbsp;&nbsp;";
echo round($raznica,2);
//echo ceil($raznica);
      }

echo ("</td></tr> ");
}
echo ("</table>");
}
?>
</body>
</html>