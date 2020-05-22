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
$somme = addition(123, 42);

echo '<pre>';
var_dump($somme);
echo '</pre>';
echo '<br>';

// déclaration d'une fonction avec type hinting
function addition2(float $a, float $b): float {
    return $a + $b;
}

// l'appel de la fonction est identique avec ou sans type hinting
$somme = addition2(123, 42);

// déclaration d'une fonction anonyme avec type hinting
$multiplication = function(float $a, float $b): float {
    return $a * $b;
};

// l'appel d'une fonction anonyme
$produit = $multiplication(2, 123);
