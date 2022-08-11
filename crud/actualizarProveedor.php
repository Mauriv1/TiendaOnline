<?php
    require_once("conexion.php");
    $valorId_Proveedor=$_POST['id_proveedor'];
    $valorProveedor=$_POST[proveedor];
    $valorBanco=$_POST[banco];
    $queryActualizarProveedor="UPDATE proveedor SET proveedor='$valorProveedor', banco='$valorBanco' WHERE id_proveedor=".$valorId_Proveedor;
    echo "Query: ".$queryActualizarProveedor;
    if(mysqli_query($conexion, $queryActualizarProveedor)){
        echo "Registro exitoso <br>";
    }
    else{
        echo "Error: ". $queryActualizarProveedor ."<br>". mysqli_error($conexion);
    }
    echo "<a href='dashboard.php'>Volver</a>"
?>