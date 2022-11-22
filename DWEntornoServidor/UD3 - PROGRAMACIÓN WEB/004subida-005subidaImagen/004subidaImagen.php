<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <title>004subida</title>
</head>

<body>
    <div class="container-fluid col-3 mt-4">
        <?php
        $allOk = false;

        if (!empty($_POST)) {

            $widthImage = $_POST["width"] ?? 0;
            $heightImage = $_POST["height"] ?? 0;

            if (isset($_FILES['image'])) {
                $errors = array();
                $file_name = $_FILES['image']['name'];
                $file_size = $_FILES['image']['size'];
                $file_tmp = $_FILES['image']['tmp_name'];
                $file_type = $_FILES['image']['type'];
                $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                $extensions = array("jpeg", "jpg", "png");
                if (!in_array($file_ext, $extensions)) {
                    $errors[] = "Extensión de archivo no permitida, prueba a subir un fichero jpeg, jpg o png.";
                }
                if ($file_size > 2097152) {
                    $errors[] = 'El archivo no puede pesar más de 2MB';
                }
                if (empty($errors)) {
                    move_uploaded_file($file_tmp, "./uploads/" . $file_name);
                    $image = "./uploads/" . $file_name;
                    echo "La imagen se ha guardado correctamente";
                    $allOk = true;
                } else {
                    print_r($errors);
                }
            }

            if ($widthImage === 0 || !filter_var(intval($widthImage), FILTER_VALIDATE_INT, intval($widthImage) > 0)) {
                $allOk = false;
                $widthImage = 0;
            }

            if ($heightImage === 0 || !filter_var(intval($heightImage), FILTER_VALIDATE_INT, intval($heightImage) > 0)) {
                $allOk = false;
                $heightImage = 0;
            }
        }

        if (!empty($_POST) && $allOk) {
            echo "<br>La subida se ha realizado correctamente";
        } else {
            echo print_r($errors);
        }
        ?>
        <form enctype="multipart/form-data" action="004subidaImagen.php" method="POST">
            <div class="mb-3">

                <label for="image" class="form-label">Subir un archivo</label>
                <input type="file" class="form-control" name="image" required>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="anchura" class="form-label">Altura</label>
                    <input type="number" class="form-control" min="1" name="width" value="<?php if (isset($widthImage)) echo $widthImage ?>" required>
                </div>
                <div class="col">
                    <label for="altura" class="form-label">Altura</label>
                    <input type="number" class="form-control" min="1" name="height" value="<?php if (isset($heightImage)) echo $heightImage ?>" required>
                </div>
            </div>
            <input type="submit" name="Enviar" class="btn btn-primary">
        </form>
    </div>
    <div class="container-fluid col-12 text-center">
        <img class="mt-3" src="<?php if (empty($errors) && isset($_POST)) echo $image . '"style= width:' . $widthImage . "px;height:" . $heightImage . "px" ?>">
    </div>
</body>

</html>