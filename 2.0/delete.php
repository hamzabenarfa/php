<?php
require("connect.php");


$sql="DELETE FROM membre WHERE id='".$_GET['id']."'" ;

if ($cnx->exec($sql)) {
  header("Location: /php/2.0/admin.php");
}

?>