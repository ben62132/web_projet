<div class="row align-items-center">
    <div class="col">
        <a href="pages\index.php">
            <img src="imports\logopng.png" alt="Logo" class="logo" />
        </a>
    </div>
    <div class="col text-end">
        <?php
        if (isset($_SESSION["idUtilisateur"])) {
            echo '<a href="technique\deconnexion.inc.php" class="connexion">Se déconnecter</a>';
        } else {
            echo '<a href="pages\connexion.php" class="connexion">Se connecter</a>';
        }
        ?>
    </div>
</div>
