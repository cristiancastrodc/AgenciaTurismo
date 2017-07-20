<?php
session_start();
require_once '../../Layout/Layout.php';
$url="../../Controller/TourController.php?Op=Guardar";
require_once '../../util/Sesion.php';
    if (Session::NoExisteSesion("lista")) {
        header("location:../../Controller/TourController.php?Op=ListarNuevo");
        return;
    }
    $Lista= Session::getSesion("lista");
    Session::eliminarSesion("lista");
layout::cabecera();

?>
<div class="row">
    <div class="col-md-6">
        <div class="content-box-header">
            <div class="panel-title">Formulario Tour </div>
            <div class="panel-options">
                <a href="http://localhost:8080/HappyGringoSistema4/View/Tour/nuevoTour.php" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="nuevoTour.php" data-rel="collapse"><i class="glyphicon glyphicon-plus"></i></a>
            </div>
        </div>
        
            <div class="content-box-large box-with-header">
                <form action="<?php echo $url ?>" class="" role="form" method="post">
                    <fieldset>
                        <legend>Agregar Tour</legend>
                        
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">IdTour</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="idtour" placeholder="00001..." type="text">
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">IdPaquete</label>
                                <div class="col-md-8">
                                    <input class='form-control' name='idpaquete' type='text' list='list'>
                                    <?php
                                    foreach ($Lista as $value) {
                                        echo "<datalist id='list'>";
                                        echo "<option>".$value['idpaquete']."</option>";
                                        echo "</datalist>";
                                    }
                                    ?>           
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">IdGuia</label>
                                <div class="col-md-8">
                                    <input class='form-control' name='idguia' type='text' list='list'>
                                    <?php
                                    foreach ($Lista as $value) {
                                        echo "<datalist id='list'>";
                                        echo "<option>".$value['idguia']."</option>";
                                        echo "</datalist>";
                                    }
                                    ?>           
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">NombreTour</label>
                                <div class="col-md-12"><input class="form-control" name="nombretour" type="text"></div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Precio</label>
                                <div class="col-md-12"><input class="form-control" name="precio" type="text"></div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Informacion General</label>
                                <div class="col-md-12"><textarea class="form-control" name="infogeneral" rows="3"></textarea></div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Iterinario</label>
                                <div class="col-md-12"><textarea class="form-control" name="iterinario" rows="3"></textarea></div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Incluye</label>
                                <div class="col-md-12"><textarea class="form-control" name="incluye" rows="3"></textarea></div>
                            </div>
                        
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Que LLevar</label>
                                <div class="col-md-12"><textarea class="form-control" name="quellevar" rows="3"></textarea></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label">Foto</label>
                                <div class="col-md-12"><input class="form-control" name="foto" value="" type="text"></div>
                            </div>
                    </fieldset>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i>Submit</button>
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