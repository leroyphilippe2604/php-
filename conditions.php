<!-- //php becode condition  -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*  $room_is_filthy = true; 
if( $room_is_filthy == true ){
    echo "Yuk, Room is dirty : let's clean it up !";
    cleanup_room($room_is_filthy);
} else {
	echo "<br>Nothing to do, room is neat.";
}
function cleanup_room ($room_is_filthy){
    $room_is_filthy = false;
    echo "<br>Room is now clean!";
}  */

//1.2. Improve it
/* 
  $possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];
$room_filthiness = $possible_states[1]; 

if ($room_filthiness == $possible_states[0]) {
    echo "Yuk, Room is health hazard! Let's clean it up !";
} elseif ($room_filthiness == $possible_states[1]) {
    echo "Yuk, Room is filthy : let's clean it up !";
} elseif ($room_filthiness == $possible_states[2]) {
    echo "Yuk, Room is dirty : let's clean it up !";
} elseif ($room_filthiness == $possible_states[3]) {
    echo "Yuk, Room is clean GG!";
}elseif ($room_filthiness == $possible_states[4]) {
    echo "Yuk, Room is immaculate";
}   */

/* switch ($room_filthiness) {
    case "health hazard":
        echo "Yuk, Room is health hazard! Let's clean it up !";
        break;

    case "filthy":
        echo "Yuk, Room is filthy : let's clean it up !";
        break;

    case "dirty":
        echo "Yuk, Room is dirty : let's clean it up !";
        break;

    case "clean":
        echo "Yuk, Room is clean GG!";
        break;

    case "immaculate":
        echo "Yuk, Room is immaculate";
        break;
}  */

//2. Display a different greeting message depending on the time of the day.

/* $now = date("H:i:s");

if ($now >= date("5:00") && $now <= date("9:00")) {
    echo "Good morning !";
} elseif ($now >= date("9:01") && $now <= date("12:00")) {
    echo "Good day !";
} elseif ($now >= date("12:01") && $now <= date("16:00")) {
    echo "Good afternoon !";
} elseif ($now >= date("16:01") && $now <= date("21:00")) {
    echo "Good evening !";
} else {
    echo "Good night !";
} 
echo "<br> <br> <br>";  */

// 3. "Different greetings according to age" Exercise


if (isset($_GET['age'], $_GET['Genre'], $_GET["English"] ) && !empty($_GET['age']) && !empty($_GET['Genre']) && !empty($_GET["English"])){
	// Form processing
    $age = $_GET['age'];
    $genre = $_GET['Genre'];
    $english = $_GET["English"];

    if ($age['age'] < 12) {
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

/* 
if (isset($_GET['age'], $_GET['sexe'], $_GET["name"] ) && !empty($_GET['age']) && !empty($_GET['sexe']) && !empty($_GET["name"])){
    $age = $_GET['age'];
    $sexe = $_GET['sexe'];
    $name = $_GET['name'];

    if ($age >= 21 && $age <= 40) {
        if ($sexe == "femme") {
            echo "Welcome in the team $name";
        } else {
        echo "Sorry you don't fit the criteria";
        }
    }  */

  if (isset($_GET['note']) && !empty($_GET['note'])) {
    $note = $_GET['note'];
    if ($note <= 4 ) {
        echo "This work is really bad. What a dumb kid!";
    } elseif ($note >= 5 && $note <= 9) {
        echo "This is not sufficient. More studying is required.";
    } elseif ($note == 10) {
        echo "barely enough!";
    } elseif ($note >= 11 && $note <= 14) {
        echo "not bad";
    } elseif ($note >= 15 && $note <= 18) {
        echo "Bravo, bravissimo!";
    } elseif ($note <= 20) {
        echo "Too good to be true : confront the cheater!";
    }
}   
?>


<!-- <form method="get" action="">
<label for="age">Your age : </label>
<input type="" name="age">
<label for="Genre"> Genre : </label>
<input type="radio" name="sexe" value="femme"> une femme
<input type="radio" name="sexe" value="homme"> un homme<br>
<label for="name"> your name : </label>
<input type="" name="nam
<form method="get" action="">
<label for="age">Your age : </label>
<input type="" name="age">
<label for="Genre"> Genre : </label>
<input type="radio" name="sexe" value="femme"> une femme
<input type="radio" name="sexe" value="homme"> un homme<br>
<label for="name"> your name : </label>
<input type="" name="name">e">
<input type="submit" name="submit" value="Greet me now">
</form>  -->
<!-- 
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
</form>   -->

<form method="get" action="">
<label for="note"> your note : </label>
<input type="" name="note">
</form> 


</body>
</html>