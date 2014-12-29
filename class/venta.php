<?php
include_once("bd.php");
class venta extends bd{
	var $tabla="venta";
	function mostrar($where,$campoorder,$order){
		$where=$where!=""?$where." and Activo=1":"Activo=1";
		return $this->getRecords($where,$campoorder,"",0,0,$order);
	}
}
?>