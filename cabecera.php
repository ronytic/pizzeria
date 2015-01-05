<?php
$Nivel=$_SESSION['Nivel']
?>
<style type="text/css">
body{
	background-image:url(<?php echo $folder;?>imagenes/fondo/2.jpg);
	background-size:cover
}
.blanco{
	padding-top:10px;
	background-color:rgba(255,255,255,0.93);		
	border-radius:10px;
}
.blancot{
	background-color:rgba(255,255,255,0.88);	
}
</style>
  </head>
<!-- NAVBAR
================================================== -->
  <body style="background-color:#FFFFFF">
    <div class="navbar-wrapper">
      <div class="container"  >

        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" >
          <div class="container" >
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Cambiar</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo $folder?>./"><div><img src="<?php echo $folder?>imagenes/logo.png" width="40"> <?php echo $title?></div></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
              	<?php  if(in_array($Nivel,array(1,2,3,5))){?>
                <li class="<?php echo $idmenu==1?'active':''?>"><a href="<?php echo $folder?>./">Venta</a></li>
                <?php }?>
                <?php if(in_array($Nivel,array(1,2,3,4,5))){?>
                <li class="<?php echo $idmenu==2?'active':''?>"><a href="<?php echo $folder?>estado/">Estado de las Ordenes</a></li>
                <?php }?>
                <?php if(in_array($Nivel,array(1,2,3))){?>
                <li class="<?php echo $idmenu==3?'active':''?>"><a href="<?php echo $folder?>reporte/">Reporte</a></li>
                 <?php }?>
                 
                 <?php if(in_array($Nivel,array(1,2,3))){?>
                <li class="dropdown <?php echo $idmenu==4?'active':''?>">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >Usuarios<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo $folder?>usuarios/registro/"><i class="glyphicon glyphicon-chevron-right"></i> Registrar Nuevo Usuario</a></li>
                    <li><a href="<?php echo $folder?>usuarios/registro/listar.php"><i class="glyphicon glyphicon-chevron-right"></i> Listar Usuarios</a></li>

                  </ul>
                </li>
                 <?php }?>
                <li><a href="<?php echo $folder;?>login/logout.php">Salir del Sistema</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing blanco" style="background-color:#">
