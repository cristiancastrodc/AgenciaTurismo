<?php
require_once '../../Layout/Layout.php';
layout::cabecera();
$url="../../Controller/EquipoController.php";
$url2="Equipo.php";
?>
<div class="row">
    <div class="col-md-6">
        <div class="content-box-header">
            <div class="panel-title">Formulario de Edicion Equipo </div>
            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
            </div>
        </div>
        
            <div class="content-box-large box-with-header">
                <form action="<?php echo $url ?>" class="form-line" role="form" method="post">
                    <fieldset>
                        <legend>Editar Equipo</legend>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">IdEquipo</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="idequipo" value="<?php echo $_REQUEST['idequipo'];?>" type="text" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Nombre</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="nombre" value="<?php echo $_REQUEST['nombre'];?>"  type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">cantidad</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="cantidad" value="<?php echo $_REQUEST['cantidad'];?>" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Precio</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="precio" value="<?php echo $_REQUEST['precio'];?>" type="text">
                                </div>
                            </div>
                    </fieldset>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12">
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