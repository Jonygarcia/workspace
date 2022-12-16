<?php
include_once "conexion.php";

$id = $_POST["id"] ?? "";
$name = $_POST["name"] ?? "";
$rol = $_POST["rol"] ?? "";
$diff = $_POST["difficulty"] ?? "";
$descr = $_POST["description"] ?? "";

$descr = str_replace("'", "", $descr);

$possibleRole = ['Asesino', 'Luchador', 'Mago', 'Tirador', 'Apoyo', 'Tanque'];
$possibleDiff = ['Baja', 'Moderada', 'Alta'];

if ($id != "" && $name != "" && in_array($rol, $possibleRole) && in_array($diff, $possibleDiff) && $descr != ""){
    $conn = connectBd();

    $query = "UPDATE `champ` SET `name` = '$name' , `rol` = '$rol' , `difficulty` = '$diff' , `description` = '$descr' WHERE `id` = '$id'";
    mysqli_query($conn, $query);

    header('Location: 002campeones.php');
} else {
    header('Location: 003editando.php?id='.$id);
}