<?php
include_once __DIR__ . '/Quantity.php';

class Toy extends Product {
    public $genre;
    public static $type = 'Toys';

    public function __construct($_name= '',$_price = '',$_quantity,$_animal = '', $_genre = '')
    {
        parent::__construct($_name,$_price,$_quantity,$_animal);
        $this->genre = $_genre;
    }


    public function displayTitle()
    {
        return "<h4 class='card-title'>$this->name</h4>";
    }

    public function displayPrice()
    {
        return "<h5>Price : $this->price €</h5>";
    }

    public function displayType()
    {
        return "<div class='d-flex justify-content-between'><h5>Type: " . self::$type . "</h5><h5>Genre: $this->genre</h5></div>";
    }
    
    

}
?>