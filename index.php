<?php
require_once __DIR__ . '/src/bootstrap.php';                                                  	
$user_flag = $_COOKIE['user_flag'] ?? 0; 
$user_name = $_COOKIE['user_name'] ?? ''; 
$user_fname = $_COOKIE['user_fname'] ?? ''; 
$user_sname = $_COOKIE['user_sname'] ?? ''; 
$user_skidka = $_COOKIE['user_skidka'] ?? ''; 
$user_bad = $_COOKIE['user_bad'] ?? ''; 
$user_data = $_COOKIE['user_data'] ?? '';
$nameblank = $_COOKIE['nameblank'] ?? '';
$page_id = $_POST['list_page'] ?? ''; 
$work_id = $_GET['work'] ?? '';
?>

<?php 

$type_query = $_GET["query"] ?? '';
$object_id = $_GET["link"] ?? ''; 
$object_news = $_GET["news"] ?? ''; 
$object_arh = $_GET["arh"] ?? ''; 
$object_pogoda = $_GET["pogoda"] ?? ''; 
header("Content-Type: text/html; charset=cp1251;");
$qr=Database::query('SET NAMES cp1251');
$sql=Database::query('SET NAMES cp1251');
$sqll=Database::query('SET NAMES cp1251');

include("db.php");    		
$connect=Database::connect();  

?>

<?php
include("db.php");
$ip=getenv("REMOTE_ADDR");
$time=date("Y-m-d", time());
$os=getenv("HTTP_USER_AGENT");
$host=getenv("REMOTE_HOST");
$page=getenv("HTTP_REFERER");
$link=Database::connect();
Database::selectDatabase($db_name, $link);
$query = Database::statement('Insert into statistics (date, ip, os, host, page) values (?, ?, ?, ?, ?)', [($time), ($ip), ($os), ($host), ($page)]);
Database::query($query, $link);
Database::close($link);


function calculate_age($birthday) {
  $birthday_timestamp = strtotime($birthday);
  $age = date('Y') - date('Y', $birthday_timestamp);
  if (date('md', $birthday_timestamp) > date('md')) {
    $age--;
  }
  return $age;
}

?>
<html>
<head>
<title>Сайт РУП "Главный расчетный информационный центр" Бел.ж.д.</title>
<meta http-equiv="Content-Type" content="text/html; charset=cp1251;">
<link rel="stylesheet" href="style.css">

<link rel="stylesheet" type="text/css" href="css/mail.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css" />
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<style>
	.testl {
		margin: 0,0,0,0;
	}

.nov {
    padding: 1px;
    margin-left: 10px;
    margin-bottom: 45px;
}
.novv {
  margin-left: 12px; 
}
.nov1 {
    padding: 1px;
    /* margin-left: 116px; */
    margin-left: 13px;
    /* margin-bottom: 216px; */
    margin-top: -215px;
    padding-top: 113px;
}
@media (max-width: 1839px){
	.nov {
    padding: 1px;
    margin-left: 13px;
    margin-bottom: 94px;
}  
}
@media (max-width: 1460px){

.nov {
	padding: 2px;
    margin-left: 16px;
   

}	
}
@media (max-width: 1460px){

	.nov1 {
    padding: 1px;
    /* margin-left: 116px; */
    margin-left: 13px;
    /* margin-bottom: 216px; */
    margin-top: -68px;
    padding-top: 105px;
}
}
.nov88 {
    padding: 1px;
    /* margin-left: 116px; */
    margin-left: 19px;
    margin-bottom: 50px;
    margin-top: -217px;
}

@media (max-width: 1839px){
	.nov88 {
    padding: 1px;
    /* margin-left: 116px; */
    margin-left: -310px;
    margin-bottom: 171px;
    margin-top: -350px;
}
}
@media (max-width: 1460px){
	.nov88 {
    padding: 1px;
    /* margin-left: 116px; */
    margin-left: 25px;
    margin-bottom: 25px;
    margin-top: -4px;
}
}

.nov3 {

    padding: 1px;
    /* margin-left: 116px; */
    margin-left: 12px;

    /* padding-bottom: 48px; */
}

@media (max-width: 1839px){
	.nov3 {
    padding: 1px;
    /* margin-left: 116px; */
    margin-left: 15px;

}
}
@media (max-width: 1460px){

	.nov3 {
    padding: 1px;
    /* margin-left: 116px; */
    margin-left: 14px;

}
}
.nov4 {
	width:300px;
	height: 100px;;
    padding: 1px;

  
}
@media (max-width: 1460px){
	.nov4 {
    width: 300px;
    height: 100px;
    padding: 1px;


}
}

.nov44 {
	width: 300px;
	height: 100px;;
    padding: 1px;

 
}
@media (max-width: 1460px){
	.nov44 {
    width: 300px;
    height: 100px;
    padding: 1px;


}
}

.nov6 {
    margin: -84px 5px 15px 36px;
}
@media (max-width: 1839px){
	.nov6 {
    margin: -312px 3px 28px 862px;
}
}
@media (max-width: 1460px){
	.nov6 {
    margin: -205px 3px 28px 855px;
}
}
.nov2
 {
	margin: 25px;
    padding: 1px;
    /* margin-left: 116px; */
    margin-right: 57px;
}

h9 {
    font-family: Tahoma;
    color: #ffffff;
    font-size: 13px;
    text-transform: uppercase;
    padding-bottom: 0px;
    margin: 13px;
    padding-left: 264px;
    text-decoration: none;
}
.nov9 {
	text-decoration: none;
}
h76 {
    font-family: Tahoma;
    color: #000000a6;
    font-size: 16px;
    text-transform: uppercase;
    padding-bottom: 0px;
    margin: 0px;
}
h8 {
    font-family: Tahoma;
    color: #ffffff;
    font-size: 18px;
    padding: 5px 5px 5px 155px;
    /* margin: 0px; */
    margin: 0px 0px 0px -467px;
    font-weight: normal;
}
.lof-slidecontent {
    border-radius: 15px;
    box-shadow: 0px 0px 20px 2px #474747;
    position: relative;
    overflow: hidden;
    width: 900px;
    height: 300px;
    margin: 0 0 10px 0;
}

.lof-navigator-outer {
    position: absolute;
    right: 0;
    top: 00px;
    z-index: 0;
    height: 300px;
    width: 335px;
    overflow: hidden;
    color: #FFF;
}
</style>

<!-- звук на новый год
<script src="script.js" defer></script> 
-->



<script type="text/javascript" src="js/jquery-1.7.min.js"></script>
<script  language="javascript" type="text/javascript" src="js/mootools.svn.js"></script>
<script  language="javascript" type="text/javascript" src="js/lofslidernews.mt11.js"></script>
<script type="text/javascript" src="js/ddaccordion.js"></script>
<script type="text/javascript">

ddaccordion.init({ //top level headers initialization
	headerclass: "expandable", //Shared CSS class name of headers group that are expandable
	contentclass: "categoryitems", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [0], //index of content(s) open by default [index1, index2, etc]. [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["closeheader", "openheader"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["none", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
ddaccordion.init({ //2nd level headers initialization
	headerclass: "subexpandable", //Shared CSS class name of sub headers group that are expandable
	contentclass: "subcategoryitems", //Shared CSS class name of sub contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click" or "mouseover
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [0], //index of content(s) open by default [index1, index2, etc]. [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["opensubheader", "closedsubheader"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["none", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>

<script type="text/javascript" src="highslide/highslide-full.js"></script>
<script type="text/javascript" src="highslide/highslide.config.js" charset="WINDOWS-1251"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="highslide/highslide-ie6.css" />
<![endif]-->

<script type="text/javascript">
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("test").innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) { 
        xmlhttp = new XMLHttpRequest();
    } else { 
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4) 
        {
            if (xmlhttp.status == 200) 
            {
                
                document.getElementById("test").innerHTML = xmlhttp.responseText; 
            } else 
            {
                
                alert('Невозможно подключится к базе'); 
            }
        } else 
        {
            
            document.getElementById("test").innerHTML = '<img src="img/ajax-loader.gif">';
        }
    }
    
    xmlhttp.open("GET","getuser.php?q="+encodeURIComponent(str),true);

    xmlhttp.send();
}

    // привязываем событие наведения мыши к объекту с id равным myString, т.е. к текстовому полю
    jQuery('#test').mouseover( function () {
       // изменяем текст элемента p на "Вы НАВЕЛИ мышку на текстовое поле!"
       jQuery('p').text('Вы НАВЕЛИ мышку на текстовое поле!');
    });

</script>





</head>
<body>
<table width="100%" cellpadding='0' cellspacing='0' border='0'><tr><td bgcolor="#FFFFFF">
                  <div class="b-page_newyear">
<!-- NEW YEAR

	<div class="b-page__content">
	<i class="b-head-decor">
		<i class="b-head-decor__inner b-head-decor__inner_n1">
		  <div class="b-ball b-ball_n1 b-ball_bounce" data-note="0"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n2 b-ball_bounce" data-note="1"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n3 b-ball_bounce" data-note="2"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n4 b-ball_bounce" data-note="3"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n5 b-ball_bounce" data-note="4"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n6 b-ball_bounce" data-note="5"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n7 b-ball_bounce" data-note="6"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n8 b-ball_bounce" data-note="7"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n9 b-ball_bounce" data-note="8"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i1"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i2"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i3"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i4"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i5"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i6"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		</i>
		<i class="b-head-decor__inner b-head-decor__inner_n2">
		  <div class="b-ball b-ball_n1 b-ball_bounce" data-note="9"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n2 b-ball_bounce" data-note="10"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n3 b-ball_bounce" data-note="11"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n4 b-ball_bounce" data-note="12"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n5 b-ball_bounce" data-note="13"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n6 b-ball_bounce" data-note="14"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n7 b-ball_bounce" data-note="15"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n8 b-ball_bounce" data-note="16"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n9 b-ball_bounce" data-note="17"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i1"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i2"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i3"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i4"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i5"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i6"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		</i>
		<i class="b-head-decor__inner b-head-decor__inner_n3">
		  <div class="b-ball b-ball_n1 b-ball_bounce" data-note="18"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n2 b-ball_bounce" data-note="19"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n3 b-ball_bounce" data-note="20"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n4 b-ball_bounce" data-note="21"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n5 b-ball_bounce" data-note="22"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n6 b-ball_bounce" data-note="23"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n7 b-ball_bounce" data-note="24"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n8 b-ball_bounce" data-note="25"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n9 b-ball_bounce" data-note="26"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i1"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i2"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i3"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i4"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i5"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i6"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		</i>
		<i class="b-head-decor__inner b-head-decor__inner_n4">
		  <div class="b-ball b-ball_n1 b-ball_bounce" data-note="27"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n2 b-ball_bounce" data-note="28"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n3 b-ball_bounce" data-note="29"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n4 b-ball_bounce" data-note="30"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n5 b-ball_bounce" data-note="31"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n6 b-ball_bounce" data-note="32"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n7 b-ball_bounce" data-note="33"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n8 b-ball_bounce" data-note="34"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n9 b-ball_bounce" data-note="35"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i1"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i2"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i3"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i4"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i5"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i6"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		</i>
		<i class="b-head-decor__inner b-head-decor__inner_n5">
		  <div class="b-ball b-ball_n1 b-ball_bounce" data-note="0"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n2 b-ball_bounce" data-note="1"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n3 b-ball_bounce" data-note="2"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n4 b-ball_bounce" data-note="3"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n5 b-ball_bounce" data-note="4"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n6 b-ball_bounce" data-note="5"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n7 b-ball_bounce" data-note="6"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n8 b-ball_bounce" data-note="7"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n9 b-ball_bounce" data-note="8"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i1"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i2"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i3"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i4"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i5"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i6"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		</i>
		<i class="b-head-decor__inner b-head-decor__inner_n6">
		  <div class="b-ball b-ball_n1 b-ball_bounce" data-note="9"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n2 b-ball_bounce" data-note="10"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n3 b-ball_bounce" data-note="11"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n4 b-ball_bounce" data-note="12"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n5 b-ball_bounce" data-note="13"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n6 b-ball_bounce" data-note="14"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n7 b-ball_bounce" data-note="15"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n8 b-ball_bounce" data-note="16"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n9 b-ball_bounce" data-note="17"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i1"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i2"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i3"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i4"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i5"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i6"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		</i>
		<i class="b-head-decor__inner b-head-decor__inner_n7">
		  <div class="b-ball b-ball_n1 b-ball_bounce" data-note="18"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n2 b-ball_bounce" data-note="19"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n3 b-ball_bounce" data-note="20"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n4 b-ball_bounce" data-note="21"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n5 b-ball_bounce" data-note="22"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n6 b-ball_bounce" data-note="23"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n7 b-ball_bounce" data-note="24"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n8 b-ball_bounce" data-note="25"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_n9 b-ball_bounce" data-note="26"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i1"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i2"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i3"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i4"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i5"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		  <div class="b-ball b-ball_i6"><div class="b-ball__right"></div><div class="b-ball__i"></div></div>
		</i>
	</i>
	</div>
</div>
-->
</td></tr></table>

<!-- <div style="position:absolute; z-index:0; top:10; left:300"><img src="img/30.png"></div> -->
 <!-- паровозик  -->
                         
<!--  <div style="position:absolute; z-index:0; top:25; left:300"><img src="img/snegir.png"></div>  -->
 
<!--  <div style="position:absolute; z-index:0; top:15; right:330"><img src="img/10a.png"></div> -->
   
<div style="position:absolute; z-index:1; top:100; right:110"><img src="img/gerald.png"></div> 


<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" class="border">
  <tr>
    <td width="260" height="118" rowspan="2" valign="top"  class="" align="center"><a href="index.php" title='Перейти на главную'><img src='img/logot44.png' border='0'></a>

<div style="position:absolute; z-index:4; top:90; left:20"><img src="img/defjpg.png"></div>

<div style="position:absolute; z-index:5; top:90; left:40">
      <form id="jq">
<input  class='search' type="text" maxlength='15' onclick="this.value=''" onblur="if(this.value==''){this.value='ФИО. тел. деятельность';}" onclick="if(this.value=='ФИО. тел. деятельность'){this.value='';}" value="ФИО. тел. деятельность" onkeyup="showHint(this.value)" ></form></div>

<div style="position:absolute; z-index:6; top:90; left:200"><img src="img/zoom.png"></div>
</td>             

    <td width="50" height="118" rowspan="2" class="logos" align="center" valign="bottom">
</td>

    <td valign="bottom" bgcolor="#FFFFFF" align="right"  height="78"  class="avto">


<?php

function getRealIP()
{

   if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
   {
      $client_ip =
         ( !empty($_SERVER['REMOTE_ADDR']) ) ?
            $_SERVER['REMOTE_ADDR']
            :
            ( ( !empty($_ENV['REMOTE_ADDR']) ) ?
               $_ENV['REMOTE_ADDR']
               :
               "unknown" );
      $entries = preg_split('/[, ]/', $_SERVER['HTTP_X_FORWARDED_FOR']);

      reset($entries);
      while (list(, $entry) = next_form_item($entries))
      {
         $entry = trim($entry);
         if ( preg_match("/^([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)/", $entry, $ip_list) )
         {
            $private_ip = array(
                  '/^0\./',
                  '/^127\.0\.0\.1/',
                  '/^192\.168\..*/',
                  '/^172\.((1[6-9])|(2[0-9])|(3[0-1]))\..*/',
                  '/^10\..*/');

            $found_ip = preg_replace($private_ip, $client_ip, $ip_list[1]);

            if ($client_ip != $found_ip)
            {
               $client_ip = $found_ip;
               break;
            }
         }
      }
   }
   else
   {
      $client_ip =
         ( !empty($_SERVER['REMOTE_ADDR']) ) ?
            $_SERVER['REMOTE_ADDR']
            :
            ( ( !empty($_ENV['REMOTE_ADDR']) ) ?
               $_ENV['REMOTE_ADDR']
               :
               "unknown" );
   }

   return $client_ip;

}


Database::connect() or die("Ошибка подключения к базе");
Database::selectDatabase("$db_name") or die("База не найдена");
$sql=Database::query('SET NAMES cp1251');

$dat=date("Y-m-d") ;
$daty = date('Y-m-d', strtotime('yesterday'));

$datpol=date("Сегодня d-m-Y");




$m_arr = array(1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля', 5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа', 9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря');
$d_arr = array(1 => 'Понедельник', 2 => 'Вторник', 3 => 'Среда', 4 => 'Четверг', 5 => 'Пятница', 6 => 'Суббота', 0 => 'Воскресенье');
$daty = date('Y-m-d', strtotime('yesterday'));
$dat100=$m_arr[date('n')];
$dat101=$d_arr[date('w')];

$datpol=date("$dat101 d $dat100 Y года");
echo "<h4>".$datpol;

echo " Ваш IP - ".$real_ip = getRealIP()."</h4>";

$sqll=Database::statement('select * from statistics WHERE date=?', [($dat)]);
$ress=Database::query($sqll);
$count = Database::numRows($ress);
echo " Сегодня было просмотрено <span class='textgreen1'>".$count."</span> страниц, и нас посетило <span class='textgreen1'>";


$sqll=Database::statement('select DISTINCT(ip) from statistics WHERE date=?', [($dat)]);
$ress=Database::query($sqll);
$count = Database::numRows($ress);
echo $count."</span> посетителей | ";

$yest_date=time()-60*60*24; 
$yest_date=date("Y-m-d",$yest_date);

$sqlly=Database::statement('select DISTINCT(ip), DATE_SUB(CURDATE(), INTERVAL 1 DAY) FROM statistics WHERE date=?', [($yest_date)]);
$ressy=Database::query($sqlly);
$county = Database::numRows($ressy);
echo "Вчера ";
echo $county." </span>| ";

?>

<?php
Database::connect() or die("Ошибка подключения к базе");
Database::selectDatabase("$db_name") or die("База не найдена");
$sql=Database::query('SET NAMES cp1251');

$sqll='select * from richstone_katalog WHERE (radiobutton=1) or (radiobutton=2) or (radiobutton=3) or (radiobutton=4) or (radiobutton=5)';
$ress=Database::query($sqll);
$count = Database::numRows($ress);
echo "Зарегистрировано: ".$count." человек, из них";


$result = Database::query("SELECT  COUNT(*) FROM richstone_katalog WHERE (radiobutton=1) or (radiobutton=4)");
$myrow = Database::fetchArray($result);
$total=$myrow[0];
echo " ".$total." мужчин,";


$result1 = Database::query("SELECT  COUNT(*) FROM richstone_katalog WHERE (radiobutton=2) or (radiobutton=3) or (radiobutton=5)");
$myrow1 = Database::fetchArray($result1);
$total1=$myrow1[0];
echo " ".$total1." женщин и ";

$result1 = Database::query("SELECT  COUNT(*) FROM richstone_katalog WHERE (radiobutton=3)");
$myrow1 = Database::fetchArray($result1);
$total1=$myrow1[0];
echo " ".$total1." в д/о";
?>

	
	</td>
    <td rowspan="2" valign="middle" bgcolor="#FFF" align="right" class="gr4">

<table cellpadding='0' cellspacing='0' border='0' width='100' height='90' align='right'>



<?php



//if ($user_flag!==null && $user_flag<1)
//{
//echo  ("Здравствуйте, ".$user_name." ");
//echo  (" ".$user_sname." - Вам стали доступны скрытые ресурсы сайта!");
//}
                     
if ($user_flag==null && $user_flag<1)
{

echo "    

	  <form action='getpwd.php' method='post'>
	  <tr>
		  <td align='center' class='avto1'>авторизация&nbsp;&nbsp;</td>
	  </tr>
	  <tr>
		  <td align='center' class='avto2'><input type='text' id='login' class='log_in' name='login' onblur=\"if(this.value==''){this.value='Логин';}\" onclick=\"if(this.value=='Логин'){this.value='';}\" value='Логин'>&nbsp;&nbsp;</td>
	  </tr>
	  <tr>
		  <td align='center' class='avto2'><input type='password' id='pswd' class='log_in' name='pswd' placeholder='Пароль'>&nbsp;&nbsp;</td>
	  </tr>
	  <tr>
		  <td align='center'><input type='submit' value='Вход' class='butt'>&nbsp;&nbsp;</td>
	  </tr></form>";
}

//elseif ($user_flag!==null && $user_flag<1)

elseif ($user_flag==0)
{
//echo  ("".$user_name." <br>");
//echo  (" ".$user_sname." - Вам стали доступны скрытые ресурсы сайта!");
echo "    
	  <form action='getpwd.php' method='post'>
	  <tr>
		  <td align='center' class='avto1'>Здравствуйте</td>
	  </tr>
	  <tr>
		  <td align='center' class='avto2'>$user_name</td>
	  </tr>
	  <tr>
		  <td align='right' class='avto2'><input type='hidden' id='login' class='log_in' name='login' onblur=\"if(this.value==''){this.value='Логин';}\" onclick=\"if(this.value=='Логин'){this.value='';}\" value='Логин'>&nbsp;&nbsp;</td>
	  </tr>
	  <tr>
		  <td align='right' class='avto2'><input type='hidden' id='pswd' class='log_in' name='pswd' placeholder='Пароль'>&nbsp;&nbsp;</td>
	  </tr>
	  <tr>
		  <td align='center'><input type='submit' value='Выход' class='butt'>&nbsp;&nbsp;</td>
	  </tr></form>";
}



else 
{
//echo  ("".$user_name." <br>");
//echo  (" ".$user_sname." - Вам стали доступны скрытые ресурсы сайта!");
echo "    
	  <form action='getpwd.php' method='post'>
	  <tr>
		  <td align='center' class='avto1'>Авторизация</td>
	  </tr>
	  <tr>
		  <td align='right' class='avto2'><input type='text' id='login' class='log_in' name='login' onblur=\"if(this.value==''){this.value='Логин';}\" onclick=\"if(this.value=='Логин'){this.value='';}\" value='Логин'>&nbsp;&nbsp;</td>
	  </tr>
	  <tr>
		  <td align='right' class='avto2'><input type='password' id='pswd' class='log_in' name='pswd' placeholder='Пароль'>&nbsp;&nbsp;</td>
	  </tr>
	  <tr>
		  <td align='center'><input type='submit' value='Вход' class='butt'>&nbsp;&nbsp;</td>
	  </tr></form>";
}




?>
</table>
</td>
  </tr>
  <tr>
    <td valign="top" class="gr4" height="40"><a href="index.php"  class="zag">Главная </a>	

<?php

    $sql = Database::query("SELECT * FROM `richstone_page` WHERE alt_name=1 order by key_num ASC");
        while ($row = Database::fetchRow($sql))
{
$sqll=Database::statement('select * from richstone_katalog WHERE key_page =? order by key_page ASC', [(int)($row[8])]);
$ress=Database::query($sqll);
$count = Database::numRows($ress);

//echo " <span id='ajaxgo'><a href='index.php?link=".$row[6]."' class='zag'>".$row[1]."(<span class='textgreen'>".$count."</span>) </a></span>";
echo " <a href='index.php?link=".$row[6]."' class='zag' title='".$row[15]."'>".$row[1]."(<span class='textgreen'>".$count."</span>) </a>";
}
//echo "<a href='http://www.it.rw/ed/upload-files/docs/telspravupr/krsprupr.doc' class='zag'>Управление дороги <span class='textgreen'>(краткий)</span></a>";
//echo "<a href='http://www.it.rw/index.php?link=540' class='zag'>ЦАБ<span class='textgreen'>(49)</span></a>";
echo "<a href='http://www.it.rw/ed/upload-files/docs/2026/TC_07_2026.pdf' class='zag'>Управление дороги <span class='textgreen'>(расшир)</span></a>";
?></td>
  </tr>
  <tr>
    <td rowspan="2" valign="top" height="100%" width="260" class="otctup1"><h5>Основные разделы</h5>


<?php

include("al_index.php");

?>

<?php 
/*
<h5>Доска почета</h5>
$rand=mt_rand(1, 15);
$sql = Database::query(Database::statement('SELECT * FROM `doska` WHERE id=?', [(int)($rand)]));
$row = Database::fetchRow($sql);

echo '

<table cellpadding="0" cellspacing="0" border="0" width="160" align="center">
<tr>
<td class="tl" width="27" height="26"></td>
<td class="tc">&nbsp;</td>
<td class="tr" width="27" height="26"></td>
</tr>
<tr>
<td class="ml" width="27" height="26"></td>


<td class="mc" valign="top" align="center"><a href="index.php?link=123">';

echo strip_tags($row[4], '<img>');


echo '</a><br>';




echo strip_tags($row[1], '<img>');

//echo $row[1];
echo "<p class='spis5'>";
echo strip_tags($row[2], '<img>');
//echo $row[2];
echo "</p>";

echo'</td>
<td class="mr" width="27" height="26"></td>
</tr>
<tr>
<td class="bl" width="27" height="26"></td>
<td class="bc">&nbsp;</td>
<td class="br" width="27" height="26"></td>
</tr>
</table>
';
*/
?>


<h5>Подписка на новости</h5>
<?php
//include("rassilka.php");
print('<form action="index.php?link=82" method="post" valign="top">');

echo ("<table width='150' border='0' align='center' cellpadding='0' cellspacing='5'><tr><td>");
$result3 = Database::query("SELECT * FROM pochta order by id");
//print('<form action="index.php?link=82" method="post" valign="top">');


print("<select name='page_type'  class='avto3'>");
while($restext=Database::fetchRow($result3))
{print '<option value='. $restext[2].'>'.$restext[1].'</option>';}	
print("</select></td></tr>");
$date=date("d-m-Y") ;
$ip = $_SERVER['REMOTE_ADDR'] ?? '';

print('<tr><td><input type="hidden" name="page_ip" value="'.$ip.'">
               <input type="hidden" name="page_date" value="'.$date.'">
               <input type="text" id="pswd" class="log_in1" name="page_fname"  onblur="if(this.value==\'\'){this.value=\'Ваше имя\';}" onclick="if(this.value==\'Ваше имя\'){this.value=\'\';}" value="Ваше имя" onkeyup="showHint(this.value)"></td></tr>');
print('<tr><td><input type="text" id="pswd" class="log_in1" name="page_email"   onblur="if(this.value==\'\'){this.value=\'Ваш e-mail\';}" onclick="if(this.value==\'Ваш e-mail\'){this.value=\'\';}" value="Ваш e-mail" onkeyup="showHint(this.value)"></td></tr>');
print('<tr><td><input  class="butt1" type="submit" value="Ок"></form></td></tr></table>');	 
?>
</td>
<td valign="top" class="test" colspan="3"></td></tr>
<tr><td colspan="3" valign="top"  height="100%"  class="otctup">
<div style="position:absolute; z-index:1; top:75; left:215" id="test" class="test"></div>
<?php
Database::selectDatabase($db_name);  

$id_pg=(int)$object_id + 1;  
$qr=Database::query(Database::statement('SELECT * FROM richstone_page where id=?', [(int)($id_pg)]));
$res=Database::fetchRow($qr); 



if ($res[8] == '1'  or $res[8] == '187' or $res[8] == '188' or $res[8] == '2' or $res[8] == '3' or $res[8] == '4' or $res[8] == '5' or $res[8] == '6' or $res[8] == '7' or $res[8] == '8' or $res[8] == '9' or $res[8] == '10' or $res[8] == '11' or $res[8] == '12' or $res[8] == '13' or $res[8] == '14' or $res[8] == '15' or $res[8] == '16' or $res[8] == '17' or $res[8] == '18' or $res[8] == '95' or $res[8] == '111'  or $res[8] == '135' or $res[8] == '139' or $res[8] == '150' or $res[8] == '232' or $res[8] == '238' or $res[8] == '239' or $res[8] == '240' or $res[8] == '241' or $res[8] == '242' or $res[8] == '243' or $res[8] == '501'or $res[8] == '502'or $res[8] == '505'
or $res[8] == '506'
or $res[8] == '407'
or $res[8] == ''
or $res[8] == '650'
or $res[8] == '649'
or $res[8] == '510'
or $res[8] == '511'
or $res[8] == '512'
or $res[8] == '503'
or $res[8] == '504'
or $res[8] == '513'
or $res[8] == '514'
or $res[8] == '515'
or $res[8] == '516'
or $res[8] == '517'
or $res[8] == '518'
or $res[8] == '519'
or $res[8] == '652'
or $res[8] == '520'
or $res[8] == '651'
or $res[8] == '522'
or $res[8] == '523'
or $res[8] == '653'
or $res[8] == '654'
or $res[8] == '526'
or $res[8] == '527'
or $res[8] == '528'
or $res[8] == '529'
or $res[8] == '530'
or $res[8] == '531'
or $res[8] == '532'
or $res[8] == '272'
or $res[8] == '536'
or $res[8] == '537'
or $res[8] == '540'
or $res[8] == '541'
or $res[8] == '542'
or $res[8] == '543'
or $res[8] == '544'
or $res[8] == '677'
or $res[8] == '997'
or $res[8] == '688'
)
{

$qrr=Database::query(Database::statement('SELECT * FROM osv_user where osv_user_type=?', [(int)($object_id)]));
$resw=Database::fetchRow($qrr);
//--------------------------------------------------------------------------начало телефонного справочника--------------------------------------------------------------------//
print("<h5> "); 

echo $res[2];

//echo "22";
//echo strip_tags($res[2], '<img>');

//$res[2]
switch($id_pg)
{
    case 651: 
    print ("</h5><span class='spis3'><a href=http://www.it.rw/index.php?link=597' class='spis33'>Функции и задачи отдела</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");
    break;
	case 650: 
    print ("</h5><span class='spis3'><a href=http://www.it.rw/index.php?link=598' class='spis33'>Функции и задачи отдела</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");
	break;
	case 507: 
	print ("</h5><span class='spis3'><a href=http://www.it.rw/index.php?link=599' class='spis33'>Функции и задачи отдела</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");
	break;
	case 508: 
	print ("</h5><span class='spis3'><a href=http://www.it.rw/index.php?link=600' class='spis33'>Функции и задачи отдела</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");
	break;
	case 512: 
	print ("</h5><span class='spis3'><a href=http://www.it.rw/index.php?link=601' class='spis33'>Функции и задачи отдела</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");
	break;
	case 513: 
	print ("</h5><span class='spis3'><a href=http://www.it.rw/index.php?link=602' class='spis33'>Функции и задачи отдела</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");
	break;
	case 514: 
	print ("</h5><span class='spis3'><a href=http://www.it.rw/index.php?link=603' class='spis33'>Функции и задачи отдела</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");
	break;
	/*case 515: 
	print ("</h5><span class='spis3'><a href=http://www.it.rw/index.php?link=604' class='spis33'>Функции и задачи отдела</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");
	break;*/
	case 516: 
	print ("</h5><span class='spis3'><a href=http://www.it.rw/index.php?link=605' class='spis33'>Функции и задачи отдела</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");
	break;
	case 517: 
	print ("</h5><span class='spis3'><a href=http://www.it.rw/index.php?link=606' class='spis33'>Функции и задачи отдела</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");
	break;
	case 519: 
	print ("</h5><span class='spis3'><a href=http://www.it.rw/index.php?link=607' class='spis33'>Функции и задачи отдела</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");
	break;
	case 521: 
	print ("</h5><span class='spis3'><a href=http://www.it.rw/index.php?link=608' class='spis33'>Функции и задачи отдела</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");
	break;
	case 522: 
	print ("</h5><span class='spis3'><a href=http://www.it.rw/index.php?link=609' class='spis33'>Функции и задачи отдела</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");
	break;
	case 523: 
	print ("</h5><span class='spis3'><a href=http://www.it.rw/index.php?link=610' class='spis33'>Функции и задачи отдела</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");
	break;
	case 653: 
	print ("</h5><span class='spis3'><a href=http://www.it.rw/index.php?link=611' class='spis33'>Функции и задачи отдела</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");
	break;
	case 524: 
	print ("</h5><span class='spis3'><a href=http://www.it.rw/index.php?link=612' class='spis33'>Функции и задачи отдела</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");
	break;
	case 652: 
	print ("</h5><span class='spis3'><a href=http://www.it.rw/index.php?link=655' class='spis33'>Функции и задачи отдела</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");
	break;
	case 506: 
	echo ("</h5><span class='spis3'><a href=http://www.it.rw/index.php?link=613' class='spis33'>Функции и задачи отдела</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");
	break;
	case 520: 
		print ("</h5><span class='spis3'><a href=http://www.it.rw/index.php?link=679' class='spis33'>Функции и задачи центра</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");
		break;
	default: 
print ("</h5><span class='spis3'><a class='spis33'>Функции и задачи отдела</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");
break;
													
}

/********************таблица************************ */

switch($id_pg)
{
    case 2: 

		$sql = Database::query("SELECT * FROM richstone_katalog where key_page=1 order by num_otdel ASC");
echo ('                            
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
<td class="tl" width="27" height="26"></td>
<td class="tc">&nbsp;</td>
<td class="tr" width="27" height="26"></td>
</tr>
<tr>
<td class="ml" width="27" height="26"></td>
<td class="mc">');

//$result = Database::query("SELECT * FROM richstone_katalog where key_page=$res[6] order by num_otdel ASC");

// количество строк
//$num_results = Database::numRows($result);
echo ("
<table cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;' width='100%'><tr>
<td align='center' class='zag1' width='30' height='25'>№</td>
<td align='center' class='zag1' width='230'>Должность</td>
<td align='center' class='zag1' width='30'>Офис</td>
<td align='center' class='zag1' width='30'>Инф</td>
<td align='center' class='zag1' width='290'>ФИО</td>
<td align='center' class='zag1' width='60'>e-mail</td>
<td align='center' class='zag1' width='60'>Телефон</td>
<td align='center' class='zag1' width='230'>Личный прием</td>
<td align='center' class='zag1' width='30'>Отдел</td>
<td align='center' class='zag1' width='50'>Адрес</td></tr>");
  

// начальный цвет
$color = '#d9e8f1';
for ($i=1; $i<($row = Database::fetchRow($sql)); $i++) 

//for ($i=1; $i<$num_results; $i++) {
//for ($i=1; $i<$num_results; $i++) 

{
//    $row = Database::fetchArray($result);
    // начало строки
    echo "<tr ";
    // определяем какой цвет выводить
    if ($color=="#d9e8f1") $color = "#ffffff";
    else $color = "#d9e8f1";
    // выводим цвет строки и данные таблицы
    echo "bgcolor='$color'>";

echo "
<td class='spis' align='center'>$i</td>
<td class='spis'>$row[11]</td>
<td class='spis' align='center'>$row[12]</td>
<td align='center' class='spis'>";
                                                          
if ($row['23']==1)
{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$row[0]'><img src='img/def11.png' title='Отсутствует изображение'></a>";}
if ($row['23']==2)
{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$row[0]'><img src='img/def22.png' title='Отсутствует изображение'></a>";}
if ($row['23']==3)
{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$row[0]'><img src='img/def33.png' title='Отсутствует изображение'></a>";}
if ($row['23']==4)
{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$row[0]'><img src='img/def11.png' title='Отсутствует изображение'></a>";}
if ($row['23']==5)
{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$row[0]'><img src='img/def22.png' title='Отсутствует изображение'></a>";}
if ($row['23']==6)
{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$row[0]'><img src='img/def11.png' title='Отсутствует изображение'></a>";}
if ($row['23']==7)
{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$row[0]'><img src='img/def22.png' title='Отсутствует изображение'></a>";}

                                                          

$c=date('d.m.');
$d=date(Y);
$dates=date(d.m.Y);                                       
                                                          
$dd=$row['24'];
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
//определение текста в зависимости от разности дат  

if ($curr-$date < 0)
{ 
if ($row['24']==null)
{  
$text1="&nbsp;";
$text2="";
}
else
{  
$text1="&nbsp;Через ";
$text2=$d_days." дн";
}
}
else 
{
$text1="";
$text2="";
//$text1="&nbsp;Прошло ";
//$text2=$d_days;
} 


echo ("
</td>"); 
                                                          

echo "
<td align='left' class='spis'>$row[15] $row[14] $row[13]</td>
<td align='left' class='spis2' style='text-align: center;'><a href='mailto:$row[16]' class='spiss' title='Отправить письмо'>$row[16]</a></br><a href='mailto:$row[27]' class='spiss' title='Отправить письмо'>$row[27]</a></td>
<td align='center' class='spis'>$row[17]</td>
<td align='center' class='spis2'>$row[4]</td>
<td align='center' class='spis2'>$row[18]</td>
<td align='center' class='spis1'>$row[19]</td>";



echo '</tr>';


}
echo '</table>';                                         

echo (" <table cellpadding='0' cellspacing='20' border='0' width='100%' valign='top'><tr><td  valign='top'>");

//$sql = Database::query("SELECT * FROM richstone_katalog WHERE (key_page=$res[6]) and (radiobutton between 1 and 5) order by num_otdel ASC ");
$sql = Database::query(Database::statement('SELECT * FROM richstone_katalog WHERE (key_page=?) and (radiobutton=1 or radiobutton=4) order by num_otdel ASC ', [(int)($res[6])]));

$sql1 = Database::query(Database::statement('SELECT count(*) FROM richstone_katalog WHERE (key_page=?) and (radiobutton=1 or radiobutton=4) order by num_otdel ASC ', [(int)($res[6])]));
$count = Database::fetchRow($sql1);
$total = $count[0];

/*echo ("
<table cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;' width='100%' valign='top'><tr>
<td align='center' class='zag1' width='30' height='25'>№</td>
<td align='center' class='zag1' width='230'>Должность</td>
<td align='center' class='zag1' width='290'>ФИО</td></tr>");
echo "<h5><img src='http://www.it.rw/img/def11.png'> Мужчины отдела $res[1]. Всего $total</h5>";
// начальный цвет
$color = '#d9e8f1';
for ($i=1; $i<($row = Database::fetchRow($sql)); $i++) 
{
    // начало строки
    echo "<tr ";
    // определяем какой цвет выводить
    if ($color=="#d9e8f1") $color = "#ffffff";
    else $color = "#d9e8f1";
    // выводим цвет строки и данные таблицы
    echo "bgcolor='$color'>";
echo "
<td class='spis' align='center'>$i</td>
<td class='spis'>$row[11]</td>";
echo "<td align='left' class='spis'>$row[15] $row[14] $row[13]</td></tr>";
}
echo '</table><br><br>';                                         




echo ("</td><td valign='top'>");




//$sql = Database::query("SELECT * FROM richstone_katalog WHERE (key_page=$res[6]) and (radiobutton between 1 and 5) order by num_otdel ASC ");
$sql = Database::query(Database::statement('SELECT * FROM richstone_katalog WHERE (key_page=?) and (radiobutton=2 or radiobutton=5) order by num_otdel ASC ', [(int)($res[6])]));
$sql1 = Database::query(Database::statement('SELECT count(*) FROM richstone_katalog WHERE (key_page=?) and (radiobutton=2 or radiobutton=5) order by num_otdel ASC ', [(int)($res[6])]));
$count = Database::fetchRow($sql1);
$total = $count[0];

echo ("
<table cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;' width='100%' valign='top'><tr>
<td align='center' class='zag1' width='30' height='25'>№</td>
<td align='center' class='zag1' width='230'>Должность</td>
<td align='center' class='zag1' width='290'>ФИО</td></tr>");
echo "<h5><img src='http://www.it.rw/img/def22.png'> Женщины отдела $res[1]. Всего $total</h5>";
// начальный цвет
$color = '#d9e8f1';
for ($i=1; $i<($row = Database::fetchRow($sql)); $i++) 
{
    // начало строки
    echo "<tr ";
    // определяем какой цвет выводить
    if ($color=="#d9e8f1") $color = "#ffffff";
    else $color = "#d9e8f1";
    // выводим цвет строки и данные таблицы
    echo "bgcolor='$color'>";
echo "
<td class='spis' align='center'>$i</td>
<td class='spis'>$row[11]</td>";
echo "<td align='left' class='spis'>$row[15] $row[14] $row[13]</td></tr>";
}
echo '</table>';                                         




//$sql = Database::query("SELECT * FROM richstone_katalog WHERE (key_page=$res[6]) and (radiobutton between 1 and 5) order by num_otdel ASC ");
$sql = Database::query(Database::statement('SELECT * FROM richstone_katalog WHERE (key_page=?) and (radiobutton=3) order by num_otdel ASC ', [(int)($res[6])]));
$sql1 = Database::query(Database::statement('SELECT count(*) FROM richstone_katalog WHERE (key_page=?) and (radiobutton=3) order by num_otdel ASC ', [(int)($res[6])]));
$count = Database::fetchRow($sql1);
$total = $count[0];

echo ("
<table cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;' width='100%' valign='top'><tr>
<td align='center' class='zag1' width='30' height='25'>№</td>
<td align='center' class='zag1' width='230'>Должность</td>
<td align='center' class='zag1' width='290'>ФИО</td></tr>");
echo "<h5> Сотрудники отдела $res[1] в декретном отпуске. Всего $total</h5>";   // Перед <h5> стояла картинка <img src='http://www.it.rw/img/def33.png'>
// начальный цвет
$color = '#d9e8f1';
for ($i=1; $i<($row = Database::fetchRow($sql)); $i++) 
{
    // начало строки
    echo "<tr ";
    // определяем какой цвет выводить
    if ($color=="#d9e8f1") $color = "#ffffff";
    else $color = "#d9e8f1";
    // выводим цвет строки и данные таблицы
    echo "bgcolor='$color'>";
echo "
<td class='spis' align='center'>$i</td>
<td class='spis'>$row[11]</td>";
echo "<td align='left' class='spis'>$row[15] $row[14] $row[13]</td></tr>";
}
echo '</table>';          */                               

echo ("</td></tr></table>");

echo ('</td>
<td class="mr" width="27" height="26"></td>
</tr>
<tr>
<td class="bl" width="27" height="26"></td>
<td class="bc">&nbsp;</td>
<td class="br" width="27" height="26"></td>
</tr>
</table>
');

    break;
	
	default: 
	$sql = Database::query(Database::statement('SELECT * FROM richstone_katalog where key_page=? order by num_otdel ASC', [(int)($res[6])]));
	echo ('                            
	<table cellpadding="0" cellspacing="0" border="0" width="100%">
	<tr>
	<td class="tl" width="27" height="26"></td>
	<td class="tc">&nbsp;</td>
	<td class="tr" width="27" height="26"></td>
	</tr>
	<tr>
	<td class="ml" width="27" height="26"></td>
	<td class="mc">');
	
	//$result = Database::query("SELECT * FROM richstone_katalog where key_page=$res[6] order by num_otdel ASC");
	
	// количество строк
	//$num_results = Database::numRows($result);
	echo ("
	<table cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;' width='100%'><tr>
	<td align='center' class='zag1' width='30' height='25'>№</td>
	<td align='center' class='zag1' width='230'>Должность</td>
	<td align='center' class='zag1' width='30'>Офис</td>
	<td align='center' class='zag1' width='30'>Инф</td>
	<td align='center' class='zag1' width='290'>ФИО</td>
	<td align='center' class='zag1' width='50'>Д.р.</td>
	<td align='center' class='zag1' width='60'>e-mail</td>
	<td align='center' class='zag1' width='60'>Телефон</td>
	<td align='center' class='zag1' width='180'>Сот Тел</td>
	<td align='center' class='zag1' width='30'>Отдел</td>
	<td align='center' class='zag1' width='50'>Адрес</td></tr>");
	  
	
	// начальный цвет
	$color = '#d9e8f1';
	for ($i=1; $i<($row = Database::fetchRow($sql)); $i++) 
	
	//for ($i=1; $i<$num_results; $i++) {
	//for ($i=1; $i<$num_results; $i++) 
	
	{
	//    $row = Database::fetchArray($result);
		// начало строки
		echo "<tr ";
		// определяем какой цвет выводить
		if ($color=="#d9e8f1") $color = "#ffffff";
		else $color = "#d9e8f1";
		// выводим цвет строки и данные таблицы
		echo "bgcolor='$color'>";
	
	echo "
	<td class='spis' align='center'>$i</td>
	<td class='spis'>$row[11]</td>
	<td class='spis' align='center'>$row[12]</td>
	<td align='center' class='spis'>";
															  
	if ($row['23']==1)
	{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$row[0]'><img src='img/def11.png' title='Отсутствует изображение'></a>";}
	if ($row['23']==2)
	{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$row[0]'><img src='img/def22.png' title='Отсутствует изображение'></a>";}
	if ($row['23']==3)
	{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$row[0]'><img src='img/def33.png' title='Отсутствует изображение'></a>";}
	if ($row['23']==4)
	{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$row[0]'><img src='img/def11.png' title='Отсутствует изображение'></a>";}
	if ($row['23']==5)
	{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$row[0]'><img src='img/def22.png' title='Отсутствует изображение'></a>";}
	if ($row['23']==6)
	{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$row[0]'><img src='img/def11.png' title='Отсутствует изображение'></a>";}
	if ($row['23']==7)
	{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$row[0]'><img src='img/def22.png' title='Отсутствует изображение'></a>";}
	
															  
	
	$c=date('d.m.');
	$d=date(Y);
	$dates=date(d.m.Y);                                       
															  
	$dd=$row['24'];
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
	//определение текста в зависимости от разности дат  
	
	if ($curr-$date < 0)
	{ 
	if ($row['24']==null)
	{  
	$text1="&nbsp;";
	$text2="";
	}
	else
	{  
	$text1="&nbsp;Через ";
	$text2=$d_days." дн";
	}
	}
	else 
	{
	$text1="";
	$text2="";
	//$text1="&nbsp;Прошло ";
	//$text2=$d_days;
	} 
	
	
	echo ("
	</td>"); 
															  
	
	echo "
	<td align='left' class='spis'>$row[15] $row[14] $row[13]</td>
	<td align='left' class='spiss2'>$text1 $text2</td>
	<td align='left' class='spis2' style='text-align: center;'><a href='mailto:$row[16]' class='spiss' title='Отправить письмо'>$row[16]</a></br><a href='mailto:$row[27]' class='spiss' title='Отправить письмо'>$row[27]</a></td>
	<td align='center' class='spis'>$row[17]</td>
	<td align='center' class='spis2'>$row[25]<br>$row[26]</td>
	<td align='center' class='spis2'>$row[18]</td>
	<td align='center' class='spis1'>$row[19]</td>";
	
	
	
	echo '</tr>';
	
	
	}
	echo '</table>';                                         
	
	echo (" <table cellpadding='0' cellspacing='20' border='0' width='100%' valign='top'><tr><td  valign='top'>");
	
	//$sql = Database::query("SELECT * FROM richstone_katalog WHERE (key_page=$res[6]) and (radiobutton between 1 and 5) order by num_otdel ASC ");
	$sql = Database::query(Database::statement('SELECT * FROM richstone_katalog WHERE (key_page=?) and (radiobutton=1 or radiobutton=4) order by num_otdel ASC ', [(int)($res[6])]));
	
	$sql1 = Database::query(Database::statement('SELECT count(*) FROM richstone_katalog WHERE (key_page=?) and (radiobutton=1 or radiobutton=4) order by num_otdel ASC ', [(int)($res[6])]));
	$count = Database::fetchRow($sql1);
	$total = $count[0];
	
	/*echo ("
	<table cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;' width='100%' valign='top'><tr>
	<td align='center' class='zag1' width='30' height='25'>№</td>
	<td align='center' class='zag1' width='230'>Должность</td>
	<td align='center' class='zag1' width='290'>ФИО</td></tr>");
	echo "<h5><img src='http://www.it.rw/img/def11.png'> Мужчины отдела $res[1]. Всего $total</h5>";
	// начальный цвет
	$color = '#d9e8f1';
	for ($i=1; $i<($row = Database::fetchRow($sql)); $i++) 
	{
		// начало строки
		echo "<tr ";
		// определяем какой цвет выводить
		if ($color=="#d9e8f1") $color = "#ffffff";
		else $color = "#d9e8f1";
		// выводим цвет строки и данные таблицы
		echo "bgcolor='$color'>";
	echo "
	<td class='spis' align='center'>$i</td>
	<td class='spis'>$row[11]</td>";
	echo "<td align='left' class='spis'>$row[15] $row[14] $row[13]</td></tr>";
	}
	echo '</table><br><br>';                                         
	
	
	
	
	echo ("</td><td valign='top'>");
	
	
	
	
	//$sql = Database::query("SELECT * FROM richstone_katalog WHERE (key_page=$res[6]) and (radiobutton between 1 and 5) order by num_otdel ASC ");
	$sql = Database::query(Database::statement('SELECT * FROM richstone_katalog WHERE (key_page=?) and (radiobutton=2 or radiobutton=5) order by num_otdel ASC ', [(int)($res[6])]));
	$sql1 = Database::query(Database::statement('SELECT count(*) FROM richstone_katalog WHERE (key_page=?) and (radiobutton=2 or radiobutton=5) order by num_otdel ASC ', [(int)($res[6])]));
	$count = Database::fetchRow($sql1);
	$total = $count[0];
	
	echo ("
	<table cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;' width='100%' valign='top'><tr>
	<td align='center' class='zag1' width='30' height='25'>№</td>
	<td align='center' class='zag1' width='230'>Должность</td>
	<td align='center' class='zag1' width='290'>ФИО</td></tr>");
	echo "<h5><img src='http://www.it.rw/img/def22.png'> Женщины отдела $res[1]. Всего $total</h5>";
	// начальный цвет
	$color = '#d9e8f1';
	for ($i=1; $i<($row = Database::fetchRow($sql)); $i++) 
	{
		// начало строки
		echo "<tr ";
		// определяем какой цвет выводить
		if ($color=="#d9e8f1") $color = "#ffffff";
		else $color = "#d9e8f1";
		// выводим цвет строки и данные таблицы
		echo "bgcolor='$color'>";
	echo "
	<td class='spis' align='center'>$i</td>
	<td class='spis'>$row[11]</td>";
	echo "<td align='left' class='spis'>$row[15] $row[14] $row[13]</td></tr>";
	}
	echo '</table>';                                         
	
	
	
	
	//$sql = Database::query("SELECT * FROM richstone_katalog WHERE (key_page=$res[6]) and (radiobutton between 1 and 5) order by num_otdel ASC ");
	$sql = Database::query(Database::statement('SELECT * FROM richstone_katalog WHERE (key_page=?) and (radiobutton=3) order by num_otdel ASC ', [(int)($res[6])]));
	$sql1 = Database::query(Database::statement('SELECT count(*) FROM richstone_katalog WHERE (key_page=?) and (radiobutton=3) order by num_otdel ASC ', [(int)($res[6])]));
	$count = Database::fetchRow($sql1);
	$total = $count[0];
	
	echo ("
	<table cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;' width='100%' valign='top'><tr>
	<td align='center' class='zag1' width='30' height='25'>№</td>
	<td align='center' class='zag1' width='230'>Должность</td>
	<td align='center' class='zag1' width='290'>ФИО</td></tr>");
	echo "<h5> Сотрудники отдела $res[1] в декретном отпуске. Всего $total</h5>";   // Перед <h5> стояла картинка <img src='http://www.it.rw/img/def33.png'>
	// начальный цвет
	$color = '#d9e8f1';
	for ($i=1; $i<($row = Database::fetchRow($sql)); $i++) 
	{
		// начало строки
		echo "<tr ";
		// определяем какой цвет выводить
		if ($color=="#d9e8f1") $color = "#ffffff";
		else $color = "#d9e8f1";
		// выводим цвет строки и данные таблицы
		echo "bgcolor='$color'>";
	echo "
	<td class='spis' align='center'>$i</td>
	<td class='spis'>$row[11]</td>";
	echo "<td align='left' class='spis'>$row[15] $row[14] $row[13]</td></tr>";
	}
	echo '</table>';          */                               
	
	echo ("</td></tr></table>");
	
	echo ('</td>
	<td class="mr" width="27" height="26"></td>
	</tr>
	<tr>
	<td class="bl" width="27" height="26"></td>
	<td class="bc">&nbsp;</td>
	<td class="br" width="27" height="26"></td>
	</tr>
	</table>
	');
break;
													
}




/*print ("</h5><span class='spis3'><a href=http://www.it.rw/index.php?link=400' class='spis33'>Распределение обязанностей</a> | Ответственный за сопровождение данной страницы - <b>".$resw[5]." ".$resw[4]." ".$resw[6]."</b> | <span class='spis3'><a href='print.php?code=".$res[0]."' class='spis3'>Вывести на печать</a></span>");*/


if ($res[0] == 254)
{
echo "<h8>222/h8>";
}
	

if ($res[8] == '997') 


{
	echo "<h5>Профгрупорги отделов</h5>";

$sql = Database::query("SELECT * FROM richstone_katalog where key_page=678 order by num_otdel ASC");
echo ('<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
<td class="tl" width="27" height="26"></td>
<td class="tc">&nbsp;</td>
<td class="tr" width="27" height="26"></td>
</tr>
<tr>
<td class="ml" width="27" height="26"></td>
<td class="mc">');

echo ("<table cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;' width='100%'><tr>
<td align='center' class='zag1' width='30' height='25'>№</td>
<td align='center' class='zag1' width='200' >Должность</td>
<td align='center' class='zag1' width='30'>Офис</td>
<td align='center' class='zag1' width='30'>I</td>
<td align='center' colspan='3' class='zag1' width='300'>ФИО</td>
<td align='center' class='zag1' width='100'>e-mail</td>
<td align='center' class='zag1' width='60'>Телефон</td>
<td align='center' class='zag1' width='30'>Отдел</td>
<td align='center' class='zag1' width='50'>Адрес</td></tr>");
 for ($i=1; $i<($tablerows = Database::fetchRow($sql)); $i++) 
{
echo ("<tr><td align='center' class='spis'>$i</td>
<td align='left' class='spis'>$tablerows[11]</td>
<td align='center' class='spis'>$tablerows[12]</td>
<td align='center' class='spis'>");

if ($tablerows['23']==1)
{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$tablerows[0]'><img src='img/def11.png' title='Отсутствует изображение'></a>";}
if ($tablerows['23']==2)
{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$tablerows[0]'><img src='img/def22.png' title='Отсутствует изображение'></a>";}
if ($tablerows['23']==3)
{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$tablerows[0]'><img src='img/def33.png' title='Отсутствует изображение'></a>";}
if ($tablerows['23']==4)
{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$tablerows[0]'><img src='img/def11.png' title='Отсутствует изображение'></a>";}
if ($tablerows['23']==5)
{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$tablerows[0]'><img src='img/def22.png' title='Отсутствует изображение'></a>";}
if ($tablerows['23']==6)
{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$tablerows[0]'><img src='img/def11.png' title='Отсутствует изображение'></a>";}
if ($tablerows['23']==7)
{ echo "<a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='d.php?code=$tablerows[0]'><img src='img/def11.png' title='Отсутствует изображение'></a>";}
echo ("</td> 
<td align='left' colspan='3' class='spis'>$tablerows[15] $tablerows[14] $tablerows[13]</td>
<td align='left' class='spis2'><a href='mailto:$tablerows[16]' class='spiss' title='Отправить письмо'>$tablerows[16]</a></br><a href='mailto:$tablerows[27]' class='spiss' title='Отправить письмо'>$tablerows[27]</a></td>
<td align='center' class='spis'>$tablerows[17]</td>
<td align='center' class='spis'>$tablerows[18]</td>
<td align='center' class='spis1'>$tablerows[19]</td>
</tr>");
}
echo ("</table>");                                                                                                      
echo ('</td>
<td class="mr" width="27" height="26"></td>
</tr>
<tr>
<td class="bl" width="27" height="26"></td>
<td class="bc">&nbsp;</td>
<td class="br" width="27" height="26"></td>
</tr>
</table>');

}

}
else {
echo "<table cellpadding='0' cellspacing='0' border='0' width='100%' align='left'>";


 
//---------------------------------------------------------------------------------------Середина страницы---------------------------------------------------------------------// 



echo "<tr><td align='left' valign='top' width='1300'><h5>$res[1]</h5><td align='left' valign='top'>";



if ($res[0] == 1)
{
echo "<h8>Именинники</h8>";
}

echo "</td></td></tr>
<tr><td align='left' valign='top' class='ott1' colspan='2'>";

if ($res[0] == '83')

{
$page_fname = $_POST['page_fname'] ?? '';
$page_email = $_POST['page_email'] ?? '';
$page_type = $_POST['page_type'] ?? '';
$page_date = $_POST['page_date'] ?? '';
$page_ip = $_POST['page_ip'] ?? '';
$page_fname = htmlspecialchars(trim($page_fname));
$page_email = htmlspecialchars(trim($page_email));
$page_type = htmlspecialchars(trim($page_type));
if (isset($_POST['page_fname'], $_POST['page_email'])) {
     if ($_POST['page_fname'] == '') {
       echo "<p><br><h2>Вы не указали имя!</h2><hr><A HREF=\"javascript:history.back()\" onMouseOver=\"window.status='Назад';return true\" class='spis3'>Вернуться назад</A><p align='right'><img src='img/mail.png'></p>";
     }
     else if ($_POST['page_email'] == '') {
       echo "<p><br><h2>Вы не указали e-mail!</h2><hr><A HREF=\"javascript:history.back()\" onMouseOver=\"window.status='Назад';return true\" class='spis3'>Вернуться назад</A><p align='right'><img src='img/mail.png'></p>";
     }
   
     else if(!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $page_email)) {
       echo "<p><br><h2>Вы указали неверный E-mail!</h2><hr><A HREF=\"javascript:history.back()\" onMouseOver=\"window.status='Назад';return true\" class='spis3'>Вернуться назад</A><p align='right'><img src='img/mail.png'></p>";
     }
     
     else {
       echo '<p><br><h2>Здравствуйте, ' . $_POST['page_fname'] . '!<br> Ваша информация успешно отправлена.<br><br> Спасибо за подписку!</h2><p align="right"><img src="img/mail.png"></p>';
$qr_text=Database::statement('insert into richstone_user set richstone_user_name=?,richstone_user_data=?,richstone_user_fio_fname=?,richstone_user_mail=?,richstone_user_pr=?', [($page_ip), ($page_date), ($page_fname), ($page_email), ($page_type)]);
include("db.php");    		
$connect = Database::connect();
$qr=Database::query('set names cp1251');	
$db=Database::selectDatabase($db_name);	
$qr=Database::query($qr_text);	
Database::close($connect);    
}
}
}

if ($res[0] == '1')

{
echo "<table><tr><td valign='top'>";
$datkon=date("d");
$datkon1=date("Ymd");
$qr=Database::query(Database::statement('SELECT * FROM news WHERE newsrash>=? order by id DESC', [($datkon1)]));

echo '
<div id="container">
<!------------------------------------- THE CONTENT ------------------------------------------------->
<div id="lofslidecontent45" class="lof-slidecontent lof-snleft">
<div class="preload"><div></div></div>
 <!-- MAIN CONTENT --> 
  <div class="lof-main-wapper">';
while ($news = Database::fetchRow($qr))
{


 $cut = substr($news[8], 0, 200);
 $find = '.';
 $pos = strrpos($cut, $find);
 $found =substr($news[8],0,$pos);
 $shorttext=$found.'<br>';

echo '
        <div class="lof-main-item">';


echo strip_tags($news[7], '<img>');


//'.$news[7].'           
echo'                 <div class="lof-main-item-desc">
                <h3><a target="_parent" title="" href="index.php?link=20&news='.$news[0].'">Подробнее...</a></h3>

             </div>
        </div>'; 
}
echo '
 </div>
  <!-- END MAIN CONTENT --> 
    <!-- NAVIGATOR -->

  <div class="lof-navigator-outer">
  		<ul class="lof-navigator">

';
$qrss=Database::query(Database::statement('SELECT * FROM news WHERE newsrash>=? order by id DESC', [($datkon1)]));
//$qrss=Database::query('SELECT * FROM news WHERE newsrash>='.$datkon.' order by id DESC');
while ($newss = Database::fetchRow($qrss))
{



echo '
            <li><div>';

echo strip_tags($newss[6], '<img>');


echo '<h3></h3><span class="mail3">'.$newss[1].'</span><br>'.$newss[3].'</div></li>';
}
echo '
        </ul>
  </div>
 </div>'; 
?>
<script type="text/javascript">
	var _lofmain =  $('lofslidecontent45');
	var _lofscmain = _lofmain.getElement('.lof-main-wapper');
	var _lofnavigator = _lofmain.getElement('.lof-navigator-outer .lof-navigator');
	var object = new LofFlashContent( _lofscmain, 
									  _lofnavigator,
									  _lofmain.getElement('.lof-navigator-outer'),
									   { fxObject:{ transition:Fx.Transitions.Quad.easeInOut,  duration:1200},
									 	 interval:6000,
							 			 direction:'opacity' } );
	object.start( true, _lofmain.getElement('.preload') );
</script>

<a href="http://www.it.rw/index.php?link=683"><h9><b>...Архив новостей...</b></h9></a>
<!-------------------------------------<p><a href="https://fest-sbv.by"><img class="nov" src="img/bazarr.jpg" width="750" height="125" /></a>
</p> END OF THE CONTENT ------------------------------------------------->
</div>

</td>

<!------------------------------------- Именинники ------------------------------------------------->

<!------------------------------------- Именинники=1 ------------------------------------------------->

<?php /*
$sql = Database::query("SELECT * FROM `dr` WHERE id");
while ($row = Database::fetchRow($sql))
if ($row[1]==2)
{
	echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	echo"<tr><td class='mail1' align='left'>";
	$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
 
 
 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
 {
 $dd = $rows['dr'] ?? '';
 $cut = substr($dd, 0, 6);
 $d=date('d.m.');
 
 
 if ($cut==$d)
 {
 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
 if ($rows['radiobutton']==1)
 { 
	 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
 }
 else if ($rows['radiobutton']==2)
 { 
	 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
 }
 else if ($rows['radiobutton']==3)
 {
	  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
 }
 else if ($rows['radiobutton']==4)
 {
	  $foto= "<p>".$rows['sfoto']."</p>";
 }
 else if ($rows['radiobutton']==5)
 {
	  $foto= "<p >".$rows['sfoto']."</p>";
 }
 else if ($rows['radiobutton']==6)
 { 
	 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
 }
 else if ($rows['radiobutton']==7)
 {
	  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
 }
 else 
 $foto="<p>".$rows['sfoto']."</p>";
 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
	<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
   </tr>
   <tr>
	 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
   </tr>
   <tr>
 <td class='mail1'><b>Поздравляем!!!</b>
 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
 echo "</td></tr></table><br>";
 }
 //}else {echo "Больше трех";}
 }
 //}
 echo "</td></tr>";

 echo "</table>";
 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
 echo"<tr><td class='mail1' align='left'>";

 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
 
 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
 {  
 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
 }
 
	  while ($rows = Database::fetchAssoc($sqls)) {
 $tomm_date=time()+60*60*24;
 $tom_date=date("d.m.",$tomm_date);
 $dd = $rows['dr'] ?? '';
 $cut = substr($dd, 0, 6);
 if ($tom_date==$cut)
 {
 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
 echo "</td></tr>";
 }
 }
 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
 while ($rows = Database::fetchAssoc($sqls)) {
 $tomm_date=time()+((60*60*24)*2);
 $tom_date=date("d.m.",$tomm_date);
 $dd = $rows['dr'] ?? '';
 $cut = substr($dd, 0, 6);
 if ($tom_date==$cut)
 {
 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
 
 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
 
 echo "</td></tr>";
 }
 $tomm_date=time()+((60*60*24)*3);
 $tom_date=date("d.m.",$tomm_date);
 $dd = $rows['dr'] ?? '';
 $cut = substr($dd, 0, 6);
 if ($tom_date==$cut)
 {
 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
 echo "</td></tr>";
 }
 }

 echo "</table>";


}
elseif($row[1]==3){
	echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	echo"<tr><td class='mail1' align='left'>";
	$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
 
 
 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
 {
 $dd = $rows['dr'] ?? '';
 $cut = substr($dd, 0, 6);
 $d=date('d.m.');
 
 
 if ($cut==$d)
 {
 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
 if ($rows['radiobutton']==1)
 { 
	 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
 }
 else if ($rows['radiobutton']==2)
 { 
	 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
 }
 else if ($rows['radiobutton']==3)
 {
	  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
 }
 else if ($rows['radiobutton']==4)
 {
	  $foto= "<p>".$rows['sfoto']."</p>";
 }
 else if ($rows['radiobutton']==5)
 {
	  $foto= "<p >".$rows['sfoto']."</p>";
 }
 else if ($rows['radiobutton']==6)
 { 
	 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
 }
 else if ($rows['radiobutton']==7)
 {
	  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
 }
 else 
 $foto="<p>".$rows['sfoto']."</p>";
 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
	<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
   </tr>
   <tr>
	 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
   </tr>
   <tr>
 <td class='mail1'><b>Поздравляем!!!</b>
 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
 echo "</td></tr></table><br>";
 }
 //}else {echo "Больше трех";}
 }

 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
 
 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
 {  
 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
 }
 
	  while ($rows = Database::fetchAssoc($sqls)) {
 $tomm_date=time()+60*60*24;
 $tom_date=date("d.m.",$tomm_date);
 $dd = $rows['dr'] ?? '';
 $cut = substr($dd, 0, 6);
 if ($tom_date==$cut)
 {
 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
 echo "</td></tr>";
 }
 }
 //}
 echo "</td></tr>";

 echo "</table>";
 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
 echo"<tr><td class='mail1' align='left'>";

 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
 while ($rows = Database::fetchAssoc($sqls)) {
 $tomm_date=time()+((60*60*24)*2);
 $tom_date=date("d.m.",$tomm_date);
 $dd = $rows['dr'] ?? '';
 $cut = substr($dd, 0, 6);
 if ($tom_date==$cut)
 {
 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
 
 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
 
 echo "</td></tr>";
 }
 $tomm_date=time()+((60*60*24)*3);
 $tom_date=date("d.m.",$tomm_date);
 $dd = $rows['dr'] ?? '';
 $cut = substr($dd, 0, 6);
 if ($tom_date==$cut)
 {
 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
 echo "</td></tr>";
 }
 }

 echo "</table>";

}

else                                                                                                         

{
	echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";

	echo"<tr><td class='mail1' align='left'>";
	$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
 
 
 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
 {
 $dd = $rows['dr'] ?? '';
 $cut = substr($dd, 0, 6);
 $d=date('d.m.');
 
 
 if ($cut==$d)
 {
 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
 if ($rows['radiobutton']==1)
 { 
	 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
 }
 else if ($rows['radiobutton']==2)
 { 
	 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
 }
 else if ($rows['radiobutton']==3)
 {
	  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
 }
 else if ($rows['radiobutton']==4)
 {
	  $foto= "<p>".$rows['sfoto']."</p>";
 }
 else if ($rows['radiobutton']==5)
 {
	  $foto= "<p >".$rows['sfoto']."</p>";
 }
 else if ($rows['radiobutton']==6)
 { 
	 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
 }
 else if ($rows['radiobutton']==7)
 {
	  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
 }
 else 
 $foto="<p>".$rows['sfoto']."</p>";
 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
	<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
   </tr>
   <tr>
	 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
   </tr>
   <tr>
 <td class='mail1'><b>Поздравляем!!!</b>
 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
 echo "</td></tr></table><br>";
 }
 //}else {echo "Больше трех";}
 }
 //}
 echo "</td></tr>";
 
 //echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
 
 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
 {  
 echo"<tr><strong><td class='mail1' align='left'>Завтра день рождения празднуют:</td></strong></tr>";
 }
 while ($rows = Database::fetchAssoc($sqls)) {
 $tomm_date=time()+60*60*24;
 $tom_date=date("d.m.",$tomm_date);
 $dd = $rows['dr'] ?? '';
 $cut = substr($dd, 0, 6);
 if ($tom_date==$cut)
 {
 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
 echo "</td></tr>";
 }}
 echo"<tr><td class='mail1' align='left'>";
 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	while ($rows = Database::fetchAssoc($sqls))
 {
 $tomm_date=time()+((60*60*24)*2);
 $tom_date=date("d.m.",$tomm_date);
 $dd = $rows['dr'] ?? '';
 $cut = substr($dd, 0, 6);
 if ($tom_date==$cut)
 {
 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
 echo "</td></tr>";
 }
 $tomm_date=time()+((60*60*24)*3);
 $tom_date=date("d.m.",$tomm_date);
 $dd = $rows['dr'] ?? '';
 $cut = substr($dd, 0, 6);
 if ($tom_date==$cut)
 {
 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
 echo "</td></tr>";
 }}
 echo "</table>";
}*/
//<tr><td class='zag2'>Именинники 1 столбец</td></tr>


/*
//echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");

$tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
{  
echo"<tr><strong><td class='mail1' align='left'>Завтра день рождения празднуют:</td></strong></tr>";
}
while ($rows = Database::fetchAssoc($sqls)) {
$tomm_date=time()+60*60*24;
$tom_date=date("d.m.",$tomm_date);
$dd = $rows['dr'] ?? '';
$cut = substr($dd, 0, 6);
if ($tom_date==$cut)
{
echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
$ipus = $_SERVER["REMOTE_ADDR"] ?? '';
echo "</td></tr>";
}}
echo"<tr><td class='mail1' align='left'>";
echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
   while ($rows = Database::fetchAssoc($sqls))
{
$tomm_date=time()+((60*60*24)*2);
$tom_date=date("d.m.",$tomm_date);
$dd = $rows['dr'] ?? '';
$cut = substr($dd, 0, 6);
if ($tom_date==$cut)
{
echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
$ipus = $_SERVER["REMOTE_ADDR"] ?? '';
echo "</td></tr>";
}
$tomm_date=time()+((60*60*24)*3);
$tom_date=date("d.m.",$tomm_date);
$dd = $rows['dr'] ?? '';
$cut = substr($dd, 0, 6);
if ($tom_date==$cut)
{
echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
$ipus = $_SERVER["REMOTE_ADDR"] ?? '';
echo "</td></tr>";
}}
echo "</table>";*/
?>
<!------------------------------------- Именинники=2 ------------------------------------------------->

<!------------------------------------- Важно=1 ------------------------------------------------->
<?php 
include("tema.php");
?>


<!------------------------------------- Важно=2 ------------------------------------------------->

<!------------------------------------- Важно=06 ------------------------------------------------->
<?php /*
$start = strtotime('2025-05-06 14:41:00');
$pro7 = strtotime('2025-05-07 00:03:00');
$pro8 = strtotime('2025-05-08 00:03:00');
$pro9 = strtotime('2025-05-09 00:03:00');
$pro10 = strtotime('2025-05-10 00:03:00');
$pro11 = strtotime('2025-05-11 00:03:00');
$pro12 = strtotime('2025-05-12 00:03:00');
$pro13 = strtotime('2025-05-13 00:03:00');
$pro14 = strtotime('2025-05-14 00:03:00');
$pro15 = strtotime('2025-05-15 00:03:00');
$pro16 = strtotime('2025-05-16 00:03:00');
$pro17 = strtotime('2025-05-17 00:03:00');
$pro18 = strtotime('2025-05-18 00:03:00');
$pro19 = strtotime('2025-05-19 00:03:00');
$pro20 = strtotime('2025-05-20 00:03:00');
$pro21 = strtotime('2025-05-21 00:03:00');
$pro22 = strtotime('2025-05-22 00:03:00');
$pro23 = strtotime('2025-05-23 00:03:00');
$pro24 = strtotime('2025-05-24 00:03:00');
$pro25 = strtotime('2025-05-25 00:03:00');
$pro26 = strtotime('2025-05-26 00:03:00');
$pro27 = strtotime('2025-05-27 00:03:00');
$end = strtotime('2025-05-28 00:03:00');
 
$current_time = time(); // Get the current time
 
if ($current_time < $start) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
	echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><td class='mail1' align='left'>.Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
} 
else if ($current_time >= $start && $current_time < $pro7) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
	echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
}
 else if ($current_time >= $pro7 && $current_time <= $pro8) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
	echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
} 
 else if ($current_time >= $pro8 && $current_time <= $pro9) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	 
	 //echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><strong><td class='mail1' align='left'>Завтра день рождения празднуют:</td></strong></tr>";
	 }
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }}
	 echo"<tr><td class='mail1' align='left'>";
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
		while ($rows = Database::fetchAssoc($sqls))
	 {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }}
	 echo "</table>";
} 
 else if ($current_time >= $pro9 && $current_time <= $pro10) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
		echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
	
} 
 else if ($current_time >= $pro10 && $current_time <= $pro11) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
	echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
} 
 else if ($current_time >= $pro11 && $current_time <= $pro12) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
	echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
} 
 else if ($current_time >= $pro12 && $current_time <= $pro13) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
	echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
} 
 else if ($current_time >= $pro13 && $current_time <= $pro14) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
	echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
} 
 else if ($current_time >= $pro14 && $current_time <= $pro15) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
		echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
	
} 
 else if ($current_time >= $pro15 && $current_time <= $pro16) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
		echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
	
} 
 else if ($current_time >= $pro16 && $current_time <= $pro17) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
	echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
} 
 else if ($current_time >= $pro17 && $current_time <= $pro18) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	 
	 //echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><strong><td class='mail1' align='left'>Завтра день рождения празднуют:</td></strong></tr>";
	 }
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }}
	 echo"<tr><td class='mail1' align='left'>";
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
		while ($rows = Database::fetchAssoc($sqls))
	 {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }}
	 echo "</table>";
} 
 else if ($current_time >= $pro18 && $current_time <= $pro19) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
		echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
	
} 
 else if ($current_time >= $pro19 && $current_time <= $pro20) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	 
	 //echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><strong><td class='mail1' align='left'>Завтра день рождения празднуют:</td></strong></tr>";
	 }
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }}
	 echo"<tr><td class='mail1' align='left'>";
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
		while ($rows = Database::fetchAssoc($sqls))
	 {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }}
	 echo "</table>";
} 
 else if ($current_time >= $pro20 && $current_time <= $pro21) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	 
	 //echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><strong><td class='mail1' align='left'>Завтра день рождения празднуют:</td></strong></tr>";
	 }
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }}
	 echo"<tr><td class='mail1' align='left'>";
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
		while ($rows = Database::fetchAssoc($sqls))
	 {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }}
	 echo "</table>";
} 
 else if ($current_time >= $pro21 && $current_time <= $pro22) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
	echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
} 
 else if ($current_time >= $pro22 && $current_time <= $pro23) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
		echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	
	 echo "</table>";
	 echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	 echo"<tr><td class='mail1' align='left'>";
	
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 }
	 
		  while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 }
	
	 echo "</table>";
	
} 
 else if ($current_time >= $pro23 && $current_time <= $pro24) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	 
	 //echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><strong><td class='mail1' align='left'>Завтра день рождения празднуют:</td></strong></tr>";
	 }
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }}
	 echo"<tr><td class='mail1' align='left'>";
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
		while ($rows = Database::fetchAssoc($sqls))
	 {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }}
	 echo "</table>";
} 
 else if ($current_time >= $pro24 && $current_time <= $pro25) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	 
	 //echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><strong><td class='mail1' align='left'>Завтра день рождения празднуют:</td></strong></tr>";
	 }
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }}
	 echo"<tr><td class='mail1' align='left'>";
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
		while ($rows = Database::fetchAssoc($sqls))
	 {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }}
	 echo "</table>";
} 
 else if ($current_time >= $pro25 && $current_time <= $pro26) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	 
	 //echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><strong><td class='mail1' align='left'>Завтра день рождения празднуют:</td></strong></tr>";
	 }
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }}
	 echo"<tr><td class='mail1' align='left'>";
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
		while ($rows = Database::fetchAssoc($sqls))
	 {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }}
	 echo "</table>";
} 
 else if ($current_time >= $pro26 && $current_time <= $pro27) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	 
	 //echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><strong><td class='mail1' align='left'>Завтра день рождения празднуют:</td></strong></tr>";
	 }
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }}
	 echo"<tr><td class='mail1' align='left'>";
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
		while ($rows = Database::fetchAssoc($sqls))
	 {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }}
	 echo "</table>";
} 

 else if ($current_time >= $pro27 && $current_time <= $end) {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	 
	 //echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><strong><td class='mail1' align='left'>Завтра день рождения празднуют:</td></strong></tr>";
	 }
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }}
	 echo"<tr><td class='mail1' align='left'>";
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
		while ($rows = Database::fetchAssoc($sqls))
	 {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }}
	 echo "</table>";
} 
else {
    $sql = Database::query("SELECT * FROM `dr` WHERE id");
	while ($row = Database::fetchRow($sql))
echo"<td valign='top' class='ottt1'><table cellpadding='0' cellspacing='0' border='0' >";
	
		echo"<tr><td class='mail1' align='left'>";
		$sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 
	 for ($i=0; $i<($rows = Database::fetchAssoc($sqls)); $i++) 
	 {
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 $d=date('d.m.');
	 
	 
	 if ($cut==$d)
	 {
	 echo "<table  cellpadding='0' cellspacing='0' border='0' ><tr>";
	 if ($rows['radiobutton']==1)
	 { 
		 $foto= "<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==2)
	 { 
		 $foto= "<p><img src='img/def2.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==3)
	 {
		  $foto= "<p><img src='img/def3(57).png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==4)
	 {
		  $foto= "<p>".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==5)
	 {
		  $foto= "<p >".$rows['sfoto']."</p>";
	 }
	 else if ($rows['radiobutton']==6)
	 { 
		 $foto= "<p ><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else if ($rows['radiobutton']==7)
	 {
		  $foto="<p><img src='img/def1.png' title='Отсутствует изображение'></p>";
	 }
	 else 
	 $foto="<p>".$rows['sfoto']."</p>";
	 echo" <td rowspan='3' height='57' width='57' class='mail2'>".$foto."</td>
		<td class='mail1'>".$rows['lname']."&nbsp".$rows['fname']."</td>
	   </tr>
	   <tr>
		 <td class='mail1'>".$rows['name']." (".$rows['otdel'].")</td>
	   </tr>
	   <tr>
	 <td class='mail1'><b>Поздравляем!!!</b>
	 <a class=highslide onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href='dp.php?code=$rows[id]'></a>";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr></table><br>";
	 }
	 //}else {echo "Больше трех";}
	 }
	 //}
	 echo "</td></tr>";
	 
	 //echo"<tr><td class='mail1' align='left'>Завтра день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5)");
	 
	 $tom_date = date('d.m.', strtotime('tomorrow'));
if ($tom_date !== ($cut ?? ''))
	 {  
	 echo"<tr><strong><td class='mail1' align='left'>Завтра день рождения празднуют:</td></strong></tr>";
	 }
	 while ($rows = Database::fetchAssoc($sqls)) {
	 $tomm_date=time()+60*60*24;
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }}
	 echo"<tr><td class='mail1' align='left'>";
	 echo"<tr><td class='mail1' align='left'><br>В ближайшие 3 дня, день рождения празднуют:</td></tr>";
	 $sqls = Database::query("SELECT * FROM `richstone_katalog` WHERE (`radiobutton` between 1 and 5) ORDER BY dr ASC");
		while ($rows = Database::fetchAssoc($sqls))
	 {
	 $tomm_date=time()+((60*60*24)*2);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }
	 $tomm_date=time()+((60*60*24)*3);
	 $tom_date=date("d.m.",$tomm_date);
	 $dd = $rows['dr'] ?? '';
	 $cut = substr($dd, 0, 6);
	 if ($tom_date==$cut)
	 {
	 echo "<tr><td class='mail3'><b>".$rows['lname']."&nbsp".$rows['fname']."&nbsp".$rows['name']."</b> - (".$rows['otdel'].")";
	 $ipus = $_SERVER["REMOTE_ADDR"] ?? '';
	 echo "</td></tr>";
	 }}
	 echo "</table>";
}*/
?>
<!------------------------------------- Важно=26 ------------------------------------------------->
<!------------------------------------- Именинники конец 1 столбец ------------------------------------------------->
<!------------------------------------- Именинники  2 столбец------------------------------------------------->
<!------------------------------------- Именинники ------------------------------------------------->

 <!-- именники конец 2 столбец  -->
</td></tr></table>
<tr><td align='left' valign='top'  colspan='2'>
</br>
<p></p>
<p>
</p>
<table cellpadding="0" cellspacing="0" border="0"  class="novv" width="100%">
<tr>
<td align="left" width="20%"  valign="top">
<a href="http://www.it.rw/index.php?link=263"><img class="nov" src="img/istoria.jpg" width="300" height="100" /></a>
</td>
<td align="left" width="20%"   valign="top">
<a href="https://specreport.belta.by/memory"><img class="nov4" src="img/bol.jpg" width="300" height="100" /></a>
</td>
<td align="left" width="20%"  valign="top">
<a href="ed/upload-files/docs/BCH_SOC_seti.jpg"><img class="nov44" src="img/BCH_s.jpg" width="300" height="100" /></a>
</td>
<td align="left" width="20%"  valign="top">
<img  src="ed/upload-files/2026/foto/god_bel_z.jpg" width="300" height="100" />
</td>
<td align="left" width="20%"  valign="top">
<a href="./index.php?link=20&news=1156">
<img  src="ed/upload-files/2026/foto/tech_bzdd.JPG" style="padding-right: 45px;" width="300" height="100" />
</a>
</td>

</table>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
<td align="center" width="34%" class="zag2" valign="top">Курсы валют Национального Банка РБ
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
<td class="tl" width="27" height="26"></td>
<td class="tc">&nbsp;</td>
<td class="tr" width="27" height="26"></td>
</tr>
<tr>
<td class="ml" width="27" height="26"></td>
<td class="mc" valign="top" align="center"> <?php  include("kursall.php") ?></td>
<td class="mr" width="27" height="26"></td>
</tr>
<tr>
<td class="bl" width="27" height="26"></td>
<td class="bc">&nbsp;</td>
<td class="br" width="27" height="26"></td>
</tr>
</table>
</td>

<td align="center" width="33%" class="zag2"  valign="top">Прогноз погоды
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
<td class="tl" width="27" height="26"></td>
<td class="tc">&nbsp;</td>
<td class="tr" width="27" height="26"></td>
</tr>
<tr>
<td class="ml" width="27" height="26"></td>
<td class="mc" valign="top" align="center"> <?php  include("pogodat.php") ?></td>
<td class="mr" width="27" height="26"></td>
</tr>
<tr>
<td class="bl" width="27" height="26"></td>
<td class="bc">&nbsp;</td>
<td class="br" width="27" height="26"></td>
</tr>
</table>
</td>

<td align="center" width="33%" class="zag2" valign="top">Последние изменения на сайте
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
<td class="tl" width="27" height="26"></td>
<td class="tc">&nbsp;</td>
<td class="tr" width="27" height="26"></td>
</tr>
<tr>
<td class="ml" width="27" height="26"></td>
<td class="mc"><?php  include("izmena.php"); ?><br>
<?php /*
<div class="arrowlistmenu">
<h3 class="expandable">&darr;Изменения за Прошлый месяц&darr;</h3>
<ul class="categoryitems">
<?php include("izmenalld.php"); ?>
</ul>
</div>
<div class="arrowlistmenu">
<h3 class="expandable">&darr;Изменения за месяц&darr;</h3>
<ul class="categoryitems">
<?php include("izmenall.php"); ?>
</ul>
</div>*/
?>
<td class="mr" width="27" height="26"></td>
</tr>
<tr>
<td class="bl" width="27" height="26"></td>
<td class="bc">&nbsp;</td>
<td class="br" width="27" height="26"></td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center" width="33%" class="zag2"  valign="top"></td>
<td align="center" width="33%" class="zag2"  valign="top"></td>
<td align="center" width="33%" class="zag2" valign="top"></td>
</tr>
</table>
<?php
echo '<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td class="ott">
<h1>&nbsp;Администрация ресурса рада приветствовать вас на Официальном сайте РУП "Главный расчетный информационный центр" БЖД</h1>
<p><strong>Важная информация! </strong><strong>&nbsp;</strong><strong>&nbsp;</strong></p>
<p>Прогноз погоды на сайте показывается для того города, из которого вы зашли на сайт.</p>
<p>Для корректного отображения web-сайта, необходимо обновить свой браузер, данное обновление требуется если установлен Internet Explorer 5,6. Обновить этот и другие браузеры можно через&nbsp;страницу - "<a class="spis3" href="?link=83">Интернет браузеры</a>".</p>
<p>Поиск на сайте работает по ФИО, телефону, комнате и отделу. Ввод данных в поле поиска можно осуществлять с заглавных и прописных букв, с русской и английской раскладки клавиатуры. В поиск включены работники отделов предприятия РУП "Главный расчетный информационный центр БЖД"&nbsp;<strong>.</strong></p>
<p>В поиск добавлена новая функция! Теперь при поиске человека в справочнике можно увидеть, когда будет его день рождения!</p>
<p>Можно отправлять письма c сайта при поиске человека или с общего списка отдела, но только если есть запись с e-mail. Осуществляется это при нажатии на фото или аватар человека.</p>
<p>Для своевременного получения информации на сайте, необходимо подписаться на информационные ресурсы соответствующей тематики.</p>
<p>&nbsp;</p>
<h1><strong style="text-transform: uppercase;">НОВОСТИ НА ОФИЦИАЛЬНЫХ КАНАЛАХ БЖД В СОЦИАЛЬНЫХ СЕТЯХ</strong><span style="text-transform: uppercase;">&nbsp;:</span><span style="text-transform: uppercase;"><a href="https://vk.com/belrw_official"> </a></span><span style="text-transform: uppercase;"><a href="https://vk.com/belrw_official"><img src="ed/upload-files/logos/VK.png" alt="" width="20" height="20" /></a> <a href="https://twitter.com/belrw_official"><img src="ed/upload-files/logos/Twitter.png" alt="" width="20" height="20" /></a> <a href="https://www.facebook.com/belrw_official"><img src="ed/upload-files/logos/Facebook.png" alt="" width="20" height="20" /></a> <a href="https://invite.viber.com/?g2=AQBCFtCCOu%2FCtUnavBb2YNIsoWGL3KH1OHmrqJFk97dCtgVLs54DZfcVuKPw%2FNxp"><img src="ed/upload-files/logos/Viber.png" alt="" width="20" height="20" /></a> <a href="https://t.me/belrw_official"><img src="ed/upload-files/logos/Telegram.png" alt="" width="20" height="20" /></a></span></h1>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="text-transform: uppercase;"><br /><br /></span></p>
</td>
</tr>
</tbody>
</table>';
}
//<div style="position:relative; z-index:100;" id="contentBody">
//</div>

/*if ($object_news != '0')
{
$sql = Database::query(Database::statement('SELECT * FROM `news` WHERE id=?', [(int)($object_news)]));
while ($row = Database::fetchRow($sql))


{
echo "<table cellpadding='0' cellspacing='0' border='0' width='100%'>";
echo "<tr><td><h2>".$row[1]."| ".$row[2]."</h2></td></tr>";
/*| ".$row[2]." */
/*echo "<tr><td><h1>".$row[3]."</h1></td></tr>";*/
/*echo "<tr><td>
<table cellpadding='0' cellspacing='0' border='0' width='100%'>
<tr>
<td class='tl' width='27' height='26'></td>
<td class='tc'>&nbsp;</td>
<td class='tr' width='27' height='26'></td>
</tr>
<tr>
<td class='ml' width='27' height='26'></td>

<td class='mc'><div align='center'>".$row[7]."</div><br>".$row[8]."</br>";
include("video.php");
echo	"</td>
<td class='mr' width='27' height='26'></td>
</tr>
<tr>
<td class='bl' width='27' height='26'></td>
<td class='bc'>&nbsp;</td>
<td class='br' width='27' height='26'></td>
</tr>
</table>


</td></tr>";

echo "</table>";

}
}*/
$sql = Database::query(Database::statement('SELECT * FROM `news` WHERE id=?', [(int)($object_news)]));
while ($row = Database::fetchRow($sql))
if ($row[11]==1)
{
	{
		$sql = Database::query(Database::statement('SELECT * FROM `news` WHERE id=?', [(int)($object_news)]));
		while ($row = Database::fetchRow($sql))
		
		{
		echo "<table cellpadding='0' cellspacing='0' border='0' width='100%'>";
		echo "<tr><td><h2>".$row[1]."| ".$row[2]."</h2></td></tr>";
		/*| ".$row[2]." */
		/*echo "<tr><td><h1>".$row[3]."</h1></td></tr>";*/
		echo "<tr><td>
		<table cellpadding='0' cellspacing='0' border='0' width='100%'>
		<tr>
		<td class='tl' width='27' height='26'></td>
		<td class='tc'>&nbsp;</td>
		<td class='tr' width='27' height='26'></td>
		</tr>
		<tr>
		<td class='ml' width='27' height='26'></td>
		
		<td class='mc'><br>".$row[8]."</br>";
		include("video.php");
		echo	"</td>
		<td class='mr' width='27' height='26'></td>
		</tr>
		<tr>
		<td class='bl' width='27' height='26'></td>
		<td class='bc'>&nbsp;</td>
		<td class='br' width='27' height='26'></td>
		</tr>
		</table>
		</td></tr>";
		echo "</table>";
		
		}
		}
}
else                                                                                                         

{
	{
		$sql = Database::query(Database::statement('SELECT * FROM `news` WHERE id=?', [(int)($object_news)]));
		while ($row = Database::fetchRow($sql))	
		{
		echo "<table cellpadding='0' cellspacing='0' border='0' width='100%'>";
		echo "<tr><td><h2>".$row[1]."| ".$row[2]."</h2></td></tr>";
		/*| ".$row[2]." */
		/*echo "<tr><td><h1>".$row[3]."</h1></td></tr>";*/
		echo "<tr><td>
		<table cellpadding='0' cellspacing='0' border='0' width='100%'>
		<tr>
		<td class='tl' width='27' height='26'></td>
		<td class='tc'>&nbsp;</td>
		<td class='tr' width='27' height='26'></td>
		</tr>
		<tr>
		<td class='ml' width='27' height='26'></td>
		
		<td class='mc'><div align='center'>".$row[7]."</div><br>".$row[8]."</br>";
		include("video.php");
		echo	"</td>
		<td class='mr' width='27' height='26'></td>
		</tr>
		<tr>
		<td class='bl' width='27' height='26'></td>
		<td class='bc'>&nbsp;</td>
		<td class='br' width='27' height='26'></td>
		</tr>
		</table>
		
		
		</td></tr>";
		
		echo "</table>";
		
		}
		}
   
}
/*
switch ($object_news) {
	case '862':  case '866': case '871': case '873': case '874': case '875': case '876' : case '892' : case '891' :  case '899' : case '904' : case '908' : case '909' : case '911' : case '910' : case '917' : case '921' : case '923' : case '929' : case '930' : case '936' : case '937' : case '938' : case '953' : case '959' : case '961' : case '965' : case '964' : case '966' : case '963' : case '962' : case '969' : case '973' : case '976' : case '977' : case '978' : case '981' : case '986' : case '989' :
		{
			$sql = Database::query(Database::statement('SELECT * FROM `news` WHERE id=?', [(int)($object_news)]));
			while ($row = Database::fetchRow($sql))
			
			{
			echo "<table cellpadding='0' cellspacing='0' border='0' width='100%'>";
			echo "<tr><td><h2>".$row[1]."| ".$row[2]."</h2></td></tr>";
			/*| ".$row[2]." */
			/*echo "<tr><td><h1>".$row[3]."</h1></td></tr>";
			echo "<tr><td>
			<table cellpadding='0' cellspacing='0' border='0' width='100%'>
			<tr>
			<td class='tl' width='27' height='26'></td>
			<td class='tc'>&nbsp;</td>
			<td class='tr' width='27' height='26'></td>
			</tr>
			<tr>
			<td class='ml' width='27' height='26'></td>
			
			<td class='mc'><br>".$row[8]."</br>";
			include("video.php");
			echo	"</td>
			<td class='mr' width='27' height='26'></td>
			</tr>
			<tr>
			<td class='bl' width='27' height='26'></td>
			<td class='bc'>&nbsp;</td>
			<td class='br' width='27' height='26'></td>
			</tr>
			</table>
			</td></tr>";
			echo "</table>";
			
			}
			}
			
		break;
	default:
	{
		$sql = Database::query(Database::statement('SELECT * FROM `news` WHERE id=?', [(int)($object_news)]));
		while ($row = Database::fetchRow($sql))	
		{
		echo "<table cellpadding='0' cellspacing='0' border='0' width='100%'>";
		echo "<tr><td><h2>".$row[1]."| ".$row[2]."</h2></td></tr>";
		/*| ".$row[2]." */
		/*echo "<tr><td><h1>".$row[3]."</h1></td></tr>";
		echo "<tr><td>
		<table cellpadding='0' cellspacing='0' border='0' width='100%'>
		<tr>
		<td class='tl' width='27' height='26'></td>
		<td class='tc'>&nbsp;</td>
		<td class='tr' width='27' height='26'></td>
		</tr>
		<tr>
		<td class='ml' width='27' height='26'></td>
		
		<td class='mc'><div align='center'>".$row[7]."</div><br>".$row[8]."</br>";
		include("video.php");
		echo	"</td>
		<td class='mr' width='27' height='26'></td>
		</tr>
		<tr>
		<td class='bl' width='27' height='26'></td>
		<td class='bc'>&nbsp;</td>
		<td class='br' width='27' height='26'></td>
		</tr>
		</table>
		
		
		</td></tr>";
		
		echo "</table>";
		
		}
		}
		
		break;
}

*/

if ($res[0] == '581')
{
	/*echo "<div><h2><video controls='' src='ed/upload-files/video_elektrobez1/1.mov' width='440' height='262'>&nbsp;
	<div style='text-align: left;'><br></div></video>Video in Text</h2>&nbsp;<h2><video controls=''src='ed/upload-files/video_elektrobez1/2.mov' width='440' height='260'></video>Video in Text</h2>&nbsp;
	<video controls='' src='ed/upload-files/video_elektrobez1/3.mov' width='440' height='260'></video></div>&nbsp;
	<div style='text-align: center;'>
	<video controls='' src='ed/upload-files/video_elektrobez1/4.mov' width='440' height='260'></video>&nbsp;
	<video controls='' src='ed/upload-files/video_elektrobez1/5.mov' width='440' height='260'></video>&nbsp;
	<video controls='' src='ed/upload-files/video_elektrobez1/6.mov' width='440' height='260'></video></div>
	<div style='text-align: center;'><video controls='' src='ed/upload-files/video_elektrobez1/7.mov' width='440' height='262' >
	</video></div></br></br></br>";*/
/*echo '<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td class="tl" width="27" height="26">&nbsp;</td>
<td class="tc">&nbsp;</td>
<td class="tr" width="27" height="26">&nbsp;</td>
</tr>
<tr>
<td class="ml" width="27" height="26">&nbsp;<span style="white-space: pre;"> </span></td>
<td class="mc">
<p style="text-align: center;">&nbsp;</p>
<p>sadasdasdsadasda</p>
<p style="text-align: justify;"><strong><br /></strong></p>
</td>
<td class="mr" width="27" height="26">&nbsp;</td>
</tr>
<tr>
<td class="bl" width="27" height="26">&nbsp;</td>
<td class="bc">&nbsp;</td>
<td class="br" width="27" height="26">&nbsp;</td>
</tr>
</tbody>
</table>';*/
/*<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td class="tl" width="27" height="26">&nbsp;</td>
<td class="tc">&nbsp;</td>
<td class="tr" width="27" height="26">&nbsp;</td>
</tr>
<tr>
<td class="ml" width="27" height="26">&nbsp;<span style="white-space: pre;"> </span></td>
<td class="mc">
<p style="text-align: center;">&nbsp;</p>
<p style="padding-left: 30px; text-align: center;"><span style="font-size: xx-large;"><strong><span style="font-family: arial, helvetica, sans-serif;">Видеоролики по охране труда и электробезопасности</span></strong></span></p>
<p style="text-align: center; padding-left: 30px;">&nbsp;</p>
<table style="margin-left: auto; margin-right: auto;" border="0">
<tbody>
<tr>
<td align="center" valign="top">
<p>
<object classid="clsid:6bf52a52-394a-11d3-b153-00c04f79faa6" width="400" height="400" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701">
<param name="autostart" value="false" />
<param name="name" value="Видеоролик РУП Минскэнерго об электробезопасности в быту" />
<param name="url" value="ed/upload-files/video_elektrobez/Vidoerolik RUP Minskenergo_ob electrobezopasnosty v bytu.mov" />
<param name="src" value="ed/upload-files/video_elektrobez/Vidoerolik RUP Minskenergo_ob electrobezopasnosty v bytu.mov" /><embed type="application/x-mplayer2" width="400" height="400" src="ed/upload-files/video_elektrobez/Vidoerolik RUP Minskenergo_ob electrobezopasnosty v bytu.mov" url="ed/upload-files/video_elektrobez/Vidoerolik RUP Minskenergo_ob electrobezopasnosty v bytu.mov" name="Видеоролик РУП Минскэнерго об электробезопасности в быту" autostart="false">&nbsp;</embed>
</object>
</p>
<p>Видеоролик РУП Минскэнерго Профилактика</p>
<p>проникновения детей на энергообъекты</p>
<p><br /><br /></p>
</td>
<td align="center" valign="top">
<p>
<object classid="clsid:6bf52a52-394a-11d3-b153-00c04f79faa6" width="400" height="400" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701">
<param name="autostart" value="false" />
<param name="name" value="Видеоролик РУП Минскэнерго Профилактика проникновения детей на энергообъекты" />
<param name="url" value="ed/upload-files/video_elektrobez/Vidoerolik RUP Minskenergo_Profilactika proniknoveniya detey na energoobecty.mov" />
<param name="src" value="ed/upload-files/video_elektrobez/Vidoerolik RUP Minskenergo_Profilactika proniknoveniya detey na energoobecty.mov" /><embed type="application/x-mplayer2" width="400" height="400" src="ed/upload-files/video_elektrobez/Vidoerolik RUP Minskenergo_Profilactika proniknoveniya detey na energoobecty.mov" url="ed/upload-files/video_elektrobez/Vidoerolik RUP Minskenergo_Profilactika proniknoveniya detey na energoobecty.mov" name="Видеоролик РУП Минскэнерго Профилактика проникновения детей на энергообъекты" autostart="false">&nbsp;</embed>
</object>
</p>
<p>Видеоролик РУП Минскэнерго об</p>
<p>электробезопасности в быту</p>
<p><br /><br /></p>
</td>
<td align="center" valign="top">
<p>
<object classid="clsid:6bf52a52-394a-11d3-b153-00c04f79faa6" width="400" height="400" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701">
<param name="autostart" value="false" />
<param name="name" value="Видеоролик РУП Минскэнерго об электробезопасности при производстве строительных работ" />
<param name="url" value="ed/upload-files/video_elektrobez/Vidoerolik RUP Minskenergo_ob electrobezopasnosty pri proizvodstve stoit rabot.mov" />
<param name="src" value="ed/upload-files/video_elektrobez/Vidoerolik RUP Minskenergo_ob electrobezopasnosty pri proizvodstve stoit rabot.mov" /><embed type="application/x-mplayer2" width="400" height="400" src="ed/upload-files/video_elektrobez/Vidoerolik RUP Minskenergo_ob electrobezopasnosty pri proizvodstve stoit rabot.mov" url="ed/upload-files/video_elektrobez/Vidoerolik RUP Minskenergo_ob electrobezopasnosty pri proizvodstve stoit rabot.mov" name="Видеоролик РУП Минскэнерго об электробезопасности при производстве строительных работ" autostart="false">&nbsp;</embed>
</object>
</p>
<p>Видеоролик РУП Минскэнерго об</p>
<p>электробезопасности при производстве строительных работ</p>
<p><br /><br /></p>
</td>
</tr>
<tr>
<td align="center" valign="top">
<p>
<object classid="clsid:6bf52a52-394a-11d3-b153-00c04f79faa6" width="400" height="400" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701">
<param name="autostart" value="false" />
<param name="name" value="Высокое напряжение убивает без касания провода.Цени свою жизнь!" />
<param name="url" value="ed/upload-files/video_elektrobez/Visokor napryajenie ybivaet bez kasaniya provoda.mov" />
<param name="src" value="ed/upload-files/video_elektrobez/Visokor napryajenie ybivaet bez kasaniya provoda.mov" /><embed type="application/x-mplayer2" width="400" height="400" src="ed/upload-files/video_elektrobez/Visokor napryajenie ybivaet bez kasaniya provoda.mov" url="ed/upload-files/video_elektrobez/Visokor napryajenie ybivaet bez kasaniya provoda.mov" name="Высокое напряжение убивает без касания провода.Цени свою жизнь!" autostart="false"></embed>
</object>
</p>
<p>Высокое напряжение убивает без касания провода.</p>
<p>Цени свою жизнь!</p>
<p><br /><br /></p>
</td>
<td align="center" valign="top">
<p>
<object classid="clsid:6bf52a52-394a-11d3-b153-00c04f79faa6" width="400" height="400" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701">
<param name="autostart" value="false" />
<param name="name" value="Рыбалка вблизи энергетических объектов, особенно вблизи линий электропередачи - смертельно опасна!" />
<param name="url" value="ed/upload-files/video_elektrobez/Rybalka vblizi energo obectov.mov" />
<param name="src" value="ed/upload-files/video_elektrobez/Rybalka vblizi energo obectov.mov" /><embed type="application/x-mplayer2" width="400" height="400" src="ed/upload-files/video_elektrobez/Rybalka vblizi energo obectov.mov" url="ed/upload-files/video_elektrobez/Rybalka vblizi energo obectov.mov" name="Рыбалка вблизи энергетических объектов, особенно вблизи линий электропередачи - смертельно опасна!" autostart="false"></embed>
</object>
</p>
<p>Рыбалка вблизи энергетических объектов,</p>
<p>особенно вблизи линий электропередачи - смертельно опасна!!!</p>
<p><br /><br /></p>
</td>
<td style="text-align: justify;" align="center" valign="top">
<p>&nbsp; &nbsp;&nbsp;      
<object classid="clsid:6bf52a52-394a-11d3-b153-00c04f79faa6" width="400" height="400" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701">
<param name="autostart" value="false" />
<param name="name" value="Цветной металл не дороже жизни!" />
<param name="url" value="ed/upload-files/video_elektrobez/Cvetnoy metal ne dorozhe zhizni.mov" />
<param name="src" value="ed/upload-files/video_elektrobez/Cvetnoy metal ne dorozhe zhizni.mov" /><embed type="application/x-mplayer2" width="400" height="400" src="ed/upload-files/video_elektrobez/Cvetnoy metal ne dorozhe zhizni.mov" url="ed/upload-files/video_elektrobez/Cvetnoy metal ne dorozhe zhizni.mov" name="Цветной металл не дороже жизни!" autostart="false"></embed>
</object>
</p>
<p style="text-align: center;">Цветной металл не дороже жизни!!!</p>
<p>&nbsp;</p>
<p><br /><br /></p>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center" valign="top">
<p>
<object classid="clsid:6bf52a52-394a-11d3-b153-00c04f79faa6" width="400" height="400" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701">
<param name="autostart" value="false" />
<param name="name" value="Электробезопасность при проведении сельскохозяйственных работ" />
<param name="url" value="ed/upload-files/video_elektrobez/Electrobezopasnost pri provedenii selhoz rabot.mov" />
<param name="src" value="ed/upload-files/video_elektrobez/Electrobezopasnost pri provedenii selhoz rabot.mov" /><embed type="application/x-mplayer2" width="400" height="400" src="ed/upload-files/video_elektrobez/Electrobezopasnost pri provedenii selhoz rabot.mov" url="ed/upload-files/video_elektrobez/Electrobezopasnost pri provedenii selhoz rabot.mov" name="Электробезопасность при проведении сельскохозяйственных работ" autostart="false"></embed>
</object>
</p>
<p>Электробезопасность при проведении сельскохозяйственных работ</p>
<p>&nbsp;</p>
</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
<p style="padding-left: 30px; text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><strong><br /></strong></p>
</td>
<td class="mr" width="27" height="26">&nbsp;</td>
</tr>
<tr>
<td class="bl" width="27" height="26">&nbsp;</td>
<td class="bc">&nbsp;</td>
<td class="br" width="27" height="26">&nbsp;</td>
</tr>
</tbody>
</table>*/
/************************************************************************ */
/*echo "<table border='0' cellspacing='0' cellpadding='0' width='100%'>
<tbody>
<tr>
<td class='tl' width='27' height='26'>&nbsp;</td>
<td class='tc'>&nbsp;</td>
<td class='tr' width='27' height='26'>&nbsp;</td>
</tr>
<tr>
<td class='ml' width='27' height='26'>&nbsp;</td>
<td class='mc'><div style='text-align: center;'><video controls='' src='http://www.it.rw/ed/upload-files/video_elektrobez1/1.mov' width='440' height='262'>&nbsp;
<div style='text-align: left;'><br></div></video>&nbsp;<video controls=''src='http://www.it.rw/ed/upload-files/video_elektrobez1/2.mov' width='440' height='260'></video>&nbsp;
<video controls='' src='http://www.it.rw/ed/upload-files/video_elektrobez1/3.mov' width='440' height='260'></video></div>&nbsp;
<div style='text-align: center;'>
<video controls='' src='http://www.it.rw/ed/upload-files/video_elektrobez1/4.mov' width='440' height='260'></video>&nbsp;
<video controls='' src='http://www.it.rw/ed/upload-files/video_elektrobez1/5.mov' width='440' height='260'></video>&nbsp;
<video controls='' src='http://www.it.rw/ed/upload-files/video_elektrobez1/6.mov' width='440' height='260'></video></div>
<div style='text-align: center;'><video controls='' src='http://www.it.rw/ed/upload-files/video_elektrobez1/7.mov' width='440' height='262' >
</video></div></br></br></br></td>
<td class='mr' width='27' height='26'>&nbsp;</td>
</tr>
<tr>
<td class='bl' width='27' height='26'>&nbsp;</td>
<td class='bc'>&nbsp;</td>
<td class='br' width='27' height='26'>&nbsp;</td>
</tr>
</tbody>
</table>";*/
/************************************************************************ */

/*echo "<div style='text-align: center;'><video controls='' src='http://www.it.rw/ed/upload-files/video_elektrobez1/1.mov' width='440' height='262'>&nbsp;
<div style='text-align: left;'><br></div></video>&nbsp;<video controls=''src='http://www.it.rw/ed/upload-files/video_elektrobez1/2.mov' width='440' height='260'></video>&nbsp;
<video controls='' src='http://www.it.rw/ed/upload-files/video_elektrobez1/3.mov' width='440' height='260'></video></div>&nbsp;
<div style='text-align: center;'>
<video controls='' src='http://www.it.rw/ed/upload-files/video_elektrobez1/4.mov' width='440' height='260'></video>&nbsp;
<video controls='' src='http://www.it.rw/ed/upload-files/video_elektrobez1/5.mov' width='440' height='260'></video>&nbsp;
<video controls='' src='http://www.it.rw/ed/upload-files/video_elektrobez1/6.mov' width='440' height='260'></video></div>
<div style='text-align: center;'><video controls='' src='http://www.it.rw/ed/upload-files/video_elektrobez1/7.mov' width='440' height='262' >
</video></div></br></br></br>";*/
}
if ($res[0] == '21')
{
if (isset($object_arh))
{
echo "<h2>Архив новостей за $object_arh год. 
<a href='index.php?link=20&arh=2011' class='spis9'>2011 год</a>, 
<a href='index.php?link=20&arh=2012' class='spis9'>2012 год</a>, 
<a href='index.php?link=20&arh=2013' class='spis9'>2013 год</a>,
<a href='index.php?link=20&arh=2014' class='spis9'>2014 год</a>,
<a href='index.php?link=20&arh=2015' class='spis9'>2015 год</a>,
<a href='index.php?link=20&arh=2016' class='spis9'>2016 год</a>,
<a href='index.php?link=20&arh=2017' class='spis9'>2017 год</a>,
<a href='index.php?link=20&arh=2018' class='spis9'>2018 год</a>,
<a href='index.php?link=20&arh=2019' class='spis9'>2019 год</a>,
<a href='index.php?link=20&arh=2020' class='spis9'>2020 год</a>,
<a href='index.php?link=20&arh=2021' class='spis9'>2021 год</a>,
<a href='index.php?link=20&arh=2022' class='spis9'>2022 год</a>,
<a href='index.php?link=20&arh=2023' class='spis9'>2023 год</a>,
<a href='index.php?link=20&arh=2024' class='spis9'>2024 год</a>,
<a href='index.php?link=20&arh=2025' class='spis9'>2025 год</a>,
<a href='index.php?link=20&arh=2026' class='spis9'>2026 год</a>
</h2>";

$result = Database::query("SELECT * FROM `news` WHERE  key_news=1 ORDER BY dt DESC");
print('<table border="0" width="100%" cellpadding="0" cellspacing="0">'); 		
while($res=Database::fetchRow($result))
{
$second = substr($res[1],6,4);
if ($second==$object_arh)
{
$fl=1; 		  
if($k==0){
print('<tr align="center"> '); }
print('<td align="center" valign="top">');
echo " <table width='100%' border='0' cellpadding='0' cellspacing='0' height='100%'>
<tr>
   <td valign='top' align='center'>";
print ("<div class='radius'>
$res[6]
$res[1]<br>
$res[3]<br>
<a class='spis9' href='index.php?link=20&news=$res[0]'})\">Подробнее</a>
</div>"); 	 	 
echo ("</td>
</tr>
</table>");                                                                                                      
print('</td>'); 		 
$k=$k+1; 	 	  
if($k==6){ $k=0;
print('</tr> ');} 	}} 	  
if($k!=2)
{print('</tr> ');} 	  
print('</table>');
}
else 
{
echo "<table cellpadding='0' cellspacing='0' border='0' width='100%' >";
echo "<tr><td valign='top' colspan='4'><h2>Последние 4 новости</h2></td></tr><tr>";

$sql1 = Database::query("SELECT * FROM `news` WHERE  key_news=1 ORDER BY id DESC LIMIT 4");
while ($roww = Database::fetchRow($sql1))

{
echo "<td valign='top' width='25%'>
<table cellpadding='0' cellspacing='0' border='0' width='100%'>
<tr>
<td class='tl' width='27' height='26'></td>
<td class='tc'>&nbsp;</td>
<td class='tr' width='27' height='26'></td>
</tr>
<tr>
<td class='ml' width='27' height='26'></td>
<td class='mc'>


<table  cellpadding='0' cellspacing='0' border='0'>
<tr>
<td valign='top' width='70' rowspan='2'>".$roww[6]."</td>
<td align='left' valign='top' class='mc' height='20'>&nbsp;".$roww[1]." | ".$roww[2]."</td>
</tr>
<tr>
<td valign='top' valign='top'><a href='index.php?link=20&news=".$roww[0]."' class='spis8'>".$roww[3]."</a></td>
</tr>
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

</td>";
}




echo "</tr><tr><br><td colspan='4'><h2>Архив новостей: 
<a href='index.php?link=20&arh=2012' class='spis9'>2012 год</a>, 
<a href='index.php?link=20&arh=2013' class='spis9'>2013 год</a>,
<a href='index.php?link=20&arh=2014' class='spis9'>2014 год</a>,
<a href='index.php?link=20&arh=2015' class='spis9'>2015 год</a>,
<a href='index.php?link=20&arh=2016' class='spis9'>2016 год</a>,
<a href='index.php?link=20&arh=2017' class='spis9'>2017 год</a>,
<a href='index.php?link=20&arh=2018' class='spis9'>2018 год</a>,
<a href='index.php?link=20&arh=2019' class='spis9'>2019 год</a>,
<a href='index.php?link=20&arh=2020' class='spis9'>2020 год</a>,
<a href='index.php?link=20&arh=2021' class='spis9'>2021 год</a>,
<a href='index.php?link=20&arh=2022' class='spis9'>2022 год</a>,
<a href='index.php?link=20&arh=2023' class='spis9'>2023 год</a>,
<a href='index.php?link=20&arh=2024' class='spis9'>2024 год</a>,
<a href='index.php?link=20&arh=2025' class='spis9'>2025 год</a>,
<a href='index.php?link=20&arh=2026' class='spis9'>2026 год</a>
</h2>";

/*echo "</td></tr></table>  
<table width='100%' border='0'>
<tr>";
echo "<td  valign='top' align='center'><h1>2020</h1></td>";
echo "<td  valign='top' align='center'><h1>2022</h1></td>";
echo "<td  valign='top' align='center'><h1>2023</h1></td>";
echo "<td  valign='top' align='center'><h1>2024</h1></td>";
echo "<td  valign='top' align='center'><h1>2025</h1></td>";
echo "<td  valign='top' align='center'><h1>2026</h1></td>";
echo "</tr>
<tr>";*/


/*echo "<td valign='top' class='spis4' width='20%'>";
$sql2 = Database::query("SELECT * FROM `news` WHERE  key_news=1 ORDER BY dt DESC");
while ($roww = Database::fetchRow($sql2))
{
$second = substr($roww[1],6,4);
if ($second==2017)
{
echo "
<a href='index.php?link=20&news=".$roww[0]."' class='spis3' title='".$roww[3]."'>".$roww[1]."</a> - $roww[3]<br>";
}
}
echo "</td>";  */






/*echo "<td valign='top' class='spis4' width='20%'>";
$sql2 = Database::query("SELECT * FROM `news` WHERE  key_news=1 ORDER BY dt DESC");
while ($roww = Database::fetchRow($sql2))
{
$second = substr($roww[1],6,4);
if ($second==2020)
{
echo "
<a href='index.php?link=20&news=".$roww[0]."' class='spis3' title='".$roww[3]."'>".$roww[1]."</a> - $roww[3]<br>";
}
}
echo "</td>";*/
/*
echo "<td valign='top' class='spis4' width='20%'>";
$sql2 = Database::query("SELECT * FROM `news` WHERE  key_news=1 ORDER BY dt DESC");
while ($roww = Database::fetchRow($sql2))
{
$second = substr($roww[1],6,4);
if ($second==2022)
{
echo "
<a href='index.php?link=20&news=".$roww[0]."' class='spis3' title='".$roww[3]."'>".$roww[1]."</a> - $roww[3]<br>";
}
}
echo "</td>";


echo "<td valign='top' class='spis4' width='20%'>";
$sql2 = Database::query("SELECT * FROM `news` WHERE  key_news=1 ORDER BY dt DESC");
while ($roww = Database::fetchRow($sql2))
{
$second = substr($roww[1],6,4);
if ($second==2023)
{
echo "
<a href='index.php?link=20&news=".$roww[0]."' class='spis3' title='".$roww[3]."'>".$roww[1]."</a> - $roww[3]<br>";
}
}
echo "</td>";
echo "<td valign='top' class='spis4' width='20%'>";
$sql2 = Database::query("SELECT * FROM `news` WHERE  key_news=1 ORDER BY dt DESC");
while ($roww = Database::fetchRow($sql2))
{
$second = substr($roww[1],6,4);
if ($second==2024)
{
echo "
<a href='index.php?link=20&news=".$roww[0]."' class='spis3' title='".$roww[3]."'>".$roww[1]."</a> - $roww[3]<br>";
}
}
echo "</td>";
echo "<td valign='top' class='spis4' width='20%'>";
$sql2 = Database::query("SELECT * FROM `news` WHERE  key_news=1 ORDER BY dt DESC");
while ($roww = Database::fetchRow($sql2))
{
$second = substr($roww[1],6,4);
if ($second==2025)
{
echo "
<a href='index.php?link=20&news=".$roww[0]."' class='spis3' title='".$roww[3]."'>".$roww[1]."</a> - $roww[3]<br>";
}
}
echo "</td>";
echo "<td valign='top' class='spis4' width='20%'>";
$sql2 = Database::query("SELECT * FROM `news` WHERE  key_news=1 ORDER BY dt DESC");
while ($roww = Database::fetchRow($sql2))
{
$second = substr($roww[1],6,4);
if ($second==2026)
{
echo "
<a href='index.php?link=20&news=".$roww[0]."' class='spis3' title='".$roww[3]."'>".$roww[1]."</a> - $roww[3]<br>";
}
}
echo "</td>";
*/


echo "</tr></table>";

/*
echo "<table><tr><td  valign='top' colspan='4' class='spis4'>";

$sql2 = Database::query("SELECT * FROM `news` WHERE  key_news=1 ORDER BY id DESC LIMIT 3,100");
while ($roww = Database::fetchRow($sql2))
{
echo "
<a href='index.php?link=20&news=".$roww[0]."' class='spis3' title='".$roww[3]."'>".$roww[1]."</a> - $roww[3] |
";
}
echo "</td></tr></table>";
*/


}
}

if ($res[0] == '684')
{
if (isset($object_arh))
{
echo "<h2>Архив новостей за $object_arh год. 
<a href='index.php?link=20&arh=2011' class='spis9'>2011 год</a>, 
<a href='index.php?link=20&arh=2012' class='spis9'>2012 год</a>, 
<a href='index.php?link=20&arh=2013' class='spis9'>2013 год</a>,
<a href='index.php?link=20&arh=2014' class='spis9'>2014 год</a>,
<a href='index.php?link=20&arh=2015' class='spis9'>2015 год</a>,
<a href='index.php?link=20&arh=2016' class='spis9'>2016 год</a>,
<a href='index.php?link=20&arh=2017' class='spis9'>2017 год</a>,
<a href='index.php?link=20&arh=2018' class='spis9'>2018 год</a>,
<a href='index.php?link=20&arh=2019' class='spis9'>2019 год</a>,
<a href='index.php?link=20&arh=2020' class='spis9'>2020 год</a>,
<a href='index.php?link=20&arh=2021' class='spis9'>2021 год</a>,
<a href='index.php?link=20&arh=2022' class='spis9'>2022 год</a>,
<a href='index.php?link=20&arh=2023' class='spis9'>2023 год</a>,
<a href='index.php?link=20&arh=2024' class='spis9'>2024 год</a>,
<a href='index.php?link=20&arh=2025' class='spis9'>2025 год</a>,
<a href='index.php?link=20&arh=2026' class='spis9'>2026 год</a>
</h2>";

$result = Database::query("SELECT * FROM `news` WHERE  key_news=1 ORDER BY dt DESC");
print('<table border="0" width="100%" cellpadding="0" cellspacing="0">'); 		
while($res=Database::fetchRow($result))
{
$second = substr($res[1],6,4);
if ($second==$object_arh)
{
$fl=1; 		  
if($k==0){
print('<tr align="center"> '); }
print('<td align="center" valign="top">');
echo " <table width='100%' border='0' cellpadding='0' cellspacing='0' height='100%'>
<tr>
   <td valign='top' align='center'>";
print ("<div class='radius'>
$res[6]
$res[1]<br>
$res[3]<br>
<a class='spis9' href='index.php?link=20&news=$res[0]'})\">Подробнее</a>
</div>"); 	 	 
echo ("</td>
</tr>
</table>");                                                                                                      
print('</td>'); 		 
$k=$k+1; 	 	  
if($k==6){ $k=0;
print('</tr> ');} 	}} 	  
if($k!=2)
{print('</tr> ');} 	  
print('</table>');
}
else 
{
echo "<table cellpadding='0' cellspacing='0' border='0' width='100%' >";
echo "<tr><td valign='top' colspan='4'><h2>Последние 4 новости</h2></td></tr><tr>";

$sql1 = Database::query("SELECT * FROM `news` WHERE  key_news=1 ORDER BY id DESC LIMIT 4");
while ($roww = Database::fetchRow($sql1))

{
echo "<td valign='top' width='25%'>
<table cellpadding='0' cellspacing='0' border='0' width='100%'>
<tr>
<td class='tl' width='27' height='26'></td>
<td class='tc'>&nbsp;</td>
<td class='tr' width='27' height='26'></td>
</tr>
<tr>
<td class='ml' width='27' height='26'></td>
<td class='mc'>


<table  cellpadding='0' cellspacing='0' border='0'>
<tr>
<td valign='top' width='70' rowspan='2'>".$roww[6]."</td>
<td align='left' valign='top' class='mc' height='20'>&nbsp;".$roww[1]." | ".$roww[2]."</td>
</tr>
<tr>
<td valign='top' valign='top'><a href='index.php?link=20&news=".$roww[0]."' class='spis8'>".$roww[3]."</a></td>
</tr>
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

</td>";
}




echo "</tr><tr><br><td colspan='4'><h2>Архив новостей: 
<a href='index.php?link=20&arh=2012' class='spis9'>2012 год</a>, 
<a href='index.php?link=20&arh=2013' class='spis9'>2013 год</a>,
<a href='index.php?link=20&arh=2014' class='spis9'>2014 год</a>,
<a href='index.php?link=20&arh=2015' class='spis9'>2015 год</a>,
<a href='index.php?link=20&arh=2016' class='spis9'>2016 год</a>,
<a href='index.php?link=20&arh=2017' class='spis9'>2017 год</a>,
<a href='index.php?link=20&arh=2018' class='spis9'>2018 год</a>,
<a href='index.php?link=20&arh=2019' class='spis9'>2019 год</a>,
<a href='index.php?link=20&arh=2020' class='spis9'>2020 год</a>,
<a href='index.php?link=20&arh=2021' class='spis9'>2021 год</a>,
<a href='index.php?link=20&arh=2022' class='spis9'>2022 год</a>,
<a href='index.php?link=20&arh=2023' class='spis9'>2023 год</a>,
<a href='index.php?link=20&arh=2024' class='spis9'>2024 год</a>,
<a href='index.php?link=20&arh=2025' class='spis9'>2025 год</a>,
<a href='index.php?link=20&arh=2026' class='spis9'>2026 год</a>
</h2>";

echo "</td></tr></table>  
<table width='100%' border='0'>
<tr>";
/*echo "<td  valign='top' align='center'><h1>2020</h1></td>";*/
echo "<td  valign='top' align='center'><h1>2022</h1></td>";
echo "<td  valign='top' align='center'><h1>2023</h1></td>";
echo "<td  valign='top' align='center'><h1>2024</h1></td>";
echo "<td  valign='top' align='center'><h1>2025</h1></td>";
echo "<td  valign='top' align='center'><h1>2026</h1></td>";
echo "</tr>
<tr>";


/*echo "<td valign='top' class='spis4' width='20%'>";
$sql2 = Database::query("SELECT * FROM `news` WHERE  key_news=1 ORDER BY dt DESC");
while ($roww = Database::fetchRow($sql2))
{
$second = substr($roww[1],6,4);
if ($second==2017)
{
echo "
<a href='index.php?link=20&news=".$roww[0]."' class='spis3' title='".$roww[3]."'>".$roww[1]."</a> - $roww[3]<br>";
}
}
echo "</td>";  */






/*echo "<td valign='top' class='spis4' width='20%'>";
$sql2 = Database::query("SELECT * FROM `news` WHERE  key_news=1 ORDER BY dt DESC");
while ($roww = Database::fetchRow($sql2))
{
$second = substr($roww[1],6,4);
if ($second==2020)
{
echo "
<a href='index.php?link=20&news=".$roww[0]."' class='spis3' title='".$roww[3]."'>".$roww[1]."</a> - $roww[3]<br>";
}
}
echo "</td>";*/

echo "<td valign='top' class='spis4' width='20%'>";
$sql2 = Database::query("SELECT * FROM `news` WHERE  key_news=1 ORDER BY dt DESC");
while ($roww = Database::fetchRow($sql2))
{
$second = substr($roww[1],6,4);
if ($second==2022)
{
echo "
<a href='index.php?link=20&news=".$roww[0]."' class='spis3' title='".$roww[3]."'>".$roww[1]."</a> - $roww[3]<br>";
}
}
echo "</td>";


echo "<td valign='top' class='spis4' width='20%'>";
$sql2 = Database::query("SELECT * FROM `news` WHERE  key_news=1 ORDER BY dt DESC");
while ($roww = Database::fetchRow($sql2))
{
$second = substr($roww[1],6,4);
if ($second==2023)
{
echo "
<a href='index.php?link=20&news=".$roww[0]."' class='spis3' title='".$roww[3]."'>".$roww[1]."</a> - $roww[3]<br>";
}
}
echo "</td>";
echo "<td valign='top' class='spis4' width='20%'>";
$sql2 = Database::query("SELECT * FROM `news` WHERE  key_news=1 ORDER BY dt DESC");
while ($roww = Database::fetchRow($sql2))
{
$second = substr($roww[1],6,4);
if ($second==2024)
{
echo "
<a href='index.php?link=20&news=".$roww[0]."' class='spis3' title='".$roww[3]."'>".$roww[1]."</a> - $roww[3]<br>";
}
}
echo "</td>";
echo "<td valign='top' class='spis4' width='20%'>";
$sql2 = Database::query("SELECT * FROM `news` WHERE  key_news=1 ORDER BY dt DESC");
while ($roww = Database::fetchRow($sql2))
{
$second = substr($roww[1],6,4);
if ($second==2025)
{
echo "
<a href='index.php?link=20&news=".$roww[0]."' class='spis3' title='".$roww[3]."'>".$roww[1]."</a> - $roww[3]<br>";
}
}
echo "</td>";
echo "<td valign='top' class='spis4' width='20%'>";
$sql2 = Database::query("SELECT * FROM `news` WHERE  key_news=1 ORDER BY dt DESC");
while ($roww = Database::fetchRow($sql2))
{
$second = substr($roww[1],6,4);
if ($second==2026)
{
echo "
<a href='index.php?link=20&news=".$roww[0]."' class='spis3' title='".$roww[3]."'>".$roww[1]."</a> - $roww[3]<br>";
}
}
echo "</td>";



echo "</tr></table>";

/*
echo "<table><tr><td  valign='top' colspan='4' class='spis4'>";

$sql2 = Database::query("SELECT * FROM `news` WHERE  key_news=1 ORDER BY id DESC LIMIT 3,100");
while ($roww = Database::fetchRow($sql2))
{
echo "
<a href='index.php?link=20&news=".$roww[0]."' class='spis3' title='".$roww[3]."'>".$roww[1]."</a> - $roww[3] |
";
}
echo "</td></tr></table>";
*/


}
}





if ($res[0] == '111')
{
echo "<table cellpadding='0' cellspacing='0' border='0' class='main'  align='center' width='100%'>";
//$sql1 = Database::query("SELECT * FROM `news` WHERE  key_news=1  ORDER BY id DESC");
//while ($roww = Database::fetchRow($sql1))
//{
echo "
<tr>
<td valign='top' align='center'>

<table cellpadding='0' cellspacing='0' border='0'>
<tr>
<td class='tl' width='27' height='26'></td>
<td class='tc'>&nbsp;</td>
<td class='tr' width='27' height='26'></td>
</tr>
<tr>
<td class='ml' width='27' height='26'></td>
<td class='mc'> ";

 include("kursnew.php");

echo "
</td>
<td class='mr' width='27' height='26'></td>
</tr>
<tr>
<td class='bl' width='27' height='26'></td>
<td class='bc'>&nbsp;</td>
<td class='br' width='27' height='26'></td>
</tr>
</table>



 </td>
</tr>
";
//}
echo "</table>";
}





if ($res[0] == '76')
{
if ($user_flag!==null && $user_flag<1)

//if ($user_flag!==0)
{
echo "<table cellpadding='0' cellspacing='10' border='0' width='100%' class='main'><tr><td>";

$sql=Database::query("SELECT * FROM richstone_page where id=101");
 
while ($st = Database::fetchRow($sql))
{
echo $st[2];
}


echo "</td></tr></table>";
}
}


if ($res[0] == '90')
{
$sqll=Database::query("SELECT * FROM pogoda");
echo "<b>Все города:</b>";
while ($newss = Database::fetchRow($sqll))
{
echo "<a class='spis3' href='index.php?link=89&pogoda=".$newss[0]."'>".$newss[1]."</a> ";
}


$sql=Database::query(Database::statement('SELECT * FROM pogoda where id=?', [(int)($object_pogoda)]));
while ($newss = Database::fetchRow($sql))
{
echo "<br><br><h2>Гидрометцентр РБ. Прогноз погоды г. ".$newss[1]." на 6 дней</h2>";
echo "<table cellpadding='0' cellspacing='0' border='0' width='100%'>";
echo "<tr><td>
<table cellpadding='0' cellspacing='0' border='0' width='100%'>
<tr>
<td class='tl' width='27' height='26'></td>
<td class='tc'>&nbsp;</td>
<td class='tr' width='27' height='26'></td>
</tr>
<tr>
<td class='ml' width='27' height='26'></td>
<td class='mc'>";

?>
<?php
include("meteoinformer/6days/$newss[4].html");
?>

<?php

echo "</td>
<td class='mr' width='27' height='26'></td>
</tr>
<tr>
<td class='bl' width='27' height='26'></td>
<td class='bc'>&nbsp;</td>
<td class='br' width='27' height='26'></td>
</tr>
</table>
</td></tr>";
echo "</table>";

}



}




echo "</td></tr>
<tr><td align='left' valign='top' class='ot' colspan='2'>";
//----------------------------------------------------------------------------------------Проект программы качество 2017-------------------------------------------------------------------------//

if ($res[0] == '214')
{

//echo '&nbsp;&nbsp;&nbsp;&nbsp;<span>Ответственный за сопровождение - &nbsp;</span><strong><span>Лукашевич Ульяна Викторовна</span></strong><span>., тел. 2<span>25-90-07</span>, e-mail:&nbsp;</span><span>blanki_bgd@mnsk.rw</span>';

echo '<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td class="tl" width="27" height="26">&nbsp;</td>
<td class="tc">&nbsp;</td>
<td class="tr" width="27" height="26">&nbsp;</td>
</tr>
<tr>
<td class="ml" width="27" height="26">&nbsp;</td>
<td class="mc" align="center"><b>Ответственные специалисты за обновление и актуализацию информации:</b><br>Лукашевич Ульяна Викторовна, заведующая канцелярией, тел.225-90-07<br>Цвирко Вера Николаевна, инспектор, тел.225-90-07<br><br><b>Ответственный специалист по технической части:</b><br>Хацкова Яна Сергеевна, инженер, тел. 225-67-55<br><br><a href="ed/upload-files/blanki/instr_for_users.docx">Инструкция для пользователей Единого каталога бланочной продукции</a><br><br>e-mail: blanki_bgd@mnsk.rw<br><br>';
                          	

echo '<table style="border-collapse: collapse;" border="0" cellspacing="0" cellpadding="0" width="100%">';



$sql = Database::query("SELECT * FROM `blankiname` WHERE id>0");
while ($nameblank = Database::fetchRow($sql))
{

echo '<tr><td class="zag11" style="text-align: center;" colspan="4">'; echo $nameblank[1]; echo'<br><span class="zag12">'; //echo $nameblank[3];
echo strip_tags($nameblank[3], '<br>'); echo '</span></td></tr>';

echo '
<tr>
<td class="zag10" align="center" width="300"><strong>Назначение</strong></td>
<td class="zag10" align="center""><strong>Перечень документов</strong></td>
<td class="zag10" align="center" width="150"><strong>Дата изменений</strong></td>
<td class="zag10" align="center" width="150"><strong>Действие</strong></td>
</tr>';

$sql1 = Database::query(Database::statement('SELECT * FROM `blankibzd` WHERE priznak=? order by id ASC', [(int)($nameblank[2])]));

for ($i=1; $i<($row = Database::fetchRow($sql1)); $i++) 
{
echo '<tr>
<td class="spis" align="left" width="280">';echo $row[3]; echo '</td>
<td class="spis" align="center">
<span align="center"><h3 class="expandable">Посмотреть бланки</h3></span>
';
echo '</td>                                                                                	
<td class="spis" align="center" width="140">';echo $row[4]; echo '</td>
<td class="spis" align="center" width="140" rowspan="2">';echo $row[5]; echo '</td>
</tr>
<tr>
<td bgcolor="#d9e8f1" colspan="3" align="left">
<ul class="categoryitems">';

echo $row[2];

echo '</ul>
</td>
</tr>';

}
}

echo "</table>";
echo '</td>
<td class="mr" width="27" height="26">&nbsp;</td>
</tr>
<tr>
<td class="bl" width="27" height="26">&nbsp;</td>
<td class="bc">&nbsp;</td>
<td class="br" width="27" height="26">&nbsp;</td>
</tr>
</tbody>
</table>
';

}



if ($res[0] == '215')
{
$ipusu = $_SERVER["REMOTE_ADDR"] ?? '';
$cut = substr($ipusu, 0, 6);

if ($cut== "10.1.0")
{
echo $res[2];
}
else if ($cut== "10.1.1")
{
echo $res[2];
}
else if ($cut== "10.1.2")
{
echo $res[2];
}
else if ($cut== "10.1.3")
{
echo $res[2];
}
else if ($cut== "10.1.4")
{
echo $res[2];
}
else if ($cut== "10.1.16")
{
echo $res[2];
}
else 
{
echo "<h5>Данный ресурс для вас недоступен!</h5>";
}
}


else 
{
echo $res[2];
}

echo "</td></tr>
</td></tr>
</table>";
//echo "<h5>$res[1]</h5>$res[2]";
}

?>
</td>
  </tr>
  <tr>
    <td valign="top"></td>
    <td valign="top"></td>
    <td valign="top"></td>
    <td valign="top"></td>
  </tr>
<tr><td colspan="4" align="center" valign="bottom" class="grad1" height="13"></td></tr>


<!--<tr><td colspan="4" align="center" class="trans" height="40">Разработка Осадчий С.В. - ИРЦТС 2012-2017
<br>| &copy; www.rw | Сопровождение: Хацкова Я.С.- ИРЦАС | e-mail: ircas_khatskova@mnsk.rw | тел. 225-67-55 |</td></tr>
-->
<tr><td colspan="4" align="center" class="trans" height="40">РУП "Главный расчетный информационный центр" БЖД 2012-<?php echo date("Y");?>.
<br>| &copy; www.rw |</td></tr>
<a href="#" class="scrollup">Наверх</a>
</table>

</body>
</html>