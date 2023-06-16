<?php
$current_time = date("H:i");

if ($current_time < "12:00") {
    echo "Goedemorgen";
} elseif ($current_time >= "12:00" && $current_time < "18:00") {
    echo "Goedemiddag";
} else {
    echo "Goedenavond";
}
//deel2
echo "<br>";

function opsommen($a, $b) {
return $a ; $b;
}
echo opsommen(5, 10) ."\n";
echo "<br>";

//deel3

function resterende_dagen_tot_einde_jaar() {
   
    $huidige_datum = date("Y-m-d");
    
    
    $einde_van_het_jaar = date("Y-12-31");
  
    $resterende_seconden = strtotime($einde_van_het_jaar) - strtotime($huidige_datum);

    $resterende_dagen = ceil($resterende_seconden / (60 * 60 * 24));
    
    echo "Resterende dagen tot het einde van het jaar: " . $resterende_dagen;
}
resterende_dagen_tot_einde_jaar();

    
    echo "<br>";
    
    
    ?>

    <?php
    //deel4
    function bereken_totale_lengte($strings) {
        $totale_lengte = 0;
        
        foreach ($strings as $string) {
            $totale_lengte += strlen($string);
        }
        
        return $totale_lengte;
    }
    $strings = ["Mijn, Naaam, Is, Fiza"];
$totale_lengte = bereken_totale_lengte($strings);

echo "De lengte van de strings is: " . $totale_lengte;

    ?>