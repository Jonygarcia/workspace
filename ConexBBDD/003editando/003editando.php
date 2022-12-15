<?php include_once "../conexion.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <title>003editando</title>
    <?php
    $id = $_GET["id"];

    $conn = connectBd();
    $query = "SELECT * FROM `champ` WHERE `id` = $id";
    $champion = mysqli_query($conn, $query);

    if ($champion) {
        foreach ($champion as $value) {
            $name = $value["name"];
            $rol = $value["rol"];
            $diff = $value["difficulty"];
            $descr = $value["description"];
        }
    }
    ?>
</head>

<body>
    <form class="mx-5" action="../editChamp.php" method="POST">
        <div class="form-group" disabled hidden>
            <label for="id">ID</label>
            <input type="number" class="form-control" id="id" name="id" value="<?= $id ?>" required>
        </div>
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $name ?>" required>
        </div>
        <div class="form-group">
            <label for="rol">Rol</label>
            <select class="form-select" id="rol" name="rol" required>
                <option <?php if ($rol == "Asesino") echo "selected" ?>>Asesino</option>
                <option <?php if ($rol == "Luchador") echo "selected" ?>>Luchador</option>
                <option <?php if ($rol == "Mago") echo "selected" ?>>Mago</option>
                <option <?php if ($rol == "Tirador") echo "selected" ?>>Tirador</option>
                <option <?php if ($rol == "Apoyo") echo "selected" ?>>Apoyo</option>
                <option <?php if ($rol == "Tanque") echo "selected" ?>>Tanque</option>
            </select>
        </div>
        <div class="form-group">
            <label for="difficulty">Dificultad</label>
            <select class="form-select" id="difficulty" name="difficulty" required>
                <option <?php if ($diff == "Baja") echo "selected" ?>>Baja</option>
                <option <?php if ($diff == "Moderada") echo "selected" ?>>Moderada</option>
                <option <?php if ($diff == "Alta") echo "selected" ?>>Alta</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea class="form-control" id="description" name="description" rows="4" required><?= $descr ?></textarea>
        </div>
        <div class="form-group text-center">
            <input class=" mt-3 btn btn-primary" type="submit" name="Enviar">
        </div>
    </form>
</body>

</html>