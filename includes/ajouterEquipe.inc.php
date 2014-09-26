<?php
$equipe = array(
    'nomEquipe' => 'IUT Info de Valence',
    'nbParticipant' => 2 
   );

$db = new MyPdo();

//création de mon équipe
$myManagerEquipe = new EquipeManager($db);
$monEquipe = new Equipe($equipe);
$lastid = $myManagerEquipe ->add($monEquipe);

echo $lastid;
//création du projet
$projet = array(
    'nomProjet'=>'LimogesHack',
    'description'=>'Test',
    'idEquipe' => $lastid
);
$myManagerProjet = new ProjectManager($db);
$monProjet= new Projet($projet);
$myManagerProjet ->add($monProjet);

?>