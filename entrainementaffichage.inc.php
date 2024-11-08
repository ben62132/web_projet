<?php 

$query = "SELECT * FROM entrainements ORDER BY entrainement_date ASC";
$statement = $db->prepare($query);
$statement->execute();
$entrainements = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

