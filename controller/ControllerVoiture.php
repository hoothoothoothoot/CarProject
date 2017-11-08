<?php

$path_array = array("model", "ModelVoiture.php");
$tab = File::build_path($path_array);
require_once ("$tab"); // chargement du modèle

class ControllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        $path_to_list = array("view", "voiture", "list.php");
        $tab_to_list = File::build_path($path_to_list);
        require ("$tab_to_list");  //redirige vers la vue
    }
    
    public static function read() {
        $immat = $_GET['immat'];
        $v = ModelVoiture::getVoitureByImmat($immat);
        $tab_to_detail = File::build_path(array("view","voiture","detail.php"));
        if ($v == true) {
            require ("$tab_to_detail");
        } else {
            require (File::build_path(array("view","voiture","error.php")));
        }
    }
    
    public static function create() {
        require (File::build_path(array("view","voiture","create.php")));
    }
    
    public static function created() {
        $car = new ModelVoiture($_POST['marque'], $_POST['couleur'], $_POST['immatriculation']);
        $car -> save();
        ControllerVoiture::readAll();
    }
}
?>
