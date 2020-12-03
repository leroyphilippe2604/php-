<?php
    $football = true;
    $total = 0;

    $mother = array(
        'Firstname' => "Sylviane",
        'Age' => 55,
        'Saison' => "été",
        'Favorite movie' => ['La ligne verte', "je ne sais pas"]
    );

    $mother["hobbies"] = ["conduire", "idk", "idk2"];
    
    $me = array(
        'Firstname' => 'Philippe',
        'Lastname' => 'Leroy',
        'Age' => 26,
        'Saison' => "hiver",
        'football' => $football,
        'Favorite movie' => array('Las Vegas Parano', 'Thunderdome', 'New Kid Turbo'),
        'mom' => $mother); 

    $me["hobbies"] = ["jeux video", "musique", "codage","etre fou"];

    echo count($me["hobbies"]);
    echo "<br>";
    $total += count($me["mom"]["hobbies"]);
    $total += count($me["hobbies"]);
    echo $total;

    $me["hobbies"][]='Taxidermy';
    $me["Lastname"] = 'Durand';

    $soulmate = array(
        'Firstname' => 'Eleonore',
        'Lastname' => 'Oups',
        'Age' => 30,
        'Saison' => 'hiver',
    );

    $soulmate["hobbies"] = ["jeux video", "musique", "etre folle"];
    
    $result = array_intersect($me["hobbies"], $soulmate["hobbies"]);
    $fusion = array_merge($me["hobbies"], $soulmate["hobbies"]);

        echo '<pre>';
        print_r($me);
        print_r($soulmate);
        print_r($result);
        print_r($fusion);
        echo '</pre>';

    $web_dev = array(
        'Back-end' => [],
        'Front-end'=> [],
    );
    
    $html = array(0 => "HTML");

    array_push($web_dev['Front-end'], "XHTML");
    array_push($web_dev["Back-end"], 'Ruby on Rails');
    array_push($web_dev['Front-end'], "CSS");
    array_push($web_dev['Front-end'], "Flash");
    array_push($web_dev['Front-end'], "Javascript");

    $web_dev['Front-end'] = array_replace($web_dev['Front-end'], $html);
    unset($web_dev["Front-end"][2]);

    print_r($web_dev);
?>