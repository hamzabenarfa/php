<!DOCTYPE html>
<html lang="en">
<head>
    <title>modification</title>
</head>
<body>
    <form method="get">

    <h1>modification</h1>

    <h2>nom</h2>
    <input type="text" name="nom" id="">
    <h2>prenom</h2>
    <input type="text" name="prenom" id="">

    <h2>mot de passe</h2>
    <input type="text" name="pwd" id="">

    <h2>age</h2>
    <input type="text" name="age" id="">
<input type="submit" value="modifier">


</form>
</body>
</html>


<?php
require("../connect.php");

$nom=$_GET["nom"];
$prenom=$_GET["prenom"];
$age=$_GET["age"];
$pwd=$_GET["pwd"];





$sql="UPDATE  register SET nom='$nom' , prenom='$prenom' , age='$age' WHERE mail='".$_GET["mail"]."'" ;

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