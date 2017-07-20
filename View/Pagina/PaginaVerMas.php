<?php
    require_once './LayoutPortada.php';
    include_once 'C:/xampp/htdocs/HappyGringoSistema4/Controller/TourController2.php';
    Layoutportada::header();
    /*$idtour=$_REQUEST['idtour'];
    
    $Datos = fn_Recuperar($idtour);
    $Datos =  $Datos->fetch_array(MYSQLI_ASSOC);*/
?>
<br>
<div id="band" class="container text-center" style="background-color: white;box-shadow: 0 0 5px 1px #ccc">
    <div class="container-fluid text-center">
        <div class="row" style="">
            <div class="col-md-10">  
              <h2><?php echo $Datos["nombretour"]?></h2>
              <p>
                  <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Iterinarie</a></li>
                    <li><a data-toggle="tab" href="#menu1">Incluye</a></li>
                    <li><a data-toggle="tab" href="#menu2">Que llevasr</a></li>
                  </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                      <h3>Iterinario</h3>
                      <p><?php echo $Datos["infogeneral"]?></p>
                      <p>PRECIO: $/.<?php echo $Datos["precio"]?> USS</p>    
                    </div>
                    <div id="menu1" class="tab-pane fade in active">
                      <h3>Incluye </h3>
                      <p><?php echo $Datos["iterinario"]?></p>
                    </div>
                    <div id="menu2" class="tab-pane fade in active">
                      <h3>Que llevar</h3>
                      <p><?php echo $Datos["incluye"]?></p>
                    </div>
                  </div>
              
              </p>
            </div>
            <div class="col-md-2">
              <span><button class="btn btn-default btn-lg">reservae</button></span>
              <p>
                <h3><em>Informacion Util</em></h3>
                <p>PeruDestinoSeguro es una agecia de viajes 100% cusqueña, especializada en actividades al aire libre y caminatas, hacia Inca trail, Salkantay , Lares, Ausangate, Vinicunca, Manu Jungle.
                    Trabajamos con grupos pequeños para el mejor deleite de usted en sus vacaciones en Peru.
                    Le garantizamos un buen servicio, puesto que nuestros guias hablan un ingles fluido, conocen mucho de la Historia, Flora y Fauna en todas nuestras caminatas. Son muy divertidos, y muy responsables con su trabajo.
                    Somos la fuerza celeste que le sorprendera , venga y disfrute su viaje con nosotros..
                </p>
              </p>
                
            </div>
        </div>
    </div>
</div>
        
        
<?php
    Layoutportada::footer();
?>