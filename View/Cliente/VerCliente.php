<?php
    require_once '../../Layout/Layout.php';
    $url = "Equipo.php";
    layout::cabecera();
?>
<div class="row">
    <div class="col-md-6">
        <div class="content-box-header">
            <div class="panel-title">Formulario:Ver Cliente </div>
            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
            </div>
        </div>
        
            <div class="content-box-large box-with-header">
                <form action="#" class="form-line" role="form" method="post">
                    <fieldset>
                        <legend>Editar Cliente</legend>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">IdCliente</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="idcliente" value="<?php echo $_REQUEST['idcliente']; ?>" type="text" disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Nombres</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="nombres" value="<?php echo $_REQUEST['nombres']; ?>" type="text" disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Apellidos</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="apellidos" value="<?php echo $_REQUEST['apellidos']; ?>" type="text" disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Genero</label>
                                <div class="col-md-12">
                                    <label><input class="radio radio-inline" name="genero" type="radio" value="M" <?php if ($_REQUEST['genero']=='M') echo "checked='checked'";?> disabled=""> Masculino </label><br>
                                    <label><input class="radio radio-inline" name="genero" type="radio" value="F" <?php if ($_REQUEST['genero']=='F') echo "checked='checked'";?> disabled=""> Femenino </label>
                                </div>
                            </div>                      
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Telefono</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="telefono" value="<?php echo $_REQUEST['telefono']; ?>" type="text" disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Email</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="email" value="<?php echo $_REQUEST['email']; ?>" type="text" disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Pais</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="pais" value="<?php echo $_REQUEST['pais']; ?>" type="text" disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Nro Pasaporte</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="nropasaporte" value="<?php echo $_REQUEST['nropasaporte']; ?>" type="text" disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Fecha de Nacimiento</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="date" name="fechanacimiento" value="<?php echo $_REQUEST['fechanacimiento']; ?>" disabled="">
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Estudiante</label>
                                <div class="col-md-8">
                                    <input name="estudiante" type="checkbox" value="<?php if($_REQUEST['estudiante']=='Si'){echo "checked='checked'";}else{echo "checked=''";} ?>">
                                </div>
                            </div>
                        
                    </fieldset>
                </form>
            </div>
    </div>
</div>

<?php
Layout::footer()
?>