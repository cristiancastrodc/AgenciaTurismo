<?php    
    class Layoutportada{
    function header(){        
        //$Lista=$_REQUEST['Lista'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>.::PerDestinoSeguro::..</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../../Estilos/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../Estilos/css/EstilosPortada.css" rel="stylesheet">  
  <link rel="stylesheet" type="text/css" href="../../Estilos/css/buttons.css" rel="stylesheet">
  <script src="../../Layout/jquery-3.1.1.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="../../Estilos/css/Estilos.css" title="style">
  <link rel="stylesheet" type="text/css" href="../../Estilos/css/buttons.css" rel="stylesheet">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="../../index.php">HOME</a></li>
        <li><a href="#">OUR</a></li>    
        
        <?php
        /**$row= json_decode($Lista);
        foreach ($row as $value) {
            echo"<li class='dropdown'>";
            echo "<a class='dropdown-toggle' data-toggle='dropdown' href='#'>".$value->{'nombre'}."</td>";
            echo "<span class='caret'></span></a>
                    <ul class='dropdown-menu'>";
            echo "<li><a href='#'></a></li>";
                echo "</ul>
                        </li>";
        }*/
        ?>   
      </ul>
    </div>
  </div>
</nav>
    <?php
        }    
    function bodypaquetes(){
        $Lista=$_REQUEST['Lista'];
        $row= json_decode($Lista);
        foreach ($row as $value) {
            echo '<div id="tour" class="bg-1">
                <div class="container">';
                echo '<h3 class="text-center">'.$value->{'nombre'}.'</h3>';
                echo '<br>';
                //Tours
                echo '<div class="row text-center">
                  <div class="col-sm-4">
                    <div class="thumbnail">
                    <img src="../../Imagenes/10391729_10150680656089959_3408138242925668183_n.jpg" alt="Paris" width="400" height="300">';
                    echo '<p><strong>'.$value->{'nombretour'}.'</strong></p>';
                    echo '<p>descripcion</p>
                    <button class="btn" data-toggle="modal" data-target="#myModal"><a href="PaginaReservar.php?idtour=00001">Reservar</a></button>
                    <button class="btn" data-toggle="modal" data-target="#myModal"><a href="PaginaVerMas.php?idtour=00001">Ver Mas</a></button>
                    
                  </div>
                </div>';
                    
                echo '<div class="col-sm-4">
                    <div class="thumbnail">
                    <img src="../../Imagenes/10391729_10150680656089959_3408138242925668183_n.jpg" alt="Paris" width="400" height="300">';
                    echo '<p><strong>'.$value->{'nombretour'}.'</strong></p>';
                    echo '<p>descripcion</p>
                    <button class="btn" data-toggle="modal" data-target="#myModal">Reservar</button>
                    <button class="btn" data-toggle="modal" data-target="#myModal">Ver Mas</button>
                  </div>
                </div>';
                    
                echo '<div class="col-sm-4">
                <div class="thumbnail">
                <img src="../../Imagenes/10391729_10150680656089959_3408138242925668183_n.jpg" alt="Paris" width="400" height="300">';
                echo '<p><strong>'.$value->{'nombretour'}.'</strong></p>';
                echo '<p>descripcion</p>
                <button class="btn" data-toggle="modal" data-target="#myModal">Reservar</button>
                <button class="btn" data-toggle="modal" data-target="#myModal">Ver Mas</button>
              </div>
            </div>';
  
echo '</div>
</div>
</div>
<BR>';
   }
        
?>

<?php 
    }
    function footer(){
?>        
<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>..: <a href="../../View/Admin/dashboard.php" data-toggle="tooltip" title="Peru Destino Seguro">www.PeruDestinoSeguro.com</a></p> 
</footer>
</div>
</body>
</html>


    <?php 
        }
}
?>
 

