<?php 

function remplissageVideInscription($password_crypted, $nom, $prenom, $email, $role) {
    return empty($password_crypted) || empty($nom) || empty($prenom) || empty($email);
}

function remplissageVideConnexion($password, $email) {
    return empty($password) || empty($email);
}

function checkUtilisateur($conn, $email) {
    $sql = "SELECT * FROM utilisateur WHERE utilisateur_mailUtilisateur = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: pages\inscription.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        return false;
    }

    mysqli_stmt_close($stmt);
}

function connexionUtilisateur($conn, $password, $email) {
    $emailExistant = checkUtilisateur($conn, $email);

    if ($emailExistant == false) {
        header("Location: connexion.php?error=mauvaisemail");
        exit();
    }

    $password_db = $emailExistant["utilisateur_mdpUtilisateur"];
    $verificationMdp = password_verify($password, $password_db);

    if (!$verificationMdp) {
        header("Location: connexion.php?error=mauvaismotdepasse");
        exit();
    } else {
        session_start();
        $_SESSION["idUtilisateur"] = $emailExistant["utilisateur_idUtilisateur"];
        $_SESSION["nomUtilisateur"] = $emailExistant["utilisateur_nomUtilisateur"];
        $_SESSION["prenomUtilisateur"] = $emailExistant["utilisateur_prenomUtilisateur"];
        $_SESSION["membre"] = $emailExistant["utilisateur_membre"];
        header("Location: index.php");
        exit();
    }
}

function creerUtilisateur($conn, $password_crypted, $nom, $prenom, $email, $role) {
    $sql = "INSERT INTO utilisateur(utilisateur_mdpUtilisateur, utilisateur_nomUtilisateur, utilisateur_prenomUtilisateur, utilisateur_mailUtilisateur, utilisateur_membre) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: inscription.php?error=stmtfailed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ssssi", $password_crypted, $nom, $prenom, $email, $role);
    mysqli_stmt_execute($stmt);

    $idUtilisateur = mysqli_insert_id($conn);

    mysqli_stmt_close($stmt);

    
    session_start();
    $_SESSION["idUtilisateur"] = $idUtilisateur;
    $_SESSION["nomUtilisateur"] = $nom;
    $_SESSION["prenomUtilisateur"] = $prenom;
    $_SESSION["membre"] = $role;

    header("Location: index.php");
    exit();
}


function remplissageVideEntrainement($titre, $description_invite, $description_connecte, $categorie, $date, $nbr_max, $lieu_depart) {
    return empty($titre) || empty($description_invite) || empty($description_connecte) || empty($categorie) || empty($date) || empty($nbr_max) || empty($lieu_depart);
}

function creerEntrainement($conn, $titre, $description_invite, $description_connecte, $categorie, $date, $nbr_max, $lieu_depart, $photo) {
    $sql = "INSERT INTO entrainement(entrainement_titre, entrainement_descriptionInvite, entrainement_descriptionComplete, entrainement_categorie, entrainement_date, entrainement_nbMax, entrainement_lieuDepart, entrainement_photo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: entrainement.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssssss", $titre, $description_invite, $description_connecte, $categorie, $date, $nbr_max, $lieu_depart, $photo);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: entrainement.php?error=none");
    exit();
}



