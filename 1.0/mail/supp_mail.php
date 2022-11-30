<?php
require("../connect.php");


$sql="DELETE FROM register WHERE id='".$_GET["id"]."'" ;

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