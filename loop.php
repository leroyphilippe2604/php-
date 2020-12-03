<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>

    <?php

    $start = array("Kulti", "Manon", "Yvan");
    $pays = array("Belgique", "France", "Pays-bas", "Allemagne", "Espagne", "Portugal", "Suisse", "Brésil", "Suede", "USA");
    $pays_iso = array("BE", "FR", "HO", "AL", "ES", "PO", "SU", "BZ", "SU", "US");


    echo '<br><br><select name="countries" id="country-select">';
    foreach($pays as $country){
        echo '<option value="'.$country.'">'.$country.'</option>';
    }
    echo '</select>';

    $countriesAndISO = array_combine($pays_iso,$pays);

echo '<br><br><select name="countries" id="country-select">';
foreach($countriesAndISO as $ISO => $country){
    echo '<option value="'.$ISO.'">'.$country.'</option>';
}
echo '</select>';

    for ($i=0; $i < 3; $i++) { 
        echo $start[$i];
    }

/*     for ($i=1; $i <= 120 ; $i++) {
        echo $i ."<br>";
    } */
    
/*     $a = 1;

    while ($a <= 120) {    
        echo $a . "<br>";
        $a++;
    } */
    ?>
</body>
</html>