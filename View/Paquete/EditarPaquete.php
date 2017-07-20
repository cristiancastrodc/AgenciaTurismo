<?php
require_once '../../Layout/Layout.php';
$url="../../Controller/PaqueteController.php?";
$url2="Paquete.php";
layout::cabecera();


?><!--inicio del contenido de la pagian -->
<div class="row">
    <div class="col-md-6">
        <div class="content-box-header">
            <div class="panel-title">Formulario de Edicion Paquete </div>
            <div class="panel-options">
                <a href="Paquete.php" data-rel="collapse"><i class="glyphicon glyphicon-chevron-left"></i></a>
            </div>
        </div>
        
            <div class="content-box-large box-with-header">
                
                <form action="<?php echo $url ?>" class="form-line" role="form" method="get">
                    <fieldset>
                        <legend>Editar Paquete</legend>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">IdPaquete:</label>
                                <div class="col-md-8">
                                    <input class="form-control" value="<?php echo $_REQUEST['idpaquete'] ?>" type="text" disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Nombre Paquete:</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="nombre" value="<?php echo $_REQUEST['nombre'] ?>" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Terminos:</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="terminos" placeholder="" rows="3"><?php echo $_REQUEST['terminos']?></textarea>
                                    <br>
                                </div>
                            </div>
                    </fieldset>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12" style="text-align: center">
                                <button type="submit" class="btn btn-primary" onclick="return confirm('Estas Seguro?');return false;">Guardar</button>
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
