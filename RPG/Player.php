<?php

require_once 'Pet.php';
class Player extends Character
{
    private ?Pet $Pet;

    public function __construct(int $hp, string $name, float $damage)
    {
        parent::__construct($hp, $name, $damage);
    }

    public function setPet(?Pet $pet): void
    {
        $this->pet = $pet;
    }
    public function getPet(): Pet
    {
        return $this->pet;
    }

    public function fight(Character $other): void
    {
        if ($this->hp <= 0 || $other->hp <= 0) {
            return;
        }
        $dmg = $this->damage;
        if ($this->pet !== null) {
            $dmg += $this->pet->getDamage;
        }
        if ($other->pet !== null && $other->pet->hp > 0) {
            $other->pet->setHp($other->pet->getHp() - $dmg * 0.25);
            $other->hp -= $dmg * 0.75;
        } else {
            $other->hp -= $dmg;
        }
    }
}
