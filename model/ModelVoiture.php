<?php

$path_array = array("model", "Model.php");
$tab = File::build_path($path_array);
require_once ("$tab");

class ModelVoiture {
   
  private $marque;
  private $couleur;
  private $immatriculation;
      
  // a getter
  public function getMarque() {
       return $this->marque;  
  }

  public function getCouleur() {
    return $this->couleur;
  }

  public function getImmatriculation() {
    return $this->immatriculation;
  }
     
  // a setter 
  public function setMarque($marque2) {
       $this->marque = $marque2;
  }

  public function setCouleur($couleur2) {
    $this->couleur = $couleur2;
  }

  public function setImmatriculation($im2) {
    $this->immatriculation = $im2;
  }
  
  public function save() {
    $sql = "INSERT INTO Voiture (marque, couleur, immatriculation) VALUES (:marque, :couleur, :immatriculation)";
    $req_prep = Model::$pdo->prepare($sql);
    $values = array(
        "marque" => $this->marque,
        "couleur" => $this->couleur,
        "immatriculation"=>$this->immatriculation);
    $req_prep->execute($values);
    
  }

  public static function getVoitureByImmat($immat) {
    $sql = "SELECT * FROM Voiture WHERE immatriculation=:nom_tag";
    $req_prep = Model::$pdo->prepare($sql);
    $values = array("nom_tag" => $immat);
    $req_prep->execute($values);
    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
    $tab_voit = $req_prep->fetchAll();

    if (empty($tab_voit))
      return false;
    return $tab_voit[0];
  }
  
  public static function getAllVoitures() {
    $rep = Model::$pdo->query("SELECT * FROM Voiture");
    $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
    $tab_voit = $rep->fetchAll();

    return $tab_voit;
  }
  
  public static function deleteByImmat($immat) {
      $rep = Model::$pdo->query("DELETE FROM Voiture WHERE immatriculation=:nom_tag");
      //TODO
  }
  
  // a constructor
  public function __construct($m=NULL, $c=NULL, $i=NULL)  {
      if(!is_null($m) && !is_null($c) && !is_null($i)) {
        $this->marque = $m;
        $this->couleur = $c;
        $this->immatriculation = $i;
      }
  } 
           
  // a display method
//  public function display() {
//      echo "<p>{$this->  getMarque()}, {$this-> getCouleur()}, {$this-> getImmatriculation()}</p>";
//  }
}