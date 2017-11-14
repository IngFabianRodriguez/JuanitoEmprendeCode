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

  <section id=insertar>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="container">
      <div class="row">
        <div class="col-lg-9 text-center">
          <h5>Para agregar algun proceso ir a el apartado de crear usuario o seguir el siguiente boton</h5>
        </div>
        <div class="col-lg-3">
          <a href="../Procesos/creacion.php" class="btn btn-outline-primary ">Crear Proceso</a>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section>

    <div class="row">&nbsp;</div>
    <div class="row">
      <div class="container">

        <?php
  include '../inc/conexion.php';
  $link=conectar();

  $sql='SELECT * FROM procesos ORDER BY idProcesos ASC';
  $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));

  ?>
          <?php if($result->num_rows>0){?>
          <table class="table table-bordered">
            <thead class="thead-inverse">
              <th>Id Proceso</th>
              <th>Nombre proceso</th>
              <th>Tiempo</th>
              <th>Tiempo Maximo</th>
              <th>&nbsp;</th>

            </thead>
            <?php  while($r=$result->fetch_array()){?>
            <tr>
              <td>
                <?php echo $r["idProcesos"]; ?>
              </td>
              <td>
                <?php echo $r["NombreProceso"]; ?>
              </td>
              <td>
                <?php echo $r['Tiempo'] ?>
              </td>
              <td>
                <?php echo $r['Tiempo_maximo']; ?>
              </td>
                <td>

                <a href="actualizar.php?idProcesos=<?php echo $r["idProcesos"];?>" class="btn btn-sm btn-success">Actualizar</a><br>
                <a href="borrar.php?idProcesos=<?php echo $r["idProcesos"];?>" class="btn btn-sm btn-danger">Eliminar</a><br>

      </div>
    </div>

    <?php } ?>
    <?php} else {
      echo "NO SE ENCONTRARON RESULTADOS";
      ?>
      <?php } ?>
      </td>
      </tr>
      </table>

      </div>
      </div>
  </section>

</body>

</html>
