<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BBDD</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php require('connection.php'); ?>
<div class="main-container">


<h1>Update User</h1>

<?php

if (isset($_GET['id'])) {
    $id = $con->real_escape_string($_GET['id']);


    $result = $con->query("SELECT * FROM alumnos WHERE ID = '$id'");

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } else {
        echo "No se encontró el usuario con ID: $id";
        exit();
    }
} else {
    echo "No ID provided in the URL.";
    exit();
}
?>

<form method="post" action="">
    <strong>ID: </strong>
    <input type="text" name="id" size="20" value="<?php echo $user['ID']; ?>" readonly>
    <br>
    <strong>Nombre: </strong>
    <input type="text" name="nombre_enviar" size="20" value="<?php echo $user['NOMBRE']; ?>" required>
    <br>
    <strong>Apellido: </strong>
    <input type="text" name="apellido" size="20" value="<?php echo $user['APELLIDO']; ?>" required>
    <br>
    <strong>Curso: </strong>
    <input type="text" name="curso" size="20" value="<?php echo $user['CURSO']; ?>" required>
    <br>
    <input type="submit" name="enviar" class="btn-submit " value="Actualizar">
</form>

<br>
</div>


<?php
if (isset($_POST['enviar'])) {
    $id = $con->real_escape_string($_POST['id']);
    $nombre_enviar = $con->real_escape_string($_POST['nombre_enviar']);
    $apellido = $con->real_escape_string($_POST['apellido']);
    $curso = $con->real_escape_string($_POST['curso']);

    $consulta = "UPDATE alumnos SET NOMBRE='$nombre_enviar', APELLIDO='$apellido', CURSO='$curso' WHERE ID='$id'";


    if ($con->query($consulta) === TRUE) {
        header("location:index.php");
    } else {
        echo "Registro no modificado: " . $con->error;
    }
}
?>

</body>
</html>
