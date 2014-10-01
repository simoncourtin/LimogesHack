<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Journée entière pendant laquelle des équipes volontaires s'en donneront à cœur joie pour réaliser un projet informatique de leur choix." />
        <meta name="keywords" content="Limoges, Hack, entertainement, project, team, programming, fun, projet, 24h, événement, équipe, code, week, programmation, coding" />
        <title>LimogesHack - La journée du code</title>
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
            <div class="content content-feature text-white bg-fixed fadeIn">
                <div class="container">
                    <section>
                        <h1 class="huge text-center v-center">
                            LimogesHack, la journée du code
                        </h1>
                        <div class="row">
                            <div class="col-2">
                                <p class="huge">12 heures de code</p>
                                <p>Pour tous les étudiants<br>et les passionnés d'informatique</p>
                            </div>
                            <div class="col-2 huge text-right">
                                <p>samedi<br>18 oct.<br> 2014</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="content">
                <div class="container text-center fadeIn">
                    <section>
                        <div class="row">
                            <div class="col-2">
                                <h2 class="text-center">FabLab</h2>
                                <p>2 bis impasse Daguerre</p>
                            </div>
                            <div class="col-2">
                                <h2 class="text-center">10h - 22h</h2>
                                <p>12 heures animées</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="content">
                <div class="container fadeIn">
                    <section>
                        <h2>Qu'est-ce que c'est ?</h2>
                        <p>LimogesHack est un évènement inspiré de LeedsHack. Il s’agit d’un évènement rassemblant les personnes intéressées par diverses matières touchant à l’informatique, à savoir la programmation, le design, la robotique, etc. L’évènement se déroule sur 12 heures, et le but final est, en équipe, de rassembler ses connaissances et de créer un produit final.</p>
                        <p>L'objectif de LimogesHack est de créer des liens entre les participants et de s'amuser tout en montant un projet de groupe. Bien que l'évènement dure 12 heures, des activités ainsi que des conférences auront lieu pour s'aérer l'esprit et ainsi être plus productif.</p>
                        <p>Au bout des 12 heures, chaque groupe devra présenter son produit final qui sera noté par les autres participants.</p>
                    </section>
                </div>
            </div>
            <div class="content">
                <div class="container fadeIn">
                    <section>
                        <h2>Pour qui est-ce ?</h2>
                        <p>LimogesHack est ouvert à tout étudiant ou personne intéressé par les domaines de l’informatique. Des connaissances basiques sont nécessaires afin de mener à bien un projet concret.</p>
                        <p>Les personnes n'ayant pas de concept seront orientées vers des idées de projet pensées par l'équipe de l'organisation.</p>
                    </section>
                </div>
            </div>
            <div class="content">
                <div class="container fadeIn">
                    <section>
                        <h2>De quoi ai-je besoin ?</h2>
                        <p>Il est nécessaire d’amener son matériel (ordinateur portable, ordinateur fixe, etc.). Vous pouvez également amener de la nourriture et du matériel de couchage pour se créer un lieu confortable.</p>
                        <p>Une cafétaria avec de la nourriture et des boissons sera à votre disposition tout au long de l'évènement.</p>
                    </section>
                </div>
            </div>
            <div class="content">
                <div class="container text-center fadeIn">
                    <section>
                        <h2>Montez vos projets</h2>
                        <div class="w-768 lead">
                            Programmation web - jeu vidéo - développement logiciel - robotique - hardware - graphisme
                        </div>
                        <p>À vous d’être inventifs !</p>
                    </section>
                </div>
            </div>
            <div class="content">
                <div class="container fadeIn">
                    <section>
                        <h2>S'inscrire</h2>
                        <p class="text-center">Si vous êtes intéressé, vous savez ce qu'il vous reste à faire, c'est gratuit !</p>
                        <form action="register" method="post" id="registerForm">
                            <div class="row">
                                <div class="col-2">
                                    <h3>Votre projet</h3>
                                    <label for="titre">Nom du projet</label>
                                    <input type="text" name="titre" id="titre" placeholder="Nom du projet">
                                    <label for="projet">Description du projet</label>
                                    <textarea name="projet" id="projet" placeholder="Description du projet"></textarea>
                                </div>
                                
                                <div class="col-2 no-gutter">
                                    <div class="row">
                                        <div class="col-1">
                                            <h3>Votre équipe</h3>
                                            <label for="equipe">Nom de l'équipe</label>
                                            <input type="text" name="equipe" id="equipe" placeholder="Nom de l'équipe">
                                            <h4>Chef de projet</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <input type="text" name="prenom0" id="prenom0" placeholder="Prénom">
                                        </div>
                                        <div class="col-3">
                                            <input type="text" name="nom0" id="nom0" placeholder="Nom">
                                        </div>
                                        <div class="col-3">
                                            <input type="email" name="mail0" id="mail0" placeholder="Adresse e-mail">
                                        </div>
                                    </div>
                                    <h4>Autres membres</h4>
                                    <div id="userPanel">
                                        <div class="row" id="user-1">
                                            <div class="col-3">
                                                <input type="text" name="prenom1" id="prenom1" placeholder="Prénom">
                                            </div>
                                            <div class="col-3">
                                                <input type="text" name="nom1" id="nom1" placeholder="Nom">
                                            </div>
                                            <div class="col-3">
                                                <input type="email" name="mail1" id="mail1" placeholder="Adresse e-mail">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="text-right">
                                <button type="button" class="button button-grey" name="addUser" id="addUser">+ Ajouter un membre</button>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" name="registerBtn" id="registerBtn">S'inscrire</button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
            <?php require_once("includes/footer.inc.php") ?>
            <div id="notification"></div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/scrollspy.js"></script>
        <script src="js/form.js"></script>
        <script src="js/autosize.js"></script>
        <script src="js/notif.js"></script>
    </body>
</html>
