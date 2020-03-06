<?php
require_once 'Character.php';
class Pet extends Character {
    private string $race;

    public function __construct(string $name, int $hp, float $damage, string $race) {
        Parent::__construct(int $hp, string $name, float $damage);
        /* Mettre parent:: en premier est une bonne pratique (obligatoire en JAVA) */
        $this->race = $race;
    }
    public function setRace(string $n):void {
        $this->race = $n;
    }

    public function getRace():string {
        return $this->race;
    }
}