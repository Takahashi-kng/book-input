<?php
  session_start();

  function connect() {
    return new PDO("mysql:host=localhost;dbname=db1","root","root");
  }

?>
