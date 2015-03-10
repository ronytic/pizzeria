<?php
include_once("../../login/check.php");
$folder="../../";
$titulo="NRegistroNuevoUsuario";
$nivelusuario=array("2"=>"Gerente","3"=>"Administrador","4"=>"Cocina","5"=>"Vendedor");
include_once($folder."cabecerahtml.php");
?>
<script language="javascript">
configuracion={todayBtn: false, endDate: "'0d'"};
</script>
<script language="javascript">
var linea=0
$(document).on("ready",function(){
	
	$(document).on("change",".cantidad,.preciounitario",function(e){
		var lin=$(this).attr("rel");
		var cantidad=$(".cantidad[rel="+lin+"]").val();
		var preciounitario=$(".preciounitario[rel="+lin+"]").val();
		var total=(cantidad*preciounitario).toFixed(2);
		$(".total[rel="+lin+"]").val(total);
		var tt=0;
		$(".total").each(function(index, element) {
            v=parseFloat($(element).val());
			tt+=v;
        });
		$("#ttotal").val(tt.toFixed(2))
	});	
	function aumentar(){
		linea
		$.post("aumentar.php",{l:linea},function(data){
			$("#marca").before(data);
			linea++;
		});
	}
	linea++;
	aumentar();
	$("#aumentar").click(function(e) {
		e.preventDefault();
        aumentar();
    });
});
</script>
<?php include_once($folder."cabecera.php");?>
<div class="row">
 <?php if($_GET['e']==1){
?>
<div class="alert alert-success">
<input type="button" class="close" value="X" data-dismiss="alert">
Los Gastos Fueron Registrados Correctamente</div>
<?php	
}?>
<h1 class="centrar"><span class="label label-success">Registro de Nuevo Gasto</span></h1>
<div class="col-sm-12 col-sm-offset-0">
<form action="guardar.php" method="post" role="form">

<table class="table table-hover table-bordered blancot">
    <thead>
        <tr>
            <th width="15">Nº</th>
            <th>Producto</th>
            <th width="150">Cantidad</th>
            <th width="150">Precio</th>
            <th width="150">Total</th>
        </tr>
    </thead>
    <tr id="marca">
        <td><a href="#" id="aumentar" class="btn btn-info">Aumentar</a></td>
    	<td colspan="1">
        	<?php campo("","submit",'Guardar',"btn btn-danger","")?>
        </td>
        <td class="der">
        	Fecha del Gasto
        </td>
        <td><input type="date" name="fecha" value="<?php echo date("Y-m-d")?>" class="form-control"></td>
        <td><input type="text" id="ttotal" readonly  value="0" class="der form-control"></td>
    </tr>
</table>
</form>
</div>
</div>
<?php include_once($folder."pie.php");?>