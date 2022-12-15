<?php include_once "../conexion.php" ?>
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
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        type="text/javascript"></script>
    <title>001campeones</title>
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

        <a href="../003editando/003editando.php?id=<?= $champion['id'] ?>"><button class="btn-dark bg-black text-white">Editar</button></a>
        <a href=""><button class="btn-dark bg-black text-white">Borrar</button></a>

    <?php
        echo "<br>";
    }
    ?>
</body>

</html>