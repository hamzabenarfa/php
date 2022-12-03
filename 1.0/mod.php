
<?php
require("connect.php");

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$age=$_POST["age"];
$pwd=$_POST["pwd"];
$id=$_GET["id"];


$sql="UPDATE register SET nom='$nom' , prenom='$prenom' , age='$age' WHERE id='".$_GET['id']."'" ;

$retour=$cnx->exec($sql);

if($retour===FALSE)
die('error');   
elseif($retour===0)
echo 'aucune modif affecte';
else 
echo $retour.'lignes ont ete affectee';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>modification</title>
</head>
<body>
    <form method="post">

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