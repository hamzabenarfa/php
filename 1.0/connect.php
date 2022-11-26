<?php

$server="localhost";
$user="root";
$pwd="";

try{
$cnx= new PDO("mysql:host=$server;dbname=H&N",$user,$pwd);

$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo("connected");

}
catch(PDOException $e){

        echo"404" . $e->getMessage();
}




?>