<?php
require_once("compte.php");
 class comptePayant extends compte{
    public function deposer($argent){
        $this->solde+=$argent;
        return "montant deposer est de ".$this->solde-=$argent;
    }
 
    public function retirer($argent){
        $this->solde-=$argent;
        return "montant retirer est de ".$this->solde-=$argent;
       
    }
 
}