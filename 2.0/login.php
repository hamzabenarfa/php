<?php
require('connect.php');
Session_start() ;

if( isset($_GET['mail']) && isset($_GET['pwd']) && !empty(trim($_GET['mail']))&& !empty(trim($_GET["pwd"]))){
    $mail=$_GET['mail'];
    $pwd=$_GET['pwd'];

 $sql="SELECT * FROM manager WHERE mail='".$mail."' AND pwd='".$pwd."'";

$retour = $cnx->query($sql);

    $res=$retour->fetchAll(PDO::FETCH_ASSOC);

    foreach($res as $row){
        $dbmail=$row['mail'];
        $dbpwd=$row['pwd'];    
    }

    if ($mail!=$dbmail || $pwd!=$dbpwd){

        header("Location: /php/2.0/login.php");

    }
    else {


      $_SESSION['connected'] = "oui" ;
      header("Location: /php/2.0/admin.php");


    }


}



?>


<?php require('header.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </head>

  <body>

    <form method="get">

  <section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in</h3>

            <div class="form-outline mb-4">
              <input type="text" id="typeEmailX-2" class="form-control form-control-lg" placeholder="Email" name="mail"/>
            </div>

            <div class="form-outline mb-4">
                <input type="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Password" name="pwd"/>
            </div>

           

            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
  </body>
</html>