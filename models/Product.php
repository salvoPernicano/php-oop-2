<?php
include_once __DIR__ . '/Quantity.php';
class Product
{
    use QuantityTrait;
    public $name;
    public $price;
    public static $type = 'Product';
    public $animal;
    public $animalIcon;

    function __construct($_name, $_price, $_quantity, $_animal)
    {
        try {
            $this->name = $_name;
            $this->price = $_price;
            $this->animal = $_animal;
            $this->getAnimal();
            if ($_quantity == 0) {
                throw new Exception('Item not available');
            }
            $this->setQuantity($_quantity);
        } catch (Exception $e) {
            echo 'Error : ' . $e->getMessage();
            return;
        }
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
        return "<h5> Type :" . " " . self::$type . "</h5>";
    }

    public function getAnimal()
    {
        if ($this->animal === 'dog') {
            $this->animalIcon = './img/dog-solid.svg';
        } elseif ($this->animal === 'cat') {
            $this->animalIcon = './img/cat-solid.svg';
        } else {
            $this->animalIcon = 'no-value';
        }

        return $this->animalIcon;
    }
}
