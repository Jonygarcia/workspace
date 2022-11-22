<!-- 008fondoSesion1.php: Modifica el ejercicio anterior para almacenar el color de fondo 
en la sesión y no emplear cookies. Además, debe contener un enlace al siguiente 
archivo. 408fondoSesion2.php: Debe mostrar el color y dar la posibilidad de:
Volver a la página anterior mediante un enlace, y mediante otro enlace, vaciar la 
sesión y volver a la página anterior. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../007fondo/007custom.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <title>008fondoSesion1</title>
    <?php
        session_start();

        if (isset($_POST["save"])) {
            $color = $_SESSION["fondo"];
        } else if (isset($_POST["delete"])) {
            unset($_SESSION["fondo"]);
            session_destroy();
            session_start();
        }
    ?>
</head>

<body class="<?php if (isset($_SESSION['fondo'])) echo 'bg-' . $color . 'color' ?>">
    <div class="dropdown text-center mt-4">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Selecciona el color del fondo
        </a>

        <ul class="dropdown-menu text-center bg">
            <li><a class="dropdown-item" href="408fondoSesion2.php?color=red">Rojo</a></li>
            <li><a class="dropdown-item" href="408fondoSesion2.php?color=blue">Azul</a></li>
            <li><a class="dropdown-item" href="408fondoSesion2.php?color=yellow">Amarillo</a></li>
        </ul>
    </div>
</body>

</html>