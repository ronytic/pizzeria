<?php
include_once("../login/check.php");
include_once("../class/venta.php");
$venta=new venta;
$Estado=$_POST['Estado'];
$Cod=$_POST['Cod'];

$venta->eliminarRegistro("CodVenta=".$Cod);

?>