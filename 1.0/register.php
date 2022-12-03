<?php
require("connect.php");
    $mail=$_GET["mail"];
    $nom=$_GET["nom"];
    $prenom=$_GET["prenom"];
    $age=$_GET["age"];
    $pwd=$_GET["pwd"];

    
    $sql = "INSERT INTO register(mail,nom,prenom,age,pwd) VALUES ('".$mail."','".$nom."','".$prenom."','".$age."','".$pwd."')";

   $retour = $cnx->exec($sql);
    



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
    </head>
    <body>
        <h1>Register</h1>
        <form method="get">
            
            <label for="username">mail</label>
            <input type="text" id="username" name="mail"><br>
            <label for="password">Password</label>
            <input type="text" id="password" name="pwd"><br>
            <label for="nom">nom</label>
            <input type="text" id="nom" name="nom"><br>
            <label for="prenom">prenom</label>
            <input type="text" id="prenom" name="prenom"><br>
            <label for="age">age</label>
            <input type="text" id="age" name="age"><br>

            <input type="reset" value="reset">
            <input type="submit" name="register" value="Register"></button>
        </form>
    </body>
</html>
