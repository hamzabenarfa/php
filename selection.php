<?php


require("connect.php");

$sql="SELECT * from personne";

$sth=$cnx->query($sql);

$res=$sth->fetchAll(PDO::FETCH_ASSOC);

echo "<table border='1' >";
foreach($res as $row){
       
        echo "<tr>" ;
        echo "<td>";
        echo $row['matricule'];

        echo "</td>";

        echo "<td>";
        echo $row['nom'];
        echo "</td>";

        echo "<td>";
        echo $row['prenom'];
        echo "</td>";

        echo "<td>";
        echo "<a href='mod.php' >";
        echo "modifier</a>";
        echo "</td>";

        echo "<td>";
        echo "<a href='supp.php?mat=".$row['matricule']."'>";
        echo "supprimier</a>";
        echo "</td>";
        echo"</tr>";

      
        
}
echo"</table>";


?>