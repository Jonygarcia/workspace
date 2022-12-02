<?php
session_start();
unset($_SESSION["user"]);
unset($_SESSION["peliculas"]);
unset($_SESSION["series"]);
session_destroy();
header("Location:010index.php");
