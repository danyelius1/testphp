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

<form action="register.php" method="post">

    <label for="vardas">jūsų vardas:</label>
    <input type="text" name="vardas" id="vardas" required>
    <br>
    <label for="pavarde">jūsų pavardė:</label>
    <input type="text" name="pavarde" id="pavarde" required>
    <br>
    <label for="elpastas">el.paštas:</label>
    <input type="email" name="elpastas" id="elpastas" required>
    <br>
    <label for="password">slaptažodis:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <input type="submit" id="ok" name="ok">

</form>

</body>
</html>



