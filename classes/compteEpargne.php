<?php
require_once("compte.php");
class compteEpargne extends compte{
    private static $interet=6;
    
    public function calculInteret(){
        $newsolde=$this->solde+6;
        return $newsolde;
    }
    public function deposer($argent){
       return "montant deposer est de ".$this->solde+=$argent;
        
    }
 
    public function retirer($argent){
        return "montant retirer est de ".$this->solde-=$argent;
       
       
    }

}