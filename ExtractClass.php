<?php
/* PROPLEM */
class Person_problem {
    public $name;
    public $officeAreaCode;
    public $officeNumber;
    public function getTelephoneNumber() {
        return "($this->officeAreaCode) $this->officeNumber";
    }
}


/* SOLUTION Extract Class (used Association from UML)*/
class Person {
    public $name;
    private TelephoneNumber $telephoneNumber;
    public function __construct(TelephoneNumber $telephoneNumber) {
        $this->telephoneNumber = $telephoneNumber;
    }
    public function getTelephoneNumber() {
        return $this->telephoneNumber->getTelephoneNumber();
    }
}

class TelephoneNumber {
    public $officeAreaCode;
    public $officeNumber;
    public function __construct()
    {
        $this->officeAreaCode = 421;
        $this->officeNumber = 591916333;
    }
    public function getTelephoneNumber() {
        return "(+$this->officeAreaCode) $this->officeNumber";
    }
}

$person = new Person(new TelephoneNumber);
echo($person->getTelephoneNumber());