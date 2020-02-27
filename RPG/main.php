<?php
require_once 'Caracter.php';

$benois = new Character(999, 'Swann', 3.4, null);
$pet = new Pet(9, 'toyota', 1.4, 'Platypet');

$benois->SetPet($pet);
