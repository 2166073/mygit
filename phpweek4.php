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
    for ($num = 0; $num <= 50; $num++) {
        echo $num . "<br>";
    }
echo "<br>";
//deel2.
    $klasgenoten = array(
        "Alice", "Bob", "Charlie", "David", "Eve", "Frank", "Grace", "Henry", "Ivy","Jack" );
    
    foreach ($klasgenoten as $naam) {
        echo $naam . "<br>";
    }
    echo "<br>";
    //deel3.

    $maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];

$aantalMaanden = count($maanden); // Lengte van het array verkrijgen

for ($i = 0; $i < $aantalMaanden; $i++) {
    echo 'Maand ' . ($i + 1) . ' is ' . $maanden[$i] . '.<br />';
}
//deel4.

$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];

$i = 1;
foreach ($maanden as $maand) {
    echo 'Maand ' . $i . ' is ' . $maand . '.<br />';
    $i++;
}

    ?>
</body>
</html>