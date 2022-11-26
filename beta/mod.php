<?php
require("connect.php");
echo'<br>';

echo 'saisie matricule';
echo '<input type="text" name="mat">';

echo 'saisie nom';
echo '<input type="text" name="nom">';

echo 'saisie prenom';
echo '<input type="text" name="pre">';

echo '<input type="submit" >';


$a=$_GET["mat"];
$b=$_GET["nom"];
$c=$_GET["pre"];


echo $a;






?>
