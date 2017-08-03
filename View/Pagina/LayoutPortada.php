<?php
class Layoutportada {
  function header($lista_paquetes, $lista_tours) { ?>
    <!DOCTYPE html>
    <html lang="es">
      <head>
        <title>.::PerDestinoSeguro::..</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../../Estilos/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../Estilos/css/EstilosPortada.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../Estilos/css/buttons.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../Estilos/css/Estilos.css" title="style">
        <link rel="stylesheet" type="text/css" href="../../Estilos/css/buttons.css" rel="stylesheet">
        <!-- Scripts -->
        <script src="../../Estilos/vendors/jquery/jquery.min.js"></script>
        <script src="../../Estilos/bootstrap/js/bootstrap.min.js"></script>
      </head>
      <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Logo</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li><a href="../../index.php">HOME</a></li>
                <li><a href="#">OUR</a></li>
                <?php
                // Mostrar los paquetes
                foreach ($lista_paquetes as $paquete) { ?>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><?php echo $paquete['nombre']; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <?php foreach ($lista_tours as $tour): ?>
                        <?php if ($tour['idpaquete'] == $paquete['idpaquete']): ?>
                          <li><a href="PaginaVerMas.php?idtour=<?php echo $tour['idtour']; ?>"><?php echo $tour['nombretour']; ?></a></li>
                    <p></p>
                        <?php endif ?>
                      <?php endforeach; ?>
                    </ul>
                  </li>
                <?php }
                ?>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    <?php
  }

  function carrusel($lista_tours) { ?>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Puntos Indicadores -->
      <?php $i = 0; ?>
      <ol class="carousel-indicators">
        <?php $j = 0; ?>
        <?php foreach ($lista_tours as $tour): ?>
          <?php if ($tour['foto'] != null): ?>
            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $j; $j++; ?>" class="<?php if ($i == 0) { echo "active"; $i++; } ?>"></li>
          <?php endif; ?>
        <?php endforeach ?>
      </ol>
      <!-- Imágenes -->
      <?php $i = 0; ?>
      <div class="carousel-inner" role="listbox">
        <?php foreach ($lista_tours as $tour): ?>
          <?php if ($tour['foto'] != null): ?>
            <div class="item <?php if ($i == 0) { echo "active"; $i++; } ?>">
              <img class="img-responsive" src="data:image/jpeg;base64,<?php echo base64_encode( $tour['foto'] ); ?>" />
            </div>
          <?php endif; ?>
        <?php endforeach ?>
      </div>
      <!-- Controles -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div><?php
  }

  function presentacion() {
  }

  function bodypaquetes($lista_paquetes, $lista_tours) {
    foreach ($lista_paquetes as $paquete) { ?>
      <div class="bg-1">
        <div class="container">
          <h3 class="text-center"><?php echo $paquete['nombre']; ?></h3>
          <div class="row">
            <?php foreach ($lista_tours as $tour): ?>
              <?php if ($tour['idpaquete'] == $paquete['idpaquete']): ?>
                <div class="col-sm-4">
                  <div class="thumbnail">
                    <?php if ($tour['foto'] != null): ?>
                      <img class="img-responsive" src="data:image/jpeg;base64,<?php echo base64_encode( $tour['foto'] ); ?>" />
                    <?php else: ?>
                      <img class="img-responsive" src="../../Imagenes/10391729_10150680656089959_3408138242925668183_n.jpg" alt="Paris" width="400" height="300">
                    <?php endif ?>
                    <p><strong><?php echo $tour['nombretour']; ?></strong></p>
                    <p><?php echo $tour['infogeneral']; ?></p>
                    <p><a href="PaginaReservar.php?idtour=<?php echo $tour['idtour']; ?>">Reservar</a></p>
                    <p><a href="PaginaVerMas.php?idtour=<?php echo $tour['idtour']; ?>">Ver más</a></p>
                  </div>
                </div>
              <?php endif ?>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    <?php }
  }

  function footer() { ?>
        <!-- Footer -->
        <footer class="text-center">
          <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
          </a><br><br>
          <p>..: <a href="../../View/Admin/dashboard.php" data-toggle="tooltip" title="Peru Destino Seguro">www.PeruDestinoSeguro.com</a></p>
        </footer>
      </body>
    </html><?php
  }
}
?>
