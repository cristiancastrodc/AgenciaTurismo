<?php
    $url="../../Controller/PaqueteController.php?Op=Guardar";
    require_once '../../Layout/Layout.php';
    layout::cabecera();
?>
<div class="row">
    <div class="col-md-6">
        <div class="content-box-header">
            <div class="panel-title">Formulario Paquete </div>
            <div class="panel-options">
                <a href="nuevoPaquete.php" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="Paquete.php" data-rel="collapse"><i class="glyphicon glyphicon-chevron-left"></i></a>
            </div>
        </div>
        
            <div class="content-box-large box-with-header">
                <form action="<?php echo $url ?>" class="" role="form" method="post">
                    <fieldset>
                        <legend>Agregar Paquete</legend>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">IdPaquete:</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="idpaquete" type="text" disabled="" value="<?php echo ($_REQUEST['idpaquete']+1) ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">NombrePaquete:</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="nombre" placeholder="Nombres..." type="text" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Terminos:</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="terminos" required="" rows="3"></textarea>
                                    <br>
                                </div>
                            </div>
                    </fieldset>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12" style="text-align: center">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i>Guardar</button>
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