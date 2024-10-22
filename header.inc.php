<!DOCTYPE html>
<html lang="fr">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $titre; ?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<div id="menu">
<li><a href="page.php">Accueil</a></li>
<a href="page.php">
<img src="./imports/logo.png" class="logo rounded float-left" alt="...">
</a>

</div>
<nav class="navbar navbar-expand-md bg-dark border-bottom border-body" >
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Esigelec</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page.php">Page</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="autre.php">Autre page</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="inscription.php">Inscription</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" hre ="connexion.php">Connexion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">