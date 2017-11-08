<?php

$path_array = array("controller", "ControllerVoiture.php");
$tab = File::build_path($path_array);

require_once "$tab";
if(!array_key_exists('action', $_GET)) {
    ControllerVoiture::readAll();
} else {
    $action = $_GET['action'];  
    ControllerVoiture::$action();
}