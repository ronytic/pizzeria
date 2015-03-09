<?php
include_once("../login/check.php");
include_once("../class/venta.php");
$venta=new venta;
$estado=$_POST['estado'];
$Nombres=$_POST['Nombres'];
$Carnet=$_POST['Carnet'];
$FechaRegistro=$_POST['FechaRegistro'];
switch($estado){
	case 'Todo':{$where="";}break;
	case 'Pedido':{$where="Estado='Pedido' and";}break;
	case 'Preparando':{$where="Estado='Preparando' and";}break;
	case 'Listo Entrega':{$where="Estado='Listo Entrega' and";}break;
	case 'Entregado':{$where="Estado='Entregado' and";}break;
}

$Nombres=$Nombres!=""?"%$Nombres%":"%";
$Carnet=$Carnet!=""?"%$Carnet%":"%";
$FechaRegistro=$FechaRegistro!=""?"%$FechaRegistro%":"%";

$where.=" Nombres LIKE '$Nombres' and Carnet LIKE '$Carnet' and FechaRegistro LIKE '$FechaRegistro' ";
$ven=$venta->mostrar($where,"HoraRegistro",1);

$Nivel=$_SESSION['Nivel'];
?>
<table class="table table-bordered table-striped table-hover">
	<thead>
    <tr style="background-color:rgba(255,255,255,1.00);">
    	<th>Nº</th>
        <th>Nombre</th>
        <th>C.I.</th>
        <th>Tamaño</th>
        <th>Sabor</th>
        <th>Extra</th>
        <th>Envase</th>
        <th>Bebidas</th>
        <th>Total</th>
        <th>Obs.</th>
        <th>Estado</th>
        <th>Hora</th>
    </tr>
    </thead>
    <?php
	if(count($ven)==0){
		?>
        <tr class="danger"><td colspan="12"><?php echo "Sin Ordenes";?></td></tr>
		<?php
	}else{
		$total=0;
		$contar=count($ven)+1;
    foreach($ven as $v){$contar--;
	switch($v['Estado']){
		case 'Pedido':{$TipoEstado="label-danger";}break;
		case 'Preparando':{$TipoEstado="label-warning";}break;
		case 'Listo Entrega':{$TipoEstado="label-success";}break;
		case 'Entregado':{$TipoEstado="label-primary";}break;
	}
	$total+=$v['Total'];
		?>
		<tr>
        <td><?php echo $contar?></td>
		<td><?php echo $v['Nombres']?></td>
        <td><?php echo $v['Carnet']?></td>
        <td><?php echo capitalizar($v['Tamano'])?>
        <hr class="separadorn">
        <h4 class="arriba">
        <span class="label label-default pull-right"><?php echo ($v['PrecioTamano'])?></span>
        </h4>
        </td>
        <td><?php echo capitalizar($v['Sabores'])?> 
        <hr class="separadorn">
        <h4 class="arriba">
        <span class="label label-default pull-right"><?php echo ($v['PrecioSabores'])?></span>
		</h4>
        </td>
        <td><?php echo capitalizar($v['Extras'])?>
        <hr class="separadorn">
        <h4 class="arriba">
        <span class="label label-default pull-right"><?php echo ($v['PrecioExtras'])?></span>
        </h4>
        </td>
        <td><?php echo capitalizar($v['Envase'])?>
        <hr class="separadorn">
        <h4 class="arriba">
        <span class="label label-default pull-right"><?php echo ($v['PrecioEnvase'])?></span>
        </h4>
        </td>
        <td>
			<table class="table table-bordered table-condensed table-hover">
        	<thead>
            	<tr>
                	<th>Producto</th>
                    <th>Cant</th>
                    <th>T. Bs</th>
                </tr>
            </thead>
            <?php if($v['CantidadPersonalCocacola']!=0){?>
            <tr>
            	<td>P. Coca Cola</td>
                <td class="der"><?php echo ($v['CantidadPersonalCocacola'])?></td>
                <td class="der"><?php echo precio($v['TotalPersonalCocacola'])?></td>
            </tr>
            <?php }?>
            <?php if($v['CantidadPersonalFanta']!=0){?>
            <tr>
            	<td>P. Fanta</td>
                <td class="der"><?php echo ($v['CantidadPersonalFanta'])?></td>
                <td class="der"><?php echo precio($v['TotalPersonalFanta'])?></td>
            </tr>
            <?php }?>
            <?php if($v['CantidadPersonalSprite']!=0){?>
            <tr>
            	<td>P. Sprite</td>
                <td class="der"><?php echo ($v['CantidadPersonalSprite'])?></td>
                <td class="der"><?php echo precio($v['TotalPersonalSprite'])?></td>
            </tr>
            <?php }?>
            <?php if($v['CantidadCocacolaGrande']!=0){?>
            <tr>
            	<td>G. Coca Cola</td>
                <td class="der"><?php echo ($v['CantidadCocacolaGrande'])?></td>
                <td class="der"><?php echo precio($v['TotalCocacolaGrande'])?></td>
            </tr>
            <?php }?>
            <?php if($v['CantidadFantaGrande']!=0){?>
            <tr>
            	<td>G. Fanta</td>
                <td class="der"><?php echo ($v['CantidadFantaGrande'])?></td>
                <td class="der"><?php echo precio($v['TotalFantaGrande'])?></td>
            </tr>
            <?php }?>
            <?php if($v['CantidadFrutalGrande']!=0){?>
            <tr>
            	<td>G. Frutal</td>
                <td class="der"><?php echo ($v['CantidadFrutalGrande'])?></td>
                <td class="der"><?php echo precio($v['TotalFrutalGrande'])?></td>
            </tr>
            <?php }?>
            <?php if($v['CantidadCafeClasico']!=0){?>
            <tr>
            	<td>C. Clásico</td>
                <td class="der"><?php echo ($v['CantidadCafeClasico'])?></td>
                <td class="der"><?php echo precio($v['TotalCafeClasico'])?></td>
            </tr>
            <?php }?>
            <?php if($v['CantidadCafeCapuchino']!=0){?>
            <tr>
            	<td>C. Capuchino</td>
                <td class="der"><?php echo ($v['CantidadCafeCapuchino'])?></td>
                <td class="der"><?php echo precio($v['TotalCafeCapuchino'])?></td>
            </tr>
            <?php }?>
            <tr class="danger">
            	<td colspan="2">Total: </td>
                <td class="der"><?php echo precio($v['PrecioBebidas'])?></td>	
            </tr>
        </table>
		
        <br>
        
        
        </td>
        <td class="der"><h4 class="arriba"><span class="label label-danger pull-right"><?php echo $v['Total']?></span></h4></td>
        <td><textarea class="form-control observacion" data-cod="<?php echo $v['CodVenta']?>" rows="4"><?php echo $v['Observacion']?></textarea></td>
        <td><h4 class="arriba">
			<span class="label <?php echo $TipoEstado?>">
			<?php echo $v['Estado']?>
	        </span>
            </h4>
            <hr class="separadorn">
            <?php
			//1=admin 2=gerente 3=administrador 4=Cocina 5=vendedor
			 if(in_array($Nivel,array(1,2,3,5))){?>
            <a class="btn btn-default btn-xs  cambiarestado" id="Pedido" data-cod="<?php echo $v['CodVenta']?>">Pedido</a><br>
            <?php }?>
            <?php if(in_array($Nivel,array(1,2,3,4))){?>
            <a class="btn btn-default btn-xs  cambiarestado" id="Preparando" data-cod="<?php echo $v['CodVenta']?>">Preparar</a><br>
            <?php }?>
            <?php if(in_array($Nivel,array(1,2,3,4))){?>
            <a class="btn btn-default btn-xs  cambiarestado" id="Listo Entrega" data-cod="<?php echo $v['CodVenta']?>">Listo para Entregar</a><br>
            <?php }?>
            <?php if(in_array($Nivel,array(1,2,3,5))){?>
            <a class="btn btn-default btn-xs  cambiarestado" id="Entregado" data-cod="<?php echo $v['CodVenta']?>">Entregado</a> 
            <?php }?>
            <hr class="separadorn">
            <?php if(in_array($Nivel,array(1,2,3,5))){?>
            <a class="btn btn-default btn-xs  cambiarestado" id="Eliminar" data-cod="<?php echo $v['CodVenta']?>">Eliminar</a>
            <?php }?>
        </td>
        <td><?php echo $v['HoraRegistro']?></td>
        </tr>
        
        <?php	
	}
	?>
    <tr class="info der resaltar"><td colspan="8" class="">Total</td><td class="der"><?php echo precio($total)?></td><td colspan="3"></td></tr>
    <?php
	}
	?>
</table>
<div class="reloj">
<?php echo date("H:i:s");?>
</div>