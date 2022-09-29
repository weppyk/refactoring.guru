<?php
/** COMPOSITION 
 * https://phpmusings.blog/2021/03/04/uml-in-action-part-3-aggregation-composition/
*/

class Human{
    private $parts = Array();
    public function addHeart(){
        $this->parts[] = new Heart();
    }
    public function addBlood(){
        $this->parts[] = new Blood();
    }
}

class Heart{
}

class Blood{
}

$person = new Human();
$person -> addHeart();
$person -> addBlood();    
?>