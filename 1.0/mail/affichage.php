<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>affichage mails</title>
</head>
<body>
<table border='1' >

<tr>
                    <th>mail</th>
                    <th>Nom</th>
                    <th>prenom</th>
                    <th>password</th>
                    <th>age</th>
                </tr>
    <?php
require("../connect.php");


$sql="SELECT * from register";

$sth=$cnx->query($sql);

$res=$sth->fetchAll(PDO::FETCH_ASSOC);



foreach($res as $row){
       
           
        echo "<tr>" ;
        echo "<td>";
        echo $row['mail'];

        echo "</td>";

        echo "<td>";
        echo $row['nom'];
        echo "</td>";

        echo "<td>";
        echo $row['prenom'];
        echo "</td>";

        
        echo "<td>";
        echo $row['pwd'];
        echo "</td>";

        echo "<td>";
        echo $row['age'];
        echo "</td>";

        echo "<td>";
        echo "<a href='mod.php?mail=".$row['mail']."'>";
        echo "modifier</a>";
        echo "</td>";

        echo "<td>";
        echo "<a href='supp_mail.php?mail=".$row['mail']."'>";
        echo "supprimier</a>";
        echo "</td>";
        echo"</tr>";

      
        
}

?>
</table>
    
</body>
</html>