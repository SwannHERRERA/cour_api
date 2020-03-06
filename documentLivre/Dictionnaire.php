<?php

require_once 'Document.php';

class Dictionnaire extends Document
{
    private string $langue;

    public function __construct(string $title, int $numEnregistrement, string $langue)
    {
        parent::__construct($title, $numEnregistrement);
        $this->langue = $langue;
    }

    /**
     * Get the value of langue
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set the value of langue
     *
     * @return  self
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Return string of the instance of the Dictionnaire
     * @return string
     */
    public function __toString()
    {
        $str = parent::__toString();
        $str .= "Langue = $this->langue<br>";
        return $str;
    }
}
