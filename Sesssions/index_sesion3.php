<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
<?php 
    $_SESSION["usuario"] = "Jon";
    header("location:index_sesion4.php");
    ?>
</body>
</html>