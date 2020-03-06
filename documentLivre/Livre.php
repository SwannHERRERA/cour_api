<?php

require_once 'Document.php';


class Livre extends Document
{
    private string $author;
    private int $nb_page;

    public function __construct(string $title, int $numEnregistrement, string $author, int $nb_page)
    {
        parent::__construct($title, $numEnregistrement);
        $this->author = $author;
        $this->nb_page = $nb_page;
    }

    /**
     * Get the value of autor
     */
    public function getAutor(): string
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */
    public function setAutor(string $autor): Livre
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of nb_page
     */
    public function getNb_page(): int
    {
        return $this->nb_page;
    }

    /**
     * Set the value of nb_page
     *
     * @return  self
     */
    public function setNb_page($nb_page): Livre
    {
        $this->nb_page = $nb_page;

        return $this;
    }

    /**
     * Return string of the instance of the Dictionnaire
     * @return string
     */
    public function __toString()
    {
        $str = parent::__toString();
        $str .= "Author = $this->author<br>";
        $str .= "Nombre pages = $this->nb_page<br>";
        return $str;
    }
}
