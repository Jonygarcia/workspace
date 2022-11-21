<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <title>003validacion</title>
</head>

<body>
    <div class="container-fluid col-3">
        <?php
        $name = $_GET["name"] ?? "";
        $lastname = $_GET["lastname"] ?? "";
        $email = $_GET["email"] ?? "";
        $url = $_GET["url"] ?? "";
        $sex = $_GET["sex"] ?? "";
        $numConvivientes = $_GET["numConvivientes"] ?? 1;
        $hobbies = $_GET["hobbies"] ?? [];
        $favMenu = $_GET["menu"] ?? [];

        if (checkStrings($name) && checkStrings($lastname) && checkMail($email) && checkUrl($url) && checkSexo($sex) && checkConvivientes($numConvivientes) && checkHobbies($hobbies) && checkMenu($favMenu)) {
            echo "Todo está correcto";
        } else {
            echo "Algo falla";
        }

        function checkStrings($var)
        {
            if (!empty($var)) {
                return gettype($var) == "string" ? true : false;
            }
            return false;
        }

        function checkMail($var)
        {
            if (!empty($var)) {
                return filter_var($var, FILTER_VALIDATE_EMAIL);
            }
            return false;
        }

        function checkUrl($var)
        {
            if (!empty($var)) {
                return filter_var($var, FILTER_VALIDATE_URL);
            }
            return false;
        }

        function checkSexo($var)
        {
            return $var === "Hombre" || $var === "Mujer";
        }

        function checkConvivientes($var)
        {
            return filter_var($var, FILTER_VALIDATE_INT);
        }

        function checkHobbies($var)
        {
            $validateHobbies = ["Deportes", "Música", "Viajar", "Videojuegos"];

            foreach ($var as $value) {
                if (!in_array($value, $validateHobbies))
                    return false;
            }
            return true;
        }

        function checkMenu($var)
        {
            $validateMenus = ["Pizza", "Hamburguesa", "Ensalada", "Croquetas"];

            foreach ($var as $value) {
                if (!in_array($value, $validateMenus))
                    return false;
            }
            return true;
        }
        ?>


        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
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
            <div class="mb-3">
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