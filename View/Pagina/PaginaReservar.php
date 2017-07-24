<?php
  session_start();
  // Archivos requeridos
  require_once './LayoutPortada.php';
  require_once '../../util/Sesion.php';
  include_once '../../Controller/TourController2.php';
  include_once '../../Controller/EquipoController2.php';
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
  $ListaEquipos = fn_Listar();
?>
  <div id="band" class="container" style="background-color: white;box-shadow: 0 0 5px 1px #ccc">
    <?php if (Session::existeSesion('mensajeReserva')): ?>
      <div class="row">
        <div class="col-sm-12">
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
            <?php echo Session::getSesion('mensajeReserva'); ?>
          </div>
        </div>
      </div>
      <?php Session::removeSesion('mensajeReserva'); ?>
    <?php endif ?>
    <div class="row" class="principal">
      <div class="col-md-8">
        <div class="content-box-large box-with-header" style="background-color: white;box-shadow: 0 0 5px 1px #ccc">
          <legend class="text-center">Reservas</legend>
          <form action="../../Controller/ReservasController.php" class="form-horizontal" role="form" method="post">
            <fieldset>
              <legend class="text-center">Datos del Tour</legend>
              <!-- El idtour se recupera -->
              <input type="hidden" name="idtour" id="idtour" value="<?php echo $Datos['idtour']?>" >
              <input type="hidden" name="preciotour" id="preciotour" value="<?php echo $Datos['precio']?>" >
              <div class="form-group">
                <label class="col-md-4 control-label" for="nombretour">Nombre Tour:</label>
                <div class="col-md-8">
                  <input class="form-control" name="nombretour" id="nombretour" type="text" value=<?php echo $Datos["nombretour"]?> disabled="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label" for="fechaviaje">Fecha de Viaje *:</label>
                <div class="col-md-8">
                  <input class="form-control" type="date" name="fechaviaje" id="fechaviaje" placeholder="22/10/2017">
                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend class="text-center">Datos del Pasajero</legend>
              <div class="form-group">
                <label class="col-md-4 control-label" for="nombres">Nombres</label>
                <div class="col-md-8">
                  <input class="form-control" name="nombres" id="nombres" placeholder="Nombres..." type="text">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label" for="apellidos">Apellidos</label>
                <div class="col-md-8">
                  <input class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos..." type="text">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label" for="genero">Genero</label>
                <div class="col-md-8">
                  <div class="radio">
                    <label>
                      <input type="radio" name="genero" id="genero1" value="M" checked>
                      Masculino
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="genero" id="genero2" value="F">
                      Femenino
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label" for="telefono">Telefono</label>
                <div class="col-md-8">
                  <input class="form-control" name="telefono" id="telefono" placeholder="Telefonos..." type="text">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label" for="email">Email</label>
                <div class="col-md-8">
                  <input class="form-control" name="email" id="email" placeholder="Email..." type="email">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label" for="pais">Pais</label>
                <div class="col-md-8">
                  <input class="form-control" name="pais" id="pais" type="text" placeholder="País">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label" for="nropasaporte">Nro Pasaporte</label>
                <div class="col-md-8">
                  <input class="form-control" name="nropasaporte" id="nropasaporte" placeholder="NroPasaporte..." type="text">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label" for="fechanacimiento">Fecha de Nacimiento</label>
                <div class="col-md-8">
                  <input class="col-md-4 form-control" type="date" name="fechanacimiento" id="fechanacimiento" placeholder="22/10/2017">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                  <div class="checkbox">
                    <label>
                      <input name="estudiante" type="checkbox" value="Si" id="estudiante"><strong>Estudiante</strong>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <button class="btn btn-primary" type="button" id="btn-agregar-cliente"><span class="glyphicon glyphicon-plus" ></span> Agregar Cliente</button>
                </div>
              </div>
            </fieldset>
            <h4 class="text-center">Clientes</h4>
            <!-- El correlativo para almacenar la cantidad de clientes -->
            <input type="hidden" class="form-control" name="correlativo_cliente" id="correlativo_cliente" value="0" >
            <div class="table-responsive">
              <table class="table table-striped" id="tabla-clientes">
                <thead>
                  <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Género</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>País</th>
                    <th>Nro. Pasaporte</th>
                    <th>Fecha Nacimiento</th>
                    <th>Estudiante</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
            <fieldset>
              <legend class="text-center">Equipos</legend>
              <div class="form-group">
                <label class="col-md-4 control-label" for="idequipo">Nombre de Equipo</label>
                <div class="col-md-8">
                  <input list="equipos" id="idequipo" class="form-control" type="text" name="idequipo">
                  <datalist id="equipos">
                    <?php foreach ($ListaEquipos as $equipo): ?>
                      <option value="<?php echo $equipo['idequipo']; ?>" data-precio="<?php echo $equipo['precio']; ?>"><?php echo $equipo['nombre']; ?></option>
                    <?php endforeach ?>
                  </datalist>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label" for="cantidad">Cantidad</label>
                <div class="col-md-2">
                  <input class="form-control" name="cantidad" id="cantidad" placeholder="123..." type="text">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label" for="montoequipo">Precio</label>
                <div class="col-md-2">
                  <input class="form-control" name="montoequipo" id="montoequipo" placeholder="$..." type="text" readonly="">
                </div>
              </div>
            </fieldset>
            <div class="form-actions">
              <div class="row">
                <div class="col-md-12">
                  <button name="Op" value="Guardar" class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-save" ></span> Guardar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-4 content-box-large box-with-header" style="background-color: white;box-shadow: 0 0 5px 1px #ccc">
        <legend class="text-center">Reservas</legend>
        <p>como reservar </p>
      </div>
    </div>
  </div>
  <!-- Scripts personalizados -->
  <script>
    // Script para calcular el precio
    $('#idequipo,#cantidad').on('input', function() {
      var idequipo = $('#idequipo').val();
      var precio = $('#equipos [value="' + idequipo + '"]').data('precio')
      var cantidad = $('#cantidad').val();
      if (cantidad != '' && typeof precio !== 'undefined') {
        $('#montoequipo').val(precio * cantidad)
      }
    });
    // Script para agregar cliente a la tabla
    $('#btn-agregar-cliente').click(function(event) {
      // Recuperar valores
      var nombres = $('#nombres').val();
      var apellidos = $('#apellidos').val();
      var genero = $('[name=genero]:checked').val()
      var telefono = $('#telefono').val();
      var email = $('#email').val();
      var pais = $('#pais').val();
      var nropasaporte = $('#nropasaporte').val();
      var fechanacimiento = $('#fechanacimiento').val();
      var estudiante = $('#estudiante').is(':checked') ? $('#estudiante').val() : 'No';
      // Recuperar el numero de cliente
      var nro = $('#correlativo_cliente').val();
      // Agregar cliente a la tabla
      var fila = '<tr>'
      fila += '<td><input readonly="" class="no-input" type="text" name="clientes[' + nro + '][nombres]" value="' + nombres + '" /></td>'
      fila += '<td><input readonly="" class="no-input" type="text" name="clientes[' + nro + '][apellidos]" value="' + apellidos + '" /></td>'
      fila += '<td><input readonly="" class="no-input" type="text" name="clientes[' + nro + '][genero]" value="' + genero + '" /></td>'
      fila += '<td><input readonly="" class="no-input" type="text" name="clientes[' + nro + '][telefono]" value="' + telefono + '" /></td>'
      fila += '<td><input readonly="" class="no-input" type="text" name="clientes[' + nro + '][email]" value="' + email + '" /></td>'
      fila += '<td><input readonly="" class="no-input" type="text" name="clientes[' + nro + '][pais]" value="' + pais + '" /></td>'
      fila += '<td><input readonly="" class="no-input" type="text" name="clientes[' + nro + '][nropasaporte]" value="' + nropasaporte + '" /></td>'
      fila += '<td><input readonly="" class="no-input" type="text" name="clientes[' + nro + '][fechanacimiento]" value="' + fechanacimiento + '" /></td>'
      fila += '<td><input readonly="" class="no-input" type="text" name="clientes[' + nro + '][estudiante]" value="' + estudiante + '" /></td>'
      fila += '</tr>'
      $('#tabla-clientes > tbody').append(fila)
      // Actualizar correlativo de clientes
      nro = parseInt(nro) + 1
      $('#correlativo_cliente').val(nro);
      // Vaciar campos
      $('#nombres').val('');
      $('#apellidos').val('');
      $('#telefono').val('');
      $('#email').val('');
      $('#pais').val('');
      $('#nropasaporte').val('');
      $('#fechanacimiento').val('');
    });
  </script>
<?php
Layoutportada::footer();
?>
