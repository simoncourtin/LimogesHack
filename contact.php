<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact | LimogesHack</title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="dotlane-wrapper">
            <header class="nav-header nav-header-fixed dark-shadow">
                <div class="container container-header nav-header-inner nav-header-inner-no-title">
                    <a href="home">
                        <!-- <img src="img/logo.svg" alt="" class="logo"> -->
                        <h1 class="text-center">LimogesHack</h1>
                    </a>
                    <nav class="nav-header-inner-right">
                        <ul>
                            <li><a href="home">Accueil</a></li><!--
                            --><li><a href="about">A propos</a></li><!--
                            --><li><a href="contact" class="current">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div class="content grey-200 h-500">
                <div class="container">
                    <section id="section1">
                        <h1>Contact</h1>
                        <?php
                        if (!isset($_POST['message'])) {
                        ?>
                        <p>N'hésitez pas à nous contacter pour toute information supplémentaire.</p>
                        <form action="#" method="post" id="contactForm">
                            <label for="prenom">Vos informations</label>
                            <div class="row">
                                <div class="col-2"><input type="text" name="prenom" id="prenom" placeholder="Prénom"></div>
                                <div class="col-2"><input type="text" name="nom" id="nom" placeholder="Nom"></div>
                            </div>
                            <input type="email" name="mail" id="mail" placeholder="Adresse e-mail">
                            <label for="message">Votre message</label>
                            <textarea name="message" id="message" placeholder="Votre message"></textarea>
                            <div class="text-center">
                                <button type="submit" name="sendBtn" id="sendBtn">Envoyer</button>
                            </div>
                        </form>
                        <?php
                        } else {
                        ?>
                        <p>Merci, votre message a bien été envoyé !</p>
                        <?php
                        }
                         ?>
                    </section>
                </div>
            </div>
            <?php require_once("includes/footer.inc.php") ?>
            <div id="notification"></div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/contact.js"></script>
        <script src="js/autosize.js"></script>
        <script src="js/notif.js"></script>
    </body>
</html>
