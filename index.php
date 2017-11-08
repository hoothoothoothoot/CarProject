<?php
    $DS = DIRECTORY_SEPARATOR;
    $ROOT_FOLDER = __DIR__. $DS;
    require_once $ROOT_FOLDER. $DS . 'lib' . $DS . 'File.php';
    $path_array = array("controller", "routeur.php");
    $tab = File::build_path($path_array);
    require_once ("$tab");
