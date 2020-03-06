<?php
require 'Livre.php';
require 'Dictionnaire.php';

$livre = new Livre('Clean code', 1, 'Robert C...', 234);
$dictionaire = new Dictionnaire('frf', 2, 'Français');

echo $livre;
echo "<br><hr><br>";
echo $dictionaire;
