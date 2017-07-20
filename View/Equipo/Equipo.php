<?php
    session_start();
    require_once '../../Layout/Layout.php';
    require_once '../../util/Sesion.php';
    if (Session::NoExisteSesion("lista")) {
        header("location:../../Controller/EquipoController.php?Op=Listar");
        return;
    }
    $Lista= Session::getSesion("lista");
    Session::eliminarSesion("lista");
    Layout::cabecera();
?>
<h2>Equipos</h2>
<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title">Tabla de Equipos</div>							
        <div class="panel-options">
            <a href="../../View/Equipo.php" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="nuevoEquipo.php" data-rel="collapse"><i class="glyphicon glyphicon-plus"></i></a>
        </div>
    </div>
    <div class="panel-body">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th>#</th>
                    <th>IdEquipo</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th colspan="3" >Accion</th>
                    
                </tr>
            </thead>     
    <?php
    $url="../../Controller/EquipoController.php";
    $i=0;
    foreach ($Lista as $value) {
        echo"<tbody>";
        echo'<tr class="odd gradeX">';
        echo"<td>".$i."</td>";          
        echo"<td>".$value['idequipo']."</td>";
        echo"<td>".$value['nombre']."</td>";
        echo"<td>".$value['cantidad']."</td>";
        echo"<td>".$value['precio']."</td>";          
        ?>
        <td><a href="<?php echo $url ?>?Op=Ver&idequipo=<?php echo $value['idequipo'];?>"><i class="glyphicon glyphicon-eye-open"></i></a></td>
        <td><a href="<?php echo $url ?>?Op=Recuperar&idequipo=<?php echo $value['idequipo'];?>"><i class="glyphicon glyphicon-pencil"></i></a></td>
        <td><a href="<?php echo $url ?>?Op=Eliminar&idequipo=<?php echo $value['idequipo'];?>" onclick="return confirm('Se eliminara este registro, ¿Estas Seguro?');"><i class="glyphicon glyphicon-remove"></i></a></td>
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
