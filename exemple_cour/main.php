<?php
require_once 'Sandwich.php';

$s1 = new Sandwich('complet', [
    'salade',
    'tomate',
    'oignon',
    'corrnichon'
]);
$s2 = new Sandwich('Avoine & miel', [
    'Raclette',
    'salade'
]);
echo $s1->bread; // Affiche complet
// $s1->sauce = 'moutarde & miel'; // plante accès a une variable privée
echo $s1;
