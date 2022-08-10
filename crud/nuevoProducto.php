<!doctype html>
<html lang="en">
  <head>
    <title>Nuevo Producto</title>
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
            <h1>Nuevo Producto</h1>
            <form action="guardarProducto.php" method="post">
                <!-- <label for="id_producto">id_producto</label>
                <input class="form-control" type="text" name="id_producto" id="id_producto" placeholder="..."> -->
                <label for="id_marca">id_marca</label>
                <input class="form-control" type="number" name="id_marca" id="id_marca" placeholder="...">
                
                <label for="id_proveedor">id_proveedor</label>
                <input class="form-control" type="number" name="id_proveedor" id="id_proveedor" placeholder="...">

                <label for="modelo">Modelo</label>
                <input class="form-control" type="text" name="modelo" id="modelo" placeholder="...">
                
                <label for="nom_producto">Nombre Producto</label>
                <input class="form-control" type="text" name="nom_producto" id="nom_producto" placeholder="...">
                
                <label for="descripcion">Descripción</label>
                <input class="form-control" type="text" name="descripcion" id="descripcion" placeholder="...">
                
                <label for="caracteristicas">Caracteristicas</label>
                <input class="form-control" type="text" name="caracteristicas" id="caracteristicas" placeholder="...">
                
                <label for="precio_prov">Precio Proveedor</label>
                <input class="form-control" type="" name="precio_prov" id="precio_prov" placeholder="...">
                
                <label for="precio_pub">Precio Producto</label>
                <input class="form-control" type="text" name="precio_pub" id="precio_pub" placeholder="...">
                
                <label for="fecha">Fecha</label>
                <input class="form-control" type="date" name="fecha" id="fecha" placeholder="...">
                
                <label for="stock">Stock</label>
                <input class="form-control" type="number" name="stock" id="stock" placeholder="...">
                <br>
            <input class="btn btn-primary" type="submit" value="Guardar">
            <a href="dashboard.php" class="btn btn-primary">Cancelar</a> 
            </form>
                       
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>