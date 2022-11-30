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





<?php
require("../connect.php");

$nom=$_GET["nom"];
$prenom=$_GET["prenom"];
$age=$_GET["age"];
$pwd=$_GET["pwd"];
$id=$_GET["id"];


//$sql="UPDATE register SET nom='$nom' , prenom='$prenom' , age='$age' WHERE id='".$_GET['id']."'" ;

$sql = "UPDATE register SET nom='$nom' WHERE id='$id'   ";


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

</form>
</body>
</html>