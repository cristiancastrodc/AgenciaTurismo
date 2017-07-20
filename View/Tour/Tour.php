<?php
    session_start();
    require_once '../../Layout/Layout.php';
    require_once '../../util/Sesion.php';
    if (Session::NoExisteSesion("lista")) {
        header("location:../../Controller/TourController.php?Op=Listar");
        return;
    }
    $Lista= Session::getSesion("lista");
    Session::eliminarSesion("lista");
    Layout::cabecera();
?>
<h2>Tabla Tour</h2>

<div class="content-box-large">
        <div class="panel-heading">
        <div class="panel-title">Tabla Tours</div>
            <div class="panel-options">
                <a href="../../Controller/TourController.php?Op=Listar" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
            </div>
        </div>
    <div class="panel-body">
        <div class="row">
        <div class="col-md-6">
            <div class="content-box-header">
                        <div class="panel-title">Tabla de Paquete</div>
                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                        </div>
                    </div>
                    <div class="content-box-large box-with-header">
                        <label class="col-md-6 control-label" for="text-field">Seleccione Paquete: </label>
                        <div class="col-md-6 btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                              Paquetes <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                            <?php

                                foreach ($$Lista as $value) {
                                    echo"<li><a href='#'>".$value['idpaquete']."</a></li>";
                                }
                            ?>
                            </ul>
                        </div>
                        <br><br>
                    </div>
                </div>

        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-box-header">
                        <div class="panel-title">Tabla de Tour</div>
                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a href="../../Controller/TourController.php?Op=ListarNuevo" data-rel="collapse"><i class="glyphicon glyphicon-plus"></i></a>
                        </div>
                    </div>
                    <div class="content-box-large box-with-header">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <thead><tr><th>IdTour</th><th>NombreTour</th><th>Precio</th><th>Foto</th><th>Editar</th><th>Eliminar</th></tr></thead>
                            <tbody>
                                <?php
                                $i=0;
                                $url = "../../Controller/TourController.php";
                                foreach ($Lista as $value) {
                                    echo"<tbody>";
                                    echo'<tr class="odd gradeX">';
                                    echo"<td>".$value['idtour']."</td>";
                                    echo"<td>".$value['nombretour']."</td>";
                                    echo"<td>".$value['precio']."</td>";
                                    ?>
                                    <td><a href="<?php echo $url ?>?Op=Ver&idtour=<?php echo $value['idtour'];?>"><i class="glyphicon glyphicon-eye-open"></i></a></td>
                                    <td><a href="<?php echo $url ?>?Op=Recuperar&idtour=<?php echo $value['idtour'];?>"><i class="glyphicon glyphicon-pencil"></i></a></td>
                                    <td><a href="<?php echo $url ?>?Op=Eliminar&idtour=<?php echo $value['idtour'];?>"><i class="glyphicon glyphicon-remove"></i></a></td>
                                    <?php
                                    echo"</tr>";
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<!-- fin del contenido de la pagina -->
<?php   Layout::footer(); ?>