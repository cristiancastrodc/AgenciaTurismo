<?php
    session_start();
    require_once '../../Layout/Layout.php';
    require_once '../../util/Sesion.php';
    if (Session::NoExisteSesion("lista")) {
        header("location:../../Controller/GuiaController.php?Op=Listar");
        return;
    }
    $Lista= Session::getSesion("lista");
    Session::eliminarSesion("lista");    
    Layout::cabecera();
?>

<h2>Guias</h2>
<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title">Tabla de Guias</div>							
        <div class="panel-options">
            <a href="../../Controller/GuiaController.php?Op=Listar" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="nuevoGuia.php" data-rel="collapse"><i class="glyphicon glyphicon-plus"></i></a>
        </div>
    </div>
    <div class="panel-body">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th>#</th>
                    <th>IdGuia</th>
                    <th>Nombre</th>
                    <th>Genero</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Idiomas</th>
                    <th>Descripcion</th>
                    <th colspan="3" >Accion</th>
                </tr>
            </thead>     
    <?php
    $url="../../Controller/GuiaController.php";
    $i=0;
    foreach ($Lista as $value) {
        echo"<tbody>";
        echo'<tr class="odd gradeX">';
        echo"<td>".$i."</td>";
        echo"<td>".$value['idguia']."</td>";
        echo"<td>".$value['fullnombre']."</td>";
        echo"<td>".$value['genero']."</td>";
        echo"<td>".$value['telefono']."</td>";          
        echo"<td>".$value['email']."</td>";          
        echo"<td>".$value['idiomas']."</td>";          
        echo"<td>".$value['descripcion']."</td>";          
        ?>
            <td><a href="<?php echo $url ?>?Op=Ver&idguia=<?php echo $value['idguia'];?>"><i class="glyphicon glyphicon-eye-open"></i></a></td>
            <td><a href="<?php echo $url ?>?Op=Recuperar&idguia=<?php echo $value['idguia'];?>"><i class="glyphicon glyphicon-pencil"></i></a></td>
            <td><a href="<?php echo $url ?>?Op=Eliminar&idguia=<?php echo $value['idguia'];?>" onclick="return confirm('Se eliminara este registro, ¿Estas Seguro?');"><i class="glyphicon glyphicon-remove"></i></a></td>
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
