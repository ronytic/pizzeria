<?php
include_once("../../login/check.php");
include_once("../../class/usuario.php");
$usuario=new usuario;
extract($_POST);
$Paterno=$Paterno!=""?"Paterno LIKE '$Paterno%'":"Paterno LIKE '%'";
$Materno=$Materno!=""?"Materno LIKE '$Materno%'":"Materno LIKE '%'";
$Nombres=$Nombres!=""?"Nombres LIKE '$Nombres%'":"Nombres LIKE '%'";
$Ci=$Ci!=""?"Ci LIKE '$Ci%'":"Ci LIKE '%'";
$condicion="$Paterno and $Materno and $Nombres and $Ci and Nivel!=1";
$pac=$usuario->mostrarTodoRegistro($condicion,1,"Paterno,Materno,Nombres,Ci");
$titulo=array(	"Paterno"=>'Paterno',
				"Materno"=>'Materno',
				"Nombres"=>'Nombres',
				"Ci"=>'Carnet',
				"Usuario"=>'Usuario'
				,
);
listadotabla($titulo,$pac,1,"","modificar.php","eliminar.php");
?>