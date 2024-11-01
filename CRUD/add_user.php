<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add user</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php require_once("connection.php"); ?>

<div class="main-container">
    <form method="post" action="">
      <h1>Create User</h1>
      <label><strong>Nombre:</strong></label>
      <input type="text" name="nombre" size="20" required>
      
      <label><strong>Apellido:</strong></label>
      <input type="text" name="apellido" size="20" required>
      
      <label><strong>Curso:</strong></label>
      <input type="text" name="curso" size="20" required>
      
      <input type="submit"  class="btn-submit" name="enviar" value="Crear Usuario">
    </form>
</div>

    <?php
      if (isset($_POST['enviar'])) {
        $nombre = $con->real_escape_string($_POST['nombre']);
        $apellido = $con->real_escape_string($_POST['apellido']);
        $curso = $con->real_escape_string($_POST['curso']);
        
        $consulta = "INSERT INTO alumnos (nombre, apellido, curso) VALUES ('$nombre', '$apellido', '$curso')";
        if ($con->query($consulta) === TRUE) {
          header("location:index.php");
        } else {
          echo "Error al insertar el registro: " . $con->error;
        }
      }
?>
</body>
</html>