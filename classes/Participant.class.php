<?php
class Participant
{
    private $nom;
    private $prenom;
    private $mail;
    private $equipe;
    private $projet;

    function __construct($valeur = array())
    {
        $this -> affecte($valeur);
    }

    private function affecte($valeur)
    {
        foreach($valeur as $attribut => $donnee)
        { 
            switch($attribut)
            {
                case 'nom' : $this->setNom($donnee); break;
                case 'prenom' : $this->setPrenom($donnee); break;
                case 'mail' : $this->setMail($donnee); break;
                case 'equipe' : $this->setEquipe($donnee); break;
                case 'project' : $this->setProjet($donnee); break;
                default : break;
            }
        }
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getMail() {
        return $this->mail;
    }

    public function getEquipe() {
        return $this->equipe;
    }

}
