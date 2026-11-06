<?php 

$logon=$_POST['login'];  

$pswd=$_POST['pswd']; 

$con=mysql_connect('localhost','root','web2012irc'); 

$db=mysql_select_db('telephone'); 

$query=mysql_query('SET NAMES cp1251'); 

$query=mysql_query("select * from osv_user where (osv_user_name='".$logon."')and(osv_user_password=md5('".$pswd."'))");
 
$res=mysql_fetch_row($query); 

$s=$res[0]; 

$user_flag=$res[3]; 
$user_logon=$res[1]; 
$user_name=$res[4]; 
$user_fname=$res[5]; 
$user_sname=$res[6]; 
$news=$res[7]; 
$pochta=$res[8]; 

$res=mysql_free_result($query); 
mysql_close($con); 


if($user_flag>0){        setcookie("user_flag",$user_flag);
                         setcookie("user_logon",$user_logon);   
                         setcookie("user_name",$user_name);   
                         setcookie("user_fname",$user_fname);   
                         setcookie("user_sname",$user_sname);
                         setcookie("news",$news);
                         setcookie("pochta",$pochta);
   
header("Location: main.php");  } 


else {                   $user_flag==0;
                         setcookie("user_flag",$user_flag);
                         setcookie("user_logon",$user_logon);   
                         setcookie("user_name",$user_name);   
                         setcookie("user_fname",$user_fname);   
                         setcookie("user_sname",$user_sname);   
                         setcookie("news",$news);
                         setcookie("pochta",$pochta);

header("Location: index.php"); }



 ?> 
