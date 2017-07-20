<?php
require_once '../../Layout/Layout.php';
$url="../../Controller/GuiaController.php?Op=Guardar";
layout::cabecera();
?>
<div class="row">
    <div class="col-md-6">
        <div class="content-box-header">
            <div class="panel-title">Formulario Guia </div>
            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="nuevoGuia.php" data-rel="collapse"><i class="glyphicon glyphicon-plus"></i></a>
            </div>
        </div>
        
            <div class="content-box-large box-with-header">
                <form action="<?php echo $url ?>" class="form-line .datapasajero npasajero-0" role="form" method="post">
                    <fieldset>
                        <legend>Agregar Guia</legend>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">IdGuia</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="idguia" placeholder="00001..." type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">NombreCompleto</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="fullnombre" placeholder="Ejemplo..." type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Genero</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="genero" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Telefono</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="telefono" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Email</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="email"  type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Idiomas</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="idiomas"  type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Descripcion</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="descripcion"  type="text">
                                </div>
                            </div>
                    </fieldset>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12">
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