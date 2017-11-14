<?php

if($_GET["idusuario"]){
			include '../inc/conexion.php';
						$link=conectar();
$sql= 'DELETE FROM `login` WHERE `usuario_idusuario`= "'.$_GET["idusuario"].'"';
$result=mysqli_query($link,$sql) or die ("ERROR AL REALIZAR LA CONSULTA $sql".mysqli_error($result));

$sql= 'DELETE FROM `usuario` WHERE `idusuario`= "'.$_GET["idusuario"].'"';
$result=mysqli_query($link,$sql) or die ("ERROR AL REALIZAR LA CONSULTA $sql".mysqli_error($result));


			if($result!=null){
				echo "<script>alert(\"Eliminado exitosamente.\");window.location='consulta_usuarios.php';</script>";
			}else{
				echo "<script>alert(\"No se pudo eliminar.\");window.location='consulta_usuarios.php';</script>";

			}
}

?>
