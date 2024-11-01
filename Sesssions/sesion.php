<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sesiones</h1>
    <form action="#" method="POST">
        <input type="submit", name="n-submit" value="Selecciona valor">
    </form>
<?php
if (isset($_POST["n-submit"])) {
    session_start();
    $_SESSION['usu'] = 'JMH';
    header("location:index_sesion2.php");
}
?>   
</body>
</html>