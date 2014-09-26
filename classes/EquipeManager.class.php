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
        echo $equipe->getNomEquipe();
        $req = $this-> db-> prepare('INSERT INTO equipe (nomEquipe, nbParticipant, dateCrea)
                VALUES (:nomEquipe, :nbParticipant, NOW())');
        $req -> bindValue(':nomEquipe',$equipe->getNomEquipe(),PDO::PARAM_STR);
        $req -> bindValue(':nbParticipant',$equipe->getNbParticipant(),PDO::PARAM_STR);
        $req -> execute(); 
        return $this-> db -> lastInsertId();
    }
}?>
