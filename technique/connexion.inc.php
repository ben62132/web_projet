<?php
if (isset($_POST["Se_connecter"])) { 
    $email = $_POST['email'];
    $password = $_POST['mdp'];

    require_once "technique\param.inc.php";
    require_once "technique\fonction.inc.php";

    if (remplissageVideConnexion($password, $email) !== false) { 
        header("Location: pages\connexion.php?error=emptyinput");
        exit();
    }

    connexionUtilisateur($conn, $password, $email);
} else {
    header("Location: pages\connexion.php");
    exit();
}
