<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../007fondo/007custom.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <title>408fondoSesion2</title>
    <?php
    session_start();

    $color = $_GET["color"] ?? "";
    $_SESSION["fondo"] = $color;
    ?>
</head>

<body class="<?php if ($_SESSION['fondo'] !== 'white') echo 'bg-' . $_SESSION['fondo'] . 'color' ?>">
    <div class="container col-4 justify-content-center mt-5">
        <h1 class="bg-black text-white text-center">EL COLOR ELEGIDO ES <?= strtoupper($_SESSION['fondo']) ?></h1>
    </div>
    <div class="container col-4 justify-content-center mt-3">
        <h5 class="bg-black text-white text-center">Vamos a volver a la página anterior, ¿conservamos los cambios?</h5>
    </div>

    <form action="008fondoSesion1.php" method="POST">
        <div class="container col-4 justify-content-center text-center mt-3">
            <button type="input" name="save" class="btn btn-secondary mx-4 justify-content-center">Volver y guardar los cambios</button>
            <button type="input" name="delete" class="btn btn-secondary mx-4 justify-content-center">Volver sin guardar los cambios</button>
        </div>
    </form>
</body>

</html>