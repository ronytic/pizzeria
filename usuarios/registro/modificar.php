<?php
include_once("../../login/check.php");
$folder="../../";
$Cod=$_GET['Cod'];
$titulo="NModificarDatosUsuario";
$nivelusuario=array("2"=>"Gerente","3"=>"Administrador","4"=>"Cocina","5"=>"Vendedor");
include_once("../../class/usuario.php");
$usuario1=new usuario;
$pac=$usuario1->mostrarRegistro($Cod);
$pac=array_shift($pac);
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
El Usuario fue  Actualizado Correctamente</div>
<?php	
}?>
<h1 class="centrar"><span class="label label-success">Modificar Datos de  Usuario</span></h1>
<div class="col-sm-6 col-sm-offset-3">
<form action="actualizar.php" method="post">
<?php campo("Cod","hidden",$Cod)?>
<table class="table table-hover table-bordered">
	<tr>
    	<td class="der"><?php echo 'Usuario' ?></td>
        <td><?php campo("Usuario","text",$pac['Usuario'],"form-control",1)?></td>
    </tr>
    <tr>
    	<td class="der"><?php echo 'Contraseña' ?></td>
        <td><?php campo("Contrasena","password",$pac['Pass'],"form-control",1)?></td>
    </tr>
    
    <tr>
    	<td class="der"><?php echo 'Nivel de Usuario' ?></td>
        <td><?php campo("Nivel","select",$nivelusuario,"form-control",1,"","","",$pac['Nivel'])?></td>
    </tr>

	<tr>
    	<td class="der"><?php echo 'Apellido Paterno' ?></td>
        <td><?php campo("Paterno","text",$pac['Paterno'],"form-control",1)?></td>
    </tr>
    <tr>
    	<td class="der"><?php echo  'Apellido Materno' ?></td>
        <td><?php campo("Materno","text",$pac['Materno'],"form-control",1)?></td>
    </tr>
    <tr>
    	<td class="der"><?php echo 'Nombres' ?></td>
        <td><?php campo("Nombres","text",$pac['Nombres'],"form-control",1)?></td>
    </tr>
    <tr>
    	<td class="der"><?php echo 'C.I.' ?></td>
        <td><?php campo("Ci","text",$pac['Ci'],"form-control",1)?></td>
    </tr>
    <tr>
    	<td class="der"><?php echo'Teléfono' ?></td>
        <td class=""><?php campo("Telefono","text",$pac['Telefono'],"form-control")?></td>
    </tr>
    <tr>
    	<td class="der"><?php echo 'Celular' ?></td>
        <td><?php campo("Celular","text",$pac['Celular'],"form-control",1)?></td>
    </tr>
    <tr>
    	<td class="der"><?php echo'Dirección' ?></td>
        <td><?php campo("Direccion","text",$pac['Direccion'],"col-xs-12 form-control",1,"","",array("maxlength"=>250))?></td>
    </tr>
    <tr>
    	<td class="der"><?php echo 'Observaciones' ?></td>
        <td><?php campo("Observaciones","textarea",$pac['Observacion'],"form-control")?></td>
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