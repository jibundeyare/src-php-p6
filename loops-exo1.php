<?php

// Exo 1.1
// Avec une boucle et en utilisant la fonction "random_int()", créez un tableau contenant 10 nombre entiers choisis au hasard compris entre 0 et 100 inclus.

// Exemple d'utilisation de "random_int()"
$number = random_int(0, 100);

$numbers = [];

for ($i = 0; $i < 10; $i++) {
    $numbers[] = random_int(0, 100);
}

// Exo 1.2
// Affichez tous les nombres du tableau avec une boucle for.
// Attention, le format d'affichage est le suivant :
// nombre (0) : 123
// nombre (1) : 234
// nombre (2) : 345
// ...

for ($i = 0; $i < count($numbers); $i++) {
    echo "nombre ($i) : {$numbers[$i]}";
    echo '<br>';
}

// Exo 1.3
// Avec une boucle, créez un troisième tableau qui aura pour clé alphanumérique, le nom d'un fruit et comme valeur, le prix du fruit.
// Précision : les index correspondent deux à deux.
// Exemple : $fruits[0] et $prices[0] sont le nom et le prix du fruit.

$fruits = ['ananas', 'bananes', 'cerises'];
$prices = [123, 42, 3.14];

// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';
// echo '<br>';

// echo '<pre>';
// var_dump($prices);
// echo '</pre>';
// echo '<br>';

$fruits_prices = [];

for ($i = 0; $i < count($fruits); $i++) {
    $fruits_prices[$fruits[$i]] = $prices[$i];
}

echo '<pre>';
var_dump($fruits_prices);
echo '</pre>';
echo '<br>';

// Exo 1.4
// Avec une boucle foreach, parcourez tous les éléments du tableau $fruits_prices, et créez un nouveau tableau (à clé alphanumérique) avec les fruits dont le prix est inférieur à 50 unités.

$cheap_fruits = [];

foreach ($fruits_prices as $key => $value) {
    if ($values < 50) {
        $cheap_fruits[$key] = $value;
    }
}
