<?php
if (isset($_POST["Se_connecter"])) { 
    $email = $_POST['email'];
    $password = $_POST['mdp'];

    require_once "param.inc.php";
    require_once "fonction.inc.php";

    if (remplissageVideConnexion($password, $email) !== false) { 
        header("Location: connexion.php?error=emptyinput");
        exit();
    }

    connexionUtilisateur($conn, $password, $email);
} else {
    header("Location: connexion.php");
    exit();
}
