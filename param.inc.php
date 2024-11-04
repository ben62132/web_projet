<?php

  $host="localhost";/*"moduleweb.esigelec.fr"*/;
  $login="root"/*grp_3_4"*/;
  $passwd="root"/*"2PCLR7aKE3RY1a"*/;
  $dbname="bdd_3_4";

  $conn=mysqli_connect($host,$login,$passwd,$dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
