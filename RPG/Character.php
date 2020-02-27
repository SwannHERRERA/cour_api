<?php
require_once 'Pet.php';

class Character
{
    private int $hp;
    private string $name;
    private float $damage;
    private ?Pet $pet;

    public function __construct(
        int $hp,
        string $name,
        float $damage,
        ?Pet $pet
    ) {
        $this->setHp($hp);
        $this->setName($name);
        $this->setDamage($damage);
        $this->setPet($pet);
    }

    public function setHp(int $hp): void
    {
        $this->hp = $hp;
    }

    public function getHp(): int
    {
        return $this->hp;
    }

    public function setDamage(float $damage): void
    {
        $this->damage = $damage;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setPet(?Pet $pet): void
    {
        $this->pet = $pet;
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
