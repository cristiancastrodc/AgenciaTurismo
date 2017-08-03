<?php
  session_start();
  // Archivos requeridos
  require_once './LayoutPortada.php';
  require_once '../../util/Sesion.php';
  // Si no existe la lista, redireccionar
  if (Session::NoExisteSesion("lista_paquetes") || Session::NoExisteSesion("lista")) {
    header("location:../../Controller/TourController.php?Op=ListarPortada");
    return;
  }
  // Recuperar la lista de Paquetes y quitar de la sesión
  $lista_paquetes = Session::getSesion("lista_paquetes");
  // Recuperar la lista de Tours y quitar de la sesión
  $lista_tours = Session::getSesion("lista");
  // Mostrar la página
  Layoutportada::header($lista_paquetes, $lista_tours);
  Layoutportada::carrusel($lista_tours);
  Layoutportada::presentacion();
  Layoutportada::bodypaquetes($lista_paquetes, $lista_tours);
  Layoutportada::footer();
?>
