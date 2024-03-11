<?php
include_once __DIR__ . '/Quantity.php';

class Food extends Product {
    public $foodName;
    public $calories;
    public static $type = 'Food';

    public function __construct($_name = '', $_price = '', $_quantity = 0,$_animal = '',$_foodName = '', $_calories = '' )
    {
        parent::__construct($_name, $_price, $_animal, $_quantity);
        $this->foodName = $_foodName;
        $this->calories = $_calories;
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
        return "<div class='d-flex justify-content-between'><h5>Type: " . self::$type . "</h5><h5>Calories: $this->calories</h5></div>";
    }
}
