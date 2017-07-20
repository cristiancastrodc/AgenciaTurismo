<?php
    require_once '../../Layout/Layout.php';
    //mostramos la cabecera del proyecto
    //recuperamos los datos del controlador
    $Lista=$_REQUEST['Lista'];
    layout::cabecera();//namespace
?>
<h2>Admin</h2>
<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title">Tabla de Admin</div>							
        <div class="panel-options">
            <a href="../../Controller/AdminController.php?Op=Listar" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="nuevoAdmin.php" data-rel="collapse"><i class="glyphicon glyphicon-plus"></i></a>
        </div>
    </div>
    <div class="panel-body">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th>IdAdmin</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Habilitado</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Cargo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>     
    <?php
    $row = json_decode($Lista,TRUE);
    foreach ($row as $key=>$value) {
        echo"<tbody>";
        echo'<tr class="odd gradeX">';
        echo"<td>".$value['idadmin']."</td>";
        echo"<td>".$value['usuario']."</td>";
        echo"<td>".$value['contraseña']."</td>";
        echo"<td>".$value['habilitado']."</td>";
        echo"<td>".$value['nombre']."</td>";
        echo"<td>".$value['apellidos']."</td>";
        echo"<td>".$value['cargo']."</td>";
        ?>
        <td><a href="../../Controller/AdminController.php?Op=Recuperar&idadmin=<?php echo $value['idadmin'];  ?>"><button class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></button></a></td>
        <td><a href="../../Controller/AdminController.php?Op=Eliminar&idadmin=<?php echo $value['idadmin'];  ?>"><button class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button></a></td>
        <?php
        echo"</tr>";
    }
?>

        </tbody>
    </table>
    </div>
    </div>
<!-- fin del contenido de la pagina-->
<?php
    //mostramos el pie de la pagina
    layout::footer();
?>
            