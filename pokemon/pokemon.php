<?php

class Pokemon
{
    private string $name;
    private int $hp;
    private int $atk;

    public function __construct(string $name, int $hp, int $atk)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->atk = $atk;
    }

    public function isDead(): bool
    {
        if ($this->hp > 0) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName(string $name): Pokemon
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of hp
     */
    public function getHp(): int
    {
        return $this->hp;
    }

    /**
     * Set the value of hp
     *
     * @return  self
     */
    public function setHp(int $hp): Pokemon
    {
        $this->hp = $hp;

        return $this;
    }

    /**
     * Get the value of atk
     */
    public function getAtk(): int
    {
        return $this->atk;
    }

    /**
     * Set the value of atk
     *
     * @return  self
     */
    public function setAtk(int $atk): Pokemon
    {
        $this->atk = $atk;

        return $this;
    }
    public function __toString()
    {
        $str = 'Pokemon : <br>';
        $str .= "Name: $this->name<br>";
        $str .= "Hp: $this->hp<br>";
        $str .= "Atk: $this->atk<br>";
        return $str;
    }

    /**
     * @param Pokemon $poke1
     * @param Pokemon $poke2
     */
    public function fight(Pokemon $poke1, Pokemon $poke2): void
    {
        if ($poke1->hp < 0 || $poke2->hp < 0) {
            return;
        }
        $coef_poke1 = 1;
        $coef_poke2 = 1;

        // if (instanceof $poke1 == PokemonEau) {
        //     if (instanceof $poke2 == PokemonFeu) {
        //         $coef_poke1 = 2;
        //         $coef_poke2 = 0.5;
        //     } else if (instanceof $poke2 == PokemonPlante) {
        //         $coef_poke1 = 0.5;
        //         $coef_poke2 = 2;
        //     }
        // }
        // if (instanceof $poke2 == PokemonEau) {
        //     if (instanceof $poke1 == PokemonPlante) {
        //         $coef_poke1 = 2;
        //         $coef_poke2 = 0.5;
        //     } else if (instanceof $poke1 == PokemonFeu) {
        //         $coef_poke1 = 0.5;
        //         $coef_poke2 = 2;
        //     }
        // }
        /** Lets fight **/
        $poke2->hp -= $poke1->atk * $coef_poke1;
        $poke1->hp -= $poke2->atk * $coef_poke2;
    }
}
