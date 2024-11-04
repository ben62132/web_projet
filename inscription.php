<!doctype html>
<html lang="fr">

<head>
    <?php  
            include ('head.inc.php');
            ?>
</head>

<body>
<?php
  $titre = "Inscription";
?>
<header class="container-fluid">
<?php
  include ('header.inc.php');
  ?>
  </header>
    <section class="inscription form">
        <h1>Création d'un compte</h1>
        <form  method="post" action="inscription.inc.php">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control " id="nom" name="nom" placeholder="Votre nom..." required>
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control " id="prenom" name="prenom" placeholder="Votre prénom..." required>
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control " id="email" name="email" placeholder="Votre email..." required>
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control " id="mdp" name="mdp" placeholder="Votre mot de passe..." required>
            <button type="submit" name="S'inscrire">S'inscrire</button></div>   
        </form>
    </section>
 
<?php
  include('footer.inc.php');
?>