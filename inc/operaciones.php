<?php
function imprimirNombres(){
echo "<script type='text/javascript'>
        document.write('".$_SESSION['nombre']." ".$_SESSION['apellido'].".');
      </script>";

}
function imprimirhora(){
  $now = time();
     $_SESSION['hora']=date("H:i:s");
     $_SESSION['fecha']=date("y/m/d");
}
 ?>
