<?php
    require_once("conexion.php");
    $valorIdProducto=$_POST['id_producto'];
    $valorId_marca=$_POST['id_marca'];
    $valorId_proveedor=$_POST['id_proveedor'];
    $queryActualizarProducto="UPDATE producto
                                SET id_marca='$valorIdMarca', id_proveedor='$valorId_proveedor'
                                WHERE id_producto=".$valorIdProducto;
    echo "Query: ".$queryActualizarProducto;
    if(mysqli_query($conexion, $queryActualizarProducto)){
        echo "Registro exitoso <br>";
    }
    else{
        echo "Error: ". $queryActualizarProducto ."<br>". mysqli_error($conexion);
    }
    echo "<a href='dashboard.php'>Volver</a>"
?>