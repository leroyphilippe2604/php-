<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get" action="">
    <label for="Genre"> Genre : </label>
    <input type="radio" name="Genre" value="Miss"> F
    <input type="radio" name="Genre" value="Mister"> M<br>
    <input type="submit" name="submit" value="Greet me now">
</form>
    <?php
    $hello = "bienvenue";
    $genre = $_GET["Genre"];

    $genre = ($genre =="Miss") ? "Miss" : "Mister";

    echo $hello." ". $genre;

    ?>
</body>
</html>