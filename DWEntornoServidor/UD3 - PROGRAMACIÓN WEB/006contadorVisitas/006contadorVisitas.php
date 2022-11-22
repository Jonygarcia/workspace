<!-- 006contadorVisitas.php: Mediante el uso de cookies, informa al usuario de si es su 
primera visita, o si no lo es, muestre su valor (valor de un contador). Además, debes 
permitir que el usuario reinicialice su contador de visitas. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <title>006contadorVisitas</title>
</head>

<body>
    <div class="container-fluid col-6 text-center mt-3 justify-content-center align-content-center">
        <?php

        if (!isset($_COOKIE['accesos'])) {
            $accesosPagina = 0;
            setcookie('accesos', ++$accesosPagina);
            echo "<h1>Es la primera vez que visitas nuestra página</h1>";
        } else {
            $accesosPagina = $_COOKIE['accesos'];
            setcookie('accesos', ++$accesosPagina);
        ?>
            <h1>Contador visitas</h1>
            <h2><?php if (isset($_COOKIE["accesos"])) echo $accesosPagina ?></h2>
            <div class="row text-center justify-content-center">
                <h3>¿Desea reiniciar el contador?</h3>
    
                <button class="btn btn-primary col-2" type="input"><a href="006delete.php" class="text-white">Reiniciar contador</a></button>
             
            </div>
    </div>

<?php } ?>
</body>

</html>