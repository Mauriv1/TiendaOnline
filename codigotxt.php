<!-- <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group <?php echo (!empty($id_producto_err)) ? 'has-error' : ''; ?>">
        <label>id_producto</label>
        <input type="text" name="producto" class="form-control" value="<?php echo $id_producto; ?>">
        <span class="help-block"><?php echo $id_producto_err;?></span>
    </div>
    <div class="form-group <?php echo (!empty($id_marca_err)) ? 'has-error' : ''; ?>">
        <label>id_marca</label>
        <input type="text" name="marca" class="form-control" value="<?php echo $id_marca; ?>">
        <span class="help-block"><?php echo $id_marca_err;?></span>
    </div>
    <div class="form-group <?php echo (!empty($id_proveedor_err)) ? 'has-error' : ''; ?>">
        <label>id_proveedor</label>
        <input type="text" name="proveedor" class="form-control" value="<?php echo $id_proveedor; ?>">
        <span class="help-block"><?php echo $id_proveedor_err;?></span>
    </div>
    <div class="form-group <?php echo (!empty($modelo_err)) ? 'has-error' : ''; ?>">
        <label>modelo</label>
        <input type="text" name="modelo" class="form-control" value="<?php echo $modelo; ?>">
        <span class="help-block"><?php echo $modelo_err;?></span>
    </div>
    <div class="form-group <?php echo (!empty($nom_producto_err)) ? 'has-error' : ''; ?>">
        <label>nom_producto</label>
        <input type="text" name="nom_producto" class="form-control" value="<?php echo $nom_producto; ?>">
        <span class="help-block"><?php echo $nom_producto_err;?></span>
    </div>
    <div class="form-group <?php echo (!empty($descripcion_err)) ? 'has-error' : ''; ?>">
        <label>descripcion</label>
        <input type="text" name="descripcion" class="form-control" value="<?php echo $descripcion; ?>">
        <span class="help-block"><?php echo $descripcion;?></span>
    </div>
    <div class="form-group <?php echo (!empty($caracteristicas_err)) ? 'has-error' : ''; ?>">
        <label>caracteristicas</label>
        <input type="text" name="caracteristicas" class="form-control" value="<?php echo $caracteristicas; ?>">
        <span class="help-block"><?php echo $caracteristicas_err;?></span>
    </div>
    <div class="form-group <?php echo (!empty($precio_prov_err)) ? 'has-error' : ''; ?>">
        <label>precio_prov</label>
        <input type="text" name="precio_prov" class="form-control" value="<?php echo $precio_prov; ?>">
        <span class="help-block"><?php echo $precio_prov_err;?></span>
    </div>
    <div class="form-group <?php echo (!empty($precio_pub_err)) ? 'has-error' : ''; ?>">
        <label>precio_pub</label>
        <input type="text" name="precio_pub" class="form-control" value="<?php echo $precio_pub; ?>">
        <span class="help-block"><?php echo $precio_pub;?></span>
    </div>
    <div class="form-group <?php echo (!empty($fecha_err)) ? 'has-error' : ''; ?>">
        <label>fecha</label>
        <input type="text" name="fecha" class="form-control" value="<?php echo $fecha; ?>">
        <span class="help-block"><?php echo $fecha_err;?></span>
    </div>
    <div class="form-group <?php echo (!empty($stock_err)) ? 'has-error' : ''; ?>">
        <label>stock</label>
        <input type="text" name="stock" class="form-control" value="<?php echo $stock; ?>">
        <span class="help-block"><?php echo $stock;?></span>
    </div>
    <br>
        <input type="submit" class="btn btn-primary" value="Submit">
    <a href="index.php" class="btn btn-default">Cancelar</a>
</form> -->

echo "<table class='table table-bordered table-striped'>";
    echo "<thead>";
        echo "<tr>";
            echo "<th>id_producto</th>";
            echo "<th>id_marca</th>";
            echo "<th>id_proveedor</th>";
            echo "<th>Modelo</th>";
            echo "<th>Nombre Producto</th>";
            echo "<th>Descripción</th>";
            echo "<th>Características</th>";
            echo "<th>Precio proveedor</th>";
            echo "<th>Precio Público</th>";
            echo "<th>Fecha</th>";
            echo "<th>Stock</th>";
        echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
            echo "<td>" . $row['id_producto'] . "</td>";
            echo "<td>" . $row['id_marca'] . "</td>";
            echo "<td>" . $row['id_proveedor'] . "</td>";
            echo "<td>" . $row['modelo'] . "</td>";
            echo "<td>" . $row['nom_producto'] . "</td>";
            echo "<td>" . $row['descripcion'] . "</td>";
            echo "<td>" . $row['caracteristicas'] . "</td>";
            echo "<td>" . $row['precio_prov'] . "</td>";
            echo "<td>" . $row['precio_pub'] . "</td>";
            echo "<td>" . $row['fecha'] . "</td>";
            echo "<td>" . $row['stock'] . "</td>";
            echo "<td>";
                echo "<a href='read.php?id=". $row['id_producto'] ."' title='Ver' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                echo "<a href='update.php?id=". $row['id_producto'] ."' title='Actualizar' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                echo "<a href='delete.php?id=". $row['id_producto'] ."' title='Borrar' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
            echo "</td>";
        echo "</tr>";
    }
    echo "</tbody>";                            
echo "</table>";





SELECT * FROM producto
         WHERE id_producto= . $valorIdProducto,
         id_marca=" . $valorIdMarca;





