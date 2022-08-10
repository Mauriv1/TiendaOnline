<!doctype html>
<html lang="en">
  <head>
    <title>Editar Producto</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <?php
        require_once("conexion.php");
        $valorIdProducto=$_GET['id_producto'];
        $consultaRegistroProducto="SELECT * FROM producto WHERE id_producto=" . $valorIdProducto;
        $resultado=$conexion -> query($consultaRegistroProducto);
        while ($row=$resultado -> fetch_assoc()){

        ?>
        <div class="img">
            <picture>
                <img src="../assets/images/INOUT-principal.png" alt="img">
            </picture>
        </div>
        <h1>Ver Producto <?php echo $valorIdProducto;?></h1>
            <a class="btn btn-success" href="dashboard.php" style="float";> Volver</a>
        <form action="editarProducto.php" method="post">
        <br>
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
                </tr>
            </thead>
            <tbody>
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
                </tr>
            </tbody>
        </table>
        </form>
        <?php
        }
        ?>
    </div>      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>