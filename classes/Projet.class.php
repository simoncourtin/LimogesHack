<?php

class Projet {
    
    private $nomProjet;
    private $description;
    private $idEquipe;
    
    function __construct($valeur)
    {
        $this -> affecte($valeur);
    }

    private function affecte($donnees)
    {
        foreach($donnees as $attribut => $valeur)
        { 
            switch($attribut)
            {
                case 'nomProjet' : $this->setNomProjet($valeur); break;
                case 'description' : $this->setDescription($valeur); break;
                case 'idEquipe' : $this->setIdEquipe($valeur); break;
                default : break;
            }
        }
    }
    
    public function setNomProjet($nomProjet) {
        $this->nomProjet = $nomProjet;
    }

    public function setDescription($description) {
        $this->description = $description;
    }
    
    public function setIdEquipe($idEquipe) {
        $this->idEquipe = $idEquipe;
    }

    public function getNomProjet() {
        return $this->nomProjet;
    }

    public function getDescription() {
        return $this->description;
    }
    
    public function getIdEquipe() {
        return $this->idEquipe;
    }
    
    public function toString()
    {
        return 'Nom du projet : '.$this->getNomProjet()
                .' Description'.$this->getDescription();
    }


}?>
