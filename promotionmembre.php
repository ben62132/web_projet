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
  $titre = "Promotion";
?>
<header class="container-fluid">
<?php include('header.inc.php'); ?>
</header>

<div>
  <h1>Promouvoir un membre</h1>
  <form method="post" action="connexion.inc.php">
    <div class="input-box">
      <label for="Membre à promouvoir" class="form-label">Membre</label>
      <input type="text" class="form-control" id="nommembre" name="nommembre" placeholder="Le membre à promouvoir" required>
      
    </div>
    
    <div>
      <button type="submit" name="Promouvoir">Promouvoir</button>

    </div>
  </form>

  <?php
    /*if (isset($_GET["error"])) {
        if ($_GET["error"] == "mauvaisemail") {
          echo "<p>Mauvais email</p>";
        }
        if ($_GET["error"] == "mauvaismotdepasse") {
          echo "<p>Mauvais mot de passe</p>";
        }
    }*/
  ?>
</div>

<footer class="container-fluid">
    <?php include('footer.inc.php'); ?>
</footer>

</body>
</html>
