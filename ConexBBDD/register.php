<?php
include_once "conexion.php";

$name = $_POST["name"] ?? "";
$username = $_POST["username"] ?? "";
$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";

//* No valido con expresiones regulares porque voy justo de tiempo

if ($name != "" && $username != "" && $email != "" && $password != ""){
    try{
        $conn = connectBdPDO();

        $sql = "INSERT INTO user(name, username, password, email) VALUES (:name, :username, :password, :email)";

        $query = $conn->prepare($sql);
        $query->execute([
            "name" => $name,
            "username" => $username,
            "password" => password_hash($password, PASSWORD_DEFAULT),
            "email" => $email
        ]);

    } catch (PDOException $e) {
        echo ("Se ha producido un error al introducir el usuario en el sistema: " . $e->getMessage());
    }

    $conn = null;
}




