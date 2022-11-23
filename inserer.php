<?php



$a=$_GET["mat"];
$b=$_GET["nom"];
$c=$_GET["pre"];

require("connect.php");
$sql="INSERT INTO personne(matricule,nom,prenom) VALUES('".$a."','".$b."','".$c."')";
echo $sql;
$retour=$cnx->exec($sql);

if($retour===FALSE)
die('error');
else if ($retour===0)
echo 'acune modif effectu';
else 
echo $retour.'ligne ont ete affectee';



?>