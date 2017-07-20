<?php
    session_start();
    require_once '../../Layout/Layout.php';
    require_once '../../util/Sesion.php';
    if (Session::NoExisteSesion("lista")) {
        header("location:../../Controller/ClienteController.php?Op=Listar");
        return;
    }
    $Lista=Session::getSesion("lista");
    Session::eliminarSesion("lista");
    Layout::cabecera();
?>
<h2>Clientes</h2>
<div class="content-box-large">
    <div class="panel-heading">
        <div class="panel-title">Tabla de Clientes</div>							
        <div class="panel-options">
            <a href="../../View/Cliente.php" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="nuevoCliente.php" data-rel="collapse"><i class="glyphicon glyphicon-plus"></i></a>
        </div>
    </div>
    <div class="panel-body">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th>#</th>
                    <th>IdCliente</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>genero</th>
                    <th>telefono</th>
                    <th>email</th>
                    <th>pais</th>
                    <th>nropasaporte</th>
                    <th>fechanacimiento</th>     
                    <th>estudiante</th>
                    <th colspan="3" >Accion</th>
                </tr>
            </thead>     
    <?php
    $url="../../Controller/ClienteController.php";
    $i=0;
    foreach ($Lista as $value) {
        echo"<tbody>";
        echo'<tr class="odd gradeX">';
        echo"<td>".$i."</td>";
        echo"<td>".$value['idcliente']."</td>";
        echo"<td>".$value['nombres']."</td>";
        echo"<td>".$value['apellidos']."</td>";
        echo"<td>".$value['genero']."</td>";
        echo"<td>".$value['telefono']."</td>";
        echo"<td>".$value['email']."</td>";
        echo"<td>".$value['pais']."</td>";
        echo"<td>".$value['nropasaporte']."</td>";
        echo"<td>".$value['fechanacimiento']."</td>";
        echo"<td>".$value['estudiante']."</td>";
        ?>
        <td><a href="<?php echo $url ?>?Op=Ver&idcliente=<?php echo $value['idcliente'];?>"><i class="glyphicon glyphicon-eye-open"></i></a></td>
        <td><a href="<?php echo $url ?>?Op=Recuperar&idcliente=<?php echo $value['idcliente'];?>"><i class="glyphicon glyphicon-pencil"></i></a></td>
        <td><a href="<?php echo $url ?>?Op=Eliminar&idcliente=<?php echo $value['idcliente'];?>" onclick="return confirm('Se eliminara este registro, ¿Estas Seguro?');"><i class="glyphicon glyphicon-remove"></i></a></td>
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
