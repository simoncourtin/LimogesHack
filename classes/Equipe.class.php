<?php
class Equipe
{
    private $nomEquipe;
    private $nbParticipant;

    public function __construct($donnees)
    {
        $this->affecte($donnees); 
    }

    private function affecte($donnees)
    {
        foreach($donnees as $attribut => $valeur)
        { 
            switch($attribut)
            {
                case 'nomEquipe': 
                    $this->setNomEquipe($valeur);
                    break;
                case 'nbParticipant' : 
                    $this->setNbParticipant($valeur); 
                    break;
                default :
                    $this->setNomEquipe('$donnee');
                    break;
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
    
    public function toString()
    {
        return 'Nom de l\'équipe : '.$this->getNomEquipe()
                .' Nombre de participant'.$this->getNbParticipant();
    }
}?>

