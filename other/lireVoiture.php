<!--<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8";
    </head>
    <body>-->
<?php
require_once "/model/Model.php";
require_once "/model/ModelVoiture.php";

$rep = Model::$pdo->query("SELECT * FROM Voiture");
//$tab_obj = $rep-> fetchAll(PDO::FETCH_OBJ);

$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
$tab_voiture = $rep->fetchAll();

//$car = new Voiture("Subaru", "Blue", "47UR91");
//$car->save();

foreach ($tab_voiture as $value) {
    $value->display();
}

//$cars = Voiture::getVoitureByImmat('14PA18');
//$cars->display();

//foreach ($tab_obj as $obj=> $value) {
//    foreach ($value as $key=>$value) {
//        echo "$key = $value <br> ";
//    }
//    echo "<br>";
//}
?>
    <!-- </body>
</html> -->