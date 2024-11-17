<?php 
include('param.inc.php'); // Inclure la connexion à la base de données

$sql = "SELECT * FROM utilisateur ORDER BY utilisateur_nomUtilisateur ASC"; // Requête pour récupérer les entraînements
$result = mysqli_query($conn, $sql); // Exécuter la requête

if (!$result) {
    die("Erreur dans la requête : " . mysqli_error($conn)); // Gestion des erreurs
}

// Préparer les données pour affichage
$utilisateurs = [];
while ($row = mysqli_fetch_assoc($result)) {
    $utilisateurs[] = $row;
}
?>
