
<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{
    // Cabecera de página

    function Header()
    {

        $this->Image('fpdf/logo.png', 2, 2, 25);

        $this->SetFont('Arial', 'B', 8);
        $this->Cell(20);


        $this->Cell(150, 8, 'GERENCIA DE GESTION HUMANA ', 1, 1, 'C');
        $this->Ln(10);
        $this->Cell(198, 10, 'CONTROL DE EMPLEADOS QUE NO VOTARON', 1, 1, 'C');
        $this->Cell(198, 10, 'ELECCIONES 2021', 1, 1, 'C');
        $this->Cell(53, 10, 'Nombres', 1, 0, 'C', 0);
        $this->Cell(67, 10, 'Apellidos', 1, 0, 'C', 0);
        $this->Cell(68, 10, 'Gerencia', 1, 0, 'C', 0);
        $this->Cell(10, 10, 'Voto', 1, 1, 'C', 0);
    }
    function Footer()
    {
        $this->SetY(-30);

        $this->SetFont('Arial', 'B', 8);
        $this->Ln(5);
        $this->Cell(64, 8, 'Gerente del Area', 1, 0, 'C', 0);
        $this->Cell(64, 8, 'Adjunto', 1, 0, 'C', 0);
        $this->Cell(62, 8, 'Responsable', 1, 1, 'C', 0);
        $this->Cell(64, 10, '', 1, 0, 'C', 0);
        $this->Cell(64, 10, '', 1, 0, 'C', 0);
        $this->Cell(62, 10, '', 1, 0, 'C', 0);
        $this->Ln(15);
        $this->Cell(0, 0, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}
require('conexion.php');
$query =  "SELECT * from datas where 'NO'=voto";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);

while ($mostrar = pg_fetch_array($result)) {

    $pdf->Cell(53, 10, $mostrar['nombres'], 1, 0, 'C', 0);
    $pdf->Cell(67, 10, $mostrar['apellidos'], 1, 0, 'C', 0);
    $pdf->Cell(68, 10, $mostrar['gerencia'], 1, 0, 'C', 0);
    $pdf->Cell(10, 10, $mostrar['voto'], 1, 1, 'C', 0);
}







$total1 = "TOTAL empleados";


while ($mostrar = pg_fetch_assoc($resul)) {

    $total +=  $total + 1;
}

$pdf->Cell(195, 10, $total1, 1, 1, 'C', 0);
$pdf->Cell(195, 10, $total, 1, 1, 'C', 0);










$pdf->Output();

?>



