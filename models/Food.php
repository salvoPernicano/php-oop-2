<?php
class Food extends Product {
    public $foodName;
    public $calories;

    public function __construct($_name,$_price,$_foodName, $_calories)
    {
        parent::__construct($_name,$_price);
        $this->foodName = $_foodName;
        $this->calories = $_calories;
    }

    public function getInfo()
    {
        return "$this->name" . "$this->price" . "$this->foodName" . "$this->calories";
    }

}
?>