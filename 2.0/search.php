<?php 
require('connect.php');
$search='';
    $search=$_GET["search"];

    echo $search;
    $sql="SELECT nom FROM membre where nom='".$search."'";
    echo $sql;
        $req=$cnx->query($sql);
    echo $retour;
    $res=$req->fetchAll(PDO::FETCH_BOTH);

    foreach($res as $row){
        
        $nom=$row['nom'];
           
    }

    if ($nom===$search){

        echo 'found';
        echo $search;
    }

   






?>