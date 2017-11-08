<!DOCTYPE html> 

<?php
require_once  "/model/ModelVoiture.php";
$car = new ModelVoiture($_POST['marque'], $_POST['couleur'], $_POST['immatriculation']);
$car -> save();