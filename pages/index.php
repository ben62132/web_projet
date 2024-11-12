<?php
session_start();
?>

<!doctype html>
<html lang="fr">

<head>
    <?php  
        include ('technique\head.inc.php');
    ?>
</head>
<body>
    <header class="container-fluid">
        <?php
            include ('body\header.inc.php');
        ?>
    </header>
    
    <div class="container page-main">
    <div class="text-center titre">
    <?php
    if (isset($_SESSION["prenomUtilisateur"])) {
        echo '<a href="pages\entrainement.php" class="entrainement">Créer un entrainement</a>';
        echo '<a href="pages\promotionmembre.php" class="promotion">Promouvoir un membre</a>';
        echo "<h3 class='bienvenue'>Bienvenue, " . htmlspecialchars($_SESSION["prenomUtilisateur"]) . " !</h3>";
    }
    ?>
    <h2>Entrainements</h2>
</div>

        
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <img src="imports\entrainement.jpg" class="img-fluid" alt="Entrainement">
            </div>
            <div class="col-md-6">
                <h1>Titre</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis molestiae doloribus iste eligendi
                    neque vitae! Sint nihil sequi saepe magni neque id tempore sed? Qui sed esse cumque cupiditate
                    perspiciatis.
                </p>
            </div>
        </div>
        
        <div class="row align-items-center mb-4">
            <div class="col-md-6 order-md-2">
                <img src="imports\entrainement2.jpg" class="img-fluid" alt="Entrainement 2">
            </div>
            <div class="col-md-6">
                <h1>Titre</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis molestiae doloribus iste eligendi
                    neque vitae! Sint nihil sequi saepe magni neque id tempore sed? Qui sed esse cumque cupiditate
                    perspiciatis.
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <footer class="container-fluid">
    <?php
        include('body\footer.inc.php');
    ?>
    </footer>
</body>

</html>