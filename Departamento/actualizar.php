<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Estilos -->
    <link rel="stylesheet" href="../css/estilos.css">
    <!-- fuentes -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

  </head>
  <body>

    <section id="navbar">
      <div class="row-fluid">
        <nav class="text-center navbar navbar-inverse navbar-toggleable-md navbar-light bg-inverse">
          <div class="col-lg-6">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <a class="navbar-brand" href="index.php">Juanito Emprende</a>
          </div>
          <div class="col-lg-6 text-white">
          <?php
          session_start();
          include '../inc/operaciones.php';
          include '../inc/conexion.php';
          $link=conectar();
          imprimirNombres();

          $id=$_GET['idDepartamento'];

          $sql='SELECT * FROM `departamento` WHERE idDepartamento = "'.$id.'"';
          $result=mysqli_query($link,$sql) or die ("ERROR AL REALIZAR LA CONSULTA $sql".mysqli_error($result));
          if($result->num_rows>0){
            while($r=$result->fetch_array()){
              $_SESSION['idDepartamento']=$r['idDepartamento'];
            $idD=$r['idDepartamento'];
            $nombre=$r['Nombre'];
            }
          }
            ?>
            <span>&nbsp;</span>
            <span>&nbsp;</span>
            <span>&nbsp;</span>
            <span>&nbsp;</span>
            <span>&nbsp;</span>
  <a href="../inc/salir.php" class="btn btn-outline-danger my-2 my-sm-0"><i class="fa fa-sign-out" aria-hidden="true"></i>Cerrar Sesion <?php echo $_SESSION['cargo'];?></a>
       </div>
      </div>
    </nav>
      </section>
      <section>
        <div class="container-fluid">
          <div class="jumbotron text-center">
            <h3>Ingresar id y Nombre de departamento a crear</h3>
          </div>
        </div>
      </section>

      <section>
        <form action="actualiza.php" method="post">

        <div class="container-fluid">
        
          <div class="row">&nbsp;</div>
          <div class="row">
            <div class="col-lg-3">&nbsp;</div>
            <div class="col-lg-2"><strong>Nombre departamento</strong></div>
            <div class="col-lg-4">
              <input type="text" name="nombre" class="form-control" placeholder="Nombre Departamento" value="<?php echo $nombre ?>" required/>
            </div>
            <div class="col-lg-3">&nbsp;</div>
          </div>
          <div class="row">&nbsp;</div>
          <div class="row">&nbsp;</div>
          <div class="row">
            <div class="col-lg-2">&nbsp;</div>
            <div class="col-lg-4">&nbsp;</div>
            <div class="col-lg-2">&nbsp;</div>
            <div class="col-lg-2">
              <input type="submit" class="btn btn-outline-primary" value="Actualizar">
            </div>
            <div class="col-lg-2">&nbsp;</div>
            <div class="col-lg-2">&nbsp;</div>
          </div>
        </div>
      </form>
      </section>


</body>
</html>
