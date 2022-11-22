<!-- 011login.php: hace de controlador, por lo que debe comprobar los datos recibidos 
(solo permite la entrada de usuario/usuario y si todo es correcto, ceder el control a la 
vista del siguiente ejercicio. No contiene código HTML. -->
<?php 

$user = $_POST["user"] ?? "";
$user = strtolower($user);
$password = $_POST["password"] ?? "";
$password = strtolower($password);

if ($user === "usuario" && $password === "usuario") {
    session_start();
    $_SESSION["user"] = $user;
    header("location:012peliculas.php");
} else {
    header("location:010index.php?logged=false");
}