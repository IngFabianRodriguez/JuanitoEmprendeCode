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
          imprimirNombres();
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
      <div class="jumbotron text-center">
          <h3>Seleccione Seccion a gestionar</h3>
          <div class="row">&nbsp;</div>
          <div class="row">&nbsp;</div>
          <div class="row">&nbsp;</div>
          <div class="container-fluid">

          <div class="row">


            <div class="col-lg-3">
                <div class="card">
                  <img class="card-img-top" src="/img" alt="Card image cap" width="350" height="200">
                    <div class="card-block text-center">
                        <h4 class="card-title">Ciudad.</h4>
                        <div class="row">&nbsp;</div>
                        <a href="../Ciudad/index_ciudad.php" class="btn btn-outline-success my-2 my-sm-0"><strong>Ingresar</strong></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                  <img class="card-img-top" src="/img" alt="Card image cap" width="350" height="200">
                    <div class="card-block text-center">
                        <h4 class="card-title">Departamento.</h4>
                        <div class="row">&nbsp;</div>
                        <a href="../Departamento/index_depa.php" class="btn btn-outline-success my-2 my-sm-0"><strong>Ingresar</strong></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                  <img class="card-img-top" src="/img" alt="Card image cap" width="350" height="200">
                    <div class="card-block text-center">
                        <h4 class="card-title">Procesos.</h4>
                        <div class="row">&nbsp;</div>
                        <a href="../Procesos/index.php" class="btn btn-outline-success my-2 my-sm-0"><strong>Ingresar</strong></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                  <img class="card-img-top" src="/img" alt="Card image cap" width="350" height="200">
                    <div class="card-block text-center">
                        <h4 class="card-title">Usuarios.</h4>
                        <div class="row">&nbsp;</div>
                        <a href="../usuarios/index_usuarios.php" class="btn btn-outline-success my-2 my-sm-0"><strong>Ingresar</strong></a>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>
