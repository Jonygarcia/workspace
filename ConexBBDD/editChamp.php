<?php
include_once "conexion.php";

$id = $_POST["id"] ?? "";
$name = $_POST["name"] ?? "";
$rol = $_POST["rol"] ?? "";
$diff = $_POST["difficulty"] ?? "";
$descr = $_POST["description"] ?? "";

$possibleRole = ['Asesino', 'Luchador', 'Mago', 'Tirador', 'Apoyo', 'Tanque'];
$possibleDiff = ['Baja', 'Moderada', 'Alta'];

if ($id != "" && $name != "" && in_array($rol, $possibleRole) && in_array($diff, $possibleDiff) && $descr != ""){
    $conn = connectBd();
} else {
    echo "a";
}