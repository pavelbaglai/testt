<?php
require_once __DIR__ . '/src/bootstrap.php'; 

$logon = $_POST['login'] ?? '';  

$pswd = $_POST['pswd'] ?? ''; 

$con=Database::connect(); 

$db=Database::selectDatabase(Database::setting('DB_NAME', 'telephone')); 

$query=Database::query('SET NAMES cp1251'); 

$query=Database::query(Database::statement('select * from osv_user where (osv_user_name=?)and(osv_user_password=md5(?))', [($logon), ($pswd)]));
 
$res = Database::fetchRow($query) ?: array_fill(0, 9, ''); 

$s=$res[0]; 

$user_flag = (int)$res[3]; 
$user_logon=$res[1]; 
$user_name=$res[4]; 
$user_fname=$res[5]; 
$user_sname=$res[6]; 
$news=$res[7]; 
$pochta=$res[8]; 

$res=Database::freeResult($query); 
Database::close($con); 


if($user_flag>0){        setcookie("user_flag",$user_flag);
                         setcookie("user_logon",$user_logon);   
                         setcookie("user_name",$user_name);   
                         setcookie("user_fname",$user_fname);   
                         setcookie("user_sname",$user_sname);
                         setcookie("news",$news);
                         setcookie("pochta",$pochta);
   
header("Location: main.php");  } 


else {                   $user_flag = 0;
                         setcookie("user_flag",$user_flag);
                         setcookie("user_logon",$user_logon);   
                         setcookie("user_name",$user_name);   
                         setcookie("user_fname",$user_fname);   
                         setcookie("user_sname",$user_sname);   
                         setcookie("news",$news);
                         setcookie("pochta",$pochta);

header("Location: index.php"); }



 ?> 
