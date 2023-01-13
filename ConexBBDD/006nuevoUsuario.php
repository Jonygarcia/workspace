<?php include_once "conexion.php"?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script defer src="./js/custom.js" type="text/javascript"></script>
    <title>005registro</title>
</head>

<body>
    <?php
    if ($_POST){

        $name = $_POST["name"] ?? "";
        $username = $_POST["username"] ?? "";
        $email = $_POST["email"] ?? "";
        $password = $_POST["password"] ?? "";
    
        //* No valido con expresiones regulares porque voy justo de tiempo
    
        if ($name != "" && $username != "" && $email != "" && $password != "") {
            try {
                $conn = connectBdPDO();
    
                $sql = "INSERT INTO user(`name`, `username`, `password`, `email`) VALUES (:name, :username, :password, :email)";
    
                $query = $conn->prepare($sql);
                $query->execute([
                    "name" => $name,
                    "username" => $username,
                    "password" => password_hash($password, PASSWORD_DEFAULT),
                    "email" => $email
                ]);
    
                echo '
                    <div class="alert alert-success" role="alert">
                    Te has registrado con éxito ' . $name . '!! Tus credenciales son: Usuario ' . $username . ' Contraseña ' . $password . ' 
                    <a href="#" class="alert-link">Ir al inicio de sesión</a>
                    </div>';
    
                $conn = null;
                header('refresh: 5; login.php');
    
            } catch (PDOException $e) {
                if ($e->getCode() == 23000) {
                    $conn = null;
                    header('Location: 005registro.php?reg=exist');
                } else {
                    $conn = null;
                    header('Location: 005registro.php?reg=failed');
                }
            }
        } else {
            header('Location: 005registro.php?reg=empty');
        }
    } else {
        header('Location: 005registro.php');
    }  
    ?>
</body>

</html>