<?php include_once "conexion.php" ?>
<!-- Crea el archivo 001campeones.php donde listes todos los campeones del LOL que has metido 
en tu base de datos. Acuérdate que para ello deberás hacer una conexión con la base de datos 
y un foreach para cada campeón que tengas albergado en la tabla champ. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
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
    }
    ?>
</body>

</html>