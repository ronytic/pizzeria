<?php
session_start();
$archivo=$_SERVER['SCRIPT_NAME'];
$folderFile=explode("/",$archivo);
$subfolder=$folderFile[1];
$dir=dirname(__FILE__).DIRECTORY_SEPARATOR."../";
define("RAIZ",$dir);
include_once($_SERVER['DOCUMENT_ROOT']."/".$subfolder."/config.php");
include_once(RAIZ."rastreo/revisar.php");
if(!(isset($_SESSION["login"]) && $_SESSION['login']==1)){
	header("Location:$url$directory/login/?u=".$_SERVER['PHP_SELF']);
}
?>