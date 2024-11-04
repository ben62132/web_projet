<?php
session_start(); 

$nom =  htmlentities($_POST['nom']);
$prenom = htmlentities($_POST['prenom']);
$email =  htmlentities($_POST['email']);
$password = htmlentities($_POST['password']);
$role = 0; 
$password_crypted = password_hash($password, PASSWORD_BCRYPT);

require_once("param.inc.php");

if (remplissageVide($password_crypted,$nom,$prenom,$email,$role) !==false){
    header("Location: inscription.php?error=emptyinput");
    exit();
}

creerUtilisateur($conn,$password_crypted,$nom,$prenom,$email,$role)
if (isset($_POST["S'inscrire"])){

    echo "Tu es inscris !";

}