<?php 
include('entrainementaffichage.inc.php'); // Inclure la connexion à la base de données

$entrainementId = $_POST['entrainementId'];
$sql = "UPDATE entrainement SET entrainement_annulation = 1 WHERE entrainement_idEntrainement = ?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=stmtfailed");
    exit();
}
mysqli_stmt_bind_param($stmt,"i",$entrainementId);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("Location: index.php");
exit();
?>
