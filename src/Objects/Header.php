<?php namespace Source\Objects;

class Header
{
    private $image;
    private $text;
    private $description;


    function __CONSTRUCT($image = null, $text = null, $description = null)
    {
        $this->$image = $image;
        $this->$text = $text;
        $this->$description = $description;
    }
    function getImage()
    {
        return $this->$image;
    }

    function getText()
    {
        return $this->$text;
    }

    function getDescription()
    {
        return $this->$description;
    }
}