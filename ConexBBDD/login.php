<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script defer src="./js/custom.js" type="text/javascript"></script>
    <title>Iniciar sesión</title>
</head>

<body>
    <form action="checkLogin.php" method="POST">
        <div class="container col-6 col-lg-3">
            <h2 class="text-center mt-5 mb-5">INICIAR SESIÓN</h2>
            <?php
            if ($_GET) {
                $msg = $_GET["login"];

                if ($msg == "empty") {
                    echo '
                    <div class="alert alert-danger" role="alert">
                    Debes especificar el nombre de usuario y la contraseña
                    </div>';
                } else if ($msg == "failed") {
                    echo '
                    <div class="alert alert-danger" role="alert">
                    Contraseña incorrecta
                    </div>';
                } else if ($msg == "false") {
                    echo '
                    <div class="alert alert-danger" role="alert">
                    El usuario introducido no existe
                    </div>';
                }
            }
            ?>
            <div class="mb-3">
                <label for="username" class="form-label">Nombre de Usuario</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary text-center">Iniciar sesión</button>
            </div>
        </div>
    </form>
</body>

</html>