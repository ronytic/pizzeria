<?php
include_once("login/check.php");
include_once("class/venta.php");
$venta=new venta;
extract($_POST);
$valores=array(
	"Total"=>"'$total'",
	"PrecioTamano"=>"'$preciotamano'",
	"Tamano"=>"'$tamano'",
	"PrecioSabores"=>"'$preciosabores'",
	"Sabores"=>"'$sabores'",
	"PrecioExtras"=>"'$precioextras'",
	"Extras"=>"'$extras'",
	"PrecioEnvase"=>"'$precioenvase'",
	"Envase"=>"'$envase'",
	"PrecioBebidas"=>"'$preciobebidas'",
	"Bebidas"=>"'$bebidas'",
	"CantidadPersonalCocacola"=>"'$cantidadpersonalcocacola'",
	"TotalPersonalCocacola"=>"'$totalpersonalcocacola'",
	"CantidadPersonalFanta"=>"'$cantidadpersonalfanta'",
	"TotalPersonalFanta"=>"'$totalpersonalfanta'",
	"CantidadPersonalSprite"=>"'$cantidadpersonalsprite'",
	"TotalPersonalsprite"=>"'$totalpersonalsprite'",
	"CantidadCocacolaGrande"=>"'$cantidadcocacolagrande'",
	"TotalCocacolaGrande"=>"'$totalcocacolagrande'",
	"CantidadFantaGrande"=>"'$cantidadfantagrande'",
	"TotalFantaGrande"=>"'$totalfantagrande'",
	"CantidadFrutalGrande"=>"'$cantidadfrutalgrande'",
	"TotalFrutalGrande"=>"'$totalfrutalgrande'",
	"CantidadCafeClasico"=>"'$cantidadcafeclasico'",
	"TotalCafeClasico"=>"'$totalcafeclasico'",
	"CantidadCafeCapuchino"=>"'$cantidadcafecapuchino'",
	"TotalCafeCapuchino"=>"'$totalcafecapuchino'",
	"Nombres"=>"'$Nombres'",
	"Carnet"=>"'$Carnet'",
	"Estado"=>"'Pedido'",
	"Observacion"=>"'$observacion'",
	
	
);
$venta->insertarRegistro($valores);
/*echo count($_POST);
print_r($_POST);*/
header("Location:./?e=1");
?>