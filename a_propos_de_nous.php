<?php
session_start();
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
    <div class="container text-center">
    <div class="texte_apdn nom_apdn">
        <div class="row justify-content-start">
            Benjamin MARCADET
        </div>
    </div>    
        <div class="row align-items-center">
        <div class="col-4">
                <img 
                    src="messi.jpg" alt="Photos Benjamin" class="p_ben col img-fluid" />
            </div>
            <div class="col-4 texte_apdn"> 
                Joueur du FC Barcelone depuis mes 16 ans, je suis passionnée de sport et très amoureux de la discipline appelée "running". 
                Courir fait partie de moi-même, et je suis très heureux de vous partager cette passion en vous mettant à disposition ce site 
                permettant de trouver des amoureux, tout comme moi, et de partager de très bons moments !
            </div>
            <div class="col-4 citation_apdn">
                "Courir après ses rêves n'est pas un sport, c'est un devoir"
            </div>
        </div>
    </div>
    <div class="container text-center">
    <div class="texte_apdn nom_apdn col-4">
        <div class="row justify-content-start">
            Zacharie GENTY-DUBUS
        </div>
    </div>    
        <div class="row align-items-center">
            <div class="col-4">
                <img 
                    src="zach.jpg" alt="Photos Zacharie" class="p_zach col img-fluid" />
            </div>
            <div class="col-4 texte_apdn"> 
            Sudiste qui s’est exilé à Rouen. Le sport a toujours fait partie de ma vie. Je suis né avec des chaussures de running aux pieds. Je dévore des marathons au petit déjeuner. La première chose que je me dis en me réveillant : « Je suis rapide ».
            </div>
            <div class="col-4 citation_apdn">
                "C’est plus facile de descendre une colline que de la monter, mais la vue est beaucoup mieux au sommet." 
            </div>
        </div>
    </div>
    <footer class="container-fluid">
    <?php
        include('footer.inc.php');
        ?>
    </footer>
</body>

</html>
