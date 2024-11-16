<?php
session_start();
require_once "param.inc.php";

// Vérification si l'utilisateur est connecté
if (!isset($_SESSION["idUtilisateur"])) {
    // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
    header("Location: connexion.php");
    exit();
}

$userId = $_SESSION["idUtilisateur"];
$entrainementId = $_GET['entrainementId']; // Id de l'entrainement depuis l'URL (ou d'un autre moyen)





// Vérification s'il y a de la place pour s'inscrire
$queryMax = "SELECT entrainement_nbMax, COUNT(*) as currentParticipants FROM participe WHERE entrainement_idEntrainement = ?";
$stmtMax = $pdo->prepare($queryMax);
$stmtMax->execute([$entrainementId]);
$dataMax = $stmtMax->fetch();
$remainingSpots = $dataMax['entrainement_nbMax'] - $dataMax['currentParticipants'];

// Si l'utilisateur essaie de s'inscrire mais qu'il n'y a pas de place
if (!$isRegistered && $remainingSpots > 0) {
    // Inscription de l'utilisateur dans l'entraînement
    $queryInsert = "INSERT INTO participe (utilisateur_idUtilisateur, entrainement_idEntrainement) VALUES (?, ?)";
    $stmtInsert = $pdo->prepare($queryInsert);
    $stmtInsert->execute([$userId, $entrainementId]);
    $message = "Vous êtes inscrit à cet entraînement.";
} elseif ($isRegistered) {
    // Désinscription de l'utilisateur
    $queryDelete = "DELETE FROM participe WHERE utilisateur_idUtilisateur = ? AND entrainement_idEntrainement = ?";
    $stmtDelete = $pdo->prepare($queryDelete);
    $stmtDelete->execute([$userId, $entrainementId]);
    $message = "Vous vous êtes désinscrit de cet entraînement.";
} else {
    $message = "Il n'y a plus de places disponibles pour cet entraînement.";
}

// Passer les informations à la page des entraînements
header("Location: entrainement.php?message=" . urlencode($message));
exit();
?>
