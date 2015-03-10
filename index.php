<?php
include_once("login/check.php");
$titulo="Venta de Productos";
$idmenu=1;
$folder="";
include_once("cabecerahtml.php");
?>
<script language="javascript" src="js/venta.js" type="text/javascript"></script>
<?php
include_once("cabecera.php");
?>
      <!-- Three columns of text below the carousel -->
      <form action="guardar.php" method="post">
      <input type="hidden" name="total" value="">
      <div class="row">
      	<h1 class="centrar"><span class="label label-danger">Venta de Pizza</span></h1>
        <?php if($_GET['e']==1){
		?>
        <div class="alert alert-success">
        <input type="button" class="close" value="X" data-dismiss="alert">
        El Pedido Fue Registrado Correctamente</div>
        <?php	
		}?>
        <h3 class="pull-right">Total: Bs <span class="label label-danger total">0</span></h3>
        <hr class="separador">
      <div role="tabpanel" >
          <!-- Nav tabs -->
          <ul class="nav nav-tabs"  role="tablist">
            <li role="presentation"   class="active"><a href="#ctamano" aria-controls="home" role="tab" data-toggle="tab" class="btn btn-warning">Tamaño</a></li>
            <li role="presentation" ><a href="#csabores" aria-controls="profile" role="tab" data-toggle="tab" class="btn btn-warning">Sabores</a></li>
            <li role="presentation"><a href="#cextras" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-warning">Extras</a></li>
            <li role="presentation"><a href="#cenvase" aria-controls="settings" role="tab" data-toggle="tab" class="btn btn-warning">Envase</a></li>
            <li role="presentation"><a href="#cbebidas" aria-controls="settings" role="tab" data-toggle="tab" class="btn btn-warning">Bebidas</a></li>
            <li role="presentation"><a href="#cdatos" aria-controls="settings" role="tab" data-toggle="tab" class="btn btn-warning">Datos del Cliente</a></li>
          </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active  cuadro" id="ctamano">
    <input type="hidden" name="preciotamano" value="">
    <input type="hidden" name="tamano" value="">
    	<div class="row">
        <div class="col-sm-4">
			<div class="thumbnail desactivado ccgrande">
                <h2 class="pull-left arriba"><span class="label label-danger">Grande</span>  </h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">49</span></span></h2>
              	<img class="img-circle" src="imagenes/tamano/grande.png" alt="Grande" style="width: 150px; height: 150px;">
              
              
              
              
			</div>
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-4">
        	<div class="thumbnail desactivado ccmediana">
                <h2 class="pull-left arriba"><span class="label label-danger">Mediana</span></h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">39</span></span></h2>
          <img class="img-circle" src="imagenes/tamano/mediana.png" alt="Mediana" style="width: 150px; height: 150px;">
          
          
          
          
          	</div>
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-4">
        	<div class="thumbnail desactivado ccpequena">
                <h2 class="pull-left arriba"><span class="label label-danger">Pequeña</span></h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">29</span></span></h2>
          <img class="img-circle" src="imagenes/tamano/pequena.png" alt="Pequeña" style="width: 150px; height: 150px;">
          
          
          
          
			</div>
        </div><!-- /.col-lg-4 -->
        
        
      </div><!-- /.row -->
      <div class="row">
      	<div class="col-sm-4">
        	<div class="thumbnail desactivado ccextragrande">
                <h2 class="pull-left arriba"><span class="label label-danger">ExtraGrande</span></h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">80</span></span></h2>
          <img class="img-circle" src="imagenes/tamano/extragrande.png" alt="Porción" style="width: 150px; height: 150px;">
          
          
          
          	
          	</div>
        </div><!-- /.col-lg-4 -->
        
        <div class="col-sm-4">
        	<div class="thumbnail desactivado ccpequenaeconomica">
                <h2 class="pull-left arriba"><span class="label label-danger">Pequeña Eco</span></h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">22</span></span></h2>
          <img class="img-circle" src="imagenes/tamano/pequenaeconomica.png" alt="Porción" style="width: 150px; height: 150px;">
          
          
          
          	
          	</div>
        </div><!-- /.col-lg-4 -->
      
      	<div class="col-sm-4">
        	<div class="thumbnail desactivado ccporcion">
                <h2 class="pull-left arriba"><span class="label label-danger">Porción</span></h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">7</span></span></h2>
          <img class="img-circle" src="imagenes/tamano/porcion.png" alt="Porción" style="width: 150px; height: 150px;">
          
          
          
          	
          	</div>
        </div><!-- /.col-lg-4 -->
      </div>
    </div><!--Fin Tamano-->
    <div role="tabpanel" class="tab-pane  cuadro" id="csabores">
    	<input type="hidden" name="preciosabores" value="">
    	<input type="hidden" name="sabores" value="">
    	<div class="row">
        <div class="col-sm-3">
			<div class="thumbnail desactivado cctradicional">
                <h2 class="pull-left arriba"><span class="label label-danger">Tradicional</span>  </h2>
                
              	<img class="img-circle" src="imagenes/sabor/tradicional.png" alt="Tradicional" style="width: 150px; height: 150px;">
              
              
              
              
			</div>
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-3">
        	<div class="thumbnail desactivado cchawaiana">
                <h2 class="pull-left arriba"><span class="label label-danger">Hawaiana</span></h2>
                
          <img class="img-circle" src="imagenes/sabor/hawaiana.png" alt="Hawaiana" style="width: 150px; height: 150px;">

          	</div>
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-3">
        	<div class="thumbnail desactivado ccamericana">
                <h2 class="pull-left arriba"><span class="label label-danger">Americana</span></h2>
               
          <img class="img-circle" src="imagenes/sabor/americana.png" alt="Americana" style="width: 150px; height: 150px;">
 
			</div>
        </div><!-- /.col-lg-4 -->
        
        <div class="col-sm-3">
        	<div class="thumbnail desactivado ccespanola">
                <h2 class="pull-left arriba"><span class="label label-danger">Española</span></h2>
                
          <img class="img-circle" src="imagenes/sabor/española.png" alt="Española" style="width: 150px; height: 150px;">

          	</div>
        </div><!-- /.col-lg-4 -->
        </div>
        <div class="row">
        <div class="col-sm-3">
        	<div class="thumbnail desactivado cc4estaciones">
                <h2 class="pull-left arriba"><span class="label label-danger">4 Estaciones</span></h2>
                
          <img class="img-circle" src="imagenes/sabor/4estaciones.png" alt="4 Estaciones" style="width: 150px; height: 150px;">

          	</div>
        </div><!-- /.col-lg-4 -->
        
        <div class="col-sm-3">
        	<div class="thumbnail desactivado cccarnivora">
                <h2 class="pull-left arriba"><span class="label label-danger">Carnivora</span></h2>
                
          <img class="img-circle" src="imagenes/sabor/carnivora.jpg" alt="Carnivora" style="width: 150px; height: 150px;">

          	</div>
        </div><!-- /.col-lg-4 -->
        
        <div class="col-sm-3">
        	<div class="thumbnail desactivado ccpeperoni">
                <h2 class="pull-left arriba"><span class="label label-danger">Peperoni</span></h2>
                
          <img class="img-circle" src="imagenes/sabor/peperoni.jpg" alt="Carnivora" style="width: 150px; height: 150px;">

          	</div>
        </div><!-- /.col-lg-4 -->
        
      </div><!-- /.row -->
    </div><!--Fin Sabores-->
    <div role="tabpanel" class="tab-pane cuadro" id="cextras">
		<input type="hidden" name="precioextras" value="">
    	<input type="hidden" name="extras" value="">
    	<div class="row">
        <div class="col-sm-3">
			<div class="thumbnail desactivado ccqueso">
                <h2 class="pull-left arriba"><span class="label label-danger">Queso</span>  </h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">8</span></span></h2>
              	<img class="img-circle" src="imagenes/extra/queso.jpg" alt="Queso" style="width: 150px; height: 150px;">

			</div>
        </div><!-- /.col-lg-2 -->
        <div class="col-sm-3">
			<div class="thumbnail desactivado ccjamon">
                <h2 class="pull-left arriba"><span class="label label-danger">Jamón</span>  </h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">6</span></span></h2>
              	<img class="img-circle" src="imagenes/extra/jamon.jpg" alt="Jamón" style="width: 150px; height: 150px;">

			</div>
        </div><!-- /.col-lg-2 -->
        
        <div class="col-sm-3">
			<div class="thumbnail desactivado ccaceituna">
                <h2 class="pull-left arriba"><span class="label label-danger">Aceituna</span>  </h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">2</span></span></h2>
              	<img class="img-circle" src="imagenes/extra/aceituna.jpg" alt="Aceituna" style="width: 150px; height: 150px;">

			</div>
        </div><!-- /.col-lg-2 -->
        
        <div class="col-sm-3">
			<div class="thumbnail desactivado ccpicante">
                <h2 class="pull-left arriba"><span class="label label-danger">Picante</span>  </h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">2</span></span></h2>
              	<img class="img-circle" src="imagenes/extra/picante.jpg" alt="Picante" style="width: 150px; height: 150px;">

			</div>
        </div><!-- /.col-lg-2 -->
        </div><!--Fin Row-->
        
        <div class="row">
        <div class="col-sm-3">
			<div class="thumbnail desactivado cctodomucho">
                <h2 class="pull-left arriba"><span class="label label-danger">Todo Mucho</span>  </h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">15</span></span></h2>
              	<img class="img-circle" src="imagenes/extra/todo.jpg" alt="Todo Mucho" style="width: 150px; height: 150px;">

			</div>
        </div><!-- /.col-lg-2 -->
        <div class="col-sm-3">
			<div class="thumbnail desactivado cctodomedio">
                <h2 class="pull-left arriba"><span class="label label-danger">Todo Medio</span>  </h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">12</span></span></h2>
              	<img class="img-circle" src="imagenes/extra/todo.jpg" alt="Todo Medio" style="width: 150px; height: 150px;">

			</div>
        </div><!-- /.col-lg-2 -->
        
        <div class="col-sm-3">
			<div class="thumbnail desactivado cctodopoco">
                <h2 class="pull-left arriba"><span class="label label-danger">Todo Poco</span>  </h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">8</span></span></h2>
              	<img class="img-circle" src="imagenes/extra/todo.jpg" alt="Todo Poco" style="width: 150px; height: 150px;">

			</div>
        </div><!-- /.col-lg-2 -->
        
        <div class="col-sm-3">
			<div class="thumbnail desactivado ccninguno">
                <h2 class="pull-left arriba"><span class="label label-danger">Ninguno</span>  </h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">0</span></span></h2>
              	<img class="img-circle" src="imagenes/extra/no.gif" alt="Ninguno" style="width: 150px; height: 150px;">

			</div>
        </div><!-- /.col-lg-2 -->
        </div><!--Fin Row-->
    </div><!--Fin Extras-->

    <div role="tabpanel" class="tab-pane  cuadro" id="cenvase">
    	<input type="hidden" name="precioenvase" value="">
    	<input type="hidden" name="envase" value="">
    	<div class="row">
        	<div class="col-sm-4">
			<div class="thumbnail desactivado ccaqui">
                <h2 class="pull-left arriba"><span class="label label-danger">Servir 	Aquí</span>  </h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">0</span></span></h2>
              	<img class="img-circle" src="imagenes/envase/aqui.jpg" alt="Servir 	Aquí" style="width: 150px; height: 150px;">

			</div>
        	</div><!-- /.col-lg-2 -->
            
            <div class="col-sm-4">
			<div class="thumbnail desactivado ccllevarcaja">
                <h2 class="pull-left arriba"><span class="label label-danger">Llevar con Caja</span>  </h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">6</span></span></h2>
              	<img class="img-circle" src="imagenes/envase/caja.gif" alt="Llevar con Caja" style="width: 150px; height: 150px;">

			</div>
        	</div><!-- /.col-lg-2 -->
            
            <div class="col-sm-4">
			<div class="thumbnail desactivado ccllevarsincaja">
                <h2 class="pull-left arriba"><span class="label label-danger">Llevar sin Caja</span>  </h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">0</span></span></h2>
              	<img class="img-circle" src="imagenes/envase/nocaja.gif" alt="Llevar sin Caja" style="width: 150px; height: 150px;">

			</div>
        	</div><!-- /.col-lg-2 -->
            
        </div>
    </div><!--Fin Envase-->
    <div role="tabpanel" class="tab-pane  cuadro" id="cbebidas">
    	<input type="hidden" name="preciobebidas" value="">
    	<input type="hidden" name="bebidas" value="">
        
    	<div class="row">
        	<div class="col-sm-3">
			<div class="thumbnail desactivado ccpersonalcocacola">
                <h2 class="pull-left arriba"><span class="label label-danger">Personal - Coca Cola</span>  </h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">1.5</span></span></h2>
              	<img class="img-circle" src="imagenes/bebidas/cocacola.jpg" alt="Llevar sin Caja" style="width: 150px; height: 150px;">
                
                <table class="table tabla">
                	<thead>
                        <tr>
                            <th>Cantidad</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tr>
                    	<td><input type="number" class="form-control der" placeholder="0" value="0" min="0" name="cantidadpersonalcocacola">
                        </td>
                        <td>
                        	<input type="number" class="form-control der resaltar" placeholder="0" value="0" min="0" readonly name="totalpersonalcocacola">
                        </td>
                    </tr>
                </table>
			</div>
        	</div><!-- /.col-lg-2 -->
            <div class="col-sm-3">
			<div class="thumbnail desactivado ccpersonalfanta">
                <h2 class="pull-left arriba"><span class="label label-warning">Personal - Fanta</span>  </h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">1.5</span></span></h2>
              	<img class="img-circle" src="imagenes/bebidas/fanta.jpg" alt="Llevar sin Caja" style="width: 150px; height: 150px;">
				<table class="table tabla">
                	<thead>
                        <tr>
                            <th>Cantidad</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tr>
                    	<td><input type="number" class="form-control der" placeholder="0" value="0" min="0" name="cantidadpersonalfanta">
                        </td>
                        <td>
                    		<input type="number" class="form-control der resaltar" placeholder="0" value="0" min="0" readonly name="totalpersonalfanta">
                		</td>
                    </tr>
                </table>
			</div>
        	</div><!-- /.col-lg-2 -->
            <div class="col-sm-3">
			<div class="thumbnail desactivado ccpersonalsprite">
                <h2 class="pull-left arriba"><span class="label label-success">Personal - Sprite</span>  </h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">1.5</span></span></h2>
              	<img class="img-circle" src="imagenes/bebidas/sprite.jpg" alt="Llevar sin Caja" style="width: 150px; height: 150px;">
				<table class="table tabla">
                	<thead>
                        <tr>
                            <th>Cantidad</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tr>
                    	<td><input type="number" class="form-control der" placeholder="0" value="0" min="0" name="cantidadpersonalsprite">
                        </td>
                        <td>
					<input type="number" class="form-control der resaltar" placeholder="0" value="0" min="0" readonly name="totalpersonalsprite">
                		</td>
                    </tr>
                </table>
			</div>
        	</div><!-- /.col-lg-2 -->
            <div class="col-sm-3">
                <div class="thumbnail desactivado cccafeclasico">
                    <h2 class="pull-left arriba"><span class="label label-warning">Chocolate</span>  </h2>
                    <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">5</span></span></h2>
                    <img class="img-circle" src="imagenes/bebidas/chocolate.jpg" alt="Cáfe Clásico" style="width: 150px; height: 150px;">
                    <table class="table tabla">
                	<thead>
                        <tr>
                            <th>Cantidad</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tr>
                    	<td><input type="number" class="form-control der" placeholder="0" value="0" min="0" name="cantidadcafeclasico">
                        </td>
                        <td>
                        <input type="number" class="form-control der resaltar" placeholder="0" value="0" min="0" readonly name="totalcafeclasico">
                        </td>
                        </tr>
                    </table>
                </div>
			</div><!-- /.col-lg-2 -->
        </div> 
        <div class="row">
        	<div class="col-sm-3">
			<div class="thumbnail desactivado cccocacolagrande">
                <h2 class="pull-left arriba"><span class="label label-danger">2L - Coca Cola</span>  </h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">12</span></span></h2>
              	<img class="img-circle" src="imagenes/bebidas/cocacolagrande.jpg" alt="Llevar sin Caja" style="width: 150px; height: 150px;">
				<table class="table tabla">
                	<thead>
                        <tr>
                            <th>Cantidad</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tr>
                    	<td><input type="number" class="form-control der" placeholder="0" value="0" min="0" name="cantidadcocacolagrande">
                        </td>
                        <td>
					<input type="number" class="form-control der resaltar" placeholder="0" value="0" min="0" readonly name="totalcocacolagrande">
                		</td>
                        </tr>
                    </table>
			</div>
        	</div><!-- /.col-lg-2 -->
            
            <div class="col-sm-3">
			<div class="thumbnail desactivado ccfantagrande">
                <h2 class="pull-left arriba"><span class="label label-danger">1/2L - Coca Cola</span>  </h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">8</span></span></h2>
              	<img class="img-circle" src="imagenes/bebidas/cocacolamediana.jpg" alt="Llevar sin Caja" style="width: 150px; height: 150px;">
				<table class="table tabla">
                	<thead>
                        <tr>
                            <th>Cantidad</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tr>
                    	<td><input type="number" class="form-control der" placeholder="0" value="0" min="0" name="cantidadfantagrande">
                    	</td>
                        <td>
					<input type="number" class="form-control der resaltar" placeholder="0" value="0" min="0" readonly name="totalfantagrande">
                		</td>
                        </tr>
                    </table>
			</div>
        	</div><!-- /.col-lg-2 -->
            
            <div class="col-sm-3">
			<div class="thumbnail desactivado ccfrutalgrande">
                <h2 class="pull-left arriba"><span class="label label-warning">2L Frutal</span>  </h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">10</span></span></h2>
              	<img class="img-circle" src="imagenes/bebidas/frutal.jpg" alt="Llevar sin Caja" style="width: 150px; height: 150px;">
				<table class="table tabla">
                	<thead>
                        <tr>
                            <th>Cantidad</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tr>
                    	<td><input type="number" class="form-control der" placeholder="0" value="0" min="0" name="cantidadfrutalgrande">
                    	</td>
                        <td>
					<input type="number" class="form-control der resaltar" placeholder="0" value="0" min="0" readonly name="totalfrutalgrande">
                		</td>
                        </tr>
                    </table>
			</div>
        	</div><!-- /.col-lg-2 -->
            <div class="col-sm-3">
                <div class="thumbnail desactivado cccafecapuchino">
                    <h2 class="pull-left arriba"><span class="label label-warning">Café Capuchino</span>  </h2>
                    <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">5</span></span></h2>
                    <img class="img-circle" src="imagenes/bebidas/cafecapuchino.jpg" alt="Llevar sin Caja" style="width: 150px; height: 150px;">
                    <table class="table tabla">
                	<thead>
                        <tr>
                            <th>Cantidad</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tr>
                    	<td><input type="number" class="form-control der" placeholder="0" value="0" min="0" name="cantidadcafecapuchino">
                        </td>
                        <td>
                        <input type="number" class="form-control der resaltar" placeholder="0" value="0" min="0" readonly name="totalcafecapuchino">
                    </td>
                        </tr>
                    </table>
                </div>
			</div><!-- /.col-lg-2 -->
        </div>
    </div><!--Fin de Bebidas-->
    <div role="tabpanel" class="tab-pane  cuadro" id="cdatos">
    	<div class="form-horizontal" >
            <div class="form-group">
                <label for="Nombres" class="col-sm-2 control-label">Nombres</label>
                <div class="col-sm-10">
                <select class="form-control" id="Nombres" placeholder="Nombres" name="Nombres">
				<option value="Mesa 1">Mesa 1</option>
				<option value="Mesa 2">Mesa 2</option>
				<option value="Mesa 3">Mesa 3</option>
				<option value="Mesa 4">Mesa 4</option>
				<option value="Mesa 5">Mesa 5</option>
				<option value="Mesa 6">Mesa 6</option>
				<option value="Mesa 7">Mesa 7</option>
				<option value="Mesa 8">Mesa 8</option>
				<option value="Mesa 9">Mesa 9</option>
				<option value="Señora">Señora</option>
				<option value="Señor">Señor</option>
				<option value="Señorita">Señorita</option>
				<option value="Jóven">Jóven</option>
				
				</select>
                </div>
            </div>
            <div class="form-group">
                <label for="Carnet" class="col-sm-2 control-label">Carnet:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="Carnet" placeholder="Introduce el Número de Carnet" name="Carnet">
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label for="observacion" class="col-sm-2 control-label">Observación:</label>
                <div class="col-sm-10">
                <textarea class="form-control" id="observacion" placeholder="Introduce alguna Observación Sobre el Pedido" name="observacion"></textarea>
                </div>
            </div>
            <input type="submit" value="Realizar Pedido" class="btn btn-success">
        </div>
    </div><!--Fin de Datos-->
  </div>

</div>
      </div>
      
     </form> 

<?php
include_once("pie.php");
?>