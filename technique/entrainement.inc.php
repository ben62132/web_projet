<?php

if (isset($_POST["submit_entrainement"])){
$titre =  $_POST['titre'];
$description_invite = $_POST['description_invite'];
$description_connecte =  $_POST['description_connecte'];
$categorie = $_POST['categorie'];
$date =  $_POST['date'];
$nbr_max = $_POST['nbr_max'];
$lieu_depart =  $_POST['lieu_depart'];
$photo = $_POST['photo'];

require_once "technique\param.inc.php";
require_once "technique\fonction.inc.php";

if (remplissageVideEntrainement($titre, $description_invite, $description_connecte, $categorie, $date, $nbr_max, $lieu_depart) !== false) {
    header("Location: pages\entrainement.php?error=emptyinput");
    exit();
}

if (!filter_var($nbr_max, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1]])) {
    header("Location: pages\entrainement.php?error=invalidnbrmax");
    exit();
}

creerEntrainement($conn,$titre, $description_invite, $description_connecte, $categorie, $date, $nbr_max, $lieu_depart,$photo);

}
else {

    header("Location: pages\inscription.php");
}