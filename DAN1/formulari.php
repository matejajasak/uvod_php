<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="skripta_za_obradu_podataka_iz_forme.php" method="get">

        <div>
            <label for="name">Vaše ime:</label>
            <input type="text" name="name" id="name">
        </div>
        <br>
        <div>
            <label for="email">Vaš email:</label>
            <input type="email" name="email" id="email">
        </div>
        <br>
        <div>
            <label for="password">Zaporka:</label>
            <input type="password" name="password" id="password">
        </div>
        <br>
        <div>
            <label for="newsletter">Newsletter:</label>
            <input type="checkbox" name="newsletter" id="newsletter" value="da">
        </div>
        <br>
        <div>
            <label for="fender">Spol:</label>
            <input type="radio" name="gender" id="gender" value="m">Muško
            <input type="radio" name="gender" id="gender" value="f">Žensko
        </div>
        <br>
    </form>
</body>
</html>