<?php namespace Source\Objects;


class Form
{
    private $name;
    private $email;
    private $query;
    
    function __CONSTRUCT($name = null, $email = null, $query = null)
    {
        $this->$name = $name;
        $this->$email = $email;
        $this->$query = $query;    
    }
}
