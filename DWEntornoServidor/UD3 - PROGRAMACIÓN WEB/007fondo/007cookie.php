<?php 

$color = $_GET["color"] ?? "";

echo $color;
setcookie('color', $color, time()+86400);
header("location:007fondo.php");
