<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tindirindiriuska</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<div class="forma">
    <form action="register.php" method="post">

        <label for="vardas">Jūsų vardas:</label><br><br>
        <input type="text" name="vardas" id="vardas" required>
        <br><br>
        <label for="pavarde">Jūsų pavardė:</label><br><br>
        <input type="text" name="pavarde" id="pavarde" required>
        <br><br>
        <label for="elpastas">El.paštas:</label><br><br>
        <input type="email" name="elpastas" id="elpastas" required>
        <br><br>
        <label for="password">Slaptažodis:</label><br><br>
        <input type="password" name="password" id="password" required><br>
        <br><br>
        <input type="submit" id="ok" name="ok">

    </form>
</div>



</body>
</html>



