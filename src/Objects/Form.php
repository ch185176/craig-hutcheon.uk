<?php namespace Source\Objects;


class Form
{
    private $name;
    private $email;
    private $query;
    
    function __CONSTRUCT($name = null, $email = null, $query = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->query = $query;
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return null
     */
    public function getQuery()
    {
        return $this->query;
    }
}
