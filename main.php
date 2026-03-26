<?php
//Įtraukiamas failas, kuriame yra Collatz klasė
require 'Collatz.php';
//Sukuriamas naujas Collatz klasės objektas
$objektas = new Collatz();
//Iškviečiama funkcija, kuri apskaičiuoja statistiką intervale nuo 700 iki 45044
$rezultatai = $objektas->gautiStatistika(700, 45044); //reikia pakeisti jei nori kito intervalo

//isvedamas rezultatas

//Parodomas skaičius, kuriam prireikė daugiausia iteracijų, kol pasiekė 1
echo "Skaičius su daugiausia iteracijų: <b>" . $rezultatai['daugiausia_it']['sk'] . "</b> (" . $rezultatai['daugiausia_it']['kiekis'] . ")<br>";

//Parodomas skaičius, kuriam prireikė mažiausiai iteracijų
echo "Skaičius su mažiausia iteracijų: <b>" . $rezultatai['maziausia_it']['sk'] . "</b> (" . $rezultatai['maziausia_it']['kiekis'] . ")<br>";

//Parodomas skaičius, kuris pasiekė didžiausią reikšmę Collatz sekoje
echo "Skaičius su didžiausia pasiekta reikšme: <b>" . $rezultatai['didziausia_re']['sk'] . "</b> (pasiekė " . $rezultatai['didziausia_re']['reiksme'] . ")<br>";