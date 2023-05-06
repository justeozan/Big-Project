<?php

  $host = "localhost";
  $dbname = "big_project";
  $username = "root";
  $password = "root";
  



  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password,array(
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    )
  );
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
?>
<!-- FONCTIONNEL -->
<!-- FIN -->
