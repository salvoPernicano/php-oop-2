<?php

trait QuantityTrait {
    private $quantity;

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function getQuantity() {
        return $this->quantity;
    }
}

?>