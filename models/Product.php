<?php
class Product
{
    public $name;
    public $price;

    function __construct($_name, $_price)
    {
        $this->name = $_name;
        $this->price = $_price;
    }

    public function getInfo()
    {
        return "$this->name" . "$this->price";
    }

}
?>