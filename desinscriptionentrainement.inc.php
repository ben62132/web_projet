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
$entrainementId = $_POST['entrainementId']; // Récupération de l'ID de l'entraînement
$entrainementnbMax = $_POST['entrainementnbMax']; // Non nécessaire pour une désinscription mais conservé si réutilisé ailleurs

// Requête SQL pour supprimer l'inscription
$sql = "DELETE FROM participe WHERE utilisateur_idUtilisateur = ? AND entrainement_idEntrainement = ?";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: index.php?error=stmtfailed");
    exit();
}

mysqli_stmt_bind_param($stmt, "ii", $userId, $entrainementId);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

$message = "Vous vous êtes désinscrit de cet entraînement.";
header("Location: index.php?message=" . urlencode($message));
exit();
?>
