<?php
  require 'common.php';
  $s = connect();
  $re=$s->query("SELECT title,comment FROM CRAFT01");
  $rireki = $re->fetchAll;

  require 'page1.php';

?>
