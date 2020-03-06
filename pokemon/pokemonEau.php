<?php

require_once 'Pokemon.php';

class PokemonEau extends Pokemon
{
    public function __construct(string $name, int $hp, int $atk)
    {
        parent::__construct($name, $hp, $atk);
    }
}
