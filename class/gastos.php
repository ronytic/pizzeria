<?php
include_once("bd.php");
class gastos extends bd{
	var $tabla="gastos";
	function mostrar($where,$campoorder,$order){
		$where=$where!=""?$where." and Activo=1":"Activo=1";
		return $this->getRecords($where,$campoorder,"",0,0,$order);
	}
}
?>