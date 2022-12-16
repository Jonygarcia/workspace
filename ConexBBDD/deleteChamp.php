<?php
include_once "conexion.php";

$conn = connectBd();

$id = $_GET["id"];

echo $id;

// $query = "DELETE * FROM `champ` WHERE `id` = $id";

// mysqli_query($conn, $query);

// header("Location: 002campeones.php");
