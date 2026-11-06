<?php
  include ('db_conn.php');
  $no_active_time = 86400;
  $user_ip=$_SERVER['REMOTE_ADDR'];
  $del = mysql_query("DELETE FROM `online` WHERE `time` + '$no_active_time' < ".time());

//  if(!mysql_query("INSERT INTO `online` VALUES ('$user_ip','".time()."')"))
  if(!mysql_query("INSERT INTO `online` VALUES ('$user_ip','".time()."')"))
{
    $upd = mysql_query("UPDATE `online` SET `time` = '".time()."' WHERE `ip`= '$user_ip'");
}

  $now_online = mysql_result(mysql_query("SELECT COUNT(*) FROM `online`"),0,0);
  echo 'Нас посетило '.$now_online.' посетителей';
?>