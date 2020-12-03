<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form method="get" action="">
	<label for="age">Your age : </label>
	<input type="number" name="age">
    <label for="Genre"> Genre : </label>
    <input type="radio" name="Genre" value="Miss"> une femme
    <input type="radio" name="Genre" value="Mister"> un homme<br>
    <label for="English"> English : </label>
    <input type="radio" name="English" value="Hello"> oui
    <input type="radio" name="English" value="Aloha"> non 
	<input type="submit" name="submit" value="Greet me now">
</form>  
<?php
if (isset($_GET['age'], $_GET['Genre'], $_GET["English"] ) && !empty($_GET['age']) && !empty($_GET['Genre']) && !empty($_GET["English"])){
	// Form processing
    $age = $_GET['age'];
    $genre = $_GET['Genre'];
    $english = $_GET["English"];

    if ($age <= 12) {
        if ($genre == "Miss"){
            if ($english == "Hello") {
                echo "Hello Little Miss";
            } elseif ($english == "Aloha") {
                echo "Aloha Little Miss";
            }
        } elseif ($genre == "Mister") {
            if ($english == "Hello")
                echo "Hello Little boy";
            elseif ($english == "Aloha") {
                echo "Aloha Little Boy";
            }
        };
    } elseif ($age >= 12 && $age <= 18) {
        if ($genre == "Miss") {
            if ($english == "Hello"){
                echo "Hello Miss Teen";
            } elseif ($english == "Aloha") {
                echo "Aloha Miss Teen";
            }
        } elseif ($genre == "Mister") {
            if ($english == "Hello") {
                echo "Hello Mister Teen";
            } elseif ($english == "Aloha") {
                echo "Aloha Mister Teen";
            }
        }
    } elseif ($age >= 18 && $age <= 115) {
        if ($genre == "Miss") {
            if ($english == "Hello") {
                echo "Hello Miss";
            } elseif ($english == "Aloha") {
                echo "Aloha Miss";
            }
        } elseif ($genre == "Mister") {
            if ($english == "Hello") {
                echo "Hello Mister";
            } elseif ($english == "Aloha") {
                echo "Aloha Mister";
            }
        }
    } elseif ($age > 115) {
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }
}
?>

</body>
</html>