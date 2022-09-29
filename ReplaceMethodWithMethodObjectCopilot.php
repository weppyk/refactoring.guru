<?php
/** Before */

class Order_
{
    private $quantity;
    private $itemPrice;
    public function __construct($quantity, $itemPrice)
    {
        $this->quantity  = $quantity;
        $this->itemPrice = $itemPrice;
    }
    public function getPrice()
    {
        $basePrice = $this->quantity * $this->itemPrice;
        $discountFactor = 0.98;
        if ($basePrice > 1000) {
            $discountFactor -= 0.03;
        }
        return $basePrice * $discountFactor;
    }
}
    
/** After */
class Order
{
    private $quantity;
    private $itemPrice;
    public function __construct($quantity, $itemPrice)
    {
        $this->quantity  = $quantity;
        $this->itemPrice = $itemPrice;
    }
    public function getPrice()
    {
        return (new PriceCalculator($this->quantity, $this->itemPrice))->getPrice();
    }
}

class PriceCalculator
{
    private $quantity;
    private $itemPrice;
    public function __construct($quantity, $itemPrice)
    {
        $this->quantity  = $quantity;
        $this->itemPrice = $itemPrice;
    }
    public function getPrice()
    {
        $basePrice = $this->quantity * $this->itemPrice;
        $discountFactor = 0.98;
        if ($basePrice > 1000) {
            $discountFactor -= 0.03;
        }
        return $basePrice * $discountFactor;
    }
}