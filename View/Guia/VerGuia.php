<?php
require_once '../../Layout/Layout.php';
$url="Guia.php";
layout::cabecera();
?>
<div class="row">
    <div class="col-md-6">
        <div class="content-box-header">
            <div class="panel-title">Formulario:Ver Guia</div>
            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
            </div>
        </div>
        
            <div class="content-box-large box-with-header">
                <form action="#" class="form-line" role="form" method="post">
                    <fieldset>
                        <legend>Editar Guia</legend>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">IdGuia</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="idguia" value="<?php echo $_REQUEST['idguia']; ?>" type="text" disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">NombreCompleto</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="fullnombre" value="<?php echo $_REQUEST['fullnombre']; ?>" type="text" disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">genero</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="genero" value="<?php echo $_REQUEST['genero'] ?>" type="text" disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">telefono</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="telefono" value="<?php echo $_REQUEST['telefono']?>" type="text" disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">email</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="email" value="<?php echo $_REQUEST['email'] ?>" type="text" disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Idiomas</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="idiomas" value="<?php echo $_REQUEST['idiomas'] ?>" type="text" disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Descripcion</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="descripcion" value="<?php echo $_REQUEST['descripcion'] ?>" type="text" disabled="">
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