<?php

if (isset($_POST["ok"])) {

    include "includes/connection.php";

    $vardas = $_POST["vardas"];
    $pavarde = $_POST["pavarde"];
    $el_pastas = $_POST["elpastas"];
    $password = $_POST["password"];
    $hash_pass = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO vartotojai (vardas, pavarde, el_pastas, password) VALUES ('$vardas', '$pavarde', '$el_pastas', '$hash_pass')";

    if (mysqli_query($conn, $sql)) {
        Header("Location: home.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

}

