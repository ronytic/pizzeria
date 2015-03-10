<?php
include_once("../../login/check.php");
$folder="../../";
$idmenu=3;
include_once($folder."cabecerahtml.php");
?>
<script language="javascript" type="text/javascript">
$(document).on("ready",function(){
	mostrar();
	$("select[name=estado],input[name=Nombres],input[name=Carnet],input[name=FechaInicio],input[name=FechaFin]").change(function(e) {
        mostrar();
    });
	
	$("#actualizar").click(function(e) {
        mostrar();
    });
	
});


function mostrar(){
	var Producto=$("input[name=Producto]").val();

	var FechaInicio=$("input[name=FechaInicio]").val();
	var FechaFin=$("input[name=FechaFin]").val();
	
	$.post("mostrar.php",{"Producto":Producto,"FechaInicio":FechaInicio,"FechaFin":FechaFin},respuesta);
}
function respuesta(data){
	$("#resultado").html(data);
}
</script>
<?php
include_once($folder."cabecera.php");
?>
<div class="row">
<h1 class="centrar"><span class="label label-success">Reporte de Gastos</span></h1>
 <div class="col-lg-12">
 	
    <div class="input-group  col-lg-12">
    <span class="input-group-addon">Producto:</span>
    <input type="text" class="form-control" name="Producto">
   
    <span class="input-group-addon">Fecha Inicio:</span>
    <input class="form-control" type="date" name="FechaInicio" value="<?php echo date("Y-m-d")?>">
    <span class="input-group-addon">Fecha Fin:</span>
    <input class="form-control" type="date" name="FechaFin" value="<?php echo date("Y-m-d")?>">
    <span class="input-group-addon">
    <button class="btn btn-xs" id="actualizar"><small>Actualizar</small></button>
    </span>
    </div>
 	<div id="resultado">
    </div>
 </div>
</div>
<?php
include_once($folder."pie.php");
?>