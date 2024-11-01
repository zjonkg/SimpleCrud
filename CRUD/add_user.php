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
      
      <input type="submit" class="btn-submit" name="enviar" value="Crear Usuario">
    </form>
</div>

<?php
      if (isset($_POST['enviar'])) { 
      /* 
      ╔════════════════════════════════════════════════════════════════════════╗
      ║ Verifica si el formulario ha sido enviado                              ║
      ╚════════════════════════════════════════════════════════════════════════╝
      */
        
        // Escapa caracteres especiales para prevenir inyecciones SQL
        $nombre = $con->real_escape_string($_POST['nombre']); 
        $apellido = $con->real_escape_string($_POST['apellido']); 
        $curso = $con->real_escape_string($_POST['curso']); 
        
        /* 
        ╔════════════════════════════════════════════════════════════════════════╗
        ║ Construye la consulta SQL para insertar el nuevo usuario en la base de  ║
        ║ datos                                                                    ║
        ╚════════════════════════════════════════════════════════════════════════╝
        */
        $consulta = "INSERT INTO alumnos (nombre, apellido, curso) VALUES ('$nombre', '$apellido', '$curso')"; 
        
        if ($con->query($consulta) === TRUE) { 
        /* 
        ╔════════════════════════════════════════════════════════════════════════╗
        ║ Ejecuta la consulta y verifica si fue exitosa                          ║
        ╚════════════════════════════════════════════════════════════════════════╝
        */
          
          header("location:index.php"); 
          /* 
          ╔════════════════════════════════════════════════════════════════════════╗
          ║ Redirige a la página de inicio si la inserción fue exitosa            ║
          ╚════════════════════════════════════════════════════════════════════════╝
          */
        } else {
          echo "Error al insertar el registro: " . $con->error; 
          /* 
          ╔════════════════════════════════════════════════════════════════════════╗
          ║ Muestra un mensaje de error si la inserción falla                     ║
          ╚════════════════════════════════════════════════════════════════════════╝
          */
        }
      }
?>
</body>
</html>
