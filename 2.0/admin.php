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

  
    <title>admin</title>
  </head>
  <body>
    <h1 class="text-center">Membre list</h1>

    <div class="container-fluid">

    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <table class="table">
                        <thead>
                            <th>id</th>
                            <th>nom</th>
                            <th>prenom</th>
                            <th>tel</th>
                            <th>option</th>

                        </thead>
                        <tbody>
                        <?php 

require_once('connect.php');

$sql="SELECT * from  membre ";

$sth=$cnx->query($sql);

$res=$sth->fetchAll(PDO::FETCH_OBJ);
?>
<?php  foreach($res as $row): ?>
                            <tr>
                                <td><?= $row->id ?></td>
                                <td><?= $row->nom ?></td>
                                <td><?= $row->prenom ?></td>
                                <td><?= $row->tel ?></td>
                                <td>
                                <a  href="edit.php?id=<?= $row->id ?>" class="btn btn-success">edit</a>
                               
                                <a onclick="return confirm('Are you sure ?')" 
                                href="delete.php?id=<?= $row->id ?>" class='btn btn-danger'>Delete</a>

                                </td>

                            </tr>

<?php endforeach; ?>  
                        </tbody>
                        
                    </table>

                    
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>

    </div>

  
  </body>
</html>
