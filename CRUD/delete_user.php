<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BBDD</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>

<?php require('connection.php'); ?>
<!-- 
╔════════════════════════════════════════════════════════════════════════╗
║ Conexión a la base de datos                                           ║
╚════════════════════════════════════════════════════════════════════════╝
-->

<div class="main-container">

  <form method="post" action="">
    <strong>ID: </strong>
    <input type="text" name="id" size="20" required>
    <br>
    <input type="submit" class="btn-submit" name="enviar" value="Eliminar">
    <!-- 
    ╔════════════════════════════════════════════════════════════════════════╗
    ║ Botón para enviar el ID del usuario a eliminar                        ║
    ╚════════════════════════════════════════════════════════════════════════╝
    --> 


  </form>
  <br>

<a>Resultado: </a>
</body>
</html>

</div>

<?php
require('connection.php');
/* 
╔════════════════════════════════════════════════════════════════════════╗
║ Requiere de nuevo la conexión a la base de datos para procesar la      ║
║ eliminación del usuario                                                ║
╚════════════════════════════════════════════════════════════════════════╝
*/

if (isset($_POST['id'])) {
  $id = $con->real_escape_string($_POST['id']); 
  $query = "DELETE FROM alumnos WHERE id = '$id'"; // Consulta para eliminar el usuario

  if ($con->query($query) === TRUE) {
    echo "User deleted successfully."; 
    header("Location: index.php"); 
    exit();
  } else {
    echo "Error deleting user: " . $con->error; 
  }
}
?> 
