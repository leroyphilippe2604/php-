<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $name = "philippe";
    $age = "26";
    $color = "blue";
    $family = ["Sylviane", "Christian", "Romain", "Johanne"];
    $hungry = false;

    echo '<p> Hi! My name is '. $name . '.</p>';
    echo '<p> I am '. $age . 'years old.</p>';
    echo '<p> my eyes are '. $color . '</p>';
    echo '<p> The first personn in my family is '. $family[0] .'</p>';
?>
</body>
</html>


