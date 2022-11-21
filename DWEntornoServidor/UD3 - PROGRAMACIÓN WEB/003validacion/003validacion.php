<!-- 003validacion.php: A partir del formulario anterior, introduce validaciones en HTML 
mediante el atributo required de los campos (uso los tipos adecuados para cada 
campo), y en comprueba los tipos de los datos y que cumplen los valores esperados 
(por ejemplo, en los checkboxes que los valores recogidos forman parte de todos los 
posibles). Puedes probar a pasarle datos erróneos vía URL y comprobar su 
comportamiento. Tip: Investiga el uso de la función filter_var. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <title>002formulario</title>
</head>

<body>
    <div class="container-fluid col-3">
        <?php
        $patternText = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
        $allOk = true;
        $listHobbies = ["Deportes", "Música", "Viajar", "Videojuegos"];
        $listMenu = ["Pizza", "Hamburguesa", "Ensalada", "Croquetas"];

        if (!empty($_GET)) {

            $name = $_GET["name"] ?? "";
            $lastname = $_GET["lastname"] ?? "";
            $email = $_GET["email"] ?? "";
            $url = $_GET["url"] ?? "";
            $sex = $_GET["sex"] ?? "";
            $numConvivientes = $_GET["numConvivientes"] ?? 0;
            $hobbies = $_GET["hobbies"] ?? [];
            $favMenu = $_GET["menu"] ?? [];

            if ($name === "" || gettype($name) != "string" || !preg_match($patternText, $name)) {
                $allOk = false;
                $name = "";
            }

            if ($lastname === "" || gettype($lastname) != "string" || !preg_match($patternText, $lastname)) {
                $allOk = false;
                $lastname = "";
            }

            if ($email === "" || gettype($email) != "string" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $allOk = false;
                $email = "";
            }

            if ($url === "" || gettype($url) != "string" || !filter_var($url, FILTER_VALIDATE_URL)) {
                $allOk = false;
                $url = "";
            }

            if ($sex !== "Hombre" && $sex !== "Mujer") {
                $allOk = false;
                $sex = "";
            }

            if ($numConvivientes === 0 || !filter_var(intval($numConvivientes), FILTER_VALIDATE_INT, intval($numConvivientes) > 0)) {
                $allOk = false;
                $numConvivientes = 1;
            }

            if (count($hobbies) > 0) {
                foreach ($hobbies as $value) {
                    if (!in_array($value, $listHobbies)) {
                        $allOk = false;
                        unset($hobbies[$value]);
                    }
                }
            } else {
                $allOk = false;
            }

            if (count($favMenu) > 0) {
                foreach ($favMenu as $value) {
                    if (!in_array($value, $listMenu)) {
                        $allOk = false;
                        unset($favMenu[$value]);
                    }
                }
            } else {
                $allOk = false;
            }
        } 
        
        if (!empty($_GET) && $allOk) {
            echo "Formulario cumplimentado correctamente";
        } else {
        ?>

            <form action="003validacion.php" method="GET">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" value="<?php if (isset($name)) echo $name ?>" required>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="lastname" value="<?php if (isset($lastname)) echo $lastname ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php if (isset($email)) echo $email ?>" required>
                </div>
                <div class="mb-3">
                    <label for="url" class="form-label">URL Página Personal</label>
                    <input type="url" class="form-control" name="url" value="<?php if (isset($url)) echo $url ?>" required>
                </div>
                <div class="mb-3">
                    <label>Sexo</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sex" value="Hombre" id="male" <?php if (isset($sex) && ($sex === "Hombre" || $sex === "")) echo "checked"; ?>>
                        <label class="form-check-label" for="male">
                            Hombre
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sex" value="Mujer" id="female" <?php if (isset($sex) && ($sex === "Mujer")) echo "checked"; ?>>
                        <label class="form-check-label" for="female">
                            Mujer
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numConvivientes" class="form-label">Número de convivientes en el domicilio</label>
                    <input type="number" class="form-control" min="1" value="<?php if (isset($numConvivientes)) echo $numConvivientes ?>" name="numConvivientes"  required>
                </div>
                <div class="mb-3">
                    <label class="d-block">Aficiones</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="hobbies[]" value="Deportes" <?php if (isset($hobbies) && (count($hobbies) > 0 && in_array("Deportes", $hobbies))) echo "checked" ?>>
                        <label class="form-check-label" for="hobbies[]">Deportes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="hobbies[]" value="Música" <?php if (isset($hobbies) && (count($hobbies) > 0 && in_array("Música", $hobbies))) echo "checked" ?>>
                        <label class="form-check-label" for="hobbies[]">Música</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="hobbies[]" value="Viajar" <?php if (isset($hobbies) && (count($hobbies) > 0 && in_array("Viajar", $hobbies))) echo "checked" ?>>
                        <label class="form-check-label" for="hobbies[]">Viajar</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="hobbies[]" value="Videojuegos" <?php if (isset($hobbies) && (count($hobbies) > 0 && in_array("Videojuegos", $hobbies))) echo "checked" ?>>
                        <label class="form-check-label" for="hobbies[]">Videojuegos</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label>Menú favorito</label>
                    <select name="menu[]" class="form-select" multiple="true">
                        <option value="Pizza" <?php if (isset($favMenu) && (count($favMenu) > 0 && in_array("Pizza", $favMenu))) echo "selected" ?>>Pizza</option>
                        <option value="Hamburguesa" <?php if (isset($favMenu) && (count($favMenu) > 0 && in_array("Hamburguesa", $favMenu))) echo "selected" ?>>Hamburguesa</option>
                        <option value="Ensalada" <?php if (isset($favMenu) && (count($favMenu) > 0 && in_array("Ensalada", $favMenu))) echo "selected" ?>>Ensalada</option>
                        <option value="Croquetas" <?php if (isset($favMenu) && (count($favMenu) > 0 && in_array("Croquetas", $favMenu))) echo "selected" ?>>Croquetas</option>
                    </select>
                </div>
                <input type="submit" name="Enviar" class="btn btn-primary">
            </form>
        <?php } ?>
    </div>
</body>

</html>