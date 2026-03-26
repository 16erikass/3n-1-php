<?php
require 'Collatz.php';

$objektas = new Collatz();
$rezultatai = $objektas->gautiStatistika(700, 45044); //reikia pakeisti jei nori kito intervalo

//isvedamas rezultatas

echo "Skaičius su daugiausia iteracijų: <b>" . $rezultatai['daugiausia_it']['sk'] . "</b> (" . $rezultatai['daugiausia_it']['kiekis'] . ")<br>";
echo "Skaičius su mažiausia iteracijų: <b>" . $rezultatai['maziausia_it']['sk'] . "</b> (" . $rezultatai['maziausia_it']['kiekis'] . ")<br>";
echo "Skaičius su didžiausia pasiekta reikšme: <b>" . $rezultatai['didziausia_re']['sk'] . "</b> (pasiekė " . $rezultatai['didziausia_re']['reiksme'] . ")<br>";