<?php

$numbers = [123, 42, 2, 3.14, 1000];

// Exo 1.1
// Créez une fonction qui calcul la somme des nombres du tableau $numbers

function arraySum(array $numbers): float {
    $sum = 0;

    foreach ($numbers as $value) {
        $sum += $value; 
    }

    return $sum;
}

$result = arraySum($numbers);

echo '<pre>';
var_dump($result);
echo '</pre>';
echo '<br>';

// Exo 1.2
// Créez une fonction qui calcul la moyenne des nombres du tableau $numbers

function arrayAverage(array $numbers): float {
    return arraySum($numbers) / count($numbers);
}

$result = arrayAverage($numbers);

echo '<pre>';
var_dump($result);
echo '</pre>';
echo '<br>';

// Exo 1.3
// Créez une fonction qui renvoie un tableau contenant les nombres du tableau $numbers qui sont plus petit que 50
// Exemple de résultat attendu : [42, 2, 3.14]

function arrayFilter(array $numbers): array {
    $filtered = [];

    foreach ($numbers as $key => $value) {
        if ($value < 50) {
            $filtered[] = $value;        
        }
    }

    return $filtered;
}

$result = arrayFilter($numbers);

echo '<pre>';
var_dump($result);
echo '</pre>';
echo '<br>';

// variante avec seuil en paramètre
function arrayFilter2(array $numbers, float $threshold): array {
    $filtered = [];

    foreach ($numbers as $key => $value) {
        if ($value < $threshold) {
            $filtered[] = $value;        
        }
    }

    return $filtered;
}

$result = arrayFilter2($numbers, 50);

echo '<pre>';
var_dump($result);
echo '</pre>';
echo '<br>';

// exemple de closure
function arrayFilterFactory(float $threshold) {
    return function(array $numbers) use ($threshold): array {
        $filtered = [];

        foreach ($numbers as $key => $value) {
            if ($value < $threshold) {
                $filtered[] = $value;        
            }
        }
    
        return $filtered;
    };
}

// création d'une fonction
$arrayFilter50 = arrayFilterFactory(50);
// appel de la fonction
$result = $arrayFilter50($numbers);

echo '<pre>';
var_dump($result);
echo '</pre>';
echo '<br>';

$arrayFilter25 = arrayFilterFactory(25);
$result = $arrayFilter25($numbers);

echo '<pre>';
var_dump($result);
echo '</pre>';
echo '<br>';

// Exo 1.4
// Créez une fonction nommée mult() qui :
// - prend en paramètre un tableau et un float
// - renvoie un tableau contenant les nombres du tableau multipliés par le float
// Exemple de résultat attendu : [246, 84, 4, 6.28, 2000]

function mult(array $numbers, float $factor): array {
    $products = [];

    foreach ($numbers as $key => $value) {
        $products[] = $value * $factor;
    }

    return $products;
}

$result = mult($numbers, 1.2);

echo '<pre>';
var_dump($result);
echo '</pre>';
echo '<br>';

// Exo 1.5
// À l'aide la fonction "distance()", créez une fonction qui renvoie la liste des positions qui sont à une distance inférieure à 50

// une fonction qui calcul la distance entre une position et l'origine
function distance($x, $y) {
    return sqrt($x ** 2 + $y ** 2);
}

$positions = [
    [10, 15],
    [100, 100],
    [40, 35],
    [60, 5],
    [23, 27],
];

// exemple d'utilisaton de la fonction "distance()" avec la valeur associée à l'index 3, c-à-d [60, 5]
$position = $positions[3];
$resultat = distance($position[0], $position[1]);

function filterPositions(array $positions, float $maxDistance): array {
    $filtered = [];

    foreach ($positions as $key => $value) {
        if (distance($value[0], $value[1]) < $maxDistance) {
            $filtered[] = $value;
        }
    }

    return $filtered;
}

$result = filterPositions($positions, 50);

echo '<pre>';
var_dump($result);
echo '</pre>';
echo '<br>';
