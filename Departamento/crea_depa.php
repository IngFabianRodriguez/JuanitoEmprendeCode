<?php
include '../inc/operaciones.php';
include '../inc/conexion.php';
session_start();
if($_SESSION){
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

  <title>Creacion de Departamento</title>
</head>
<body>
  <section id="navbar">

  <div class="row-fluid">
      <nav class="text-center navbar navbar-inverse navbar-toggleable-md navbar-light bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="../Departamento/index_Depa.php">JuanitoEmprende</a>
      </nav>
    </div>
  </section>
 <section id="jumbotron">
  <div class="jumbotron text-center">
    <h1> Crear Departamento nuevo</h1>
    <p>Sr.(a) <?php  imprimirNombres()?> podra crear Departamentos.</p>
  </div>
<form class="form-group" action="creacion_depa.php" method="post">


 </section>
<section id="formulario">
<div class="container">
  <div class="row">&nbsp;</div>

  <div class="row">
    <div class="col-lg-3">&nbsp;</div>
    <div class="col-lg-3"><strong>Id Departamento</strong></div>
    <div class="col-lg-4">
      <input type="number" name="idDepartamento" class="form-control" pattern="[0-9]++" placeholder="idDepartamento" required/>
    </div>
    <div class="col-lg-2">&nbsp;</div>
  </div>
<div class="row">&nbsp;</div>
  <div class="row">
    <div class="col-lg-3">&nbsp;</div>
    <div class="col-lg-3"><strong>Nombre</strong></div>

    <div class="col-lg-4">
      <input type="text" name="nombre" class="form-control" pattern="[A-Za-z ]+" placeholder="Nombre" required/>
    </div>
    <div class="col-lg-2">&nbsp;</div>
  </div>

    <div class="col-lg-2">&nbsp;</div>
  </div>
  <div class="row">
    <div class="col-lg-4">&nbsp;</div>
    <div class="col-lg-4">&nbsp;</div>
    <div class="col-lg-4">
      <input type="submit" class="btn btn-primary" value="Crear Departamento">
    </div>
  </div>
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
		window.location='../index.php';
	</script>";
} ?>
