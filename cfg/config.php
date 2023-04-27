<?php
  $DB_host = "localhost";
  $DB_username = "root";
  $DB_password = "root";
  $DB_name = "big_project";



  $pdo = new PDO("mysql:host=$DB_host;dbname=$DB_name", $DB_username, $DB_password,array(
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    )
  );
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
?>
<!-- FONCTIONNEL -->
<!-- FIN -->
