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
        $this->$db = $db;
    }
    public function add($participant){
        $req = $this->$db -> prepare('INSERT INTO participant (nom,prenom,mail,equipe,dateIncr) '
                . 'VALUES (:nom,:prenom,:mail,:equipe,:dateIncr)');
        $req -> bindValue(':nom',$participant->getNom(),PDO::PARAM_STR);
        $req -> bindValue(':prenom',$participant->getPrenom(),PDO::PARAM_STR);
        $req -> bindValue(':mail',$participant->getPrenom(),PDO::PARAM_STR);
        $req -> bindValue(':equipe',$participant->getPrenom(),PDO::PARAM_INT);
        $req -> bindValue(':dateIncr','NOW()');
        $req -> execute(); 
    }
}?>
