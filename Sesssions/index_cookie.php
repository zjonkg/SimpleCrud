<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies1</title>
</head>
<body>
    <h1>Cookies1</h1>
    <form action="#" method="POST">
        <input type="submit" name="n-submit" value="Selecciona valor">
    </form>
    <?php

    if (isset($_POST["n-submit"])) {
        setcookie("visitas", 234);
        header("location:index_cookie2.php");
    }
    ?>
</body>
</html>