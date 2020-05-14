<?php

// page de la doc des fonctions qui permettent de manip les tableaux
// https://www.php.net/manual/en/ref.array.php

// tableau vide
$couleurs = [];

// ajouter à la fin d'un tableau
$couleurs[] = 'bleu';
$couleurs[] = 'vert';

// un tableau à index numérique
$fruits = ["ananas", "banane", "cerise",];

// un tableau à index alpha-numérique
$legumes = [
    "a" => "aubergine",
    "b" => "brocolis",
    "c" => "carotte",
];

// supprimer l'élément situé à l'index 1 du tableau
unset($fruits[1]);

echo '<pre>';
var_dump($fruits);
echo '</pre>';
echo '<br>';

// insérer un élément à l'index 0 du tableau
array_splice($fruits, 0, 0, 'brugnon');

echo '<pre>';
var_dump($fruits);
echo '</pre>';
echo '<br>';

$fruits[0] = 'pomme';

echo $fruits[0];
echo '<br>';

$legumes['a'] = 'courgette';

echo $legumes['a'];
echo '<br>';

// concaténation de tableaux
$fruits_legumes = $fruits + $legumes;

echo '<pre>';
var_dump($fruits_legumes);
echo '</pre>';
echo '<br>';
