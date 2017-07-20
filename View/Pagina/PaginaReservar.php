<?php
    require_once './LayoutPortada.php';
    include_once 'C:/xampp/htdocs/HappyGringoSistema4/Controller/TourController2.php';
    include_once 'C:/xampp/htdocs/HappyGringoSistema4/Controller/EquipoController2.php';
    //$idtour=$_REQUEST['idtour'];
    
    Layoutportada::header();
    
    //$Datos = fn_Recuperar($idtour);
    //$Datos =  $Datos->fetch_array(MYSQLI_ASSOC);
    
    //$ListaEquipos = fn_Listar();
?>    
    <div id="band" class="container text-center" style="background-color: white;box-shadow: 0 0 5px 1px #ccc">
    <div class="container-fluid text-center">
        <div class="row" style="principal">
            <div class="col-md-8" style="">
                <div class="content-box-large box-with-header" style="background-color: white;box-shadow: 0 0 5px 1px #ccc">
                    <legend>Reservas</legend>
                    <p>
                    <form action="../../Controller/ClienteController.php" class="form-line" role="form" method="post">
                        <fieldset>
                            <legend>Datos del Tour</legend>
                            <div class="form-group" hidden="true">
                                <label class="col-md-4 control-label" for="text-field" >IdReserva</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="idreserva" type="text" value="00001" >
                                </div>
                            </div>
                            <div class="form-group" hidden="true">
                                <label class="col-md-4 control-label" for="text-field" >IdTour</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="idtour" type="text" value="<?php echo $Datos['idtour']?>" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">NombreTour*</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="nombre" placeholder="Nombres..." type="text" value=<?php echo $Datos["nombretour"]?> disabled="true">
                                </div>
                                <br><br><br><br>
                            </div>                            
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Fecha de Viaje*:</label>
                                <div class="col-md-8">
                                    <input class="col-md-4 form-control" type="date" name="fechaviaje" placeholder="22/10/2017">
                                </div>
                                <br><br><br><br>
                            </div>
                    <fieldset>
                                                
                        <legend>Datos del Pasajero</legend>
                            <div class="form-group" hidden="true">
                                <label class="col-md-4 control-label" for="text-field" >Idpasajero</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="idcliente" type="text" value="<?php echo '0001' ?>" >
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Nombres</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="nombres" placeholder="Nombres..." type="text">
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Apellidos</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="apellidos" placeholder="Apellidos..." type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Genero</label>
                                <div class="col-md-8">
                                    <label> <input class="radio radio-inline" name="genero"  type="radio" value="M" checked> Masculino </label><br>
                                    <label> <input class="radio radio-inline" name="genero"  type="radio" value="F"> Femenino </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Telefono</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="telefono" placeholder="Telefonos..." type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Email</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="email" placeholder="Email..." type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Pais</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="pais" type="text" list="list">
                                    <?php
                                    foreach ($ListaEquipos as $value) {
                                        echo "<datalist id='list'>";
                                        echo "<option>".$value['nombre']."</option>";
                                        echo "</datalist>";
                                    }
                                    ?>           
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Nro Pasaporte</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="nropasaporte" placeholder="NroPasporte..." type="text">
                                </div>
                            </div>                        
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Fecha de Nacimiento</label>
                                <div class="col-md-8">
                                    <input class="col-md-4 form-control" type="date" name="fechanacimiento" placeholder="22/10/2017">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input name="estudiante" type="checkbox" value="Si"> <strong>Estudiante</strong>
                                </div>   
                            </div>
                                <br><br><br>
                    <fieldset>
                        <legend>Equipos</legend>
                            <div class="form-group" hidden="true">
                                <label class="col-md-4 control-label" for="text-field">IdEquipo</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="idequipo"  type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Nombre de Equipo</label>
                                <div class="col-md-8">
                                    <input class='form-control' name='nombre' type='text' list='list'>
                                    <?php
                                    foreach ($ListaEquipos as $value) {
                                        echo "<datalist id='list'>";
                                        echo "<option>".$value['nombre']."</option>";
                                        echo "</datalist>";
                                    }
                                    ?>           
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">cantidad</label>
                                <div class="col-md-2">
                                    <input class="form-control" name="cantidad" placeholder="123..." type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="text-field">Precio</label>
                                <div class="col-md-2">
                                    <input class="form-control" name="precio" placeholder="$..." type="text" disabled="true">
                                    <br>
                                </div>
                            </div>
                            <div class="form-group" hidden="true">
                                <div class="col-md-12">
                                    <input class="form-control" name="montototal" type="text">
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-12">
                                    <button name="Op" value="Guardar" class="btn btn-primary" type="submit"><i class="fa fa-save"></i>Nuevo Pasajero</button>
                                </div>
                            </div>
                        </div>
                        </form>
                     </p>
                  </div>
            </div>
            <div class="col-md-4 content-box-large box-with-header" style="background-color: white;box-shadow: 0 0 5px 1px #ccc">                
                    <legend>Reservas</legend>
                    <p>como reservar </p>
                    
                
                
            </div>
        </div>
    </div>
</div>

<?php
    Layoutportada::footer();
?>

