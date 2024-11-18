<?php 
include('param.inc.php'); // Inclure la connexion à la base de données

date_default_timezone_set('Europe/Paris');

$dateActuelle = date('Y-m-d H:i:s');

// Modifier la requête SQL pour ne récupérer que les entraînements futurs
$sql = "SELECT * FROM entrainement WHERE entrainement_date > '$dateActuelle' ORDER BY entrainement_date ASC";
$result = mysqli_query($conn, $sql); // Exécuter la requête

if (!$result) {
    die("Erreur dans la requête : " . mysqli_error($conn)); // Gestion des erreurs
}

// Préparer les données pour affichage
$entrainements = [];
while ($row = mysqli_fetch_assoc($result)) {
    $entrainements[] = $row;
}
?>
