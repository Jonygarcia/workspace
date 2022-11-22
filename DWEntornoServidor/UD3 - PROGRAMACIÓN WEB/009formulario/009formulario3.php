<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <title>009formulario3</title>
    <?php
    session_start();

    $_SESSION["numConvivientes"] = $_POST["numConvivientes"] ?? "";
    $_SESSION["hobbies"] = $_POST["hobbies"] ?? [];
    $_SESSION["menu"] = $_POST["menu"] ?? [];

    $name = $_SESSION["name"] ?? "";
    $lastname = $_SESSION["lastname"] ?? "";
    $email = $_SESSION["email"] ?? "";
    $url = $_SESSION["url"] ?? "";
    $sex = $_SESSION["sex"] ?? "";
    $numConvivientes = $_SESSION["numConvivientes"];
    $hobbies = $_SESSION["hobbies"];
    $favMenu = $_SESSION["menu"];
    ?>
</head>

<body>
    <div class="container-fluid col-6">
        <table class="table text-center mt-3 align-items-center">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Email</th>
                    <th scope="col">URL</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Número de convivientes</th>
                    <th scope="col">Aficiones</th>
                    <th scope="col">Menú favorito</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $name ?></td>
                    <td><?= $lastname ?></td>
                    <td><?= $email ?></td>
                    <td><?= $url ?></td>
                    <td><?= $sex ?></td>
                    <td><?= $numConvivientes ?></td>
                    <td>
                        <?php
                        if (!empty($hobbies)) {
                            foreach ($hobbies as $key => $hobby) {
                                echo "$hobby </br>";
                            }
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if (!empty($favMenu)) {
                            foreach ($favMenu as $key => $menu) {
                                echo "$menu </br>";
                            }
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>