<?php

// Nous créons une classe « Cantine ».
class Cantine
{
  private $_couteaux;
  private $_fourchettes;
  private $_cuilleres;
  private $_assiettes;
  private $_chef;
  
  public __construct(){
    $this->_couteaux = 0;
    $this->_fourchettes = 0;
    $this->_cuilleres = 0;
    $this->_assiettes = 0;
    $this->_chef = "inconnu";   
  }
  
  // Nous déclarons une méthode dont le seul but est d'afficher un texte.
  public function toString()
  {
    return "Cantine dirigée par " .$this->_chef;
  }
}
?>
