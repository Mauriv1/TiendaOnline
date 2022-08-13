<?php
include('fpdf/fpdf.php');
include('consultaProducto.php');

/* ?>
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

<?php */

$diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$fecha =  $diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;

/* /* SECCION QR */
require 'phpqrcode/qrlib.php';
//nombramos la carpeta
$dir="temp/";
//creamos la carpeta en caso de no existir */
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
        $pdf->Cell(0,10,utf8_decode('Lista de Productos'),1,1,'C');
        $pdf->setXY(250,30);
        $pdf->Cell(0,10,utf8_decode($fecha),1,0);
        $pdf->SetFont('Arial','',12);
        $pdf->setXY(250,30);
        $datos = "Datos:\nNombre: ".$row['id_producto']."\nCarrera".$row['id_proveedor'];              
    }

    //Imprimir salida
    $pdf->Output();
?>