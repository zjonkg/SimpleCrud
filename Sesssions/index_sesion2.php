<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
    <h1>Sesiones</h1>
    <?php
        session_start();
        echo $_SESSION['usu'];
        echo session_id();
    ?>
</body>
</html>