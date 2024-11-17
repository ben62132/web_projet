<?php 
include('promotionmembre.inc.php'); // Inclure la connexion à la base de données

$idUtilisateur=$_POST['idUtilisateur'];
$sql = "UPDATE utilisateur SET utilisateur_membre = 1 WHERE utilisateur_idUtilisateur = ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: promotionmembre.php?error=stmtfailed");
    exit();
}
mysqli_stmt_bind_param($stmt,"i",$idUtilisateur);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("Location: promotionmembre.php");
exit();
?>
