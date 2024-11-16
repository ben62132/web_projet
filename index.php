<?php
session_start();
include('entrainementaffichage.inc.php');
include('fonction.inc.php');
//var_dump($entrainements);
//exit();
?>

<!doctype html>
<html lang="fr">

<head>
    <?php  
        include ('head.inc.php');
    ?>
</head>
<body>
    <header class="container-fluid">
        <?php
            include ('header.inc.php');
        ?>
    </header>
    
    <div class="container page-main">
    <div class="text-center titre">
    <?php
    if (isset($_SESSION["prenomUtilisateur"])) {
        echo '<a href="entrainement.php" class="entrainement">Créer un entrainement</a>';
        echo '<a href="promotionmembre.php" class="promotion">Promouvoir un membre</a>';
        echo "<h3 class='bienvenue'>Bienvenue, " . htmlspecialchars($_SESSION["prenomUtilisateur"]) . " !</h3>";
    }
    ?>
    <h2>Entrainements</h2>
</div>
<?php foreach ($entrainements as $index => $entrainement): ?>
        <div class="row align-items-center mb-4">
            <?php if ($index % 2 == 0): ?>
                <div class="col-md-6">
                <img src="entrainement.jpg" alt="Entrainement" class="img-fluid" />
                </div>
                <div class="col-md-6">
                    <h1><?= htmlspecialchars($entrainement['entrainement_titre']) ?></h1>
                    <?php if (isset($_SESSION["idUtilisateur"])): ?>
                        <p class="texte-rose"><?= htmlspecialchars($entrainement['entrainement_descriptionComplete']) ?></p>
                        <p class="texte-rose"><?= htmlspecialchars($entrainement['entrainement_categorie']) ?></p>
                        <p class="texte-rose"><?= htmlspecialchars($entrainement['entrainement_date']) ?></p>
                        <p class="texte-rose"><?= htmlspecialchars($entrainement['entrainement_nbMax']) ?></p>
                        <p class="texte-rose"><?= htmlspecialchars($entrainement['entrainement_lieuDepart']) ?></p>
                        
                        <?php if (estInscrit($conn, $_SESSION['idUtilisateur'], $entrainement['entrainement_idEntrainement'])): ?>
                            <button type="submit" name="submit_desinscriptionentrainement">Se désinscrire</button>
                        <?php else: ?>
                            <?php if (inscriptionPossible($conn, $entrainement['entrainement_nbMax'], $entrainement['entrainement_idEntrainement'])): ?>
                                <button type="submit" name="submit_inscriptionentrainement">S'inscrire</button>
                            <?php else: ?>
                                <p class="texte-rose"><?= "Pas de place disponible" ?></p>
                            <?php endif; ?>
                        <?php endif; ?>


                    <?php else: ?>
                        <p class="texte-rose"><?= htmlspecialchars($entrainement['entrainement_descriptionInvite']) ?></p>
                        <p class="texte-rose"><?= htmlspecialchars($entrainement['entrainement_categorie']) ?></p>
                    <?php endif; ?>

                </div>
            <?php else: ?>
                <div class="col-md-6 order-md-2">
                <img src="entrainement2.jpg" alt="Entrainement 2" class="img-fluid" />
                </div>
                <div class="col-md-6">
                <h1><?= htmlspecialchars($entrainement['entrainement_titre']) ?></h1>
                <?php if (isset($_SESSION["idUtilisateur"])): ?>
                    <p class="texte-rose"><?= htmlspecialchars($entrainement['entrainement_descriptionComplete']) ?></p>
                    <p class="texte-rose"><?= htmlspecialchars($entrainement['entrainement_categorie']) ?></p>
                    <p class="texte-rose"><?= htmlspecialchars($entrainement['entrainement_date']) ?></p>
                    <p class="texte-rose"><?= htmlspecialchars($entrainement['entrainement_nbMax']) ?></p>
                    <p class="texte-rose"><?= htmlspecialchars($entrainement['entrainement_lieuDepart']) ?></p>

                    <?php if (estInscrit($conn, $_SESSION['idUtilisateur'], $entrainement['entrainement_idEntrainement'])): ?>
                        <button type="submit" name="submit_desinscriptionentrainement">Se désinscrire</button>
                    <?php else: ?>
                        <?php if (inscriptionPossible($conn, $entrainement['entrainement_nbMax'], $entrainement['entrainement_idEntrainement'])): ?>
                            <button type="submit" name="submit_inscriptionentrainement">S'inscrire</button>
                        <?php else: ?>
                            <p class="texte-rose"><?= "Pas de place disponible" ?></p>
                        <?php endif; ?>
                    <?php endif; ?>
                    
                    
                    

                <?php else: ?>
                    <p class="texte-rose"><?= htmlspecialchars($entrainement['entrainement_descriptionInvite']) ?></p>
                    <p class="texte-rose"><?= htmlspecialchars($entrainement['entrainement_categorie']) ?></p>
                <?php endif; ?>

                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
        

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <footer class="container-fluid">
    <?php
        include('footer.inc.php');
    ?>
    </footer>
</body>

</html>
