<?php
    require_once("conexion.php");
    /* $valorIdProducto=$_POST['id_producto']; */
    $valorId_marca=$_POST['id_marca'];
    $valorId_proveedor=$_POST['id_proveedor'];
    $queryGuardarProducto='INSERT INTO producto (id_marca, id_proveedor)
                            VALUES('.$valorId_marca.' , '.$valorId_proveedor.')';
    /* echo $valorId_marca.$valorId_proveedor; */

    if(mysqli_query($conexion, $queryGuardarProducto)){
        echo "Registro exitoso <br>";
    }
    else{
        echo "Error: " . $queryGuardarProducto . "<br>" . mysqli_error($conexion);
    }
    echo "<a href='dashboard.php'>Volver</a>";
?>