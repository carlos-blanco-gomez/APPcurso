<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1>Alta!</h1>
    <?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$codigo = $_POST['codigo'];
  $conexion = mysqli_connect("localhost", "root", "alzamanito", "base3") or die("No se pudo conectar a la base de datos");
    $registro = mysqli_query($conexion, "insert into alumnos (nombre, mail, codigocurso) values('$nombre', '$email', $codigo)") or die("No se pudo insertar" . mysqli_error($conexion));
mysqli_close($conexion);

if($registro){
  echo '<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Dar de alta alumno</h5>
    <p class="card-text">Se ha dado de alta el alumno.</p>
    <a href="../index.html" class="btn btn-primary">Volver a inicio</a>
  </div>
</div>';
}else{
echo "Usuario no insertado";
}



?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
