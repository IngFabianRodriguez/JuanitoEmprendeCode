<?php
include '../inc/operaciones.php';
include '../inc/conexion.php';

session_start();
if($_SESSION){
  ?>


  <?php
$link=conectar();
$_SESSION['idusuario']=$_GET['idusuario'];

$sql='SELECT * FROM usuario WHERE idusuario="'.$_GET['idusuario'].'"';
$result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));

  if($row=mysqli_fetch_array($result)){

$idciudad=$row['idciudad'];
$nombre_ciudad=$row['nombre_ciudad'];

}
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <!-- Estilos -->
  <link rel="stylesheet" href="../css/estilos.css">
  <!-- fuentes -->
  <link rel="stylesheet" href="../css/font-awesome.min.css">

  <title>Actualizacion de ciudad</title>
</head>
<body>
  <section id="navbar">

  <div class="row-fluid">
      <nav class="text-center navbar navbar-inverse navbar-toggleable-md navbar-light bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index_ciudad.php">JuanitoEmprende</a>
      </nav>
    </div>
  </section>
 <section id="jumbotron">
  <div class="jumbotron text-center">
    <h1> Actualizar Ciudad</h1>
    <p>Sr.(a) <?php  imprimirNombres()?> podra actualizar la información de las ciudades.</p>
  </div>
<form class="form-group" action="actualiza_ciudad.php" method="post">


 </section>
<section id="formulario">
<div class="container">
  <div class="row">&nbsp;</div>
  <div class="row">
    <div class="col-lg-3">&nbsp;</div>
    <div class="col-lg-3"><strong>Nombre</strong></div>

</div>
</section>
</form>
<section>
  <div class="row">&nbsp;</div>
  <div class="jumbotron bg-inverse">
    <div class="row">
        <div class="col-lg-4">&nbsp;</div>
        <div class="col-lg-6">&nbsp;</div>
        <div class="col-lg-2">
            <a href="../inc/salir.php" class="btn btn-primary"><i class="fa fa-sign-out" aria-hidden="true"></i>Cerrar Sesion</a>
        </div>
    </div>
  </div>
</section>

</body>
</html>
<?php
}
else {
	echo "<script type='text/javascript'>
		alert('Ud no ha iniciado sesion. Por favor iniciar una o registrese');
		window.location='/index.php';
	</script>";
} ?>
