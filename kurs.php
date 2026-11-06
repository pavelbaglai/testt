<?php
require_once __DIR__ . '/src/bootstrap.php'; 
    include("db1.php");
    $connect=Database::connect();
    $db=Database::selectDatabase($db_name);	
    Database::query("create table if not exists TEST_TABLE(num varchar(255) , name text,  kurs1 varchar(255), kurs2 varchar(255), kurs3 varchar(255))");     
    /* Keep cached rates when the upstream feed is unavailable. */ 

$date_today = date("Y-m-d");
$text = @file("http://www.rw/kurs/nbrates-$date_today.txt", 0, stream_context_create(['http' => ['timeout' => 2]])) ?: []; 
    if ($text !== []) { Database::query("DELETE FROM TEST_TABLE"); }
foreach ($text as $s)
{ 
$arr = explode(";", $s);
if (count($arr) < 5) { continue; }
$arr[2]=trim ($arr[2]);
        Database::query(Database::statement('insert into TEST_TABLE (num, name, kurs1, kurs2, kurs3) values (?,?, ?, ?,?)', [($arr[0]), ($arr[1]), ($arr[2]), ($arr[3]), ($arr[4])])); 
}    
    $sql = Database::query("SELECT * FROM TEST_TABLE where kurs1='EUR' || kurs1='USD' || kurs1='RUB' || kurs1='CHF' || kurs1='LTL' || kurs1='LVL' || kurs1='UAH'");
    echo ("<table  cellspacing='0' cellpadding='0' border='0'  style='border-collapse: collapse;'>
<tr>
<td align='left' class='zag4' width='15'>Код</td>
<td align='center' width='135' class='zag4'>Валюта</td>
<td align='center' width='60' class='zag4'>Курс в BYN</td>
<td align='center' width='60' class='zag4'>Курс за 1 USD</td>
</tr>
");
 while ($tablerows = Database::fetchRow($sql))
{
echo ("
<tr>
<td align='left' class='spis6'>$tablerows[2]</td>
<td align='left' class='spis6' >$tablerows[1]</td>
<td align='left' class='spis6' >$tablerows[3]</td>
<td align='left' class='spis6' >$tablerows[4]</td>
</tr> ");
}
echo ("
<tr><td colspan='6'>
<table  cellspacing='2' cellpadding='2' border='0' width='100%'>
<tr>
<td align='center' width='15' class='spis6'>
<div>
<a title='курс валют за вчера' href='index.html' onclick=\"return hs.htmlExpand(this, { headingText: 'Курс валют за вчера' })\"> < </a>
<div class='highslide-maincontent'>");
$date_1 = date("Y-m-d");
    Database::query("create table if not exists TEST_TABLE1(num varchar(255) , name text,  kurs1 varchar(255), kurs2 varchar(255), kurs3 varchar(255))");     
    /* Keep cached rates when the upstream feed is unavailable. */ 
$yest_date=time()-60*60*24; 
$yest_date=date("Y-m-d",$yest_date);
$text = @file("http://www.rw/kurs/nbrates-$yest_date.txt", 0, stream_context_create(['http' => ['timeout' => 2]])) ?: []; 
    if ($text !== []) { Database::query("DELETE FROM TEST_TABLE1"); }
foreach ($text as $s)
{ 
$arr = explode(";", $s);
if (count($arr) < 5) { continue; }
$arr[2]=trim ($arr[2]);
        Database::query(Database::statement('insert into TEST_TABLE1 (num, name, kurs1, kurs2, kurs3) values (?,?, ?, ?,?)', [($arr[0]), ($arr[1]), ($arr[2]), ($arr[3]), ($arr[4])])); 
}    
    $sql = Database::query("SELECT * FROM TEST_TABLE1 where kurs1='EUR' || kurs1='USD' || kurs1='RUB' || kurs1='CHF' || kurs1='LTL' || kurs1='LVL' || kurs1='UAH'");
    echo ("<table  cellspacing='1' cellpadding='3' border='0' align='center'>
<tr><td colspan='4'><h5>Курс валют НБ РБ за $yest_date</h5></td></tr>
<tr>
<td align='left' class='zag1' width='15'>Код</td>
<td align='center' width='35' class='zag1'>Валюта</td>
<td align='center' width='35' class='zag1'>Курс в BYN</td>
<td align='center' width='35' class='zag1'>Курс за 1 USD</td>
</tr>
");
 while ($tablerows = Database::fetchRow($sql))
{
echo ("
<tr>
<td align='left' class='spis'>$tablerows[2]</td>
<td align='left' class='spis' >$tablerows[1]</td>
<td align='left' class='spis' >$tablerows[3]</td>
<td align='left' class='spis' >$tablerows[4]</td>
</tr> ");
}
echo ("
</table>");
echo ("
</div>
</div>
</td>
<td colspan='2' align='center' class='spis'>курс на завтра доступен после 13.00</td>
<td align='center' width='15' class='spis6'>
<div>
<a title='курс валют на завтра' href='index.html' onclick=\"return hs.htmlExpand(this, { headingText: 'Курс валют на завтра'})\"> > </a>
<div class='highslide-maincontent'>");
$date_1 = date("Y-m-d");
    Database::query("create table if not exists TEST_TABLE2(num varchar(255) , name text,  kurs1 varchar(255), kurs2 varchar(255), kurs3 varchar(255))");     
    /* Keep cached rates when the upstream feed is unavailable. */ 
$tomm_date=time()+60*60*24; 
$tom_date=date("Y-m-d",$tomm_date);

$text = @file("http://www.rw/kurs/nbrates-$tom_date.txt", 0, stream_context_create(['http' => ['timeout' => 2]])) ?: []; 
    if ($text !== []) { Database::query("DELETE FROM TEST_TABLE2"); }
foreach ($text as $s)
{ 
$arr = explode(";", $s);
if (count($arr) < 5) { continue; }
//print_r($arr);
$arr[2]=trim ($arr[2]);
        Database::query(Database::statement('insert into TEST_TABLE2 (num, name, kurs1, kurs2, kurs3) values (?,?, ?, ?,?)', [($arr[0]), ($arr[1]), ($arr[2]), ($arr[3]), ($arr[4])])); 
}    
    $sql = Database::query("SELECT * FROM TEST_TABLE2 where kurs1='EUR' || kurs1='USD' || kurs1='RUB' || kurs1='CHF' || kurs1='LTL' || kurs1='LVL' || kurs1='UAH'");
    echo ("<table  cellspacing='1' cellpadding='3' border='0' align='center'>
<tr><td colspan='4'><h5>Курс валют НБ РБ за $tom_date</h5></td></tr>
<tr>
<td align='left' class='zag1' width='15'>Код</td>
<td align='center' width='35' class='zag1'>Валюта</td>
<td align='center' width='35' class='zag1'>Курс в BYN</td>
<td align='center' width='35' class='zag1'>Курс за 1 USD</td>
</tr>
");
 while ($tablerows = Database::fetchRow($sql))
{
echo ("
<tr>
<td align='left' class='spis'>$tablerows[2]</td>
<td align='left' class='spis' >$tablerows[1]</td>
<td align='left' class='spis' >$tablerows[3]</td>
<td align='left' class='spis' >$tablerows[4]</td>
</tr> ");
}
echo ("
</table>");
echo ("
</div>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
");
?>