<?php
session_start();

include ('conexion.php');
  $link=conectar();

  $u=$_REQUEST["usuario"];
  $p=$_REQUEST["contraseña"];


  $sql="select * from usuario, login where login.Correo='$u' and login.Contrasenia='$p' and usuario.Correo=login.Correo;";
  $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));

  if($row=mysqli_fetch_array($result)){

        $_SESSION['nombre']=$row['Nombres'];
        $_SESSION['apellido']=$row['Apellidos'];
        $_SESSION['cargo']=$row['Cargo'];
        $_SESSION['IdUsuario']=$row['idusuario'];
        $_SESSION['departamento']=$row['Departamento_idDepartamento'];

        if ($p == "Juanito") {
          echo "<script type='text/javascript'>
            alert('Bienvenido(a) ".$_SESSION['cargo']." ".$_SESSION['nombre']." ".$_SESSION['apellido']. " al sistema');
            window.location='../usuarios/changepass.html';
          </script>";}
          else{

if ($_SESSION['cargo']=="Recepcionista") {
 echo "<script type='text/javascript'>
    alert('Bienvenido(a) ".$_SESSION['cargo']." ".$_SESSION['nombre']." ".$_SESSION['apellido']. " al sistema');
    window.location='../Recepcion/index.php';
  </script>";
}elseif ($_SESSION['cargo']=="Funcionario") {
  echo "<script type='text/javascript'>
     alert('Bienvenido(a) ".$_SESSION['cargo']." ".$_SESSION['nombre']." ".$_SESSION['apellido']. " al sistema');
     window.location='../Funcionario/index.php';
   </script>";
} elseif ($_SESSION['cargo']=="Patinador") {
  echo "<script type='text/javascript'>
     alert('Bienvenido(a) ".$_SESSION['cargo']." ".$_SESSION['nombre']." ".$_SESSION['apellido']. " al sistema');
     window.location='../Patinador/index.php';
   </script>";
}
elseif ($_SESSION['cargo']=="Desarrollo") {
  echo "<script type='text/javascript'>
     alert('Bienvenido(a) ".$_SESSION['cargo']." ".$_SESSION['nombre']." ".$_SESSION['apellido']. " al sistema');
     window.location='../usuarios/index_usuarios.php';
   </script>";
}
}
}else {
  echo "<script type='text/javascript'>
    alert('Ingrese de nuevo usuario y contraseña al sistema');
    window.location='../index.php';
  </script>";
}


?>
