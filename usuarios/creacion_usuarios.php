<?php
include '../inc/conexion.php';
$link=conectar();

$nombre_usuario=$_REQUEST['nombre_usuario'];
$apellido_usuario=$_REQUEST['apellido_usuario'];
$identificacion_usuario=$_REQUEST['identificacion_usuario'];
$cargo_usuario=$_REQUEST['cargo_usuario'];
$telefono_usuario=$_REQUEST['telefono_usuario'];
$correo_usuario=$_REQUEST['correo_usuario'];
$direccion=$_REQUEST['direccion'];
$firma=$_REQUEST['firma'];
$departamento=$_REQUEST['departamento'];

$sql='INSERT INTO `usuario`(`idusuario`, `Nombres`, `Apellidos`, `Cedula`, `Cargo`, `Correo`, `Telefono`, `Direccion`, `Firma`, `Departamento_idDepartamento`)
        VALUES ("'.$identificacion_usuario.'", "'.$nombre_usuario.'","'.$apellido_usuario.'","'.$identificacion_usuario.'","'.$cargo_usuario.'",  "'.$correo_usuario.'","'.$telefono_usuario.'","'.$direccion.'","'.$firma.'","'.$departamento.'")';
$result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));

$password="Juanito";
$sql='INSERT INTO `login` (`Correo`, `Contrasenia`, `Usuario_idusuario`)
      VALUES ( "'.$correo_usuario.'", "'.$password.'", "'.$identificacion_usuario.'")';
$result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));


echo "<script type='text/javascript'>
  alert('Usuario ingresado con exito al sistema al sistema');
  window.location='../usuarios/index_usuarios.php';
</script>";

 ?>
