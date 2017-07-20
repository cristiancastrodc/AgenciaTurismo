<?php
  # para mostrar la imagen
  $Cod=$_GET[Cod];
  $cn=mysqli_connect("localhost","root") or die ("ERROR AL CONECTAR"); 
  mysqli_select_db($cn,"AgenciaPaquetes2");
  $ConsultaSQL="Select foto from ttour where idtour=$Cod";
  $rs=mysqli_query($cn,$ConsultaSQL);
  //print_r($rs);
  
  $datos = mysqli_fetch_row($rs);
  $imagen=$datos[0];
  
   # asi lo probamos en el Navegador
   # http://server.com/paneldecontrol/verimagen.php?Cod=41758935
  echo $imagen;
  
  #while ($row = mysql_fetch_assoc($rs)) { 
  #  echo $row["i_img"]; 
  #} 
     
  #echo '<img src="verImagen.php?Cod=00010" alt="Img" />'
    
?>