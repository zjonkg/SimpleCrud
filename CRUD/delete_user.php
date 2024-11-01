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

  <form method="post" action="">
    <strong>Nombre: </strong>
    <input type="text" name="nombre" size="20" required>
    <br>
    <input type="submit" class="btn-submit" name="enviar" value="Buscar">
  </form>
  <br>

<a>Resultado: </a>
</body>
</html>

<?php
require('connection.php');

if (isset($_POST['id'])) {
  $id = $con->real_escape_string($_POST['id']);
  $query = "DELETE FROM alumnos WHERE id = '$id'";

  if ($con->query($query) === TRUE) {
    echo "User deleted successfully.";
  } else {
    echo "Error deleting user: " . $con->error;
  }
}

header("Location: index.php");
exit();
?>
