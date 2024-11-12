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
    <div class="container text-center">
    <div class="texte_apdn nom_apdn">
        <div class="row justify-content-start">
            Benjamin MARCADET
        </div>
    </div>    
        <div class="row align-items-center">
        <div class="col-4">
                <img 
                    src="photo_quelconque.png" alt="Photos Benjamin" class="p_ben col img-fluid" />
            </div>
            <div class="col-4 texte_apdn"> 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis molestiae doloribus iste eligendi
                neque vitae! Sint nihil sequi saepe magni neque id tempore sed? Qui sed esse cumque cupiditate
                perspiciatis.
            </div>
            <div class="col-4 citation_apdn">
                CITATION
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
                    src="photo_quelconque.png" alt="Photos Benjamin" class="p_ben col img-fluid" />
            </div>
            <div class="col-4 texte_apdn"> 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis molestiae doloribus iste eligendi
                neque vitae! Sint nihil sequi saepe magni neque id tempore sed? Qui sed esse cumque cupiditate
                perspiciatis.
            </div>
            <div class="col-4 citation_apdn">
                CITATION
            </div>
        </div>
    </div>
    <footer class="container-fluid">
    <?php
        include('body\footer.inc.php');
        ?>
    </footer>
</body>

</html>