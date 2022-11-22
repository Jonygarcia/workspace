<!-- 007fondo.php: Mediante el uso de cookies, crea una página con un desplegable con 
varios colores, de manera que el usuario pueda cambiar el color de fondo de la página. 
Al cerrar la página, ésta debe recordar, al menos durante 24h, el color elegido y la 
próxima vez que se cargue la página, lo haga con el último color seleccionado. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="007custom.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <title>007fondo</title>
    <?php
    if (!isset($_COOKIE['color'])) {
        setcookie('color', '', time() + 86400);
    } else {
        $bgColor = $_COOKIE['color'];
    }
    ?>
</head>

<body class="<?php echo (isset($_COOKIE['color'])) ? 
        ($bgColor === 'red' ? 'bg-redcolor' : 
        ($bgColor === 'blue' ? 'bg-bluecolor' : 
        ($bgColor === 'yellow' ? 'bg-yellowcolor' : 
        ''))) : 
        '' ?>">
    <div class="dropdown text-center mt-4">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Selecciona el color del fondo
        </a>

        <ul class="dropdown-menu text-center bg">
            <li><a class="dropdown-item" href="007cookie.php?color=red">Rojo</a></li>
            <li><a class="dropdown-item" href="007cookie.php?color=blue">Azul</a></li>
            <li><a class="dropdown-item" href="007cookie.php?color=yellow">Amarillo</a></li>
        </ul>
    </div>
</body>

</html>