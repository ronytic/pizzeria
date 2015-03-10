<?php
include_once("../../login/check.php");
include_once("../../class/gastos.php");
include_once("../../impresion/pdf.php");
$titulo="Reporte de Gastos";
$folder="../../";
class PDF extends PPDF{
	function Cabecera(){
		global $FechaInicio,$FechaFin;
		$this->CuadroCabecera(25,"Fecha: ",70,fecha2Str($FechaInicio)." hasta ".fecha2Str($FechaFin));	
		$this->Pagina();
		$this->Ln();
		$this->TituloCabecera(10,"N",10);
		$this->TituloCabecera(100,"Producto",10);
		
		$this->TituloCabecera(30,"Cantidad",10);
		$this->TituloCabecera(30,"Precio Unitario",10);
		$this->TituloCabecera(30,"Total",10);
		$this->TituloCabecera(30,"Fecha",10);

	}	
}

$Producto=$_GET['Producto'];
$FechaInicio=$_GET['FechaInicio'];
$FechaFin=$_GET['FechaFin'];

$pdf=new PDF("L","mm","letter");
$pdf->AddPage();

$gastos=new gastos;

$Producto=$Producto!=""?"%$Producto%":"%";
$FechaInicio=$FechaInicio!=""?"$FechaInicio":"";
$FechaFin=$FechaFin!=""?"$FechaFin":"";
$where.=" Producto LIKE '$Producto' and Fecha BETWEEN '$FechaInicio' and '$FechaFin' ";
$gas=$gastos->mostrar($where,"HoraRegistro",1);

$Nivel=$_SESSION['Nivel'];

$pdf->SetWidths(array(10,100,30,30,30,30));
$pdf->Fuente("",9);
$pdf->SetAligns(array("R","L","R","R","R","C","","L","R","R","R","C"));
if(count($gas)==0){
		$pdf->CuadroCuerpo(190,"Sin Ordenes");

	}else{
		$total=0;
		
	$Cantidad=0;
	$PrecioUnitario=0;
	$Total=0;

    foreach($gas as $g){$i++;

	$total+=$g['Total'];
	
	$Cantidad+=$g['Cantidad'];
	$PrecioUnitario+=$g['PrecioUnitario'];
	$Total+=$g['Total'];
	
	
	$datos=array($i,
			utf8_decode($g['Producto']),
			precio($g['Cantidad']),
			precio($g['PrecioUnitario']),
			precio($g['Total']),
			fecha2Str($g['Fecha']),
	);
	$pdf->Row($datos);	
		
	}
	$pdf->Fuente("B");
	$pdf->CuadroCuerpo(170,"Totales",1,"R",1,9,"B");
	//$pdf->CuadroCuerpo(30,precio($Cantidad),1,"R",1,9,"B");
	//$pdf->CuadroCuerpo(30,precio($PrecioUnitario),1,"R",1,9,"B");
	$pdf->CuadroCuerpo(30,precio($Total),1,"R",1,9,"B");
	$pdf->CuadroCuerpo(30,"",1,"R",1,9,"B");

	}
$pdf->Output("Reporte de Ordenes.pdf","I");
?>