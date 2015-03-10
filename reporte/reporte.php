<?php
include_once("../login/check.php");
include_once("../class/venta.php");
include_once("../impresion/pdf.php");
$folder="../";
$titulo="Reporte de Ordenes";

class PDF extends PPDF{
	function Cabecera(){
		global $FechaInicio,$FechaFin;
		$this->CuadroCabecera(25,"Fecha: ",70,fecha2Str($FechaInicio)." hasta ".fecha2Str($FechaFin));	
		$this->Pagina();
		$this->Ln();
		$this->TituloCabecera(5,"N",10);
		$this->TituloCabecera(20,"Nombre",10);
		$this->TituloCabecera(20,"C.I.",10);
		$this->TituloCabecera(25,"Tamaño",10);
		$this->TituloCabecera(25,"Sabor",10);
		$this->TituloCabecera(30,"Extra",10);
		$this->TituloCabecera(30,"Envase",10);
		$this->TituloCabecera(20,"Bebidas",10);
		$this->TituloCabecera(15,"Total",10);
		$this->TituloCabecera(20,"Obs",10);
		$this->TituloCabecera(20,"Estado",10);
		$this->TituloCabecera(15,"Hora",10);
	}	
}
$estado=$_GET['estado'];
$Nombres=$_GET['Nombres'];
$Carnet=$_GET['Carnet'];
$FechaInicio=$_GET['FechaInicio'];
$FechaFin=$_GET['FechaFin'];


$pdf=new PDF("L","mm","letter");
$pdf->AddPage();


$venta=new venta;

switch($estado){
	case 'Todo':{$where="";}break;
	case 'Pedido':{$where="Estado='Pedido' and";}break;
	case 'Preparando':{$where="Estado='Preparando' and";}break;
	case 'Listo Entrega':{$where="Estado='Listo Entrega' and";}break;
	case 'Entregado':{$where="Estado='Entregado' and";}break;
}

$Nombres=$Nombres!=""?"%$Nombres%":"%";
$Carnet=$Carnet!=""?"%$Carnet%":"%";
$FechaInicio=$FechaInicio!=""?"$FechaInicio":"";
$FechaFin=$FechaFin!=""?"$FechaFin":"";
$where.=" Nombres LIKE '$Nombres' and Carnet LIKE '$Carnet' and FechaRegistro BETWEEN '$FechaInicio' and '$FechaFin' ";
$ven=$venta->mostrar($where,"HoraRegistro",1);


$Nivel=$_SESSION['Nivel'];

$pdf->SetWidths(array(5,20,20,25,25,30,30,20,15,20,20,15));
$pdf->Fuente("",9);
$pdf->SetAligns(array("R","L","L","","","","","L","R","R","R","C"));
if(count($ven)==0){
		$pdf->CuadroCuerpo(190,"Sin Ordenes");

	}else{
		$total=0;
		
	$PrecioTamano=0;
	$PrecioSabores=0;
	$PrecioExtras=0;
	$PrecioEnvase=0;
	$PrecioBebidas=0;
    foreach($ven as $v){$i++;
	switch($v['Estado']){
		case 'Pedido':{$TipoEstado="label-danger";}break;
		case 'Preparando':{$TipoEstado="label-warning";}break;
		case 'Listo Entrega':{$TipoEstado="label-success";}break;
		case 'Entregado':{$TipoEstado="label-primary";}break;
	}
	$total+=$v['Total'];
	
	$PrecioTamano+=$v['PrecioTamano'];
	$PrecioSabores+=$v['PrecioSabores'];
	$PrecioExtras+=$v['PrecioExtras'];
	$PrecioEnvase+=$v['PrecioEnvase'];
	$PrecioBebidas+=$v['PrecioBebidas'];
	
	$datos=array($i,
			utf8_decode($v['Nombres']),
			utf8_decode($v['Carnet']),
			capitalizar($v['Tamano'])." - ".$v['PrecioTamano'],
			capitalizar($v['Sabores'])." - ".$v['PrecioSabores'],
			capitalizar($v['Extras'])." - ".$v['PrecioExtras'],
			capitalizar($v['Envase'])." - ".$v['PrecioEnvase'],
			capitalizar('Total').": ".precio($v['PrecioBebidas']),
			precio($v['Total']),
			capitalizar($v['Observacion']),
			capitalizar($v['Estado']),
			capitalizar($v['HoraRegistro'])
	);
	$pdf->Row($datos);	
	continue;
		?>
		<tr>
        <td><?php echo $i?></td>
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
            <tr class="danger">
            	<td colspan="2">Total: </td>
                <td class="der"><?php echo precio($v['PrecioBebidas'])?></td>	
            </tr>
        </table>
		
        <br>
        
        
        </td>
        <td class="der"><h4 class="arriba"><span class="label label-danger pull-right"><?php echo $v['Total']?></span></h4></td>
        <td><textarea class="form-control observacion" data-cod="<?php echo $v['CodVenta']?>"><?php echo $v['Observacion']?></textarea></td>
        <td><h4 class="arriba">
			<span class="label <?php echo $TipoEstado?>">
			<?php echo $v['Estado']?>
	        </span>
            </h4>
            <hr class="separadorn">
            <?php
			//1=admin 2=gerente 3=administrador 4=Cocina 5=vendedor
			 if(in_array($Nivel,array(1,2,3,5))){?>
            <a class="btn btn-default cambiarestado" id="Pedido" data-cod="<?php echo $v['CodVenta']?>">Pedido</a><br>
            <?php }?>
            <?php if(in_array($Nivel,array(1,2,3,4))){?>
            <a class="btn btn-default cambiarestado" id="Preparando" data-cod="<?php echo $v['CodVenta']?>">Preparar</a><br>
            <?php }?>
            <?php if(in_array($Nivel,array(1,2,3,4))){?>
            <a class="btn btn-default cambiarestado" id="Listo Entrega" data-cod="<?php echo $v['CodVenta']?>">Listo para Entregar</a><br>
            <?php }?>
            <?php if(in_array($Nivel,array(1,2,3,5))){?>
            <a class="btn btn-default cambiarestado" id="Entregado" data-cod="<?php echo $v['CodVenta']?>">Entregado</a> 
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
	$pdf->Fuente("B");
	$pdf->CuadroCuerpo(45,"Totales",1,"R",1,9,"B");
	$pdf->CuadroCuerpo(25,precio($PrecioTamano),1,"R",1,9,"B");
	$pdf->CuadroCuerpo(25,precio($PrecioSabores),1,"R",1,9,"B");
	$pdf->CuadroCuerpo(30,precio($PrecioExtras),1,"R",1,9,"B");
	$pdf->CuadroCuerpo(30,precio($PrecioEnvase),1,"R",1,9,"B");
	$pdf->CuadroCuerpo(20,precio($PrecioBebidas),1,"R",1,9,"B");
	$pdf->CuadroCuerpo(15,precio($total),1,"R",1,9,"B");
	$pdf->CuadroCuerpo(55,"",1,"R",1,9,"B");
	}
	

$pdf->Output("Reporte de Ordenes.pdf","I");
?>