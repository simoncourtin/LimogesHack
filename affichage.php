<?php

include 'includes/autoload.inc.php';
include 'includes/config.inc.php';



function afficherEquipes($ManagerEquipe,$ManagerParticipant)
{
	$equipes = $ManagerEquipe -> getEquipes();
	?><ol><?php
	foreach($equipes as $value)
	{
		?>
		<li>
			<h3> Nom de l\'equipe : <?php echo $value['nomEquipe'];?></h3>
		<?php
			$membres = $ManagerEquipe -> getListeMemebres($value['idEquipe']);
			?><h4> Les membres :</h4>
			<table>
			<?php
			foreach($membres as $donnee)
			{
			?>
			<tr>
				<td><input type="checkbox"></td>
				<td><?php echo $donnee['nom'] ?></td>
				<td><?php echo $donnee['prenom'] ?></td>
				<td><?php echo $donnee['mail'] ?></td>
			</tr>	
			<?php
			}
			?>
			</table>
		</li>
		<?php
	}
	?></ol><?php
}
$db = new MyPdo();
$myManagerEquipe = new EquipeManager($db);
$myManagerParticipant = new ParticipantManager($db);
afficherEquipes($myManagerEquipe,$myManagerParticipant);
?>