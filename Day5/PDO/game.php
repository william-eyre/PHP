<?php
class game
{

    private $id;
    private $name;
    private $genre;
    private $developer;
    private $description;
    private $price;

    public function __construct()
    {
    }

    public function __get($var)
    {
        if ($var) {
            switch ($var) {
                case 'id':
                    return $this->id;
                    break;
                case 'name':
                    return $this->name;
                    break;
                case 'genre':
                    return $this->genre;
                    break;
                case 'developer':
                    return $this->developer;
                    break;
                case 'description':
                    return $this->description;
                    break;
                case 'price':
                    return $this->price;
                    break;
            }
        }
        return null;
    }
}