<?php
include_once("../login/check.php");
$datos=array();
foreach($_POST as $k=>$v){
	array_push($datos,"$k=$v");
}
$datos=implode("&",$datos);
$url=$datos;
echo $url;
?>
<iframe width="100%" height="700" src="reporte.php?<?php echo $url?>"></iframe>