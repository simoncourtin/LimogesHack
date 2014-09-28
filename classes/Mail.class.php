<?php
class Mail
{
    private $header;
    private $sujet;
    private $mail;
    private $message;

    function __construct($valeur)
    {
        $this -> affecte($valeur);
    }

    private function affecte($valeur)
    {
        foreach($valeur as $attribut => $donnee)
        { 
            switch($attribut)
            {
                case 'header' : $this->setHeader($donnee); break;
                case 'sujet' : $this->setSujet($donnee); break;
                case 'mail' : $this->setMail($donnee); break;
                case 'message' : $this->setMessage($donnee); break;
                default : break;
            }
        }
    }

    public function setHeader($header)
    {
        $this->header = $header;
    }

    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getHeader() {
        return $this->header;
    }

    public function getSujet() {
        return $this->sujet;
    }

    public function getMail() {
        return $this->mail;
    }

    public function getMessage() {
        return $this->message;
    }

}
