<?php

/* Unidirectional Association Code Example */
class Customer{
    private $name;
    private $orders = [];
    public function __construct($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function addOrder(Order $order){
        $this->orders[] = $order;
    }
}

class Order{
    private $orderNumber;
    private $customer;
    public function __construct($orderNumber, Customer $customer){
        $this->orderNumber = $orderNumber;
        $this->customer = $customer;
        $this->customer->addOrder($this);
    }
    public function getOrderNumber(){
        return $this->orderNumber;
    }
    public function getCustomer(){
        return $this->customer;
    }
}