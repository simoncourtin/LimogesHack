<?php

include 'autoload.inc.php';
include 'config.inc.php';
include 'ajouterEquipe.inc.php';
$db = new MyPdo();
$myManagerEquipe = new EquipeManager($db);
$myManagerParticipant = new ParticipantManager($db);

$equipes = $myManagerEquipe -> getEquipes();
foreach($equipes as $value)
{
	echo $value['nomEquipe'];
	$membres = $myManagerEquipe -> getListeMemebres($value['idEquipe']);
	foreach($membre as $donnee)
	{
		echo $donnee['nom'];
	}
}

?>