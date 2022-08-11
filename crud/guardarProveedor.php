<?php
    require_once("conexion.php");
    /* $valorIdProducto=$_POST['id_producto']; */
    $valorIdProveedor=$_POST['id_proveedor'];
    $queryGuardarProveedor='INSERT INTO producto (id_marca, id_proveedor)
                            VALUES('.$valorProveedor.' , '.$valorIdProveedor.')';
    echo "$valorIdProveedor";

    if(mysqli_query($conexion, $queryGuardarProveedor)){
        echo "Registro exitoso <br>";
    }
    else{
        echo "Error: " . $queryGuardarProveedor . "<br>" . mysqli_error($conexion);
    }
    echo "<a href='dashboard.php'>Volver</a>";
?>