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
  </section>
  <section id="jumbotron">
    <div class="jumbotron">
      <div class="row">
        <div class="col-lg-4">&nbsp;</div>
        <div class="col-lg-4">
          <h2>Bandeja de entrada</h2></div>
        <div class="col-lg-4">&nbsp;</div>
      </div>
    </div>
  </section>
  <section id="bandeja">
    <div class="container">
      <div class="row">
        <?php
        include '../inc/conexion.php';
        $link=conectar();
        $sql='SELECT * FROM documento,procesos,sticker WHERE documento.idDocumento = sticker.Documento_idDocumento ORDER BY idDocumento DESC';
        $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));

        ?>
        <?php if($result->num_rows>0){?>
          <table class="table">
          <thead class="text-center">
            <tr>
              <th>Sticker N°</th>
              <th>Asunto</th>
              <th>Hora</th>
              <th>Tipo</th>
              <th>Operaciones</th>
            </tr>
          </thead>
          <?php  while($r=$result->fetch_array()){?>
          <tbody>
            <tr>
              <td><?php echo $r["Codigo_Sticker"]; ?></td>
              <td><?php echo $r["Asunto"]; ?></td>
              <td><?php echo $r["Hora_ingreso"]; ?></td>
              <td><?php echo $r["NombreProceso"]; ?></td>
              <td>  <a href="respuesta.php?Codigo_Sticker=<?php echo $r["Codigo_Sticker"];?>" class="btn btn-sm btn-outline-success">Responder</a><br></td>
            </tr>
        <?php
      }
    }
         ?>
       </tbody>
     </table>
      </div>
    </div>
  </section>
</body>
</html>
