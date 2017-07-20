<?php
class layout{
    function cabecera(){
    ?>   
        <!DOCTYPE HTML>
        <html>
            <head>
                <title>AgenciaPaquetes</title>  
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                <link href="../../Estilos/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                <link rel="stylesheet" type="text/css" href="../../Estilos/css/Estilos.css" title="style">
                <link rel="stylesheet" type="text/css" href="../../Estilos/css/buttons.css" rel="stylesheet">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
            </head>
            
            <body>              
            <div class="header">
                <div class="container">
                    <div class="row">
                    <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Reserva de Tours Turisticos</a></h1>
	              </div>
	           </div>
	           <div class="col-md-7">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nombre del Usuario <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="#">Profile</a></li>
	                          <li><a href="#">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>      
                
       <div id="site_content">
            <div class="page-content">
            <div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                            <ul class="nav">
                                <!-- Main menu -->
                                <li class="current"><a href="../Admin/dashboard.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                                <li class="submenu">
                                     <a href="#">
                                        <i class="glyphicon glyphicon-list"></i> Categorias
                                        <span class="caret pull-right"></span>
                                     </a>
                                     <!-- Sub menu -->
                                     <ul>
                                        <li><a href="../../View/Cliente/Cliente.php">Cliente</a></li>
                                        <li><a href="../../View/Paquete/Paquete.php">Paquete</a></li>
                                        <li><a href="../../View/Tour/Tour.php">Tour</a></li>
                                        <li><a href="../../View/Equipo/Equipo.php">Equipos</a></li>
                                        <li><a href="../../View/Guia/Guia.php">Guias</a></li>
                                        <li><a href="../../View/Admin.php">Admin</a></li>
                                        <li><a href="#">....</a></li>
                                    </ul>
                                </li>
                                
                                <li><a href="#"><i class="glyphicon glyphicon-stats"></i>Ultimas Reservas</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-tasks"></i> Reportes</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-tasks"></i> Buscar</a></li>
                            </ul>
                         </div>
		  </div>
               
                
                <!-- insertar el contenido de la pagina -->
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12">                                    
		  			<div class="content-box-large">
                                            <?php
                                                }
                                            function presentacion(){
                                            ?>
		  				<div class="panel-heading">
                                                    <div class="panel-title"><h2>Bienvenido al sistema web Sistema de reserva de paquetes</h2></div>
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							</div>
						</div>
		  				<div class="panel-body">
                                                        <p>Desarrollaod por Adrian</p>
                                                        <p>Contacto :adria@cuscoalasd.com</p>
                                                        <h4>Caracteristicas</h4>
                                                        <p>El sistema podra</p>
                                                        <ul>
                                                            <li>Reggisytrar Tours</li>
                                                            <li>Resguitarar clientes </li>
                                                            <li>disponible en firefo 3.5</li>
                                                            <li>disponible en Google Chrome 6</li>
                                                            <li>disponible en safari 4</li>
                                                        </ul>
		  				</div>
                                            <?php
                                                }
                                              function footer(){
                                            ?>
		  			</div>
                                    
		  		</div>
                            </div>
                        </div>
                    </div>
                </div>              
                <!-- fin de la inseerrcion de contenido-->
        <footer>
            <div class="container">
                <div class="copy text-center"> Copyright 2017 <a href='../../index.php'>Website</a></div>
            </div>
        </footer>              
                <!-- jQuery  -->
                <script src="../../Layout/jquery-3.1.1.min.js"></script>
                
                
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="../../Estilos/bootstrap/js/bootstrap.min.js"></script>
                <script src="../../js/custom.js"></script>
                <script src="../../js/tables.js"></script>
                <script src="../../js/forms.js"></script>
                
        </body>
    </html>
        
        
<?php

        }      
}    
?>