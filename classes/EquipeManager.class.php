<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class EquipeManager
{
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }
    
    public function add($equipe){
        $req = $this-> db-> prepare('INSERT INTO equipe (nomEquipe, dateCrea)
                VALUES (:nomEquipe, NOW())');
        $req -> bindValue(':nomEquipe',$equipe->getNomEquipe(),PDO::PARAM_STR);
        $req -> execute(); 
        return $this-> db -> lastInsertId();
    }
	public function getListeMemebres($id)
	{
		$req = $this-> db-> prepare('SELECT p.nom,p.prenom,p.mail,p.dateIncr
									FROM equipe e 
									INNER JOIN participant p ON e.idEquipe = p.equipe 
									WHERE e.idEquipe =:idEquipe');
        $req -> bindValue(':idEquipe',$id,PDO::PARAM_INT);
        $req -> execute(); 
		$equipe = array();
		$membresEquipe = $req->fetchAll();
		return $membresEquipe;
	}
	
	public function getEquipeId($id)
	{
		$req = $this-> db-> prepare('SELECT e.idEquipe ,nomEquipe,dateCrea,pr.nomProject,pr.description  
									FROM equipe e
									INNER JOIN projet pr ON e.idEquipe=pr.idEquipe
									WHERE idEquipe = :idEquipe');
		$req -> bindValue(':idEquipe',$id,PDO::PARAM_INT);
        $req -> execute();
		$equipe =  $req->fetch();
		return $equipe;
		
	}
	public function getEquipes()
	{
		$req = $this-> db-> prepare('SELECT e.idEquipe ,nomEquipe,dateCrea,pr.nomProject,pr.description  
									FROM equipe e
									INNER JOIN projet pr ON e.idEquipe=pr.idEquipe ');
        $req -> execute();
		$equipes =  $req->fetchAll();
		return $equipes;
		
	}
}?>
