<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MyPdo extends PDO{
    protected $dbo;
    public function __construct(){
        $bool = false;
        if(ENV == 'dev')
            $bool = true;
        try
        {
            $this-> dbo =  parent::__construct(
                    "mysql:host=".DBHOST.
                    ";dbname=".DBNAME, DBUSER, DBPASS,
                    array(PDO::ATTR_PERSISTENT=>true,
                    PDO::ATTR_ERRMODE => $bool,
                    PDO::ERRMODE_EXCEPTION => $bool)
                    );
        } catch (PDOException $e) 
        {  
           die('Erreur lors de la connexion : '.$e->getMessage());  
        }
    }
}?>
