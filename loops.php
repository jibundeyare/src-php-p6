<?php

$fruits = ['ananas', 'bananes', 'cerises'];

// cette boucle permet de traiter toutes les données d'un tableau
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i];
    echo '<br>';
}

// cette boucle permet de répéter une action
for ($i = 0; $i < 10; $i++) {
    echo $fruits[0];
    echo '<br>';
}

// attention, si on dépasse la taille du tableau, php émet une notice
// PHP Notice:  Undefined offset: 3
// pour éviter cette erreur, il faudrait utiliser la fonction "count()"
for ($i = 0; $i < 10; $i++) {
    echo $fruits[$i];
    echo '<br>';
}

// la boucle "foreach" permet de parcourir tous les éléments d'un tableau, sans recourir à un compteur
foreach ($fruits as $key => $value) {
    echo "à la clé $key est associée la valeur $value";
    echo '<br>';
}

$vegetables = [
    'a' => 'aubergines',
    'b' => 'broccolis',
    'c' => 'carottes',
];

// la boucle "foreach" permet de parcourir tous les éléments d'un tableau, sans recourir à un compteur
foreach ($vegetables as $key => $value) {
    echo "à la clé $key est associée la valeur $value";
    echo '<br>';
}
