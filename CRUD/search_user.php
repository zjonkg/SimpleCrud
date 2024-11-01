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
<div class="main-container">

  <form method="get" action="">
    <strong>ID: </strong>
    <input type="text" name="id" size="20">
    <br>
    <input type="submit" class="btn-submit" name="enviar" value="Buscar">
  </form>
  <br>
  <a>Resultado: </a>
  <?php
  if (isset($_GET['enviar'])) {
    $id = $_GET['id'];
    $consulta = $con->query("SELECT NOMBRE, APELLIDO, CURSO FROM ALUMNOS WHERE ID= '$id'");
    if ($consulta->num_rows > 0) {
        while ($row = $consulta->fetch_array()) {
            echo $row['NOMBRE'] . ' ' . $row['APELLIDO'] . ' ' . $row['CURSO'];
        }
    } else {
        echo "No se encontraron resultados para '$id'.";
    }
  }
?>

</div>



</body>
</html>