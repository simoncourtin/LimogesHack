<?php
$mailInscription = '<!DOCTYPE html>
<html>
    <head>
        <title>Vous avez bien été inscrit à la LimogesHack</title>
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
                                                                        <h2 style="color:#000; font-size:22px; padding-top:12px;">Confirmation de votre inscription</h2>
                                                                        <div align="left" class="article-content">
                                                                            <p>Votre inscription à la LimogesHack du samedi 18 octobre 2014 a bien été prise en compte !</p>
                                                                            <br>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="w580"  width="580" height="1" bgcolor="#f7f7f7"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <table class="w580"  width="580" cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="w580"  width="580">
                                                                        <h2 style="color:#000; font-size:22px; padding-top:12px;">Récapitulatif de vos informations</h2>
                                                                        <div align="left" class="article-content">
                                                                            <p><strong>Nom du projet :</strong> '.$_POST['titre'].'</p>
                                                                            <p><strong>Description du projet :</strong></p>
                                                                            <p>'.$_POST['projet'].'</p>
                                                                            <p><strong>Nom de l\'équipe :</strong> '.$_POST['equipe'].'</p>
                                                                            <p><strong>Chef du projet :</strong> '.$_POST['prenom0'].' '.$_POST['nom0'].' &lt;'.$_POST['mail0'].'&gt;</p>
                                                                            <p><strong>Autres membres :</strong></p>
																			';
																			$i=1;
																			while(isset($_POST['prenom'.$i]) and $i<5)
																			{
																			
																				$mailInscription.= '<p>'.$_POST['prenom'.$i].' '.$_POST['nom'.$i].' &lt;'.$_POST['mail'.$i].'&gt;</p>';
																				$i++;
																			}
																			$mailInscription.='
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="w580"  width="580" height="1" bgcolor="#f7f7f7"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        
                                                        <table class="w580"  width="580" cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="w580"  width="580">
                                                                        <br>
                                                                        <div align="left" class="article-content">
                                                                            <p>N\'oubliez pas votre matériel le jour de l\'événement !</p>
                                                                            <p>A samedi 18 octobre 10h pour une journée chargée en animation !</p>
                                                                            <br>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="5" class="w580"  width="580" height="1" bgcolor="#f7f7f7"></td>
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
                                                        <br>
                                                        <p align="center">
                                                        <a style="color:#000; text-decoration: none; background: #78909c; padding: 12px; border-radius: 3px;" href="http://limogeshack.sixfoisneuf.fr"><span style="color:#fff;">Accéder à LimogesHack</span></a>
                                                        </p>
                                                        <br>
                                                        <p align="center" >
                                                        2 bis Impasse Daguerre<br>
                                                        87100 Limoges<br>
                                                        FabLab<br>
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
</html>';