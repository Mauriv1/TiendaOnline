<?php
include('fpdf/fpdf.php');
include('consultaProducto.php');

?>
<div>
    <picture>
        <img src="../assets/images/construccion.png" class="construccion" alt="En Construccion">
    </picture>
</div>
<style>
    .construccion{
        width: 1000px;
        }
</style>

<?php

$diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$fecha =  $diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
/* SECCION QR */
require 'phpqrcode/qrlib.php';
//nombramos la carpeta
$dir="temp/";
//creamos la carpeta en caso de no existir
if(!file_exists($dir))
    mkdir($dir);
        /* SECION PDF */
    //crear un objeto de la clase FPDF
    $rutalogo="assets/images/INOUT-principal.png";
    
    $pdf = new FPDF();

    while($row=$resultado->fetch_assoc())       
    {
        //Agregar o crear una pagina
        $pdf->AddPage('L', 'legal');
        
        $pdf->Image($rutalogo,  1, 1, 40, 30);
        //Fuente: familia, estilo y tamaño
        $pdf->SetFont('Arial','B',16);
        //Contenido de la celda
        $pdf->Cell(0,10,utf8_decode('TITULO'),1,1,'C');
        $pdf->Cell(0,10,utf8_decode('Mauricio Vergara Miranda'),1,1);
        $pdf->setXY(250,30);
        $pdf->Cell(0,10,utf8_decode($fecha),1,0);
        $pdf->SetFont('Arial','',12);
        $pdf->setXY(250,30);
        /* $pdf->Cell(0,10,utf8_decode($row['id_docente']),1, 1);
        $pdf->Cell(0,10,utf8_decode($row['nombre']),1, 1);
        $pdf->Cell(0,10,utf8_decode($row['carrera']),1, 0); */

        //definir la ruta y el nombre de la imagen a crear con su extension
        $filename = $dir.'producto_'.$row['producto'].'_'.$row['idProducto'].'.png';


        //definir tamaño
        $tam = 10;
        //legibildad
        $level = 'M';
        //el borde
        $framesize = 2;
        //informacion a imprimir
        /* $datos = "Bienvenido\nMauricioVergara";-n                    */
        /*  */$datos = "Datos:\nNombre: "
                    .$row['nombre'].
                    "\nCarrera"
                    .$row['carrera'];            
       
        //creamos la imagen QR en el directorio
        QRcode::png($datos, $filename, $level, $tam, $framesize);
        $pdf->Image($filename, 310, 75, 30, 30);
        
    }

    //Imprimir salida
    $pdf->Output();
?>