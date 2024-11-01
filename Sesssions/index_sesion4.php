<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
<?php 
    session_start();
    echo session_id();
    unset($_SESSION);
    session_destroy();
    ?>
</body>
</html>