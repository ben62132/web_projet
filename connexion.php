<?php
session_start();
?>

<!doctype html>
<html lang="fr">

<head>
    <?php include('head.inc.php'); ?>
</head>

<body>
<?php
  $titre = "Connexion";
?>
<header class="container-fluid">
<?php include('header.inc.php'); ?>
</header>

<div>
  <h1>Connexion à votre compte</h1>
  <form method="post" action="connexion.inc.php">
    <div class="input-box">
      <label for="Email" class="form-label">Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Votre adresse esigelec" required>
      <i class='bx bxs-user'></i>
    </div>
    <div class="input-box">
      <label for="Mot de passe" class="form-label">Mot de passe</label>
      <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Votre mot de passe" required>
      <i class='bx bxs-lock-alt'></i>
    </div>
    <div>
      <button type="submit" name="Se_connecter">Se Connecter</button>
      <button type="button" onclick="window.location.href='inscription.php'">S'inscrire</button>
    </div>
  </form>

  <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "mauvaisemail") {
          echo "<p>Mauvais email</p>";
        }
        if ($_GET["error"] == "mauvaismotdepasse") {
          echo "<p>Mauvais mot de passe</p>";
        }
    }
  ?>
</div>

<footer class="container-fluid">
    <?php include('footer.inc.php'); ?>
</footer>

</body>
</html>
