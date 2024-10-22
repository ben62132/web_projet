<?php
  // Paramètre de connexion à la BDD (à créer)
  $host="localhost";
  $login="root";
  $passwd="root";
  $dbname="projet_web";

  $conn = mysql_connect($host,$login,$passwd, $dbname);

  if (!$conn){
  die("Could not connect to the database : " . mysql_connect_error());
  }