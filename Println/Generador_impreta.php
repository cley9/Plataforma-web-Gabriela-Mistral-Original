<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{

    // Arial bold 15
    $this->SetFont('Arial','B',10);///'Arial','B',16
    // Movernos a la derecha
    $this->Cell(100);
    ///image_type_to_extension
      $this->Image('Logo.png',20,5,60,20,'png');
    // Título
    $this->Cell(70,10,'Reportes de matricula',0,1,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(15,10,'Codigo',1,0,'C',0); //esto son las tablas
    $this->Cell(35,10,'Nombre del alumno',1,0,'C',0); //esto son las tablas
    $this->Cell(40,10,'Apellido del alumno ',1,0,'C',0);
    $this->Cell(30,10,'DNI del alumno',1,0,'C',0);
    $this->Cell(35,10,'Email del alumno:',1,0,'C',0);
    $this->Cell(35,10,'Numero telefonico ',1,0,'C',0);
    $this->Cell(20,10,'Grado',1,0,'C',0);
    $this->Cell(40,10,'Fecha de nacimiento',1,0,'C',0);
    $this->Cell(12,10,'Sexo',1,1,'C',0);


}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Factura ') .$this->PageNo().'/{nb}',0,0,'C');
}
}

require ("cn.php");
//require ("conex.php");
$consulta = "SELECT * FROM matricula";//matricula
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('LANDSCAPE', 'letter');
$pdf->SetFont('Arial','I',10);

while ($row=$resultado->fetch_assoc()) {

  $pdf->Cell(15,10,$row['id'],1,0,'C',0); // el name de la db

  $pdf->Cell(35,10,$row['name'],1,0,'C',0); 
  $pdf->Cell(40,10,$row['apellido'],1,0,'C',0);

  $pdf->Cell(30,10,$row['dni'],1,0,'C',0);
  $pdf->Cell(35,10,$row['email'],1,0,'C',0);
  $pdf->Cell(35,10,$row['telefono'],1,0,'C',0);


  $pdf->Cell(20,10,$row['nivel_academico'],1,0,'C',0);
	$pdf->Cell(40,10,$row['fecha_nacimiento'],1,0,'C',0);
  $pdf->Cell(12,10,$row['sexo'],1,1,'C',0); // name de dba
}


	$pdf->Output();
?>
