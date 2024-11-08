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
        <div class="row align-items-center">
            <div class="col-3">
                <img 
                    src="photo_quelconque.png" alt="Photos Benjamin" class="p_ben col img-fluid" />
            </div>
            <div class="col-4 texte_apdn"> 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis molestiae doloribus iste eligendi
                neque vitae! Sint nihil sequi saepe magni neque id tempore sed? Qui sed esse cumque cupiditate
                perspiciatis.
            </div>
        </div>
    </div>
    <div class="col">
                <img 
                    src="photo_quelconque.png" alt="Logo Zacharie" class="p_zach img-fluid" />
            </div>
    <footer class="container-fluid">
    <?php
        include('footer.inc.php');
        ?>
    </footer>
</body>

</html>
