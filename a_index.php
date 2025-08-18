<?php

  $s = new PDO("mysql:host=localhost;dbname=db1","root","root");
  $s->query("CREATE TABLE IF NOT EXISTS CRAFT01( NUMBER INT(3) AUTO_INCREMENT PRIMARY KEY,title VARCHAR(10),evalu INT(2),comment VARCHAR(10) DEFAULT '未入力')");

  $re=$s->query("SELECT title,comment FROM CRAFT01");
  $rireki = $re->fetchAll;

  require 'page1.php';

?>
