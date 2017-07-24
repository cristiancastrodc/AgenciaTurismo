<?php
  session_start();
  // Archivos requeridos
  require_once './LayoutPortada.php';
  require_once '../../util/Sesion.php';
  include_once '../../Controller/TourController2.php';
  // Si no existe la lista, redireccionar
  if (Session::NoExisteSesion("lista_paquetes") || Session::NoExisteSesion("lista")) {
    header("location:../../Controller/TourController.php?Op=ListarPortada");
    return;
  }
  // Recuperar la lista de Paquetes y quitar de la sesión
  $lista_paquetes = Session::getSesion("lista_paquetes");
  // Recuperar la lista de Tours y quitar de la sesión
  $lista_tours = Session::getSesion("lista");
  // Mostrar los componentes
  Layoutportada::header($lista_paquetes, $lista_tours);
  // Recuperar lso datos del tour
  $idtour = $_REQUEST['idtour'];
  $Datos = fn_RecuperarTour($idtour);
?>
<div id="band" class="container text-center" style="background-color: white;box-shadow: 0 0 5px 1px #ccc">
  <div class="row">
    <div class="col-md-10">
      <h2><?php echo $Datos["nombretour"]?></h2>
      <?php if ($Datos['foto'] != null): ?>
        <img src="data:image/jpeg;base64,<?php echo base64_encode( $Datos['foto'] ); ?>" class="img-responsive center-block" />
      <?php else: ?>
        <img src="../../Imagenes/10391729_10150680656089959_3408138242925668183_n.jpg" alt="Paris" class="img-responsive center-block">
      <?php endif ?>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Iterinario</a></li>
        <li><a data-toggle="tab" href="#menu1">Incluye</a></li>
        <li><a data-toggle="tab" href="#menu2">Que llevar</a></li>
      </ul>
      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
          <h3>Iterinario</h3>
          <p><?php echo $Datos["infogeneral"]?></p>
          <p>PRECIO: $/.<?php echo $Datos["precio"]?> USS</p>
        </div>
        <div id="menu1" class="tab-pane fade in active">
          <h3>Incluye </h3>
          <p><?php echo $Datos["iterinario"]?></p>
        </div>
        <div id="menu2" class="tab-pane fade in active">
          <h3>Que llevar</h3>
          <p><?php echo $Datos["incluye"]?></p>
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <span><a href="PaginaReservar.php?idtour=<?php echo $idtour; ?>" class="btn btn-default btn-lg">Reservar</a></span>
      <p>
        <h3><em>Informacion Util</em></h3>
        <p>PeruDestinoSeguro es una agecia de viajes 100% cusqueña, especializada en actividades al aire libre y caminatas, hacia Inca trail, Salkantay , Lares, Ausangate, Vinicunca, Manu Jungle.
            Trabajamos con grupos pequeños para el mejor deleite de usted en sus vacaciones en Peru.
            Le garantizamos un buen servicio, puesto que nuestros guias hablan un ingles fluido, conocen mucho de la Historia, Flora y Fauna en todas nuestras caminatas. Son muy divertidos, y muy responsables con su trabajo.
            Somos la fuerza celeste que le sorprendera , venga y disfrute su viaje con nosotros..
        </p>
      </p>

    </div>
  </div>
</div>
<?php
  Layoutportada::footer();
?>
