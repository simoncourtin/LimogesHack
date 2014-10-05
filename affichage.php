<?php
include 'includes/autoload.inc.php';
include 'includes/config.inc.php';

function afficherEquipes($ManagerEquipe,$ManagerParticipant) {
    $equipes = $ManagerEquipe -> getEquipes();
    foreach($equipes as $key => $value) {
    ?>
        <div class="content">
            <div class="container">
                <section>
                <h3><?php echo $key + 1 . '. ' .$value['nomEquipe'] ?></h3>
                <?php
                $membres = $ManagerEquipe -> getListeMemebres($value['idEquipe']);
                ?>
                    <?php
                    foreach($membres as $donnee) {
                    ?>
                    <?php echo $donnee['prenom'] ?> <?php echo substr($donnee['nom'], 0, 1) ?>.<br>
                    <?php
                    }
                    ?>
				<br/>
				<h4>Projet : <?php echo $value['nomProject'] ?></h4>
				<p><?php echo $value['description'] ?></p>
                </section>
            </div>
        </div>
    <?php
    }
}
$db = new MyPdo();
$myManagerEquipe = new EquipeManager($db);
$myManagerParticipant = new ParticipantManager($db);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liste des équipes | LimogesHack</title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="dotlane-wrapper">
            <header class="nav-header nav-header-fixed dark-shadow">
                <div class="container container-header nav-header-inner nav-header-inner-no-title">
                    <a href="home">
                        <div class="title text-center">LimogesHack</div>
                    </a>
                    <nav class="nav-header-inner-right">
                        <ul>
                            <li><a href="home">Accueil</a></li><!--
                            --><li><a href="about">A propos</a></li><!--
                            --><li><a href="contact">Contact</a></li><!--
                            --><li><a href="localisation">Localisation</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div class="content">
                <div class="container">
                    <section>
                        <h1>Liste des équipes</h1>
                    </section>
                </div>
            </div>
    <?php afficherEquipes($myManagerEquipe,$myManagerParticipant); ?>
            <?php require_once("includes/footer.inc.php");?>
            <div id="notification"></div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/scrollspy.js"></script>
        <script src="js/contact.js"></script>
        <script src="js/autosize.js"></script>
        <script src="js/notif.js"></script>
    </body>
</html>
