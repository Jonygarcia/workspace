<?php
include_once "conexion.php";

function createUser($name, $username, $password, $email){

    $conn = connectBdPDO();

    $sql = "INSERT INTO user(name, username, password, email) VALUES (:name, :username, :password, :email)";

    $query = $conn->prepare($sql);
    $query->execute([
        "name" => $name,
        "username" => $username,
        "password" => password_hash($password, PASSWORD_DEFAULT),
        "email" => $email
    ]);
}

createUser("Pepe", "Pepito", "holaquetal", "pepito22@gmail.com");
createUser("Luis", "LuisitoComunica", "miperromola", "luisito@comunica.com");
createUser("admin", "admin", "admin", "admin@admin.es");