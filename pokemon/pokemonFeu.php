<?php

require_once 'Pokemon.php';

class PokemonFeu extends Pokemon
{
    public function __construct(string $name, int $hp, int $atk)
    {
        parent::__construct($name, $hp, $atk);
    }
}
