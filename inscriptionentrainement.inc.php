<?php
session_start();
require_once "param.inc.php";
require_once "fonction.inc.php";
require_once "entrainementaffichage.inc.php";

// Vérification si l'utilisateur est connecté
if (!isset($_SESSION["idUtilisateur"])) {
    // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
    header("Location: connexion.php");
    exit();
}

$userId = $_SESSION["idUtilisateur"];
$entrainementId = $_POST['entrainementId']; // Id de l'entrainement depuis l'URL (ou d'un autre moyen)
$entrainementnbMax = $_POST['entrainementnbMax'];


$sql = "INSERT INTO participe (utilisateur_idUtilisateur, entrainement_idEntrainement) VALUES (?, ?)";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=stmtfailed");
    exit();
}

mysqli_stmt_bind_param($stmt, "ii", $userId, $entrainementId);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("Location: index.php?error=inscriptionentrainement");
exit();

?>
