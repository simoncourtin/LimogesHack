<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h3>LimogesHack</h3>
        </header>
        <div>
            

            <h1>LimogesHack</h1>
            <h2>Qu'est ce ?</h2>
            <p>
                LimogesHack est un évènement inspiré de LeedsHack. Il s’agit 
                d’un évènement rassemblant les personnes intéressées par diverses
                matières touchant à l’informatique, à savoir la programmation, 
                le design, la robotique, etc. L’évènement se déroule sur 24h, 
                et le but final est, en équipe, de rassembler ses connaissances 
                et de créer un produit final.
            </p>
            <h2>Pour qui est-ce ?</h2>
            <p>
                LimogesHack est ouvert à tout étudiant intéressé par les domaines 
                de l’informatique. Des connaissances basiques sont nécessaires 
                afin de mener à bien un projet concret.
            </p>
            <h2>De quoi ai-je besoin ?</h2>
            <p>
                Il est nécessaire d’amener son matériel (ordinateur portable, 
                ou même ordinateur fixe). Vous pouvez également amener de la 
                nourriture et du matériel de couchage pour se créer un lieu 
                confortable.
            </p>
            <h2>Comment puis-je m’enregistrer ?</h2>
            <p>
                Vous trouverez de plus amples informations sur l’évènement 
                sur le site de LimogesHack, ainsi qu’un formulaire d’inscription.
            </p>
            <form action="">
                <table>
                    <td>
                        <h3>Votre Projet</h3>
                            <label for="titre">Titre du projet :</label><br>
                            <input type="text" name="titre" id="titre"><br>
                            <label for="projet">Description du projet :</label><br>
                            <textarea name="projet" id="projet" cols="30" rows="10"></textarea>
                    </td>
                    <td>
                        <h3>L'équipe</h3>
                        <h4>Nom de l'équipe</h4>
                            <input type="text" name="equipe" id="equipe">
                        <h4>Chef de projet</h4>
                            <input type="text" name="nom" id="nom" placeholder="Nom">
                            <input type="text" name="prenom" id="prenom" placeholder="Prenom">
                            <input type="email" name="mail" id="mail" placeholder="mail">
                        <h4>Autre(s) Membre(s)</h4>
                            <input type="text" name="nom" id="nom" placeholder="Nom">
                            <input type="text" name="prenom" id="prenom" placeholder="Prenom">
                            <input type="email" name="mail" id="mail" placeholder="mail">
                            <br>
                            <input type="text" name="nom" id="nom" placeholder="Nom">
                            <input type="text" name="prenom" id="prenom" placeholder="Prenom">
                            <input type="email" name="mail" id="mail" placeholder="mail">
                            <br>
                            <input type="text" name="nom" id="nom" placeholder="Nom">
                            <input type="text" name="prenom" id="prenom" placeholder="Prenom">
                            <input type="email" name="mail" id="mail" placeholder="mail">
                            <br>
                    </td>
                </table>
                <input type="submit" name="inscription" id="inscription" value="S'inscire">
            </form>
        </div>
    </body>
</html>
