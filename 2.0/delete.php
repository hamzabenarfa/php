<?php
require("connect.php");

$id=$_GET["id"];
$sql="DELETE FROM membre WHERE id=:id" ;

$retour = $cnx->prepare($sql);

if ($retour->execute([':id' => $id])) {
  header("Location: /php/2.0");
}

?>