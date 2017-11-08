<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> My first PHP </title>
    </head>
   
    <body>
        Here is the output of the PHP script : 
        <?php
          // This is a one line PHP comment
          /* This other way to write comments can 
          go on many lines */
           
          // Let's assign the string "hello" to the variable 'texte'
          // Variable names start with $ in PHP
          $texte = "hello world !";

		//apparently this doesn't work TODO
		//$carray = array(
		//	'marque' => 'toyota',
		//	'couleur' => 'grey',
		//	'immatriculation' => 'somethingwithY');

		//let's try to fill the array index by index then
		$carray['marque'] = 'toyota';
		$carray['couleur'] = 'grey';
		$carray['immatriculation'] = 'somethingwithY';

		$carray1 = array(
			'marque' => 'voiture',
			'couleur' => 'blue',
			'immatriculation' => '0123456789');

		$carray2 = array(
			'marque' => 'car',
			'couleur' => 'white',
			'immatriculation' => '9876543210');

		$cararray = array($carray, $carray1, $carray2);

		//var_dump($cararray);

		$marque = "volvo";
		$couleur = "black";
		$immatriculation = "whatever";
		//print_r($carray);
	
          // Let's write the value of variable '$texte'
          echo $texte;
	echo "<p>car $immatriculation of maker $marque (color $couleur)</p>";
	echo "<p>car {$carray['immatriculation']} of maker {$carray['marque']} (color {$carray['couleur']})</p>";
	// for ($i = 1; $i<count($cararray); $i++) {
	// 	echo "<ul>$cararray[$i]</ul>";
	// }
	?>
    </body>
</html> 
