
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
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo $folder?>"><div><img src="imagenes/logo.png" width="40"> <?php echo $title?></div></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo $folder?>">Venta</a></li>
                <li><a href="#about">Entregas</a></li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reportes<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
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

    <div class="container marketing" style="background-color:#">
