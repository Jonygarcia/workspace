<!-- 012peliculas.php: vista que muestra como título "Listado de Películas", y una lista 
desordenada con tres películas. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <title>012peliculas</title>
</head>

<body>
    <?php
    session_start();
    $user = $_SESSION["user"] ?? "";
    $peliculas = $_SESSION["peliculas"] ?? [];

    if ($user == "usuario") { ?>
        <nav class="navbar navbar-expand navbar-light bg-light d-flex justify-content-end">
            <div class="nav navbar-nav">
                <a class="nav-item text-white text-decoration-none" href="014series.php"><button class="btn btn-dark mx-2">Ir a Series</button></a>
            </div>
            <div class="nav navbar-nav">
                <a class="nav-item text-white text-decoration-none" href="013logout.php"><button class="btn btn-dark mx-2">Cerrar sesión</button></a>
            </div>
        </nav>
        <div class="container col-4 mt-3 text-center">
            <h1 class="text-center mb-5 text-capitalize">Listado de películas</h1>
            <ul class="list-group">
                <?php
                foreach ($peliculas as $value) {
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