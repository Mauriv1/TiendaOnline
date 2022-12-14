<!doctype html>
<html lang="en">
  <head>
    <title>Lista de Proveedores</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
      <div class="img">
          <picture>
              <img src="../assets/images/INOUT-principal.png" alt="img">
          </picture>
      </div>
      <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
          <h1 class="navbar-brand">PRINCIPAL</h1>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation"></button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item ">
                      <a class="nav-link" href="http://localhost/TiendaOnline/crud/dashboard.php">Lista de Productos</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="http://localhost/TiendaOnline/crud/listaProveedor.php">Lista de Provedores<span class="sr-only">(current)</span></a>
                  </li>
              </ul>
          </div>
      </nav>
      <a class ="btn btn-primary" href="respaldo.php" style="float";>Crear Respaldo</a>
      <a class ="btn btn-info" href="reporteProveedor.php" style="float";>Generar Reporte</a>
      <a class ="btn btn-success" href="#" style="float";>Agregar Proveedor</a>
      
      <?php 
      include_once("conexion.php");
      include_once("consultaProveedor.php");
      $resultado = $conexion -> query($listaProveedor);

      //recuperar la ejecucion del resultado del query 
      ?>
      <table class="table">
        <thead>
          <tr>
          <th scope="col">Id_Proveedor</th> 
          <th scope="col">Proveedor</th>
          <th scope="col">Banco</th>
          <th scope="col">Editar</th>
          <th scope="col">eliminar</th>
          <th scope="col">Borrado logico</th>
          </tr>
        </thead>
        <tbody>
        <?php
          while($row=$resultado->fetch_assoc()){
              
        ?>
          
          <tr>
              <td>
                  <?php echo $row['id_proveedor'] . "<br>";?>
              </td>
              <td>
                  <?php echo $row['proveedor'] . "<br>";?>
              <td>
                  <?php echo $row['banco'] . "<br>";?>
              </td>
              </td>
              <td>
                  <a href="editarProveedor.php?id=<?php echo $row['id_proveedor'];?>">Editar</a>
              </td>
              <td>
                  <a href="eliminarProveedor.php?id=<?php echo $row['id_proveedor'];?>">Eliminar</a>
              </td>
              <td>
                  <a href="borradoLogico.php?id=<?php echo $row['id_proveedor'];?>">Borrado logico</a>
              </td>
          </tr>
                
        <?php
        }
        ?>
        </tbody>
      </table>
        
    

      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>