<?php
require('connect.php');

if (
    isset($_GET['nom'])  && isset($_GET['prenom']) && isset($_GET['tel'])
    && !empty(trim($_GET['nom'])) && !empty(trim($_GET["prenom"])) && !empty(trim($_GET["tel"]))
) {
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $tel = $_GET['tel'];

    $sql = " INSERT INTO membre (id,nom,prenom,tel) VALUES  (NULL,'" . $nom . "','" . $prenom . "','" . $tel . "')";

    $retour = $cnx->exec($sql);
}

?>
<?php require('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <title>Apply </title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="heading-h2 text-center">Apply today </h2>
            </div>
            <div class="col-sm-9 mx-auto">
                <div class="card">
                    <div class="card-body form-box">
                        <form method="get">
                            <div class="form-group">
                                <label for="firstName" class="col-form-label-sm">Nom</label>
                                <input type="text" class="form-control form-control-sm" id="firstName" name="nom" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label for="lastName" class="col-form-label-sm">Prenom</label>
                                <input type="text" class="form-control form-control-sm" id="lastName" placeholder="Enter Last Name" name="prenom">
                            </div>



                            <div class="form-group">
                                <label for="phone" class="col-form-label-sm">Phone</label>
                                <input type="number" class="form-control form-control-sm" id="phone" placeholder="Phone number" name="tel">
                            </div>
                            <div class="form-group">
                                <label for="Poid" class="col-form-label-sm">Poid</label>
                                <input type="text" class="form-control form-control-sm" id="Poid" placeholder="saisir votre poid" name="Poid">
                            </div>
                            <div class="form-group">
                                <label for="Hauteur" class="col-form-label-sm">Hauteur</label>
                                <input type="text" class="form-control form-control-sm" id="Hauteur" placeholder="saisir Hauteur " name="Hauteur">
                            </div>
                            


                            <div class="form-group text-center mt-4">
                                <button type="submit" class="btn btn-block custom-submit-btn btn-primary " name="btn" value="submit">
                                    <span>JOIN NOW</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>