<?php
  $conexion = mysqli_connect("localhost", "root", "alzamanito", "base3") or die("No se pudo conectar a la base de datos");
  $registros = mysqli_query($conexion, "select * from alumnos") or die("No se pudo obtener los datos");
    while($reg = mysqli_fetch_array($registros)){
        echo $reg['nombre'] . " " . $reg['mail'] . " " . $reg['codigocurso'] . "<br>";
    }

mysqli_close($conexion);

echo "<a href='../index.html'>Volver</a>";
?>



