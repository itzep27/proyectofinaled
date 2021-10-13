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
  <link rel="stylesheet" href="diseño5.css">
  <hr>
    <div class="btn-group w-100" role="group" aria-label="Basic example">
      <a href="Inicio.html" class="btn btn-warning stretched-link">Inicio</a>
      <a href="tiendas.html" class="btn btn-info stretched-link">Tiendas</a>
      <a href="contacta.php" class="btn btn-primary stretched-link">Contáctenos</a>
      <a href="usuario.html" class="btn btn-success stretched-link">Ver Mensaje</a>
      </div>
  <br><br><br>
  <h1>Contáctenos</h1> 
      <br><br>
      <form action="guarda.php" method="POST">
      <div class="container">
  <div class="row">
    <div class="col-12">
    <h4>Nombres*</h4>
    <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="Id_Cliente" name="nombre">
  <label for="floatingInput">Ingrese el Nombre y Apellido</label>
</div>
<h4>Teléfono/Celular</h4>
<div class="form-floating">
  <input type="text" class="form-control" id="floatingPassword" placeholder="Nombre" name="tel">
  <label for="floatingPassword">Ingrese Número Telefonico, debe contar con 8 Digítos</label>
</div>  
<br>
<h4>Correo Electronico*</h4>
<div class="form-floating">
  <input type="text" class="form-control" id="floatingPassword" placeholder="Apellido" name="corr">
  <label for="floatingPassword">Ingrese Correo Electronico</label>
  <br>
  <h4>Mensaje*</h4>
  <div class="form-floating">
  <input type="text" class="form-control" id="floatingPassword" placeholder="Correo Electronico" name="men">
  <label for="floatingPassword">Ingrese Mensaje</label>
 <br>
</div> 
<br>
<center>
    <input type="submit" class="btn btn-outline-info" name="enviarr"></button>
</center>
</div> 
    </div>
    </form>
</div>
</div>
    <br><br>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><b>PBX:</b> 4298 5897 - <b>Dirección:</b> 20 calle zona 9 San Miguel Petapa</a>
             <form action="buscar.php" method="GET" class="d-flex">
            <a class="navbar-brand" href="#"><b>Carnet:</b> 2020-40256 <b>Nombre:</b> Jefferson López</a>
            </form>
          </div>
        </div>
      </nav>
    
      
      
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

   
  </body>
</html>