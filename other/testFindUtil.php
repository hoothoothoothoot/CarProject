<?php
require_once 'Trajet.php';

$passager = Trajet::findPassagers('3');
foreach ($passager as $key => $value) {
    $value -> afficher();
    echo '<br>';
}

