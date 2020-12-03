<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <?php
    $pronouns = array("I", "You", "He/She", "We", "You", "They" );

    foreach ($pronouns as $pronoun){
        echo $pronoun . " code <br>";
    }
    ?>
</body>
</html>