<?php
class Sandwich {
    /*--- Définition des attributs/propriétés/variable membre ---*/
    public string $bread;
    private array $ingredients;
    private ?string $sauce = null;

    public function __construct(string $bread, array $ingredients) {
        $this->bread = $bread;
        $this->ingredients = $ingredients;
    }

    public function getIngredients():array {
        return $this->ingredients;
    }

    public function getSauce():?string {
        return $this->sauce;
    }

    public function setIngredients(array $ingredients):void {
        $this->ingredients = $ingredients;
    }

    public function setSauce(?string $sauce):void {
        $this->sauce = $sauce;
    }

    public function __toString():string {
        $str = "pain " . $this->bread;
        $str .= " ,ingredients : " . join(', ', $this->ingredients);
        if ($this->sauce) {
            $str .= " , sauce : " . $this->sauce;
        }
        return $str;
    }
}