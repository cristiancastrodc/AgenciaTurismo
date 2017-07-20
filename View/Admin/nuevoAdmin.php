<?php
require_once '../../Layout/Layout.php';
//Mostraos la cabecera del proyecto
layout::cabecera();
?><!--inicio del contenido de la pagian -->
<div class="row">
    <div class="col-md-6">
        <div class="content-box-header">
            <div class="panel-title">Formulario Admin</div>
            <div class="panel-options">
                <a href="http://localhost:8080/HappyGringoSistema4/View/Admin/nuevoAdmin.php" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="nuevoAdmin.php" data-rel="collapse"><i class="glyphicon glyphicon-plus"></i></a>
            </div>
        </div>
        
            <div class="content-box-large box-with-header">
                <form action="../../Controller/AdminController.php" class="form-line .datapasajero npasajero-0" role="form" method="post">
                    <fieldset>
                        <leg>Agregar Usuarios</legend>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">IdAdmin</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="idadmin" placeholder="00001..." type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Usuario</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="usuario" placeholder="usuario..." type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Contraseña</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="contraseña" placeholder="xxxx..." type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Habilitado</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="habilitado" placeholder=".." type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Nombre</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="nombre" placeholder="adria..." type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Apellidos</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="apellidos" placeholder="xx..." type="text">
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Cargo</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="cargo" placeholder="Type somethine..." type="text" list="list">
                                    <datalist id="list">
                                        <option value="Guia"></option>
                                        <option value="Administrador"></option>
                                        <option value="Caja"></option>
                                    </datalist> 
                                    <!--<p class="note"><strong>Note:</strong> works in Chrome, Firefox, Opera.</p>-->
                                </div>
                            </div>
                    </fieldset>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12">
                                <button name="Op" value="Listar" class="btn btn-default" type="submit">Cancel</button>
                                <button name="Op" value="Guardar" class="btn btn-primary" type="submit"><i class="fa fa-save"></i>Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </div>
</div>

<?php 
Layout::footer()
?>
