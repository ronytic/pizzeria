<?php
session_start();
include_once("../config.php");
include_once("../funciones/url.php");
foreach($_SESSION as $k=>$v){
//	echo $k."-".$v;
	unset($_SESSION[$k]);
}
unset($_SESSION["login"]);
unset($_SESSION["CodUsuarioLog"]);
unset($_SESSION["CodAl"]);
unset($_SESSION["Nivel"]);

session_destroy();
header("Location:".url_base().$directory);
?>