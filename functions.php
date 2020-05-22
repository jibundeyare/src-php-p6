<?php

// déclaration d'une fonction
function hello() {
    echo "Hello World!";
    echo '<br>';
}

// appel d'une fonction
hello();

// déclaration d'une fonction
function addition($a, $b) {
    return $a + $b;
}

// appel d'une fonction
$resultat = addition(123, 42);

echo '<pre>';
var_dump($resultat);
echo '</pre>';
echo '<br>';

// déclaration d'une fonction avec type hinting
function addition2(float $a, float $b): float {
    return $a + $b;
}

// l'appel de la fonction est identique avec ou sans type hinting
$resultat = addition2(123, 42);

echo '<pre>';
var_dump($resultat);
echo '</pre>';
echo '<br>';

// déclaration d'une fonction anonyme avec type hinting
$multiplication = function(float $a, float $b): float {
    return $a * $b;
};

// l'appel d'une fonction anonyme
$resultat = $multiplication(2, 123);

echo '<pre>';
var_dump($resultat);
echo '</pre>';
echo '<br>';

// exemple de closure
$b = 2;
// définition d'une closure
// le mot clé "use" permet de figer la valeur d'une variable dans une fonction
$somme2 = function($a) use ($b) {
    return $a + $b;
};
// appel d'une closure
$resultat = $somme2(100);

echo '<pre>';
var_dump($resultat);
echo '</pre>';
echo '<br>';

$b = 10;
// définition d'une closure
$somme10 = function($a) use ($b) {
    return $a + $b;
};
// appel d'une closure
$resultat = $somme10(100);

echo '<pre>';
var_dump($resultat);
echo '</pre>';
echo '<br>';

// exemple de factory d'une closure
function sumFactory($b) {
    // définition d'une closure
    return function($a) use ($b) {
        return $a + $b;
    };
}

// fabrication d'une closure
$somme2 = sumFactory(2);
// appel d'une closure
$resultat = $somme2(100);

echo '<pre>';
var_dump($resultat);
echo '</pre>';
echo '<br>';

// fabrication d'une closure
$somme10 = sumFactory(10);
// appel d'une closure
$resultat = $somme10(100);

echo '<pre>';
var_dump($resultat);
echo '</pre>';
echo '<br>';
