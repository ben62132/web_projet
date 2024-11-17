<?php
session_start();
include('promotionmembre.inc.php');

if (!(isset($_SESSION["membre"]) && $_SESSION["membre"] == 1)) {
  echo "<p class='alert alert-danger'>Page inaccessible. Vous devez être membre pour accéder à cette page.</p>";
  
  header("Location: index.php?error=unaccessible");
  exit(); 
}
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
  <?php foreach ($utilisateurs as $utilisateur): ?>
        <div class="text-center">
                  <div class="aff_membre">
                    <?= htmlspecialchars($utilisateur['utilisateur_prenomUtilisateur']) ?>
                    <?= htmlspecialchars($utilisateur['utilisateur_nomUtilisateur']) ?>
                    <?php if($utilisateur['utilisateur_membre']==0): ?>
                    <form action="click_btn_promotion_membre.inc.php" method="post">
                      <input type="hidden" name="idUtilisateur" value="<?= htmlspecialchars($utilisateur['utilisateur_idUtilisateur']) ?>">
                      <button class="bouton_promotion_membre" type="submit" name="Promouvoir_m">Promouvoir</button>
                    </form>
                    <?php else: ?>
                      <button class="bouton_membre_promu" type="submit" name="Promouvoir_m">Membre</button>
                    <?php endif; ?>
                  </div>                                                                                                                                       
        </div>
  <?php endforeach; ?>
</div>
<footer class="container-fluid">
    <?php include('footer.inc.php'); ?>
</footer>

</body>
</html>