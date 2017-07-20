<?php
require_once '../../Layout/Layout.php';
//Mostraos la cabecera del proyecto
layout::cabecera();
//Recuperamos los datos del controlador
$Lista = $_REQUEST['Lista'];
$row = json_decode($Lista);
foreach ($row as $value) {
?><!--inicio del contenido de la pagian -->
<div class="row">
    <div class="col-md-6">
        <div class="content-box-header">
            <div class="panel-title">Formulario de Edicion Tour </div>
            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
            </div>
        </div>
        
            <div class="content-box-large box-with-header">
                <form action="../../Controller/TourController.php" class="form-line" role="form" method="post">
                    <fieldset>
                        <legend>Editar Tour</legend>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">IdTour</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="idtour" value="<?php echo $value->{'idtour'}; ?>" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">IdPaquete</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="idpaquete" value="<?php echo $value->{'idpaquete'}; ?>" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">NombreTour</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="nombretour" value="<?php echo $value->{'nombretour'}; ?>" type="text">
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Precio</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="precio" value="<?php echo $value->{'precio'}; ?>" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Informacion General</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="infogeneral" type="text" rows="3"><?php echo $value->{'infogeneral'}; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Iterinario</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="iterinario" placeholder="" rows="3"><?php echo $value->{'iterinario'}; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Incluye</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="incluye" placeholder="" rows="3"><?php echo $value->{'incluye'}; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Que LLevar</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="quellevar" placeholder="" rows="3"><?php echo $value->{'quellevar'}; ?></textarea>
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Foto</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="foto" value="<?php echo $value->{'foto'};} ?>" type="text">
                                </div>
                            </div>
                        
                        
                    </fieldset>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12">
                                <button name="Op" value="Listar" class="btn btn-default" type="submit">Cancel</button>
                                <button name="Op" value="Editar" class="btn btn-primary" type="submit"><i class="fa fa-save"></i>Save</button>
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