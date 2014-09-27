<?php
//test si les champs concernant le projet et le nom de l'équipe ont bienété remplis
if(!isset($_POST['titre']) and !isset($_POST['projet'])and !isset($_POST['equipe']))
{
	header('location:index.php');
}

//connexion base de données
$db = new MyPdo();

//création des donnees l'équipe
$equipe = array(
    'nomEquipe' => htmlspecialchars($_POST['equipe']),
    'nbParticipant' => null 
	);

//création de l'objet équipe
$myManagerEquipe = new EquipeManager($db);
$monEquipe = new Equipe($equipe);

//création du projet
$projet = array(
    'nomProjet'=>'LimogesHack',
    'description'=>'Test',
    'idEquipe' => null
);
$myManagerProjet = new ProjectManager($db);
$monProjet= new Projet($projet);

//controles et ajout des participants 
$participants = array();
$i=0;
$erreurParticipant= false;
$myManagerParticipant = new ParticipantManager($db);
while(isset($_POST['prenom'.$i]) or $i<5)
{
	if(isset($_POST['nom'.$i]) and isset($_POST['nom'.$i]))
	{
		$participant = array(
			'nom' => htmlspecialchars($_POST['nom'.$i]),
			'prenom' => htmlspecialchars($_POST['prenom'.$i]),
			'mail'=>htmlspecialchars($_POST['mail'.$i]),
			'equipe'=> null,
			'projet'=>null
			);
		$participants[] = new Participant($participant);
		
	}
	else
	{
		$erreurParticipant= true;
		break;
	}
	$i++;
}
//liaison du l'équipe du projet et des différents participants
//ajout dans la bdd
if(count($participants)>0 and $erreurParticipant== false)
{
	$lastid = $myManagerEquipe ->add($monEquipe);
	$monProjet -> setIdEquipe($lastid);
	$myManagerProjet ->add($monProjet);
	foreach($participant as $value)
	{
		$value -> setEquipe($lastid);
		$myManagerParticipant -> add($value);
	}
}
?>