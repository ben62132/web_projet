<?php

  $host="localhost3306";
  $login="grp_3_4";
  $passwd="2PCLR7aKE3RY1a";
  $dbname="bdd_3_4";

  $conn=mysqli_connect($host,$login,$passwd,$dbname);

  if (!$conn){
    die("Connection failed: " . mysql_connect_error());

  }
?>
