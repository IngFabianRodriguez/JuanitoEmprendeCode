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
          <form class="form-inline" action="inc/validacion.php" method="post">
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

        <div class="row">&nbsp;</div>
        <div class="row">
          <div class="col-lg-1">&nbsp;</div>
          <div class="col-lg-4">
            <h2 class="text-center">Consulta de procesos</h2>
          </div>
          <div class="col-lg-1">&nbsp;</div>
          <div class="col-lg-5">
            <form action="consulta.php" method="post">
              <div class="row">
                <div class="col-lg-2">
                  <select name="tipo_sticker" class="custom-select" required/>
                    <option value="EE">EE</option>
                    <option value="SS">SS</option>
                  </select>
                </div>
                <div class="col-lg-2">
                  <?php
                  include ('inc/conexion.php');
                  $link=conectar();
                  $sql="select * from departamento";
                  $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));
                  ?>
                    <select class="custom-select" name="idDepartamento" required/>
                  <?php if($result->num_rows>0){?>
                      <?php while ($r=$result->fetch_array()){
                      echo "<option value=".$r["idDepartamento"].">".$r['idDepartamento']."</option>";}} ?>
                    </select>
                </div>
                <div class="col-lg-4">
                  <input class="form-control" type="text" name="fecha" placeholder="0000-00-00" required/>
                </div>
                <div class="col-lg-4">
                  <input class="form-control" type="text" name="tipo" placeholder="00" required/>
                </div>
              </div>
              <div class="col-lg-12">&nbsp;</div>
              <button class="btn btn-success my-2 my-sm-0" type="submit">Consultar</button>
            </form>
          </div>
          <div class="col-lg-1">&nbsp;</div>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">&nbsp;</div>
        <div class="row">&nbsp;</div>

        <div class="row">
          <div class="col-lg-1">&nbsp;</div>
          <div class="col-lg-3">
            <h4>Title</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-4">
            <h4>Title</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .</p>
          </div>
          <div class="col-lg-3">
            <h4>Title</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <di class="col-lg-1">&nbsp;</di>
        </div>
      </div>
    </section>
    <section id="Piedepagina">
      <div class="jumbotron bg-inverse">
        <div class="row">
          &nbsp;
        </div>
      </div>
    </section>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
