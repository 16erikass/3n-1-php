<?php
require 'collat.php';

//Sukuriamas objektas iš vaikines klases
$objektas = new CollatzPapildyta();

//reikia pakeisti nuo ir iki jei nori kito intervalo
$nuo = 1024;
$iki = 4500;

$rezultatai = $objektas->gautiStatistika($nuo, $iki);

//isvedamas rezultatas
echo "Autorius: " . CollatzPapildyta::AUTORIUS . "<br>";
echo "Versija: " . CollatzPapildyta::VERSIJA . "<br> ";
echo "Skaičius su daugiausia iteracijų: <b>" . $rezultatai['daugiausia_it']['sk'] . "</b> (" . $rezultatai['daugiausia_it']['kiekis'] . ")<br>";
echo "Skaičius su mažiausia iteracijų: <b>" . $rezultatai['maziausia_it']['sk'] . "</b> (" . $rezultatai['maziausia_it']['kiekis'] . ")<br>";
echo "Skaičius su didžiausia pasiekta reikšme: <b>" . $rezultatai['didziausia_re']['sk'] . "</b> (pasiekė " . $rezultatai['didziausia_re']['reiksme'] . ")<br>";

//Isvedama nauja histograma
$objektas->sudarytiHistograma($nuo, $iki);
$objektas->isvestiHistograma();