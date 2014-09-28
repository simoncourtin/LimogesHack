<?php
function evoyerMail()
{
	//mail destinataire
	$mail='courtin.simon@gmail.com';
	
	//message du mail
	$texte='Vous etes bien inscrit à la lim\'Hack';
	
	//l'entête du mail
	$header='From:Team Lim\'Hack';
	
	//sujet du mail
	$sujet='Validation de l\'inscription';
	
	//envoi du mail
	//mail($mail,$sujet,$message,$header);
}
?>