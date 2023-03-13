<?php

$mot = ["k","a","y","a","k"];
$inverse = array();
$compteur = 0;

while ($compteur <= 4) {
    $inverse[$compteur] = $mot[4-$compteur];
    $compteur++;
}
if ($mot == $inverse) {
    echo "C'est un palindrome";
} else {
    echo "Le mot n'est pas un palindrome";
}

var_dump($inverse);