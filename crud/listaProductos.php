<!doctype html>
<html lang="en">
  <head>
    <title>Lista de Productos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <h1>Lista de Productos</h1>
        <a class ="btn btn-primary" href="respaldoGeneral.php" style="float: right";>Crear Respaldo</a>
       <a class ="btn btn-info" href="reporteProducto.php" style="float: right";>Generar Reporte</a>
       <a class ="btn btn-success" href="nuevoProducto.php" style="float: right";>Agregar Producto</a>

       <?php
        include_once("consultaProductos.pho");
        /* require 'phpqrcode/qrlib.php';
        //nombramos la carpeta
        $dir="temp/";
        //creamos la carpeta en caso de no existir
        if(!file_exists($dir))
            mkdir($dir);

        //recuperar la ejecucion del resultado del query
        
        ?> */
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id_Producto</th>                
                </tr>
            </thead>
        </table>
       ?>

      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>