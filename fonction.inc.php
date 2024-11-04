<?php 

function remplissageVide($password_crypted,$nom,$prenom,$email,$role){
$result;
if (empty($password_crypted)||empty($nom)||empty($prenom)||empty($email)){
    $result = true;
}
else {
    $result = false;
}
return $result;
}

function creerUtilisateur($password_crypted,$nom,$prenom,$email,$role){
    $sql = "INSERT INTO utilisateur($password_crypted,$nom,$prenom,$email,$role) VALUES(?,?,?,?,?)";
    $stmt  =mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt,$sql)){
        header("location: inscription.php?error=stmtfailed");
        exit();
    }
mysqli_stmt_bind_param($stmt,$password_c

    return $result;
    }