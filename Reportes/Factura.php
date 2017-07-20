
<?php 
//session_start(); 
//require_once("eReserva.php");
?>
<!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Reporte </title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link rel="stylesheet" href="js/bootstrap.min.js">
        <script src="js/scriptReservas.js"></script>
        

        <script type="text/javascript">     
            function PrintDiv() {    
                var imprimir = window.print();
                imprimir.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            }
        </script>

        <style type="text/css" media="screen">
             table tr td{
                padding: 8px;
                color: #000;
                font-size: 18px;
                padding-left: 30px;
            }
            .detail {
                background:rgba(110, 151, 33, 0.81);
                color:#fff;
                padding: 8px;
            }
            .title{
                font-family: fantasy;
                color:#6e9721;
                margin:10px;
                font-size:50px;
                margin-top:-50px;
            } 
        </style>
        <style rel="stylesheet" type="text/css" media="print">
            table tr td{
                padding: 8px;
                color: #000;
                font-size: 18px;
                padding-left: 30px;
                background:rgba(110, 151, 33, 0.81);
            }
            .detail {
                background:rgba(110, 151, 33, 0.81);
                color:#fff;
                padding: 8px;
            }
            .nover {
                visibility:hidden;
            }
            .title{
                font-family: fantasy;
                color:#6e9721;
                margin:10px;
                font-size:50px;
                margin-top:-50px;
            } 
        </style>

    </head>
<body style="background:silver">
<div id="divToPrint"> 
<?php
/*
$n=$_GET['idtour'];
//echo $n;echo "<br>";
$oreserva1 = new reserva();
$reservas = $oreserva1->recuperar($n);

$tours = $oreserva1->listaTours();

echo "<br>";echo "<br>";echo "<br>";echo "<br>";
//print_r($reservas);
foreach ($reservas as $key=>$value1) {*/
?>

<div style="background:white;margin:auto;margin-top:-50px;width:1100px" class="container" id="div_print">
    <table border="0" width="1000px" style="margin-top:10px;border-spacing:-10;" cellpadding="-5" cellspacing="-5">
    <tr> 
        <td><img src="gringo1.png"  style="margin-left:40px;margin-right:auto;margin-top:30px" width="100%"></td>
        <td><img src="WELCOMEHGT-300x95 (1).png" width="110%" style="height: 65%"></td>
        <td>
            <div style="border:1px solid;padding-top: 10px;">
            <h3 style="margin:-1.0% 0;;"><b><center>ELECTRONIC RECEIPT</center></b></h3>
            <p style="text-align:center;font-size:20px;margin:-1.0% 0;">Code: <b><?php //echo "HGT".$value1['idtour']; ?></b></p>
            <p style="text-align:center;"><b><?php echo "Date: ".date('d-m-Y') ?></b></p>
            </div>
        </td>
    </tr>
</table>
<br><br>

    <div class="col-md-12" style="text-align:center; padding:.1em 1em 1em em;">
        <h2  class="title">Congratulation Your tour is booked! </h2>
    </div>
            <table border="2" style="width: 960px;margin-left:60px;border-spacing:10;font-size:15px;font-family: arial" cellpadding="40" cellspacing="10"  >
            <th colspan="2" class="detail"><center><h3>Details</h3></center></th>
                <tr>
                    <td>Tour</td>
                    <td style="width: 750px;"> <?php echo $value1['tour'];?></td>   
                </tr>

                <tr > 
                    <td>Date of tour:</td>
                    <td><?php echo $value1['fecha'];?></td>
                </tr>

                <tr> 
                    <td>Tour Status:</td>
                    <td><?php if ($value1['estatus']=='noconfirmado')echo 'Confirmado';
                                else
                                    echo 'No Confirmado';?>
                    </td>
                </tr>
                <tr> 
                    <td>Number of People:</td>
                    <td><?php echo $value1['npasajeros'];?></td>
                </tr>
                <?php 

                    $pasajeros = json_decode($value1['pasajero'],true);?>

                <?php 
                $i=1;
                foreach ($pasajeros as $key=>$value2) {
                    echo "<tr>";
                        echo '<td style="font-weight: bold; padding: 8px;padding-left: 30px;">'.$i.". Name: "."</td>";
                        echo '<td style="font-weight: bold; padding: 8px;padding-left: 30px;">'.$value2['nombre']."</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo '<td style="border:0px" >'."Nacionality: "."</td>";
                        echo "<td>".$value2['nacionalidad']."</td>";
                    echo "</tr>";

                    echo "<tr>";
                        echo '<td style="border:0px" >'."PassportNumber: "."</td>";
                        echo "<td>".$value2['pasaporte']."</td>";
                    echo "</tr>";
                    $i++;
                }
                ?>
            </table>
        <br><br><br>

        <?php
            $producto = json_decode($value1['producto'],true);
            
            $deposito = json_decode($value1['deposito'],true);
                            foreach ($deposito as $key=>$value4) {
            //$suma=$value1['precio']+$value3['porterdetalles']+$value3['slipingdetalles']+$value3['walkingdetalles']+$value3['inflatabledetalles']+$value3['singledetalles']+$value3['traindetalles']+$value3['otherprecio'];
            ?>


        <table border="2" style="width: 960px;margin-left:60px;border-spacing:10;font-size:15px;font-family: arial;margin-top:-40px" cellpadding="50" cellspacing="10"  >
            <th colspan="3"  class="detail" ><center><h3>Price</h3></center></th>
            <?php
            //$totalprice=$value1['precio']*$value1['npasajeros'];
            $totalprice=$value1['precio'];
            $preciodetalles=$value1['preciodetalle'];

                foreach ($producto as $key=>$value3) {
                    echo "<tr>";    
                        echo "<td>"."<b>"."</br>"."Tour Price: "."</td>";    
                        echo "<td>"."<b>"."</br>"."$. ".$totalprice."</td>";    
                        echo "<td>"."<b>"."</br>"."Detail: ".$preciodetalles."</td>";    
                        background:#6e9721
                    echo "</tr>";
                    if ($value3['porterdetalles']=="") 
                        $porter="0.00"; 
                    else    
                        $porter=$value3['porterdetalles'];     

                    echo "<tr>";
                        echo "<td>"."Porter: "."</td>";
                        echo "<td>"."$. ".$porter."</td>";
                        echo "<td style='width: 500px;'>"."Detail: ".$value3['porterprecio']."</td>";
                    echo "</tr>";

                     if ($value3['slipingdetalles']=="") 
                        $sliping="0.00"; 
                    else    
                        $sliping=$value3['slipingdetalles'];     
                    echo "<tr>";
                        echo "<td>"."Sleeping Bag"."</td>";
                        echo "<td>"."$. ".$sliping."</td>";
                        echo "<td>"."Detail: ".$value3['slipingprecio']."</td>";
                    echo "</tr>";

                    if ($value3['walkingdetalles']=="") 
                        $walking="0.00"; 
                    else    
                        $walking=$value3['walkingdetalles'];

                    echo "<tr>";
                        echo "<td>"."Walking Bag"."</td>";
                        echo "<td>"."$. ".$walking."</td>";
                        echo "<td>"."Detail: ".$value3['walkingprecio']."</td>";
                    echo "</tr>";

                    if ($value3['inflatabledetalles']=="") 
                        $inflatable="0.00"; 
                    else    
                        $inflatable=$value3['inflatabledetalles'];

                    echo "<tr>";
                        echo "<td>"."Inflatable matress"."</td>";
                        echo "<td>"."$. ".$inflatable."</td>";
                        echo "<td>"."Detail: ".$value3['inflatableprecio']."</td>";
                    echo "</tr>";

                    if ($value3['singledetalles']=="") 
                        $single="0.00"; 
                    else    
                        $single=$value3['singledetalles'];     
                    
                    echo "<tr>";
                        echo "<td>"."Single tent supplement "."</td>";
                        echo "<td>"."$. ".$single."</td>";
                        echo "<td>"."Detail: ".$value3['singleprecio']."</td>";
                    echo "</tr>";

                    if ($value3['traindetalles']=="") 
                        $train="0.00"; 
                    else    
                        $train=$value3['traindetalles']; 

                    echo "<tr>";
                        echo "<td>"."Train Upgrade"."</td>";
                        echo "<td>"."$. ".$train."</td>";
                        echo "<td>"."Detail: ".$value3['trainprecio']."</td>";
                    echo "</tr>";

                    if ($value3['otherdetalles']=="") 
                        $other="0.00"; 
                    else    
                        $other=$value3['otherdetalles']; 

                    echo "<tr>";
                        echo "<td>"."Other"."</td>";
                        echo "<td>"."$. ".$other."</td>";
                        echo "<td>"."Detail: ".$value3['otherprecio']."</td>";
                    echo "</tr>";

                    //$suma=($value1['precio']+$value3['porterdetalles']+$value3['slipingdetalles']+$value3['walkingdetalles']+$value3['inflatabledetalles']+$value3['singledetalles']+$value3['traindetalles']+$value3['otherprecio']);
                    $suma2=$totalprice+$porter+$sliping+$walking+$inflatable+$single+$train+$other;

                    echo "<tr>";    
                        echo "<td>"."<b>"."Total Price<br>(Tour and services included): "."</td>";    
                        echo "<td>"."<b>"."</br>"."$. ".$suma2."</td>";    
                        echo "<td>".""."</td>";    
                    echo "</tr>";

                    echo "<tr>";    
                        echo "<td>"."<b>"."Deposit paid: "."</td>";    
                        echo "<td>"."<b>"."</br>"."$. ".$value4['depositodetalles']."</td>";    
                        echo "<td>"."Detail: " ."</td>";    
                    echo "</tr>";

                    echo "<tr>";    
                        echo "<td>"."<b>"."Balance to be paid on<br> arrival: "."</td>";    
                        echo "<td>"."<b>"."</br>"."$. ".($suma2 - $value4['depositodetalles'])."</td>";    
                        echo "<td>"."Detail: ".$value4['depositoprecio']."</td>";    
                    echo "</tr>";

                }
            }
            ?>

            </table>
            <br>

            <table border="2" style="width: 960px;margin-left:60px;border-spacing:10;font-size:15px;font-family: arial" cellpadding="40" cellspacing="10"  >
                <th colspan="2" style="background:rgba(110, 151, 33, 0.81);color:#fff;"><center><h3> Terms and Conditions</h3></center></th>
                <?php 
                echo "<tr>";    
                        echo "<td style='padding-left: 30px;'>"."Import"."</td>";    
                        echo "<td style='width: 750px;'>".$value1['terminos']."</td>";    
                echo "</tr>";
                 ?>
            </table>
            <br>
            <!--btn btn-primary-->
            <center>
                <div>
                    <input class="btn btn-primary nover" type="button" name="imprimir"  value="print"  onclick="PrintDiv()"/><br>
                </div>
            </center><br>
            </div>   
            <br><br><br>           
        <?php //} ?>
    </div>   
    </body>
    </html>