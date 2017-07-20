<?php
require_once '../../Layout/Layout.php';
$url="../../Controller/EquipoController.php?Op=Guardar";
layout::cabecera();
?>
<div class="row">
    <div class="col-md-6">
        <div class="content-box-header">
            <div class="panel-title">Formulario Equipo </div>
            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="nuevoEquipo.php" data-rel="collapse"><i class="glyphicon glyphicon-plus"></i></a>
            </div>
        </div>
        
            <div class="content-box-large box-with-header">
                <form action="<?php echo $url ?>" class="" role="form" method="post">
                    <fieldset>
                        <legend>Agregar Equipo</legend>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">IdEquipo</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="idequipo" placeholder="00001..." type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">NombreEquipo</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="nombre" placeholder="Nombres..." type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">cantidad</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="cantidad" placeholder="123..." type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Precio</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="precio" placeholder="$..." type="text">
                                </div>
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