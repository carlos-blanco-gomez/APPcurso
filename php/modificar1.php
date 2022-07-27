<?php 
$nombre = $_POST['nombre'];
   $conexion = mysqli_connect("localhost", "root", "alzamanito", "base3") or die("No se pudo conectar a la base de datos");
   $registros = mysqli_query($conexion, "select * from alumnos where nombre='$nombre'") or die("No se pudo obtener los datos");
   if(mysqli_fetch_array($registros)){
   
    ?>
    <form action="modificar2.php" method="post">
      <input type="hidden" name="nombre1" value="<?php echo $nombre; ?>">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre2" value="<?php echo $nombre; ?>">
      <label for="email">Email:</label>
      <input type="text" name="email" value="<?php echo $reg['mail']; ?>">
      <label for="codigo">Codigo de curso:</label>
      <input type="text" name="codigo" value="<?php echo $reg['codigocurso']; ?>">
      <input type="submit" value="Modificar">
    </form>



      <?php
    }else{
      echo "No existe el alumno";
    }


?>