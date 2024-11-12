<?php

if (isset($_POST["submit_inscription"])){
$nom =  $_POST['nom'];
$prenom = $_POST['prenom'];
$email =  $_POST['email'];
$password = $_POST['mdp'];
$role = 0; 
$password_crypted = password_hash($password, PASSWORD_BCRYPT);


require_once "technique\param.inc.php";
require_once "technique\fonction.inc.php";

if (remplissageVideInscription($password_crypted,$nom,$prenom,$email,$role) !==false){
    header("Location: pages\inscription.php?error=emptyinput");
    exit();
}

if (checkUtilisateur($conn,$email) !==false){
    header("Location: pages\inscription.php?error=utilisateurexistant");
}
creerUtilisateur($conn,$password_crypted,$nom,$prenom,$email,$role);

}
else {

    header("Location: pages\inscription.php");
}





