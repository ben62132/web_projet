<?php
  $titre = "Connexion";

  include('header.inc.php');
  include('menu.inc.php');
?>
  <div>
  <h1>Connexion à votre compte</h1>
  <label for="Email" class="form-label">Email</label>
  <input type="text" class="form-control" id="email" name="email" placeholder="Votre adresse esigelec" required>
  <label for="Mot de passe" class="form-label">Mot de passe</label>
  <input type="text" class="form-control" id="mdp" name="mdp" placeholder="Votre mot de passe" required>
</div>
<div>
  <button type="submit" name="Se connecter">Se Connecter</button>
  </div>
<?php
  include('footer.inc.php');
?>