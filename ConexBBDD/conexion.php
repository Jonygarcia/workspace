<?php

function connectBd()
{
    $conn = mysqli_connect("localhost", "root", "", "lol");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    return $conn;
}

function connectBdPDO()
{
    $dsn = "mysql:dbname=lol;host=localhost";
    $user = "root";
    $password = "";

    try{
        $mbd = new PDO($dsn, $user, $password);
        $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed to connect to MySQL: " . $e->getMessage();
    }

    return $mbd;
}