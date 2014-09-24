<?php
class Equipe
{
    private $nomEquipe;
    private $nbParticipant;

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
                case 'nomEquipe' : $this->setNom($donnee); break;
                case 'nbParticipant' : $this->setPrenom($donnee); break;
                default : break;
            }
        }
    }

    public function setNomEquipe($nomEquipe) {
        $this->nomEquipe = $nomEquipe;
    }

    public function setNbParticipant($nbParticipant) {
        $this->nbParticipant = $nbParticipant;
    }

    public function getNomEquipe(){
        return $this->nomEquipe;
    }

    public function getNbParticipant(){
        return $this->nbParticipant;
    }


}?>

