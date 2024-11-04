<!doctype html>
<html lang="fr">

<head>
    <?php  
            include ('head.inc.php');
            ?>
</head>

<body>
<?php
  $titre = "Connexion";
?>
<header class="container-fluid">
<?php
  include ('header.inc.php');
  ?>
  </header>
  <div>
  <h1>Connexion à votre compte</h1>
  <div  class="input-box">
  <label for="Email" class="form-label">Email</label>
  <input type="text" class="form-control" id="email" name="email" placeholder="Votre adresse esigelec" required>
  <i class='bx bxs-user'></i>
  </div>
  <div  class="input-box">
  <label for="Mot de passe" class="form-label">Mot de passe</label>
  <input type="text" class="form-control" id="mdp" name="mdp" placeholder="Votre mot de passe" required>
  <i class='bx bxs-lock-alt'></i>
  </div>
</div>
<div>
  <button type="submit" name="Se connecter">Se Connecter</button>
  </div>
<?php
  include('footer.inc.php');
?>