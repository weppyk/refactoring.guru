<?php
/** 
 * Replace Method with Method Object
 * https://refactoring.guru/replace-method-with-method-object
 * 
 */

 /** PROBLEM */
 class Order_
 {
    public function price(){
        $primaryBasePrice = 0;
        $secondaryBasePrice = 0;
        $tertiaryBasePrice = 0;
        // long computation
    }
 }

/** SOLUTION */
class Order
{
    public function price(){
        return (new PriceCalculator($this))->compute() ;
    }
}
class PriceCalculator
{
    public $primaryBasePrice;
    public $secondaryBasePrice;
    public $tertiaryBasePrice;
    public function __construct($order)
    {
        $this->primaryBasePrice  = 0;
        $this->secondaryBasePrice = 0;
        $this->tertiaryBasePrice = 0;
        // Copy Relevant information from order object
    }
    public function compute(){
        // long computation
        return $this->primaryBasePrice + $this->secondaryBasePrice + $this->tertiaryBasePrice;
    }
}