<?php
include_once("../login/check.php");
include_once("../class/venta.php");
$venta=new venta;
$Observacion=$_POST['Observacion'];
$Cod=$_POST['Cod'];
$valores=array("Observacion"=>"'$Observacion'");
$venta->actualizarRegistro($valores,"CodVenta=".$Cod);

?>