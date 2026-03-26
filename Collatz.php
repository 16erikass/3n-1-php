<?php

class Collatz {
    // Metodas kuris praeina per visa skaičiu intervala
    function gautiStatistika($nuo, $iki) {
        $max_Iter = ['sk' => 0, 'kiekis' => -1];
        $min_Iter = ['sk' => 0, 'kiekis' => PHP_INT_MAX];   //Labai didelis skaicius paieskos pradziai
        $didziausia_Reiksme = ['sk' => 0, 'reiksme' => -1];

    //Ciklas eina per kiekviena skaiciu
        for ($i = $nuo; $i <= $iki; $i++) {
            $analize = $this->getSkaiciausDuomenys($i);

            //Tikriu del daugiausiai iteraciju
            if ($analize['it'] > $max_Iter['kiekis']) {
                $max_Iter = ['sk' => $i, 'kiekis' => $analize['it']];
            }

            //Tikrinu del maziausiai iteraciju
            if ($analize['it'] < $min_Iter['kiekis']) {
                $min_Iter = ['sk' => $i, 'kiekis' => $analize['it']];
            }

            //Tikrinu del didziausios pasiektos reiksmes
            if ($analize['max'] > $didziausia_Reiksme['reiksme']) {
                $didziausia_Reiksme = ['sk' => $i, 'reiksme' => $analize['max']];
            }
        }
        //statistika grazinama masyve
        return [
            'daugiausia_it' => $max_Iter,
            'maziausia_it' => $min_Iter,
            'didziausia_re' => $didziausia_Reiksme
        ];
    }

    //Metodas kuris atlieka 3x+1 skaičiavimą vienam skaičiui
    function getSkaiciausDuomenys($n) {
        $iteracijos = 0;
        $max = $n;

        while ($n != 1) {
            if ($n % 2 == 0) {
                $n = $n / 2;    //Jei lyginis dalyba iš 2
            } else {
                $n = ($n * 3) + 1;  //Jei nelyginis daugyba iš 3 ir pridedamas 1
            }

            if ($n > $max) {
                $max = $n;
            }
            $iteracijos++;
        }

        return ['it' => $iteracijos, 'max' => $max];
    }
}