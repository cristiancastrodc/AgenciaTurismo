<?php
require_once '../../Layout/Layout.php';
layout::cabecera();
$url="Tour.php";
?>
<div class="row">
    <div class="col-md-6">
        <div class="content-box-header">
            <div class="panel-title">Formulario: Ver Tour </div>
            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
            </div>
        </div>
        
            <div class="content-box-large box-with-header">
                <form action="#" class="form-line" role="form" method="post">
                    <fieldset>
                        <legend>Ver Tour</legend>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">IdTour</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="idtour" value="<?php echo $_REQUEST['idtour']; ?>" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">IdPaquete</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="idpaquete" value="<?php echo $_REQUEST['idpaquete'] ; ?>" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Idguia</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="idguia" value="<?php echo $_REQUEST['idguia'] ; ?>" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">NombreTour</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="nombretour" value="<?php echo $_REQUEST['nombretour']; ?>" type="text">
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Precio</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="precio" value="<?php echo $_REQUEST['precio']; ?>" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Informacion General</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="infogeneral" type="text" rows="3"><?php echo $_REQUEST['infogeneral']; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Iterinario</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="iterinario" placeholder="" rows="3"><?php echo $_REQUEST['iterinario']; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Incluye</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="incluye" placeholder="" rows="3"><?php echo $_REQUEST['incluye']; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Que LLevar</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="quellevar" placeholder="" rows="3"><?php echo $_REQUEST['quellevar']; ?></textarea>
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Foto</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="foto" value="<?php echo $_REQUEST['foto']?>" type="text">
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