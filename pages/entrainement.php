<!doctype html>
<html lang="fr">

<head>
    <?php  
            include ('head.inc.php');
            ?>
</head>

<body>
<?php
  $titre = "Entrainement";
?>
<header class="container-fluid">
<?php
  include ('header.inc.php');
  ?>
  </header>
    <section class="entrainement form">
        <h1>Création d'un entrainement</h1>
        <form  method="post" action="entrainement.inc.php">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" class="form-control " id="titre" name="titre" placeholder="Le titre de l'entrainement..." required>
            <label for="description" class="form-label">Description invité</label>
            <input type="text" class="form-control " id="description_invite" name="description_invite" placeholder="La description pour les invités..." required>
            <label for="description" class="form-label">Description connecté</label>
            <input type="text" class="form-control " id="description_connecte" name="description_connecte" placeholder="La description pour les connectés..." required>
            <label for="categorie" class="form-label">Catégorie</label>
            <input type="text" class="form-control " id="categorie" name="categorie" placeholder="La categorie de l'entrainement..." required>
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control " id="date" name="date" placeholder="La date de l'entrainement..." required>
            <label for="nbr_max" class="form-label">Nombre maximum</label>
            <input type="int" class="form-control " id="nbr_max" name="nbr_max" placeholder="Le nombre maximum de participant de l'entrainement..." required>
            <label for="lieu_depart" class="form-label">Lieu de depart</label>
            <input type="text" class="form-control " id="lieu_depart" name="lieu_depart" placeholder="Le lieu de départ de l'entrainement..." required>
            <label for="photo" class="form-label">Photo</label>
            <input type="file" class="form-control " id="photo" name="photo" placeholder="La photo de l'entrainement ..." required>
            <button type="submit" name="submit_entrainement">Enregistrer</button></div>   
        </form>
        <?php
    /*if (isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput"){
          echo "<p>Vous devez remplir tous les champs<p>";
        }
        if ($_GET["error"] == "utilisateurexistant"){
          echo "<p>Utilisateur déjà inscrit<p>";
        }
        
    }*/
    ?>
    </section>
  

    
    <footer class="container-fluid">
    <?php
        include('footer.inc.php');
        ?>
    </footer>
</body>