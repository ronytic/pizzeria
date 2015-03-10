<?php
include_once("../../login/check.php");
include_once("../../class/gastos.php");
$gastos=new gastos;
extract($_POST);
$CodUsuarioRegistro=$_SESSION['CodUsuarioLog'];
$NivelRegistro=$_SESSION['Nivel'];
$FechaRegistro=fecha2Str("",0);
$HoraRegistro=date("H:i:s");
/*echo "<pre>";
print_r($_POST);
echo "</pre>";*/
foreach($m as $p){
	extract($p);
	if($producto!=""){
		$Valores=array(
						"Producto"=>"'$producto'",
						"Cantidad"=>"'$cantidad'",
						"PrecioUnitario"=>"'$preciounitario'",
						"Total"=>"'$total'",
						"Fecha"=>"'$fecha'",
						
		);
		//print_r($Valores);
		$gastos->insertarRegistro($Valores,1);
	}
}
//$gastos->insertarRegistro($Valores,0);

$Mensajes[]=$idioma["GuardadoCorrectamente"];
$folder="../../";
header("Location:index.php?e=1");
?>