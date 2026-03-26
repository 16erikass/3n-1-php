<?php
require 'collat.php';

//Sukuriamas objektas iš vaikines klases
$objektas = new CollatzPapildyta();

// Nustatomas intervalas (nuo ir iki)
// Jei nori kito intervalo reikia pakeisti šias reikšmes
$nuo = 1024;
$iki = 4500;

// Gaunami statistikos rezultatai pasirinktame intervale
$rezultatai = $objektas->gautiStatistika($nuo, $iki);

//isvedamas rezultatas
echo "Autorius: " . CollatzPapildyta::AUTORIUS . "<br>";//Išvedamas klasėje apibrėžtas autorius (konstanta)
echo "Versija: " . CollatzPapildyta::VERSIJA . "<br> ";//Išvedama programos versija (konstanta)

//Parodomas skaičius, kuriam prireikė daugiausia iteracijų
echo "Skaičius su daugiausia iteracijų: <b>" . $rezultatai['daugiausia_it']['sk'] . "</b> (" . $rezultatai['daugiausia_it']['kiekis'] . ")<br>";

//Parodomas skaičius, kuriam prireikė mažiausiai iteracijų
echo "Skaičius su mažiausia iteracijų: <b>" . $rezultatai['maziausia_it']['sk'] . "</b> (" . $rezultatai['maziausia_it']['kiekis'] . ")<br>";

//Parodomas skaičius, kuris pasiekė didžiausią reikšmę sekoje
echo "Skaičius su didžiausia pasiekta reikšme: <b>" . $rezultatai['didziausia_re']['sk'] . "</b> (pasiekė " . $rezultatai['didziausia_re']['reiksme'] . ")<br>";



//Sudaroma histograma pagal pasirinktą intervalą
$objektas->sudarytiHistograma($nuo, $iki);

//Išvedama histograma į ekraną
$objektas->isvestiHistograma();