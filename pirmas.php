<?php
$n = 27; // skaičius kuri reikia pakeisti jei nori kitos sekos
$originalus_sk = $n;
$iteracijos = 0;

echo "Pradinis skaičius: $originalus_sk <br>";
echo "Seka: ";
// vykdomas ciklas iki 1
while ($n != 1) {

// spausdina skaiciu
    echo $n . " -> ";

    if ($n % 2 == 0) { // Lyginis

    $n = $n / 2;

    } else { // Nelyginis

    $n = ($n * 3 ) + 1;

    }

    $iteracijos++;

}

echo "1 <br>";

echo "Atlikta iteracijų: $iteracijos";
?>