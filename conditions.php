<?php

if (true) echo "ceci sera affiché<br>";
if (false) echo "ceci ne sera pas affiché<br>";

if (true) {
    echo "ceci sera toujours affiché";
    echo '<br>';
}

if (false) {
    echo "ceci ne sera jamais affiché";
    echo '<br>';
}

// affectation d'un nombre aléatoire compris entre 0 et 20 inclus
$stock = random_int(0, 20);

echo "stock: {$stock}";
echo '<br>';

if ($stock == 0) {
    echo "rupture de stock";
    echo '<br>';
} elseif ($stock < 5) {
    // elseif est l'équivalent de elif en python
    echo "alerte : rupture de stock imminente";
    echo '<br>';
} else if ($stock < 10) {
    // else if est aussi l'équivalent de elif en python
    echo "alerte : rupture de stock proche";
    echo '<br>';
} else {
    echo "alerte : stock suffisant";
    echo '<br>';
}

// switch case
switch (true) {
    case $stock == 0:
        echo "rupture de stock (switch)";
        echo '<br>';
        break;
    case $stock < 5:
        echo "alerte : rupture de stock imminente (switch)";
        echo '<br>';
        break;
    case $stock < 10:
        echo "alerte : rupture de stock proche (switch)";
        echo '<br>';
        break;
    default:
        echo "alerte : stock suffisant (switch)";
        echo '<br>';
}

// autre exemple de switch
$choices = ['fruits', 'legumes', 'cereales'];
$choice = random_int(0, 2);

echo "user choice: {$choice}";
echo '<br>';

// utilisation plus classique
switch ($choice) {
    case 0:
        echo "fruits";
        echo '<br>';
        break;
    case 1:
        echo "legumes";
        echo '<br>';
        break;
    case 2:
        echo "cereales";
        echo '<br>';
}
