<?php include_once "conexion.php" ?>
<!-- Modifica el archivo 001campeones.php y guárdalo como 002campeones.php pero pon al lado 
de cada uno de los campeones listados un botón para editar y otro para borrar. Cada uno de 
esos botones hará la correspondiente función dependiendo del id del campeón seleccionado. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script defer src="./js/custom.js" type="text/javascript"></script>
    <title>002campeones</title>
    <?php
    $conn = connectBd();

    $query = "SELECT * FROM `champ`";
    $arrayChamps = mysqli_query($conn, $query);
    ?>
</head>

<body>
    <?php
    foreach ($arrayChamps as $champion) {

        echo "<br><strong>Nombre: $champion[name]</strong><br>
                Rol: $champion[rol]<br>
                Dificultad: $champion[difficulty]<br>
                Descripción: $champion[description]<br>";
    ?>

        <a href="003editando.php?id=<?= $champion['id'] ?>"><button class="btn btn-primary">Editar</button></a>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?= $champion['id'] ?>">
            Borrar
        </button>


        <!-- Modal -->
        <div class="modal fade" id="modal<?= $champion['id'] ?>" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalLabel">Confirmar eliminar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Está seguro que deseas borrar el campeón <?= $champion["name"] ?>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="deleteChamp.php?id=<?= $champion['id'] ?>"><button type="button" class="btn btn-primary">Estoy seguro</button></a>
                    </div>
                </div>
            </div>
        </div>

    <?php
        echo "<br>";
    }
    ?>
</body>

</html>