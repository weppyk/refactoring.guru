<?php

/**
 * Reflexive ASSOCIATION
 * https://phpmusings.blog/2021/03/01/uml-in-action-part-2-association/
*/
class Employee{
    private $name;
    private Employee $superior;
    private $employees;
 
    public function __construct($name, $superior){
        $this->name = $name;
        if(!$superior){
            $this->superior = NULL;
        }
        else{
            $this->superior->employees[] = $this;
        }
    }
    public function getName(){
        return $this->name;
    }
}


$superior = new Employee("Jozko", NULL);
$employee = new Employee("Jozko", $superior);