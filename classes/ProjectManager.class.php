<?php

class ProjectManager {
    
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }
    public function add($project){
        $req = $this->db -> prepare('INSERT INTO projet (nomProject,description,idEquipe,dateProject) '
                . 'VALUES (:nomProject,:description,:idEquipe,NOW())');
        $req -> bindValue(':nomProject',$project->getNomProjet(),PDO::PARAM_STR);
        $req -> bindValue(':description',$project->getDescription(),PDO::PARAM_STR);
        $req -> bindValue(':idEquipe',$project->getIdEquipe(),PDO::PARAM_STR);
        $req -> execute(); 
    }
}?>
