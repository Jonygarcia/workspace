<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script defer src="./js/custom.js" type="text/javascript"></script>
    <title>005registro</title>
</head>

<body>  
    <form action="006nuevoUsuario.php" method="POST">
        <div class="container col-8 col-lg-4">
            <h2 class="text-center mt-5 mb-5">REGISTRO</h2>
            <?php
            if ($_GET) {
                $msg = $_GET["reg"];

                if ($msg == "exist") {
                    echo '
                    <div class="alert alert-danger" role="alert">
                    El nombre de usuario o el email ha sido registrado previamente.
                    </div>';
                } else if ($msg == "failed") {
                    echo '
                    <div class="alert alert-danger" role="alert">
                    Se ha producido un error en el registro.
                    </div>';
                } else if ($msg == "empty") {
                    echo '
                    <div class="alert alert-danger" role="alert">
                    Debes completar todos los campos para realizar el registro
                    </div>';
                }
            }
            ?>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Nombre de Usuario</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <p>¿Ya estás registrado? <a href="login.php">Iniciar sesión</a></p>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary text-center">Enviar</button>
            </div>
            
        </div>
    </form>
</body>

</html>