<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicorn</title>
</head>
<body>
<form method="get" action="">
    <label for="Genre"> Genre : </label>
    <input type="radio" id="human" name="Genre" value="human"> un human
    <input type="radio" id="cat" name="Genre" value="cat"> un chat
    <input type="radio" id="unicorn" name="Genre" value="unicorn"> une licorne<br>
	<input type="submit" name="submit" value="Greet me now">
    <?php
    $human = '<img src="human.gif" alt="">';
    $cat = '<img src="cat.gif" alt="">';
    $unicorn = '<img src="unicorn.gif" alt="">';

    if (isset($_GET["Genre"])) echo ($_GET["Genre"] == "human" ? $human :($_GET["Genre"] == "cat" ? $cat : $unicorn));
    ?>
</form>  
</body>
</html>