<?php

// chaîne de caractères
$text = "foo bar baz\n";

// chaîne de caractères avec interpolation de la variable $text
// les doubles quotes permettent l'interpolation
$text2 = "$text lorem\n";

// chaîne de caractères avec afichage littéral de $text
// les simples quotes ne permettent pas l'interpolation
$text3 = '$text lorem';

echo $text;
echo '<br>';
echo $text2;
echo '<br>';
echo $text3;
echo '<br>';

// concaténation
$text4 = $text.$text3;
$text5 = $text.' '.$text3;

echo $text4;
echo '<br>';
echo $text5;
echo '<br>';

// interpolation plus avancée
$text6 = "{$text} {$text3}";

echo $text6;
echo '<br>';

// valeurs numériques
$nombre = 123;
$nombre2 = 3.14;

$nombre3 = $nombre + $nombre2;

echo $nombre;
echo '<br>';
echo $nombre2;
echo '<br>';
echo $nombre3;
echo '<br>';

// booléens
$jour = true;
$nuit = false;

echo $jour;
echo '<br>';
echo $nuit;
echo '<br>';

var_dump($jour);
echo '<br>';
var_dump($nuit);
echo '<br>';

// null est l'équivalent de None en python
$defaultPodcast = null;

echo $defaultPodcast;
echo '<br>';

var_dump($defaultPodcast);
echo '<br>';

// les tableaux sont l'équivalent des listes en python
$fruits = ["ananas", "banane", "cerise",];
$legumes = [
    "aubergine",
    "brocolis",
    "carotte",
];

echo $fruits;
echo '<br>';
echo $legumes;
echo '<br>';

// inspection
// fonction réservée aux développeurs
echo '<pre>';
var_dump($fruits);
echo '</pre>';
echo '<br>';

echo '<pre>';
var_dump($legumes);
echo '</pre>';
echo '<br>';

// les tableaux sont aussi l'équivalent des dictionnaires en python
$legumes = [
    "a" => "aubergine",
    "b" => "brocolis",
    "c" => "carotte",
];

echo '<pre>';
var_dump($legumes);
echo '</pre>';
echo '<br>';
