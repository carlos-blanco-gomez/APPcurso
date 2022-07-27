<?php
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$email = $_POST['email'];
$codigo = $_POST['codigo'];
   $conexion = mysqli_connect("localhost", "root", "alzamanito", "base3") or die("No se pudo conectar a la base de datos");
   $registros = mysqli_query($conexion, "update alumnos set nombre='$nombre2', mail='$email', codigocurso=$codigo where nombre='$nombre1'") or die("No se pudo modificar" . mysqli_error($conexion));
    mysqli_close($conexion);
    if($registros){
      echo "Registro modificado correctamente";
    }else{
        echo "Usuario no se ha modficado";
        }

?>