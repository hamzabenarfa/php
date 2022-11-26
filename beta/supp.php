<?php
require("connect.php");


$sql="DELETE FROM personne WHERE matricule='".$_GET["mat"]."'" ;

echo($sql);

echo "</br>";

$retour=$cnx->exec($sql);

if($retour===FALSE)
die('error');   
elseif($retour===0)
echo 'aucune modif affecte';
else 
echo $retour.'lignes ont ete affectee';

?>