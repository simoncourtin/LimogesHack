<?php

class ProjectManager {
    
    private $db;
    
    public function __construct($db) {
        $this->$db = $db;
    }
    public function add($project){
        $req = $this->$db -> prepare('INSERT INTO projet (nomProject,description,dateProject) '
                . 'VALUES (:nomProject,:description,NOW())');
        $req -> bindValue(':nomProject',$project->setNomProjet,PDO::PARAM_STR);
        $req -> bindValue(':description',$project->setDescription(),PDO::PARAM_STR);
        $req -> execute(); 
    }
}?>
