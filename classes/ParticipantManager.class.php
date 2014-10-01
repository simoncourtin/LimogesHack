<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class ParticipantManager
{
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }
    public function add($participant){
        $req = $this->db -> prepare('INSERT INTO participant (nom,prenom,mail,equipe,chefEquipe,dateIncr) '
                . 'VALUES (:nom,:prenom,:mail,:equipe,:chefEquipe,NOW())');
        $req -> bindValue(':nom',$participant->getNom(),PDO::PARAM_STR);
        $req -> bindValue(':prenom',$participant->getPrenom(),PDO::PARAM_STR);
        $req -> bindValue(':mail',$participant->getMail(),PDO::PARAM_STR);
        $req -> bindValue(':equipe',$participant->getEquipe(),PDO::PARAM_INT);
		$req -> bindValue(':chefEquipe',$participant->getChef(),PDO::PARAM_INT);
        $req -> execute(); 
    }
	public function getParticipantId($id)
	{
		$req = $this-> db-> prepare('SELECT * 
									FROM participant   
									WHERE idParticipant = :idParticipant');
		$req -> bindValue(':idParticipant',$id,PDO::PARAM_INT);
        $req -> execute();
		$participant =  $req->fetch();
		return $participant;
		
	}
	public function getParticipantEquipe($idEquipe)
	{
		$req = $this-> db-> prepare('SELECT * 
									FROM participant   
									WHERE idEquipe = :idEquipe');
		$req -> bindValue(':idEquipe',$idEquipe,PDO::PARAM_INT);
        $req -> execute();
		$participant =  $req->fetchAll();
		return $participant;
		
	}
	public function getParticiapants()
	{
		$req = $this-> db-> prepare('SELECT * 
									FROM participant');
        $req -> execute();
		$participants =  $req->fetchAll();
		return $participants;
	}
	
	public function verifParticipant($participant)
	{
		$req = $this-> db-> prepare('SELECT * 
									FROM participant   
									WHERE nom=:nom AND 
									prenom = :prenom AND mail =:mail');
		$req -> bindValue(':nom',$participant->getNom(),PDO::PARAM_STR);
        $req -> bindValue(':prenom',$participant->getPrenom(),PDO::PARAM_STR);
        $req -> bindValue(':mail',$participant->getMail(),PDO::PARAM_STR);
        $req -> execute();
		$result =  $req->fetch();
		return ($result!=null)? true: false;
	}
}?>
