<?php
function imprimirNombres(){
echo "<script type='text/javascript'>
        document.write('".$_SESSION['nombre']." ".$_SESSION['apellido'].".');
      </script>";

}

 ?>
