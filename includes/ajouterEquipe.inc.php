<?php
session_start();
$_SESSION['erreurInscription']=0;
//test si les champs concernant le projet et le nom de l'équipe ont bienété remplis
if(!isset($_POST['titre']) and !isset($_POST['projet'])and !isset($_POST['equipe']))
{
	header('location:index.php');
}

//connexion base de données
$db = new MyPdo();

//création des donnees l'équipe
$equipe =  htmlspecialchars($_POST['equipe']);

//création de l'objet équipe
$myManagerEquipe = new EquipeManager($db);
$monEquipe = new Equipe($equipe);

//création du projet
$projet = array(
    'nomProjet'=>htmlspecialchars($_POST['titre']),
    'description'=>htmlspecialchars($_POST['projet']),
    'idEquipe' => null
);
$myManagerProjet = new ProjectManager($db);
$monProjet= new Projet($projet);

//controles et ajout des participants 
$participants = array();
$i=0;
$erreurParticipant= false;
$myManagerParticipant = new ParticipantManager($db);
while(isset($_POST['prenom'.$i]) and $i<5)
{
	echo $_POST['prenom'.$i];
	if(!empty($_POST['nom'.$i]) and !empty($_POST['nom'.$i])and !empty($_POST['mail'.$i]))
	{
		if(strlen($_POST['nom'.$i]) > 2 and strlen($_POST['prenom'.$i]) > 2)
		{
			$participant = array(
				'nom' => htmlspecialchars($_POST['nom'.$i]),
				'prenom' => htmlspecialchars($_POST['prenom'.$i]),
				'mail'=>htmlspecialchars($_POST['mail'.$i]),
				'equipe'=> null,
				'chefEquipe'=>($i==0)? 1:0
				);
			$participants[$i] = new Participant($participant);
			echo($myManagerParticipant-> verifParticipant($participants[$i]));
			if($myManagerParticipant-> verifParticipant($participants[$i])==true)
			{
				$_SESSION['erreurInscription']=1;
				$erreurParticipant= true;
				break;
			}
		}
		else
		{
			$erreurParticipant= true;
			break;
		}
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
if(count($participants)>0 and $erreurParticipant == false)
{
	//création du mail de confirmation d'inscription
	include 'mailType.inc.php';
	$mail = array (
		'header'=>'LimogesHack',
		'sujet'=>'Confirmation d\'inscription à la LimogesHack',
		'mail'=>null,
		'message'=>$mailInscription 
	);
	$myMail = new Mail($mail);
	
	$lastid = $myManagerEquipe ->add($monEquipe);
	$monProjet -> setIdEquipe($lastid);
	$myManagerProjet ->add($monProjet);
	foreach($participants as $value)
	{
		$value -> setEquipe($lastid);
		$myManagerParticipant -> add($value);
		$myMail->setMail($value -> getMail());
		//envoi du mail au différent membres
		$resultEnvoi = smtpMailer($myMail->getMail(), 'limogeshack@gmail.com', 'Limoges Hack',$myMail->getSujet(),$myMail->getMessage() );
		if (true !== $resultEnvoi)
		{
			// erreur -- traiter l'erreur
			echo $resultEnvoi;
		}
		
	}
	$mailServ = array (
					'header'=>'LimogesHack',
					'sujet'=>'LimogesHack : Inscription d\'une équipe',
					'mail'=>'limogeshack@gmail.com',
					'message'=>'Une équipe vient de s\'inscrire à la session du samedi 18 octobre 2014.'
					);
	$mailServeur = new Mail($mailServ);
	//envoi du mail au serveur
	//$resultEnvoi = smtpMailer($mailServeur->getMail(), 'limogeshack@gmail.com', $mailServeur->getHeader(),$mailServeur->getSujet(),$mailServeur->getMessage() );
        // NOPE.AVI
	if (true !== $resultEnvoi)
	{
		// erreur -- traiter l'erreur
		echo $resultEnvoi;
	}
}
?>
