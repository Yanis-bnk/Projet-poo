<?php
  class compte{
   protected $solde;
   protected $code;
   private static $derniercode=0;
   
   public function __construct($solde=NULL){
    $this->code=static::$derniercode ++;
    $this->solde=$solde; 
   }

   public function getSolde(){
    return $this->solde;
   }
   public function getCode(){
    return $this->code;
   }

   public function __toString(){
    return "votre solde est de ".$this->solde." DA ";
   }
   public function retirer($argent){

   }
   public function deposer($argent){

   }





}