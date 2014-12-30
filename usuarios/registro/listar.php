<?php
include_once("../../login/check.php");
$folder="../../";
$titulo="NBusquedaPacientes";
include_once($folder."cabecerahtml.php");
?>
<script language="javascript" src="../../js/core/jquery.form.js"></script>
<script language="javascript">
	$("#respuestaformulario").on("click",".eliminar",function(e){
		alert("asd");
		var direccion=$(this).attr("href");
		e.preventDefault();
		e.stopPropagation();
		if(confirm(DeseaEliminarRegistro)){
			$.post(direccion,function(){
				$("form.formulario").submit();	
			});
		}
		return false;
	});
$(document).on('submit','form.formulario', function(e) {
		e.preventDefault(); // prevent native submit
		var percent=$("#respuestaformulario")
    	$(this).ajaxSubmit({
        	target: '#respuestaformulario',
			beforeSend: function() {
				//status.empty();
				var percentVal = '0%';
				//bar.width(percentVal)
				percent.html(percentVal+'<div class="progress"><div class="bar" style="width: '+percentVal+';"></div></div>');
			},
			uploadProgress: function(event, position, total, percentComplete) {
				var percentVal = percentComplete + '%';
				//bar.width(percentVal)
				percent.html(percentVal+'<div class="progress"><div class="bar" style="width: '+percentVal+';"></div></div>');
			},
			complete: function(xhr) {
			//bar.width("100%");
			//percent.html("100%");
			$("#respuestaformulario").html(xhr.responseText);
			//$("table").stickyTableHeaders();
			//$("table.inicio").stickyTableHeaders('destroy');
			}
    	})
		//$('html, body').animate({scrollTop:$("#respuestaformulario").position().top-200},300);
		 
	});
	
</script>
<?php include_once($folder."cabecera.php");?>
<div class="row">

<div class="col-sm-12">
 <?php if($_GET['e']==1){
?>
<div class="alert alert-success">
<input type="button" class="close" value="X" data-dismiss="alert">
El Usuario fue  Actualizado Correctamente</div>
<?php	
}?>
    	<h1 class="centrar"><span class="label label-success">Listado de Usuarios</span></h1>
        <fieldset>
        	<legend>Criterio de Búsqueda</legend>
            <div class="thumbnail">
            	<div class="main row">
                	<form action="busqueda.php" method="post" class="formulario">
                    <div class="col-sm-3">
                        <label><?php echo 'Apellido Paterno' ?></label>
                        <br>
                        <?php campo("Paterno","text","","col-xs-12 form-control","","",1)?>
                    </div>
                    <div class="col-sm-3">
                        <label><?php echo 'Apellido Materno' ?></label>
                        <br>
                        <?php campo("Materno","text","","col-xs-12 form-control")?>
                    </div>
                    <div class="col-sm-3">
                        <label><?php echo 'Nombres' ?></label>
                        <br>
                        <?php campo("Nombres","text","","col-xs-12 form-control")?>
                    </div>
                    <div class="col-sm-3">
                        <label><?php echo 'C.I.' ?></label>
                        <br>
                        <?php campo("Ci","text","","col-xs-12 form-control")?>
                    </div>
                    <div class="col-sm-3">
                    	<br>
                        <?php campo("","submit",'Buscar',"btn btn-success col-xs-12")?>
                    </div>
                    </form>
                </div>
        	</div>
        </fieldset>
        	
 
     
    <div class="thumbnail">

            	<div class="main" id="respuestaformulario">
                </div>

    </div>


</div>


<?php include_once($folder."pie.php");?>