<?php

if (isset($_POST["ok"])) {
    session_start();
    include("includes/connection.php");
    $user = $_POST["elpastas"];
    $pass = $_POST["password"];
    $hash_pass = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "SELECT * FROM vartotojai WHERE el_pastas = '$user' AND password = '$hash_pass'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row["el_pastas"] == $user && $row["password"] == $hash_pass) {
        $_SESSION["login"] = "OK";
        $_SESSION["elpastas"] = $user;
        Header("location: home.php");
    } else {
        echo "Error";
    }

    mysqli_close($conn);
}


