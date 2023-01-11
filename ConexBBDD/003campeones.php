<?php include_once "conexion.php" ?>
<!-- Modifica el archivo 001campeones.php y guárdalo como 003campeones.php para que se 
muestre como una tabla con las columnas de la propia tabla de la base de datos, es decir; id, 
nombre, rol, dificultad, descripción.  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script defer src="./js/custom.js" type="text/javascript"></script>
    <title>003campeones</title>
    <?php
    $conn = connectBd();

    $order = $_GET["order"] ?? "";
    $col = $_GET["col"] ?? "";
    ?>
</head>

<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">
                    ID
                    <a href="003campeones.php?col=id&order=ASC" class="text-decoration-none text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
                        </svg>
                    </a>
                    <a href="003campeones.php?col=id&order=DESC" class="text-decoration-none text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </a>
                </th>

                <th scope="col">
                    Nombre
                    <a href="003campeones.php?col=name&order=ASC" class="text-decoration-none text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
                        </svg>
                    </a>
                    <a href="003campeones.php?col=name&order=DESC" class="text-decoration-none text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </a>
                </th>

                <th scope="col">
                    Rol
                    <a href="003campeones.php?col=rol&order=ASC" class="text-decoration-none text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
                        </svg>
                    </a>
                    <a href="003campeones.php?col=rol&order=DESC" class="text-decoration-none text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </a>
                </th>

                <th scope="col">
                    Dificultad
                    <a href="003campeones.php?col=difficulty&order=ASC" class="text-decoration-none text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
                        </svg>
                    </a>
                    <a href="003campeones.php?col=difficulty&order=DESC" class="text-decoration-none text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </a>
                </th>

                <th scope="col" class="col-8">
                    Descripción
                    <a href="003campeones.php?col=description&order=ASC" class="text-decoration-none text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
                        </svg>
                    </a>
                    <a href="003campeones.php?col=description&order=DESC" class="text-decoration-none text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>

            <?php

            if (($order == "ASC" || $order == "DESC") && ($col == "id" || $col == "name" || $col == "rol" || $col == "difficulty" || $col == "description")) {
                $query = "SELECT * FROM `champ` ORDER BY $col $order";
            } else {
                $query = "SELECT * FROM `champ`";
            }

            $arrayChamps = mysqli_query($conn, $query);

            if ($arrayChamps) {
                foreach ($arrayChamps as $champion) {
                    echo "<tr>
                            <td>$champion[id]</td>
                            <td>$champion[name]</td>
                            <td>$champion[rol]</td>
                            <td>$champion[difficulty]</td>
                            <td>$champion[description]</td>
                        </tr>";
                }
            }
            ?>

        </tbody>
    </table>

</body>

</html>