<?php 
include('param.inc.php'); // Inclure la connexion à la base de données

$userId=$_GET['utilisateur_idUtilisateur']
$sql = "UPDATE utilisateur SET utilisateur_membre = 1 WHERE utilisateur_idUtiilisateur = ?";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_bind_param($stmt,"i",$userId)

$result = mysqli_query($conn, $sql); // Exécuter la requête

if (!$result) {
    die("Erreur dans la requête : " . mysqli_error($conn)); // Gestion des erreurs
}

?>
