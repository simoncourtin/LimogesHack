<?php
	include 'includes/autoload.inc.php';
	include 'includes/config.inc.php';
	include 'includes/ajouterEquipe.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscription confirmée | LimogesHack</title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="dotlane-wrapper">
            <header class="nav-header nav-header-fixed dark-shadow">
                <div class="container container-header nav-header-inner nav-header-inner-no-title">
                    <a href="home">
                        <div class="title">LimogesHack</div>
                    </a>
                    <nav class="nav-header-inner-right">
                        <ul>
                            <li><a href="home" class="current">Accueil</a></li><!--
                            --><li><a href="about">A propos</a></li><!--
                            --><li><a href="contact">Contact</a></li><!--
                            --><li><a href="localisation">Localisation</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div class="content bg-grey-200 h-640">
                <div class="container">
                    <section id="section1">
                        <?php 
                        if (!empty($_SESSION['erreurInscription'])) {
                        ?>
                        <h1>Une erreur est survenue</h1>
                        <p>Un membre est déjà inscrit dans un projet.</p>
                        <div class="text-center">
                            <a onclick="history.back()" class="button clickable">Recommencer</a>
                        </div>
                        <?php
                            $_SESSION['erreurInscription'] = array();
                            session_destroy();
                        } else {
                        ?>
                        <h1>Merci</h1>
                        <p>Votre inscription a bien été prise en compte.</p>
                        <p>A bientôt !</p>
                        <div class="text-center">
                            <a href="home" class="button">Revenir à l'accueil</a>
                        </div>
                        <?php 
                        }
                        ?>
                    </section>
                </div>
            </div>
            <?php require_once("includes/footer.inc.php") ?>
        </div>
    </body>
</html>
