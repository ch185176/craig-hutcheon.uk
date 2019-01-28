<?php namespace Source\Objects;

class Article
{
    private $title;
    private $description;
    private $thumbnail;
    private $content;
    private $image;


    function __CONSTRUCT($title = null, $description = null, $thumbnail = null, $content = null, $image = null)
    {
        $this->$title = $title;
        $this->$description = $description;
        $this->$thumbnail = $thumbnail;
        $this->$content = $content;
        $this->$image = $image;
    }
    
    function getTitle()
    {
        return $this->$title;
    }

    function getDescription()
    {
        return $this->$description;
    }
    
    function getThumbnail()
    {
        return $this->$thumbnail;
    }
    
    function getContent()
    {
        return $this->$content;
    }
    
    function getImage()
    {
        return $this->$image;
    }
}
