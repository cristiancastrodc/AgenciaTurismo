<?php
    session_start();
    require_once '../../Layout/Layout.php';
    require_once '../../util/Sesion.php';
    if (Session::NoExisteSesion("lista")) {
        header("location:../../Controller/PaqueteController.php?Op=Listar");
        return;
    }
    $Lista= Session::getSesion("lista");
    Session::eliminarSesion("lista");
    Layout::cabecera();
?>
<h2>Paquetes</h2>
<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title">Tabla de Paquetes</div>							
        <div class="panel-options">
            <a href="../../Controller/PaqueteController.php?Op=RecuperarUltimo" data-rel="collapse"><i class="glyphicon glyphicon-plus"></i></a>
            <a href="Paquete.php" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
        </div>
    </div>
    <div class="panel-body">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th>#</th>
                    <th>IdPaquete</th>
                    <th>Nombre</th>
                    <th>Terminos</th>
                    <th colspan="3">Accion</th>
                </tr>
            </thead>     
    <?php
    $i=0;
    $url="../../Controller/PaqueteController.php";
    foreach ($Lista as $value) {
        echo"<tbody>";
        echo'<tr class="odd gradeX">';
        echo"<td>".$i."</td>";
        echo"<td>".$value['idpaquete']."</td>";
        echo"<td>".$value['nombre']."</td>";
        echo"<td>".$value['terminos']."</td>";          
        ?>
        <td><a href="<?php echo $url ?>?Op=Ver&idpaquete=<?php echo $value['idpaquete'];?>"><i class="glyphicon glyphicon-eye-open"></i></a></td>
        <td><a href="<?php echo $url ?>?Op=Recuperar&idpaquete=<?php echo $value['idpaquete'];?>"><i class="glyphicon glyphicon-pencil"></i></a></td>
        <td><a href="<?php echo $url ?>?Op=Eliminar&idpaquete=<?php echo $value['idpaquete'];?>" onclick="return confirm('Se Eliminara este registr,¿Estas Seguro?');"><i class="glyphicon glyphicon-remove"></i></a></td>
        <?php
        echo"</tr>";
        $i++;
    }
    ?>
	</tbody>
    </table>
    </div>
    </div>
<!-- fin del contenido de la pagina -->
<?php
    //mostramos el pie de pagina
    Layout::footer();
?>
