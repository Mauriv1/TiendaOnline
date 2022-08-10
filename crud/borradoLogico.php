<?php
    $id_producto = $_GET['id_producto'];
    echo "Id del producto: ".$id_producto;
    $queryBorradoLogicoDoc = "UPDATE docente
                                SET estatus = 0
                                WHERE id_producto = ".$id_producto;
    if (mysqli_query($conexion , $queryBorradoLogicoDoc)){
        echo "Borrado correcto <br>";
    }
    else{
        echo "Error: " . $queryBorradoLogicoDoc . "<br>" . mysqli_error($conexion);
    }
    echo "<a href='listaProducto.php'>Volver</a>"; 
?>