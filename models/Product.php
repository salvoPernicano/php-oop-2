<?php
class Product
{
    public $name;
    public $price;
    public static $type = 'Product';

    function __construct($_name, $_price)
    {
        $this->name = $_name;
        $this->price = $_price;
    }

    public function displayTitle()
    {
        return "<h4 class='card-title'>$this->name</h4>";
    }

    public function displayPrice()
    {
        return "<h5> Price $this->price €</h5>";
    }

    public function displayType()
    {
        return"<h5> Type :"." " . self::$type ."</h5>";
    }

}
?>