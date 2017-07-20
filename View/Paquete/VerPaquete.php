<?php
    require_once '../../Layout/Layout.php';
    $url="Paquete.php";
    layout::cabecera();
?>
<div class="row">
    <div class="col-md-6">
        <div class="content-box-header">
            <div class="panel-title">Formulario: Ver Paquete </div>
            <div class="panel-options">
                <a href="Paquete.php" data-rel="collapse"><i class="glyphicon glyphicon-chevron-left"></i></a>
            </div>
        </div>
        
            <div class="content-box-large box-with-header">
                <form action="#" class="form-line" role="form" method="post">
                    <fieldset>
                        <legend>Ver Paquete</legend>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">IdPaquete:</label>
                             
                                <div class="col-md-8">
                                    <input class="form-control" name="idpaquete" value="<?php echo $_REQUEST['idpaquete']; ?>" type="text" disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="text-field">Nombre Paquete:</label>
                                <div class="col-md-8">
                                    <input class="form-control" name="nombre" value="<?php echo $_REQUEST['nombre']; ?>" type="text" disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Terminos:</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="terminos" placeholder="" rows="3" disabled=""><?php echo $_REQUEST['terminos'] ?></textarea>
                                    <br>
                                </div>
                            </div>                        
                    </fieldset>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12" style="text-align: center">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i><a href="Paquete.php" style="color: white">Volver</a></button>
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
