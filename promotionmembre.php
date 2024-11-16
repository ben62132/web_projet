<?php
session_start();
include('promotionmembre.inc.php');
//var_dump($utilisateurs);
//exit();
?>

<!doctype html>
<html lang="fr">

<head>
    <?php include('head.inc.php'); ?>
</head>

<body>
<?php
  $titre = "Promotion";
?>
<header class="container-fluid">
<?php include('header.inc.php'); ?>
</header>

<div>
  <h1>Promouvoir un membre</h1>
        <div class="row align-items-center mb-4">
                <div class="col-md-6">
                    <h1><?= htmlspecialchars($utilisateurs['utilisateur_nomUtilisateur']) ?></h1>
                </div>
                                                                                                                                       
        </div>
</div>
<footer class="container-fluid">
    <?php include('footer.inc.php'); ?>
</footer>

</body>
</html>