<?php
class Pet
{
    private int $hp;
    private string $name;
    private float $damage;
    private string $race;

    public function __construct(
        int $hp,
        string $name,
        float $damage,
        string $race
    ) {
        $this->setHp($hp);
        $this->setName($name);
        $this->setDamage($damage);
        $this->setRace($race);
    }

    /**
     * Get the value of hp
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Set the value of hp
     */
    public function setHp($hp)
    {
        $this->hp = $hp;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of damage
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Set the value of damage
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;
    }

    /**
     * Get the value of race
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set the value of race
     */
    public function setRace($race)
    {
        $this->race = $race;
    }
}
