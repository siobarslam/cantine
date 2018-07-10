<?php

// Nous créons une classe « Cantine ».
class Cantine
{
  private $_couteaux;
  private $_fourchettes;
  private $_cuilleres;
  private $_assiettes;
  private $_chef;
  
  function __construct(){
    $this->_couteaux = 0;
    $this->_fourchettes = 0;
    $this->_cuilleres = 0;
    $this->_assiettes = 0;
    $this->_chef = "inconnu";   
  }
  
  /**
  * @return accesseur de la propriété $_couteaux
  */
  public function getCouteaux(){
	  return $this->_couteaux;
  }
  /**
  * @return accesseur de la propriété $_fourchettes
  */
  public function getFourchettes(){
	  return $this->_fourchettes;
  }
  /**
  * @return accesseur de la propriété $_cuilleres
  */
  public function getCuilleres(){
	  return $this->_cuilleres;
  }
  /**
  * @return accesseur de la propriété $_assiettes
  */
  public function getAssiettes(){
	  return $this->_assiettes;
  }
  
  /**
  * @return accesseur de la propriété $_couteaux
  */
  public function setCouteaux($c){
	  $this->_couteaux = $c;
  }
  /**
  * setter de la propriété $_fourchettes
  */
  public function setFourchettes($f){
	  $this->_fourchettes = $f;
  }
  /**
  * setter de la propriété $_cuilleres
  */
  public function setCuilleres($c){
	  $this->_cuilleres = $c;
  }
  /**
  * setter de la propriété $_assiettes
  */
  public function setAssiettes($a){
	  $this->_assiettes = $a;
  }
  
  // Nous déclarons une méthode dont le seul but est de retourner un texte présentant le chef de cantine.
  public function toString()
  {
    return "Cantine dirigee par " .$this->_chef;
  }
  
  public function maxRepas()
  {
	  $les_elements = array();
	  $les_elements[] = $this->getAssiettes();
	  $les_elements[] = $this->getCouteaux();
	  $les_elements[] = $this->getCuilleres();
	  $les_elements[] = $this->getFourchettes();
	  return min($les_elements);
  }
  
  public function maxConvives()
  {
	  $les_elements = array();
	  $les_elements[] = $this->getAssiettes();
	  $les_elements[] = $this->getCouteaux();
	  $les_elements[] = $this->getCuilleres();
	  $les_elements[] = $this->getFourchettes();
	  return min($les_elements);
  }
}
?>
