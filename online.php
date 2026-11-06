<?php
require_once __DIR__ . '/src/bootstrap.php';
  include ('db_conn.php');
  $no_active_time = 86400;
  $user_ip = $_SERVER['REMOTE_ADDR'] ?? '';
  $del = Database::query(Database::statement('DELETE FROM `online` WHERE `time` + ? < ?', [($no_active_time), (int)(time())]));

//  if(!Database::query("INSERT INTO `online` VALUES ('$user_ip','".time()."')"))
  if(!Database::query(Database::statement('INSERT INTO `online` VALUES (?,?)', [($user_ip), (time())])))
{
    $upd = Database::query(Database::statement('UPDATE `online` SET `time` = ? WHERE `ip`= ?', [(time()), ($user_ip)]));
}

  $now_online = Database::result(Database::query("SELECT COUNT(*) FROM `online`"),0,0);
  echo 'Нас посетило '.$now_online.' посетителей';
?>