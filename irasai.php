<?php

include "connection.php";

if (isset($_POST["ok"])){


    $pav = $_POST["pav"];
    $text = $_POST["text"];
    $data = date("Y-m-d, H:i:s");

    $sql = "INSERT INTO irasai (pavadinimas, tekstas, data) values ('$pav', '$text', '$data')";


    if (mysqli_query($conn, $sql)) {
        Header("Location: form.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<div class="irasai">
    <form method="post" action="irasai.php">
        <input type="text" id="pav" name="pav" value="pavadinimas" required>
        <textarea name="text" id="text" cols="30" rows="10" required>textas</textarea>
        <input type="submit" name="ok" id="ok" value="ok">
    </form>
</div>

</body>
</html>

