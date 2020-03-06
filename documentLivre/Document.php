<?php

class Document
{
    private int $numEnregistrement;
    private string $title;

    public function __construct(string $title, int $numEnregistrement)
    {
        $this->numEnregistrement = $numEnregistrement;
        $this->title = $title;
    }

    /**
     * Get the value of numEnregistrement
     */
    public function getNumEnregistrement(): int
    {
        return $this->numEnregistrement;
    }

    /**
     * Set the value of numEnregistrement
     *
     * @return  self
     */
    public function setNumEnregistrement(int $numEnregistrement): Document
    {
        $this->numEnregistrement = $numEnregistrement;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getName(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title): Document
    {
        $this->title = $title;

        return $this;
    }
    /**
     * Return string of the instance of the Document
     * @return string
     */
    public function __toString()
    {
        $str = "Document : <br>";
        $str .= "numEnregistrement: $this->numEnregistrement<br>";
        $str .= "Title: $this->title<br>";
        return $str;
    }
}
