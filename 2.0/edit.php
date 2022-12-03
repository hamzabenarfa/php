<?php
require("connect.php");
$id=$_GET["id"];

$sql = 'SELECT * FROM membre WHERE id=:id';
$statement = $cnx->prepare($sql);
$statement->execute([':id' => $id ]);
$row = $statement->fetch(PDO::FETCH_OBJ);


if (isset ($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['tel'])) {
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$tel=$_GET['tel'];

$sql='UPDATE membre SET nom=:nom , prenom=:prenom, tel=:tel WHERE id=:id' ;
$statement = $cnx->prepare($sql);
if ($statement->execute([':nom'=>$nom,':prenom'=>$prenom,':tel'=>$tel,':id' => $id])) {
 //header("Location: /php/2.0/admin.php");
 echo $sql;
}
}
?>

<?php require('header.php');?>
<!DOCTYPE html>
<html lang="en">
<head>  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
    <title>Edit </title>
</head>
<body>
   
<div class="container">
<form  method="get">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="heading-h2 text-center" >Edit </h2>
            </div>
            <div class="col-sm-9 mx-auto">
                <div class="card">
                    <div class="card-body form-box">
                       
                            <div class="form-group">
                                <label for="firstName" class="col-form-label-sm">Nom</label>
                                <input type="text" class="form-control form-control-sm" id="firstName" name="nom"
                                       placeholder="<?= $row->nom; ?>">
                            </div>
                            <div class="form-group">
                                <label for="lastName" class="col-form-label-sm">Prenom</label>
                                <input type="text" class="form-control form-control-sm" id="lastName"
                                placeholder="<?= $row->prenom; ?>" name="prenom">
                            </div>
                        
                           

                            <div class="form-group">
                                <label for="phone" class="col-form-label-sm">Phone</label>
                                <input type="number" class="form-control form-control-sm" id="phone" placeholder="<?= $row->tel; ?>" name="tel">
                            </div>
                            

                            
                            <div class="form-group text-center mt-4">
                                <button type="submit" class="btn btn-block custom-submit-btn btn-primary " name="btn" value="submit">
                                    <span>Submit</span>
                                </button>
                            </div>
                       
                    </div>
                </div>
            </div>
        </div>
        </form>
</body>
</html>