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
		$header="From:".$mail->getHeader().".<limogeshack@gmail.com>\r\n". 
				"Reply-To: Team LimogesHack <limogeshack@gmail.com>"
				"MIME-Version: 1.0" . "\r\n" . 
				"Content-type: multipart/alternative;" . "\r\n"; 
		mail($mail->getMail(),$mail->getSujet(),$mail->getMessage(),$header);
		$this->add($mail);
	}
	
    public function add($mail){
        $req = $this->db -> prepare('INSERT INTO mail (entete,sujet,message,adresseDest) '
                . 'VALUES (:entete,:sujet,:message,:adresseDest)');
        $req -> bindValue(':entete',$mail->getHeader(),PDO::PARAM_STR);
        $req -> bindValue(':sujet',$mail->getSujet(),PDO::PARAM_STR);
        $req -> bindValue(':message',$mail->getMessage(),PDO::PARAM_STR);
        $req -> bindValue(':adresseDest',$mail->getMail(),PDO::PARAM_STR);
        $req -> execute(); 
    }
}?>