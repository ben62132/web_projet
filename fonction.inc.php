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
        header("location: inscription.php?error=stmtfailed");
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
    mysqli_stmt_close($stmt);

    header("location: inscription.php?error=none");
    exit();
}
