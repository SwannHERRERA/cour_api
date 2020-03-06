<?php

require_once 'Pokemon.php';

class PokemonPlante extends Pokemon
{
    public function __construct(string $name, int $hp, int $atk)
    {
        parent::__construct($name, $hp, $atk);
    }
}
