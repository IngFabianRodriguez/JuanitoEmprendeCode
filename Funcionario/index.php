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

      <div class="jumbotron">
        <div class="row">
          <div class="col-lg-2">&nbsp;</div>
          <div class="col-lg-4">
              <div class="card">
                <img class="card-img-top" src="/img" alt="Card image cap" width="350" height="200">
                  <div class="card-block">
                      <h4 class="card-title">Bandeja de entrada</h4>
                      <div class="row">&nbsp;</div>
                      <a href="bandeja.php" class="btn btn-outline-primary my-2 my-sm-0">Ingresar</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="card">
                <img class="card-img-top" src="/img" alt="Card image cap" width="350" height="200">
                  <div class="card-block">
                      <h4 class="card-title">Consulta de procesos.</h4>
                        <div class="row">&nbsp;</div>
                      <a href="#" class="btn btn-outline-primary my-2 my-sm-0">Ingresar</a>
                  </div>
              </div>
          </div>
          <div class="col-lg-2">&nbsp;</div>
        </div>
      </div>
      </nav>
    </section>
</body>
</html>
