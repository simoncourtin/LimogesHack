<?php

include 'includes/autoload.inc.php';
include 'includes/config.inc.php';

$db = new MyPdo();
$myManagerEquipe = new EquipeManager($db);
$myManagerParticipant = new ParticipantManager($db);

$equipes = $myManagerEquipe -> getEquipes();
echo '<ol>';
foreach($equipes as $value)
{
	?>
	<li>
		<h3> Nom de l\'equipe : <?php echo $value['nomEquipe'];?></h3>
	<?php
		$membres = $myManagerEquipe -> getListeMemebres($value['idEquipe']);
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
echo '</ol>';
?>