<?php
include 'includes/autoload.inc.php';
include 'includes/config.inc.php';
include 'includes/func.mail.inc.php';
?>
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
                        <div class="title text-center">LimogesHack</div>
                    </a>
                    <nav class="nav-header-inner-right">
                        <ul>
                            <li><a href="home">Accueil</a></li><!--
                            --><li><a href="about">A propos</a></li><!--
                            --><li><a href="contact" class="current">Contact</a></li><!--
                            --><li><a href="localisation">Localisation</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div class="content h-640">
                <div class="container">
                    <section>
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
                            if(!empty($_POST['prenom']) and !empty($_POST['nom']) and !empty($_POST['mail']) and !empty($_POST['message'])) {
                                $db = new MyPdo();
                                $mail = array (
                                'header'=>htmlspecialchars($_POST['mail']),
                                'sujet'=>'Message de la part de '. htmlspecialchars($_POST['prenom']) . ' ' . htmlspecialchars($_POST['nom']) . ' (' . htmlspecialchars($_POST['mail']) . ')',
                                'mail'=>'limogeshack@gmail.com',
                                'message'=>
'<!DOCTYPE html>
<html>
    <head>
        <title>Nouveau message de la part de ' . htmlspecialchars($_POST['prenom']) . ' ' . htmlspecialchars($_POST['nom']) . ' (' . htmlspecialchars($_POST['mail']) . ')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700" rel="stylesheet" type="text/css">
        <style type="text/css">
        body,
        td {
        margin: 0;
        font-family: HelveticaNeue, sans-serif;
        font-size: 14px;
        }
        body {
        margin: 0;
        padding: 0;
        font-family: HelveticaNeue, sans-serif;
        background-color: #e5e5e5;
        -webkit-text-size-adjust: none;
        -ms-text-size-adjust: none;
        }
        h2 {
        padding-top: 12px;
        font-family: HelveticaNeue, sans-serif;
        font-size: 22px;
        color: #000;
        }
        p {
        margin: 10px;
        font-family: HelveticaNeue, sans-serif;
        }
        </style>
        
    </head>
    <body style="margin:0px; padding:0px; -webkit-text-size-adjust:none;">
        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #e5e5e5">
            <tbody>
                <tr>
                    <td class="w640" width="640" height="20"></td>
                </tr>
                <tr>
                    <td align="center" bgcolor="#e5e5e5">
                        <table  cellpadding="0" cellspacing="0" border="0" style="box-shadow: 0 3px 15px 0 #ccc;">
                            <tbody>
                                <tr>
                                    <td align="center" class="w640"  width="640" height="80" bgcolor="#78909c"> <a style="color:#ffffff; font-size:16px; text-decoration: none;" href="http://limogeshack.sixfoisneuf.fr"><span style="color:#ffffff; font-size:28px;">LimogesHack</span></a></td>
                                </tr>
                                <tr class="content">
                                    <td class="w640" class="w640"  width="640" bgcolor="#ffffff">
                                        <table class="w640"  width="640" cellpadding="0" cellspacing="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td  class="w30"  width="30"></td>
                                                    <td  class="w580"  width="580">
                                                        <table class="w580"  width="580" cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="w580"  width="580">
                                                                        <h2 style="color:#000; font-size:22px; padding-top:12px;">Nouveau message de la part de ' . htmlspecialchars($_POST['prenom']) . ' ' . htmlspecialchars($_POST['nom']) . ' (' . htmlspecialchars($_POST['mail']) . ')</h2>
                                                                        <div align="left" class="article-content">
                                                                            <p>' . nl2br(htmlspecialchars($_POST['message'])) . '</p>
                                                                            <br>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="w580"  width="580" height="1" bgcolor="#f7f7f7"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <td class="w30" class="w30"  width="30"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="pagebottom">
                                    <td class="w640"  width="640">
                                        <table class="w640"  width="640" cellpadding="0" cellspacing="0" border="0" bgcolor="#f7f7f7">
                                            <tbody>
                                                <tr>
                                                    <td class="w580"  width="580" height="80" valign="middle">
                                                        <p align="center">
                                                        <a style="color:#000; text-decoration: none; background: #78909c; padding: 12px; border-radius: 3px;" href="http://limogeshack.sixfoisneuf.fr"><span style="color:#fff;">Accéder à LimogesHack</span></a>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>'
                            );
                            $myMail = new Mail($mail);
                            $resultEnvoi = smtpMailer($myMail->getMail(), 'limogeshack@gmail.com', $myMail->getHeader(),$myMail->getSujet(),$myMail->getMessage() );
							if (true !== $resultEnvoi)
							{
								// erreur -- traiter l'erreur
								echo $resultEnvoi;
							}
                        }
                        ?>
                        <p>Merci, votre message a bien été envoyé !</p>
                        <?php
                        }
                         ?>
                    </section>
                </div>
            </div>
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
