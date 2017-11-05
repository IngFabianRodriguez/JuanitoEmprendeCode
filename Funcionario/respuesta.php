<?php

 ?>

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
    <section id="respuesta">
      <div class="container">
        <div class="row">&nbsp;</div>
        <div class="row">&nbsp;</div>
        <div class="row">
          <div class="col-lg-3">&nbsp;</div>
          <div class="col-lg-5 text-center">
            <h1> <?php echo " Respuesta a caso Sticker N° \n".$_GET["Codigo_Sticker"]; $Codigo_Sticker=$_GET["Codigo_Sticker"]?></h1>
          </div>
          <div class="col-lg-4">&nbsp;</div>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">&nbsp;</div>
      </div>
      <div class="container">
        <form class="form-group" method="post" action="" enctype="multipart/form-data">

          <div class="container">
            <div class="row">
              &nbsp;
            </div>
            <?php
$link=conectar();
$sql="SELECT * FROM sticker,documento WHERE sticker.Codigo_Sticker='$Codigo_Sticker'";
$result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));

if($result->num_rows>0){
  while ($r=$result->fetch_array()){
  $ciudad=$r['Ciudad_idCiudad'];
  $fecha=$r['Fecha_creacion'];
  $nombre_remitente=$r['Nombre_radicador'];
  $direccion=$r['Direccion'];
  $telefono=$r['Telefono'];
  $hora=$r['Hora_ingreso'];
  $asunto=$r['Asunto'];
  $descripcion=$r['Descripcion'];
  $proceso=$r['Procesos_idProcesos'];
}
}
 ?>
              <div class="row">
                <div class="col-lg-2"><label for=""><strong>Ciudad</strong></label></div>
                <div class="col-lg-4">
                  <?php
            $link=conectar();
            $sql="select * from ciudad where idCiudad='$ciudad'";
            $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));
            ?>
                    <select class="custom-select" name="ciudad" required/>
                    <?php
             if($result->num_rows>0){?>
                      <?php while ($r=$result->fetch_array()){
                echo "<option value=".$r["idCiudad"].">".$r['Nombre_ciudad']."</option>";}} ?>

                      </select>
                </div>
                <div class="col-lg-2">
                  <label for=""><strong>Fecha de creacion</strong></label>
                </div>
                <div class="col-lg-4">
                  <input class="form-control" type="date" name="fecha_creacion" value="<?php echo "$fecha"; ?>" required/>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-lg-2">
                  <label for=""><strong>Nombre remitente:</strong></label>
                </div>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="nombre_remitente" placeholder="Nombre Remitente" value="<?php echo "$nombre_remitente"; ?>">
                </div>

                <div class="col-lg-2">
                  <label for=""><strong>Dirección</strong></label>
                </div>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="direccion" placeholder="Dirección" value="<?php echo "$direccion"; ?>">
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-lg-2"><label for=""><strong>Telefono</strong></label></div>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="telefono" placeholder="Telefono" value="<?php echo "$telefono"; ?>">
                </div>
                <div class="col-lg-2"><label for=""><strong>Hora Ingreso</strong></label></div>
                <div class="col-lg-4">
                  <input type="time" name="hora" class="form-control" value="<?php echo "$hora"; ?>" required/>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-lg-2"><label for=""><strong>Asunto</strong></label></div>
                <div class="col-lg-10">
                  <input type="text" name="asunto" class="form-control" placeholder="Asunto" value="<?php echo "$asunto"; ?>">
                </div>

              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-lg-2"><label for=""><strong>Respuesta</strong></label></div>
                <div class="col-lg-10">
                  <textarea name="Descripcion" rows="8" cols="112" class="form-control" placeholder="Respuesta del caso"></textarea>
                </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-lg-2"><label for=""><strong>Tipo</strong></label></div>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="proceso" value="<?php echo "$proceso"; ?>">
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-2"></div>
              </div>

              <div class="row">&nbsp;</div>
              <div class="row">&nbsp;</div>
              <div class="row">
                <div class="col-lg-4">&nbsp;</div>
                <div class="col-lg-4">&nbsp;</div>
                <div class="col-lg-4">
                  <input type="submit" name="subir" value="Respuesta a usuario y generacion de Sticker. " class="btn btn-outline-primary">
                  <div class="row">&nbsp;</div>
                  <div class="row">&nbsp;</div>
                  <div class="row">&nbsp;</div>
                </div>
              </div>
          </div>
      </div>
      </form>
      </div>
    </section>

  </body>

  </html>
