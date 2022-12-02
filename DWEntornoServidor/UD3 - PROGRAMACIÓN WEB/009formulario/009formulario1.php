<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <title>009formulario1</title>
</head>

<body>
    <div class="container-fluid col-3 mt-3">
        <form action="009formulario2.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="lastname" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">URL Página Personal</label>
                <input type="url" class="form-control" name="url" required>
            </div>
            <div class="mb-3">
                <label>Sexo</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sex" value="Hombre" id="male" checked>
                    <label class="form-check-label" for="male">
                        Hombre
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sex" value="Mujer" id="female">
                    <label class="form-check-label" for="female">
                        Mujer
                    </label>
                </div>
            </div>
            <input type="submit" name="Enviar" class="btn btn-primary">
        </form>
    </div>
</body>

</html>