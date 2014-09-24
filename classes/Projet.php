<?php

class Projet {
    
    private $nomProjet;
    private $description;
    
    function __contruct($valeur = array())
    {
        $this -> affecte($valeur);
    }

    private function affecte($valeur)
    {
        foreach($valeur as $attribut => $donnee)
        { 
            switch($attribut)
            {
                case 'nomProjet' : $this->setNomProjet($donnee); break;
                case 'description' : $this->setDescription($donnee); break;
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

    public function getNomProjet() {
        return $this->nomProjet;
    }

    public function getDescription() {
        return $this->description;
    }


}?>
