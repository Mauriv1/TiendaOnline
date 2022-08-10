<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard IOD</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            padding-left: 0px;
        }
        .container{
            padding-left: 0px;
        }
        .table{
            padding-left: 0px;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="img">
            <picture>
                <img src="../assets/images/INOUT-principal.png" alt="img">
            </picture>
        </div>
        <div class="text_titulo">
            <h1>Lista de Productos</h1>
            <a class="btn btn-success" href="nuevoProducto.php" style="float";> Agregar Producto</a>
            <a class="btn btn-success" href="http://localhost/TiendaOnline/index.php" style="float";> Salir de Administrar</a>
            <?php
                include_once("conexion.php");
                include_once("consultaProducto.php");
                $resultado = $conexion -> query($dashboard);
            ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id_producto</th>
                        <th scope="col">id_marca</th>
                        <th scope="col">id_proveedor</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Nombre Producto</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Caracteristicas</th>
                        <th scope="col">Precio Proveedor</th>
                        <th scope="col">Precio Publico</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Ver</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row = $resultado -> fetch_assoc())
                    {
                    ?>
                    <tr>
                        <td><?php echo $row['id_producto'] . "<br>";?> </td>
                        <td><?php echo $row['id_marca'] . "<br>";?> </td>
                        <td><?php echo $row['id_proveedor'] . "<br>";?> </td>
                        <td><?php echo $row['modelo'] . "<br>";?> </td>
                        <td><?php echo $row['nom_producto'] . "<br>";?> </td>
                        <td><?php echo $row['descripcion'] . "<br>";?> </td>
                        <td><?php echo $row['caracteristicas'] . "<br>";?> </td>
                        <td><?php echo $row['precio_prov'] . "<br>";?> </td>
                        <td><?php echo $row['precio_pub'] . "<br>";?> </td>
                        <td><?php echo $row['fecha'] . "<br>";?> </td>
                        <td><?php echo $row['stock'] . "<br>";?> </td>
                        <td>
                            <a href="verProducto.php?id_producto=<?php echo $row['id_producto']; ?>">Ver</a>
                        </td>
                        <td>
                            <a href="editarProducto.php?id_producto=<?php echo $row['id_producto']; ?>">Editar</a>
                        </td>
                        <td>
                            <a href="#" data-href="eliminar.php?id=<?php echo $row['id_producto']; ?>" data-toggle="modal" data-target="#confirm-delete">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div> 
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>