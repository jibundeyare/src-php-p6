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

