<!DOCTYPE html>
<?php
session_start();
include '../inc/conexion.php';

if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $destino = "../uploads/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $ciudad=$_POST['ciudad'];
            $fecha=$_POST['fecha_creacion'];
            $nombre_remitente=$_POST['nombre_remitente'];
            $direccion=$_POST['direccion'];
            $telefono=$_POST['telefono'];
            $hora=$_POST['hora'];
            $asunto=$_POST['asunto'];
            $descripcion=$_POST['Descripcion'];
            $proceso=$_POST['proceso'];
            $digitalizacion=$destino;
            $funcionario=$_POST['funcionario'];

            $link=conectar();
            $sql= "SELECT * FROM `usuario` WHERE idusuario = $funcionario";
            $result=mysqli_query($link,$sql) or die ("ERROR AL REALIZAR LA CONSULTA $sql".mysqli_error($result));
            if($result->num_rows>0){
              while ($r=$result->fetch_array()){
                $departamento=$r['Departamento_idDepartamento'];
              }
            }


            $sql = "INSERT INTO `documento`(`Nombre_radicador`, `Direccion`, `Telefono`, `Asunto`, `Descripcion`, `Hora_ingreso`, `Fecha_ingreso`, `Procesos_idProcesos`, `usuarioEncargado`, `Digitalizacion`, `Ciudad_idCiudad`)VALUES ('$nombre_remitente','$direccion','$telefono','$asunto','$descripcion','$hora','$fecha','$proceso','$funcionario','$digitalizacion','$ciudad')";
            $result=mysqli_query($link,$sql) or die ("ERROR AL REALIZAR LA CONSULTA $sql".mysqli_error($result));



              $sql="SELECT * FROM `documento` WHERE Nombre_radicador='$nombre_remitente' and Asunto = '$asunto' and Descripcion = '$descripcion'";
              $result=mysqli_query($link,$sql) or die ("ERROR AL REALIZAR LA CONSULTA $sql".mysqli_error($result));

              if($result->num_rows>0){
                while ($r=$result->fetch_array()){
                 $idDocumento=$r['idDocumento'];
                }
              }


        $Numero_Sticker="EE-$departamento-$fecha-$idDocumento";
        $sql="INSERT INTO `sticker`(`Tipo`, `Departamento_idDepartamento`, `Estado`, `Fecha_creacion`, `Documento_idDocumento`, `Codigo_Sticker`) VALUES ('Entrada','$departamento','Registrada','$fecha','$idDocumento','$Numero_Sticker')";
        $result=mysqli_query($link,$sql) or die ("ERROR AL REALIZAR LA CONSULTA $sql".mysqli_error($result));
        $_SESSION['Numero_Sticker']=$Numero_Sticker;

        $sql="SELECT * FROM `sticker` WHERE Codigo_Sticker = '.$Numero_Sticker.'";
        $result=mysqli_query($link,$sql) or die ("ERROR AL REALIZAR LA CONSULTA $sql".mysqli_error($result));
        if($result->num_rows>0){
          while ($r=$result->fetch_array()){
        }
      }
      echo "<script type='text/javascript'>
        alert('Documento registrado con exito Codigo de Sticker $Numero_Sticker');
          window.location='../Recepcion/sticker.php';
      </script>";

    }
    $ciudad=0;
    $fecha=0;
    $nombre_remitente=0;
    $direccion=0;
    $telefono=0;
    $hora=0;
    $asunto=0;
    $descripcion=0;
    $proceso=0;
    $digitalizacion=0;
    $funcionario=0;
}
}
?>
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
      <nav class="navbar navbar-inverse navbar-toggleable-md navbar-light bg-inverse">
        <div class="col-lg-1">&nbsp;</div>
        <div class="col-lg-5">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <a class="navbar-brand" href="index.php">Juanito Emprende</a>
        </div>
        <div class="col-lg-6 text-white">
          <?php

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
    <div class="jumbotron">
      <div class="row">
        <div class="col-lg-3">&nbsp;</div>
        <div class="col-lg-6">
          <h3 class="text-center">Ingreso de información a documento</h3>
        </div>
        <div class="col-lg-3">&nbsp;</div>
      </div>
  <div class="row">&nbsp;</div>
  <div class="row">&nbsp;</div>
  <form class="form-group" method="post" action="" enctype="multipart/form-data">

      <div class="container">
        <div class="row">
          &nbsp;
        </div>

        <div class="row">
          <div class="col-lg-2"><label for=""><strong>Ciudad</strong></label></div>
          <div class="col-lg-4">
            <?php
            $link=conectar();
            $sql="select * from ciudad";
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
            <input class="form-control" type="date" name="fecha_creacion" value="<?php imprimirhora(); echo $_SESSION['fecha']; ?>" required/>
          </div>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
          <div class="col-lg-2">
            <label for=""><strong>Nombre remitente:</strong></label>
          </div>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="nombre_remitente" placeholder="Nombre Remitente">
          </div>

          <div class="col-lg-2">
            <label for=""><strong>Dirección</strong></label>
          </div>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="direccion" placeholder="Dirección">
          </div>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
          <div class="col-lg-2"><label for=""><strong>Telefono</strong></label></div>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="telefono" placeholder="Telefono">
          </div>
          <div class="col-lg-2"><label for=""><strong>Hora Ingreso</strong></label></div>
          <div class="col-lg-4">
            <input type="time" name="hora" class="form-control" value="<?php imprimirhora(); echo $_SESSION['hora']; ?>" required/>
          </div>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
          <div class="col-lg-2"><label for=""><strong>Asunto</strong></label></div>
          <div class="col-lg-4">
            <input type="text" name="asunto" class="form-control" placeholder="Asunto">
          </div>
          <div class="col-lg-2"><label for=""><strong>Funcionario</strong></label></div>
          <div class="col-lg-4">
            <?php

            $sql="select * from usuario where Cargo ='Funcionario'";
            $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));
            ?>
              <select class="custom-select" name="funcionario" required/>
            <?php
            $texto1=" ";
             if($result->num_rows>0){?>
                <?php while ($r=$result->fetch_array()){
                  $departamento=$r['Departamento_idDepartamento'];
                echo "<option value=".$r["idusuario"].">".$r['Nombres'].$texto1.$r['Apellidos']."</option>";}} ?>
              </select>
          </div>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
          <div class="col-lg-2"><label for=""><strong>Descripción</strong></label></div>
          <div class="col-lg-10">
            <textarea name="Descripcion" rows="8" cols="112" class="form-control" placeholder="Descripción breve del caso"></textarea>
          </div>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
          <div class="col-lg-2"><label for=""><strong>Tipo</strong></label></div>
          <div class="col-lg-6">
            <?php

            $sql="select * from procesos";
            $result=mysqli_query($link,$sql) or die ("ERROR en la Consulta $sql".mysqli_error($link));
            ?>
              <select class="custom-select" name="proceso" required/>
            <?php
            $texto1=" (Cuentan con un tiempo maximo de ";
            $texto2=" dias)";
             if($result->num_rows>0){?>
                <?php while ($r=$result->fetch_array()){
                echo "<option value=".$r["idProcesos"].">".$r['NombreProceso'].$texto1.$r['Tiempo_maximo'].$texto2."</option>";}} ?>
              </select>
          </div>
          <div class="col-lg-2"></div>
          <div class="col-lg-2"></div>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
          <div class="col-lg-2"><label for=""><strong>Subir documento</strong></label></div>
          <div class="col-lg-1">
            <input type="file" name="archivo" >
          </div>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">&nbsp;</div>
        <div class="row">
          <div class="col-lg-4">&nbsp;</div>
          <div class="col-lg-4">&nbsp;</div>
          <div class="col-lg-4">
            <input type="submit" name="subir" value="Ingresar documento y generación de sticker. " class="btn btn-outline-primary">
            <div class="row">&nbsp;</div>
            <div class="row">&nbsp;</div>
            <div class="row">&nbsp;</div>
          </div>
        </div>
        </div>
      </div>
    </form>



  <section id="Piedepagina">
    <div class="jumbotron bg-inverse">
      <div class="row">
        &nbsp;
      </div>
    </div>
  </section>
</body>

</html>
