<?php
class Equipe
{
    private $nomEquipe;

    public function __construct($donnees)
    {
        $this->affecte($donnees); 
    }

    private function affecte($nom)
    {
        $this->setNomEquipe($nom);
    }

    public function setNomEquipe($nomEquipe) {
        $this->nomEquipe = $nomEquipe;
    }

   
    public function getNomEquipe(){
        return $this->nomEquipe;
    }

	public function toString()
    {
        return 'Nom de l\'équipe : '.$this->getNomEquipe();
    }
}?>

