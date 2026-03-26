<?php
$n = 27; // skaičius kuri reikia pakeisti jei nori kitos sekos
$originalus_sk = $n;
$iteracijos = 0;

echo "Pradinis skaičius: $originalus_sk <br>";
echo "Seka: ";

//Ciklas veiks tol, kol skaičius taps 1

while ($n != 1) {

// spausdina skaiciu
    echo $n . " -> ";

    if ($n % 2 == 0) { // Lyginis

     //Jei lyginis dalinama iš 2

    $n = $n / 2;

    } else { // Nelyginis

        // Jei nelyginis  padauginama iš 3 ir pridedamas 1

    $n = ($n * 3 ) + 1;

    }

    $iteracijos++;

}

echo "1 <br>";

echo "Atlikta iteracijų: $iteracijos";
?>