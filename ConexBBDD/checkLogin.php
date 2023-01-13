<?php
include_once "conexion.php";

if ($_POST) {

    $exist = false;

    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username != "" && $password != "") {
        $conn = connectBdPDO();

        // Comprobar que ese usuario existe
        $sql = "SELECT `username` FROM user";

        $query = $conn->prepare($sql);
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute();

        while($row = $query -> fetch()) {
            if ($username == $row["username"]) {
                $exist = true;
                break;
            }
        }

        if ($exist) {
            $sql = "SELECT * FROM user WHERE `username` = ?";

            $query = $conn->prepare($sql);
            $query->execute([$username]); 
    
            $user = $query->fetch();
    
            if($user && password_verify($password, $user['password'])){
                $conn = null;
                header("Location: 003campeones.php");
            } else {
                $conn = null;
                header("Location: login.php?login=failed");
            }
        } else {
            $conn = null;

            header("Location: login.php?login=false");
        }
    }
} else {
    header("Location: login.php?login=empty");
}
