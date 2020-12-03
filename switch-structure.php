<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$note = $_GET['note'];
if (isset($_GET['note']) && !empty($_GET['note'])) {
    switch (true){
        case $note <= 4:
            echo "This work is really bad. What a dumb kid!";
            break;
        case $note >= 5 && $note <= 9:
            echo "This is not sufficient. More studying is required.";
            break;
        case $note == 10:
            echo "barely enough!";
            break;
        case $note >= 11 && $note <= 14:
            echo "not bad";
            break;
        case $note >= 15 && $note <= 18:
            echo "Bravo, bravissimo!";
            break;
        case $note <= 20:
            echo "Too good to be true : confront the cheater!";
            break;
    }
}
?>
<form method="get" action="">
    <label for="note"> your note : </label>
    <input type="" name="note">
</form>

</body>
</html>