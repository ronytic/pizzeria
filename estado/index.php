<?php
include_once("../login/check.php");
$folder="../";

include_once($folder."cabecerahtml.php");
?>
<script language="javascript" type="text/javascript">
$(document).on("ready",function(){
	mostrar();
	$("select[name=estado],input[name=Nombres],input[name=Carnet],input[name=FechaRegistro]").change(function(e) {
        mostrar();
    });
	
	$("#actualizar").click(function(e) {
        mostrar();
    });
	
});
$(document).on("change",".observacion",function(e){
	var Observacion=$(this).val();
	var Cod=$(this).data("cod");
	
	$.post("cambiarobs.php",{"Observacion":Observacion,"Cod":Cod},function(){
			mostrar();
		});
		
});
$(document).on("click",".cambiarestado",function(e){
	
	var Estado=($(this).attr("id"));
	var Cod=$(this).data("cod");
	switch(Estado){
		case 'Eliminar':	{Archivo="eliminar.php";Mensaje="¿Esta Seguro de Eliminar esta Orden?"}break;	
		case 'Pedido':		{Archivo="cambiar.php";Mensaje="¿Esta seguro de volver a Registrar esta Orden?"}break;		
		case 'Preparar':	{Archivo="cambiar.php";Mensaje="¿Esta Seguro de Preparar esta Orden?"}break;	
		case 'Listo Entrega':{Archivo="cambiar.php";Mensaje="¿Esta Seguro de que se encuenta para la Entrega la Orden?"}break;	
		case 'Entregado':{Archivo="cambiar.php";Mensaje="¿Esta Seguro de Entregar esta Orden?"}break;	
	}
	if(confirm(Mensaje)){
		
		$.post(Archivo,{"Estado":Estado,"Cod":Cod},function(){
			mostrar();
		});
	}
	
});
function mostrar(){
	var estado=$("select[name=estado]").val();
	var Nombres=$("input[name=Nombres]").val();
	var Carnet=$("input[name=Carnet]").val();
	var FechaRegistro=$("input[name=FechaRegistro]").val();
	
	$.post("mostrar.php",{"estado":estado,"Nombres":Nombres,"Carnet":Carnet,"FechaRegistro":FechaRegistro},respuesta);
}
function respuesta(data){
	$("#resultado").html(data);
}
</script>
<?php
include_once($folder."cabecera.php");
?>
<div class="row">
<h1 class="centrar"><span class="label label-success">Estado de las Ordenes</span></h1>
 <div class="col-lg-12">
 	
    <div class="input-group  col-lg-12">
    <span class="input-group-addon">Estado de la Orden:</span>
    <select class="form-control" name="estado">
	    <option value="Todo">Todo</option>
    	<option value="Pedido">Pedido</option>
        <option value="Preparando">Preparando</option>
        <option value="Listo Entrega">Listo Entrega</option>
        <option value="Entregado">Entregado</option>
    </select>
    <span class="input-group-addon">Nombre:</span>
    <input type="text" class="form-control" name="Nombres">
    <span class="input-group-addon">C.I.:</span>
    <input type="text" class="form-control" name="Carnet">
    <span class="input-group-addon">Fecha:</span>
    <input class="form-control" type="date" name="FechaRegistro">
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