<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- fuentes -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>Home</title>
  </head>
  <body class="fondo">
      <section id="navbar">
      <div class="row-fluid">
        <nav class="text-center navbar navbar-inverse navbar-toggleable-md navbar-light bg-inverse">
        <div class="col-lg-6">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.php">Juanito Emprende</a>
          </div>
          <div class="col-lg-6">
            <form class="form-inline" action="validacion.php" method="post">
              <input class="form-control mr-sm-2" type="email" name="usuario" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" placeholder="Correo" required/>
              <input class="form-control mr-sm-2" type="password" name="contraseña" placeholder="Contraseña">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ingresar</button>
            </form>
          </div>
        </div>
      </nav>
      </section>
      <section id="jumbotron">
        <div class="row">

            <div class="jumbotron">
              <div class="row">
              <div class="col-lg-1">&nbsp;</div>
              <div class="col-lg-5">
                <h2>Señor usuario a continuación podra ingresar el numero del proceso a consultar su estado</h2>
              </div>
              <div class="col-lg-1">&nbsp;</div>
              <div class="col-lg-4">
                <form action="consulta.php" method="post">
                    <input class="form-control" type="text" name="contraseña" placeholder="Codigo de Sticker" required/>
                    <div class="col-lg-12">&nbsp;</div>
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Ingresar</button>
                </form>
              </div>
              <div class="col-lg-1">&nbsp;</div>
            </div>

          </div>
        </div>
      </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
