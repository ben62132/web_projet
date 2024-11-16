<?php
session_start();
require_once "param.inc.php";

if (isset($_POST['entrainement_id']) && isset($_SESSION['idUtilisateur'])) {
    $entrainementId = $_POST['entrainement_id'];
    $userId = $_SESSION['idUtilisateur'];

    // Désinscrire l'utilisateur
    $deleteQuery = "DELETE FROM participe WHERE utilisateur_idUtilisateur = ? AND entrainement_idEntrainement = ?";
    $stmtDelete = $pdo->prepare($deleteQuery);
    $stmtDelete->execute([$userId, $entrainementId]);

    header('Location: index.php'); // Rediriger après désinscription
}
?>
