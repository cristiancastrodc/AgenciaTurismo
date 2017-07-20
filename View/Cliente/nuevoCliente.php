<?php
require_once '../../Layout/Layout.php';
$url="../../Controller/ClienteController.php?Op=Guardar";
layout::cabecera();
?>
<div class="row">
    <div class="col-md-6">
        <div class="content-box-header">
            <div class="panel-title">Formulario Cliente </div>
            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="nuevoCliente.php" data-rel="collapse"><i class="glyphicon glyphicon-plus"></i></a>
            </div>
        </div>
        
            <div class="content-box-large box-with-header panel-body">
                <form action="<?php echo $url ?>" class="form-line .datapasajero npasajero-0" role="form" method="post">
                    <fieldset>
                        <legend>Agregar Cliente</legend>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">ICliente</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="idcliente" placeholder="00001..." type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Nombres</label>
                                <div class="col-md-12"><input class="form-control" name="nombres" placeholder="Nombres..." type="text"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Apellidos</label>
                                <div class="col-md-12"><input class="form-control" name="apellidos" placeholder="Apellidos..." type="text"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Genero</label>
                                <div class="col-md-12">
                                    <label> <input class="radio radio-inline" name="genero"  type="radio" value="M" checked> Masculino </label><br>
                                    <label> <input class="radio radio-inline" name="genero"  type="radio" value="F"> Femenino </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Telefono</label>
                                <div class="col-md-12"><input class="form-control" name="telefono" placeholder="Telefonos..." type="text"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Email</label>
                                <div class="col-md-12"><input class="form-control" name="email" placeholder="Email..." type="text"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Pais</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="pais" placeholder="EEUU..." type="text" list="list">
                                    <datalist id="list">
                                        <option value="Peru"></option>
                                        <option value="Venesuela"></option>
                                        <option value="Colombia"></option>
                                        <option value="EEUU"></option>
                                    </datalist> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Nro Pasaporte</label>
                                <div class="col-md-12"><input class="form-control" name="nropasaporte" placeholder="NroPasporte..." type="text"></div>
                            </div>                        
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field">Fecha de Nacimiento</label>
                                <div class="col-md-12"><input class="col-md-4 form-control" type="date" name="fechanacimiento" placeholder="22/10/2017"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="text-field"></label>
                                <div class="col-md-12"><input name="estudiante" type="checkbox" value="Si"> <strong>Estudiante</strong></div>
                            </div>
                            <label class="col-md-12 control-label"></label>
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