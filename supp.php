<?php
require("connect.php");

$x=$_GET['mat'];
echo "</br>";

echo $x;
echo "</br>";
$sql="DELETE FROM personne WHERE matricule=".$x;

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