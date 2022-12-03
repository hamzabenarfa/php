<?php

$server="localhost";
$user="root";
$pwd="";

try{
$cnx= new PDO("mysql:host=$server;dbname=H&N",$user,$pwd);


}
catch(PDOException $e){

        echo"404" . $e->getMessage();
}




?>