<?php require('header.php'); ?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>Bootstrap 5.0 Pricing Table</title>

  <style>

    .card1:hover {
      background:#00ffb6;
      border:1px solid #00ffb6;
    }

    .card1:hover .list-group-item{
      background:#00ffb6 !important
    }


    


    .card2:hover {
      background:#00C9FF;
      border:1px solid #00C9FF;
    }

    .card2:hover .list-group-item{
      background:#00C9FF !important
    }


    .card3:hover {
      background:#ff95e9;
      border:1px solid #ff95e9;
    }

    .card3:hover .list-group-item{
      background:#ff95e9 !important
    }


    .card:hover .btn-outline-dark{
      color:white;
      background:#212529;
    }

  </style>

</head>
<body class=' bg-light bg-gradient'>


  <div class="container-fluid">
    <div class="container p-5">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card card1 h-100">
            <div class="card-body">
             
              <h5 class="card-title">Body Building</h5>
              <small class='text-muted'>build muscle</small>
              <br><br>
              <span class="h2">50 TND</span>/month
              <br><br>
              <div class="d-grid my-3">
                <a href="/php/2.0/add.php" class="btn btn-outline-dark btn-block">Select</a>
              </div>
              <ul>
              <li>Makes you stronger</li>
                <li>Improves heart health</li>
                <li>Lowers your risk of injury</li>
                
              </ul>
            </div>

            
          </div>
        </div>
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card card2 h-100">
            <div class="card-body">
             
              <h5 class="card-title">Cardio</h5>
              <small class='text-muted'>run faster</small>
              <br><br>
              <span class="h2">20 TND</span>/month
              <br><br>
              <div class="d-grid my-3">
              <a href="/php/2.0/add.php" class="btn btn-outline-dark btn-block">Select</a>

              </div>
              <ul>
                <li>GREAT FOR WEIGHT LOSS</li>
                <li>STRENGTHENS YOUR HEART</li>
                <li>IMPROVES LUNG CAPACITY</li>
                
              </ul>
            </div>

            
          </div>
        </div>
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card card3 h-100">
            <div class="card-body">
             
              <h5 class="card-title">Yoga</h5>
              <small class='text-muted'>relax</small>
              <br><br>
              <span class="h2">40 TND</span>/month
              <br><br>

              <div class="d-grid my-3">
              <a href="/php/2.0/add.php" class="btn btn-outline-dark btn-block">Select</a>
              </div>
              <ul>
              <li>increased flexibility</li>
                <li>improved athletic performance</li>
                <li>maintaining a balanced metabolism</li>
                
              </ul>
            </div>

            
          </div>
        </div>
      </div>    
    </div>
  </body>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>