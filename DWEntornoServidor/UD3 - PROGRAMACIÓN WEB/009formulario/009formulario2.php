<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <title>009formulario2</title>
    <?php
    session_start();

    $_SESSION["name"] = $_POST["name"] ?? "";
    $_SESSION["lastname"] = $_POST["lastname"] ?? "";
    $_SESSION["email"] = $_POST["email"] ?? "";
    $_SESSION["url"] = $_POST["url"] ?? "";
    $_SESSION["sex"] = $_POST["sex"] ?? "";

    ?>
</head>

<body>
    <div class="container-fluid col-3">
        <form action="009formulario3.php" method="post">
            <div class="mb-3 mt-3">
                <label for="numConvivientes" class="form-label">Número de convivientes en el domicilio</label>
                <input type="number" class="form-control" min="1" value="1" name="numConvivientes" required>
            </div>
            <div class="mb-3">
                <label class="d-block">Aficiones</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="hobbies[]" value="Deportes">
                    <label class="form-check-label" for="hobbies[]">Deportes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="hobbies[]" value="Música">
                    <label class="form-check-label" for="hobbies[]">Música</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="hobbies[]" value="Viajar">
                    <label class="form-check-label" for="hobbies[]">Viajar</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="hobbies[]" value="Videojuegos">
                    <label class="form-check-label" for="hobbies[]">Videojuegos</label>
                </div>
            </div>
            <div class="mb-3">
                <label>Menú favorito</label>
                <select name="menu[]" class="form-select" multiple="true">
                    <option value="Pizza">Pizza</option>
                    <option value="Hamburguesa">Hamburguesa</option>
                    <option value="Ensalada">Ensalada</option>
                    <option value="Croquetas">Croquetas</option>
                </select>
            </div>
            <input type="submit" name="Enviar" class="btn btn-primary">
        </form>
    </div>
</body>

</html>