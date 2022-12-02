<!-- 014series.php: Añade una nueva vista similar a 012peliculas.php que muestra un 
"Listado de Series" con una lista desordenada con tres series. Tanto 012peliculas.php 
como la vista recién creada, deben tener un pequeño menú que permita pasar de un 
listado a otro. Comprueba que, si se accede directamente a cualquiera de las vistas sin 
tener un usuario logado vía URL del navegador, no se muestra el listado.
Modifica tanto el controlador como las vistas para que:
los datos los obtenga el controlador (almacena en la sesión un array de películas y otro 
de series) coloque los datos en la sesión.
En las vistas, los datos se recuperan de la sesión y se pintan en la lista desordenada 
recorriendo el array correspondiente. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <title>014series</title>
</head>

<body>
    <?php
    session_start();
    $user = $_SESSION["user"] ?? "";
    $series = $_SESSION["series"] ?? [];

    if ($user == "usuario") { ?>
        <nav class="navbar navbar-expand navbar-light bg-light d-flex justify-content-end">
            <div class="nav navbar-nav">
                <a class="nav-item text-white text-decoration-none" href="012peliculas.php"><button class="btn btn-dark mx-2">Ir a Películas</button></a>
            </div>
            <div class="nav navbar-nav">
                <a class="nav-item text-white text-decoration-none" href="013logout.php"><button class="btn btn-dark mx-2">Cerrar sesión</button></a>
            </div>
        </nav>
        <div class="container col-4 mt-3 text-center">
            <h1 class="text-center mb-5 text-capitalize">Listado de series</h1>
            <ul class="list-group">
                <?php
                foreach ($series as $value) {
                    echo "<li class='list-group-item'>" . $value . "</li>";
                }
                ?>
            </ul>
        </div>
    <?php } else { ?>
        <div class="container col-4 mt-5 text-center">
            <h2>No has iniciado sesión</h2>
            <h6><a href="010index.php">Ir a inicio</a></h6>
        </div>
    <?php } ?>
</body>

</html>