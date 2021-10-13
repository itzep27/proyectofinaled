<?php include("based.php"); 
?>
<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">

    <title>clientes</title>
  </head>
  <body>
  <link rel="stylesheet" href="diseño6.css">
  <hr>
        <div class="btn-group w-100" role="group" aria-label="Basic example">
          <a href="Inicio.html" class="btn btn-warning stretched-link">Inicio</a>
          <a href="tiendas.html" class="btn btn-info stretched-link">Tiendas</a>
          <a href="contacta.php" class="btn btn-primary stretched-link">Contáctenos</a>
          </div>
        <br><br><br><br>
      
    <center>
    <div class="col-8">
    <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre:</th>
      <th scope="col">Teléfono:</th>
      <th scope="col"><center>Correo Electronico:</center></th>
      <th scope="col"><center>Mensaje:</center></th>
    </tr>
</thead>
<tbody>
<?php
$query="SELECT * FROM mensajes";
$resultat=mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($resultat)){?>

<tr>
    <td><?php echo $row['Nombre'] ?> </td>
    <td><?php echo $row['telefono'] ?> </td>
    <td><?php echo $row['correo'] ?> </td>
    <td><?php echo $row['mensaje'] ?> </td>
    <td>

    </td>
</tr>

<?php } ?>

</tbody>    
</table>
    </div>
  </div>
</center>
      
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

   
  </body>
</html>