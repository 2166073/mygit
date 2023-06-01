<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //deel1.
   $myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
    $myArray[]='metro';
     echo count($myArray);
    ?><br>
    <?php
    //deel2.
    $myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
    echo "Dit array heeft ".count($myArray)."element";
     echo "<br>";
     
    $myArray[]='metro';
    echo  "Dit array heeft ".count($myArray)."element";
    ?>

    <?php
    //deel3.

    echo "regel 2 bar";
    echo "regel 5 4";
    echo "regel 8 toyota";
    echo "regel 9 volvo, bmw, toyota";
    echo "regel 12 5";
    echo "regel 19 4";
    ?>

    <?php
    //deel4.
    
    $cijferPHP = [4.4, 4.6, 5.6, 6.1, 7.2];

    $gemiddelde = array_sum($cijferPHP) / count($cijferPHP);

    echo "gemiddelde is: $gemiddelde"."<br>";
    echo(round($gemiddelde). "<br>");
    ?>
</body>
</html>