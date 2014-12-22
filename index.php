<?php
$titulo="Venta de Productos";
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
      	<h3 class="centrar">Venta</h3>
        <h3 class="pull-right">Total: Bs<span class="label label-danger total">0</span></h3>
        <hr class="separador">
      <div role="tabpanel">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#ctamano" aria-controls="home" role="tab" data-toggle="tab" class="btn btn-warning">Tamaño</a></li>
            <li role="presentation" ><a href="#csabores" aria-controls="profile" role="tab" data-toggle="tab" class="btn btn-warning">Sabores</a></li>
            <li role="presentation"><a href="#cextras" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-warning">Extras</a></li>
            <li role="presentation"><a href="#cenvase" aria-controls="settings" role="tab" data-toggle="tab" class="btn btn-warning">Envase</a></li>
            <li role="presentation"><a href="#cbebidas" aria-controls="settings" role="tab" data-toggle="tab" class="btn btn-warning">Bebidas</a></li>
            <li role="presentation"><a href="#cdatos" aria-controls="settings" role="tab" data-toggle="tab" class="btn btn-warning">Datos del Cliente</a></li>
          </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active cuadro" id="ctamano">
    <input type="hidden" name="preciotamano" value="">
    <input type="hidden" name="tamano" value="">
    	<div class="row">
        <div class="col-lg-3">
			<div class="thumbnail desactivado ccgrande">
                <h2 class="pull-left arriba"><span class="label label-danger">Grande</span>  </h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">48</span></span></h3>
              	<img class="img-circle" src="imagenes/tamano/grande.png" alt="Grande" style="width: 150px; height: 150px;">
              
              
              
              
			</div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
        	<div class="thumbnail desactivado ccmediana">
                <h2 class="pull-left arriba"><span class="label label-danger">Mediana</span></h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">38</span></span></h2>
          <img class="img-circle" src="imagenes/tamano/mediana.png" alt="Mediana" style="width: 150px; height: 150px;">
          
          
          
          
          	</div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
        	<div class="thumbnail desactivado ccpequena">
                <h2 class="pull-left arriba"><span class="label label-danger">Pequeña</span></h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">22</span></span></h2>
          <img class="img-circle" src="imagenes/tamano/pequena.png" alt="Pequeña" style="width: 150px; height: 150px;">
          
          
          
          
			</div>
        </div><!-- /.col-lg-4 -->
        
        <div class="col-lg-3">
        	<div class="thumbnail desactivado ccporcion">
                <h2 class="pull-left arriba"><span class="label label-danger">Porción</span></h2>
                <h2 class="pull-right arriba"><span class="label label-default">Bs <span class="precio">6</span></span></h2>
          <img class="img-circle" src="imagenes/tamano/porcion.png" alt="Porción" style="width: 150px; height: 150px;">
          
          
          
          	
          	</div>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div>
    <div role="tabpanel" class="tab-pane" id="csabores">2.</div>
    <div role="tabpanel" class="tab-pane" id="cextras">3.</div>
    <div role="tabpanel" class="tab-pane" id="settings">.4</div>
    <div role="tabpanel" class="tab-pane" id="cenvase">5.</div>
    <div role="tabpanel" class="tab-pane" id="cbebidas">6.</div>
    <div role="tabpanel" class="tab-pane" id="cdatos">7.</div>
  </div>

</div>
      </div>
      <input type="submit">
     </form> 

<?php
include_once("pie.php");
?>