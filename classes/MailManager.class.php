<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MailManager
{
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }
	
	public function envoyer($mail)
	{
		mail($mail->getMail(),$mail->getSujet(),$mail->getMessage(),$mail->getHeader());
		$this->add($mail);
	}
	
    public function add($mail){
        $req = $this->db -> prepare('INSERT INTO mail (entete,sujet,message,adresseDest) '
                . 'VALUES (:entete,:sujet,:message,:adresseDest)');
        $req -> bindValue(':entete',$mail->getHeader(),PDO::PARAM_STR);
        $req -> bindValue(':sujet',$mail->getSujet(),PDO::PARAM_STR);
        $req -> bindValue(':message',$mail->getMail(),PDO::PARAM_STR);
        $req -> bindValue(':adresseDest',$mail->getMessage(),PDO::PARAM_STR);
        $req -> execute(); 
    }
}?>