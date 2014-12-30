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
<?php include_once($folder."cabecera.php");?>
<div class="row">
 <?php if($_GET['e']==1){
?>
<div class="alert alert-success">
<input type="button" class="close" value="X" data-dismiss="alert">
El Usuario fue  Registrado Correctamente</div>
<?php	
}?>
<h1 class="centrar"><span class="label label-success">Registro de Nuevo Usuario</span></h1>
<div class="col-sm-6 col-sm-offset-3">
<form action="guardar.php" method="post" role="form">

<table class="table table-hover table-bordered">
	<tr>
    	<td class="der"><?php echo 'Usuario' ?></td>
        <td><?php campo("Usuario","text","","form-control",1)?></td>
    </tr>
    <tr>
    	<td class="der"><?php echo 'Contraseña' ?></td>
        <td><?php campo("Contrasena","password","","form-control",1)?></td>
    </tr>
    
    <tr>
    	<td class="der"><?php echo 'Nivel de Usuario' ?></td>
        <td><?php campo("Nivel","select",$nivelusuario,"form-control",1)?></td>
    </tr>
    
	<tr>
    	<td class="der"><?php echo 'Apellido Paterno' ?></td>
        <td><?php campo("Paterno","text","","form-control",1)?></td>
    </tr>
    <tr>
    	<td class="der"><?php echo 'Apellido Materno' ?></td>
        <td><?php campo("Materno","text","","form-control",1)?></td>
    </tr>
    <tr>
    	<td class="der"><?php echo 'Nombres' ?></td>
        <td><?php campo("Nombres","text","","form-control",1)?></td>
    </tr>
    <tr>
    	<td class="der"><?php echo 'C.I.' ?></td>
        <td><?php campo("Ci","text","","form-control",1)?></td>
    </tr>
    <tr>
    	<td class="der"><?php echo 'Teléfono' ?></td>
        <td class=""><?php campo("Telefono","text","","form-control")?></td>
    </tr>
    <tr>
    	<td class="der"><?php echo 'Celular' ?></td>
        <td><?php campo("Celular","text","","form-control",1)?></td>
    </tr>
    <tr>
    	<td class="der"><?php echo 'Dirección' ?></td>
        <td><?php campo("Direccion","text","","form-control",1,"","",array("maxlength"=>250))?></td>
    </tr>
    <tr>
    	<td class="der"><?php echo 'Observaciones' ?></td>
        <td><?php campo("Observaciones","textarea","","form-control")?></td>
    </tr>
    <tr>
    	<td colspan="2">
        	<?php campo("","submit",'Guardar',"btn btn-info","")?>
        </td>
    </tr>
</table>
</form>
</div>
</div>
<?php include_once($folder."pie.php");?>