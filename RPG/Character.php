<?php
require_once 'Pet.php';

class Character
{
    private int $hp;
    private string $name;
    private float $damage;
    private ?Pet $pet;

    public function __construct(int $hp, string $name, float $damage)
    {
        $this->setHp($hp);
        $this->setName($name);
        $this->setDamage($damage);
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
}
