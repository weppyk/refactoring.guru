<?php
/**
 * GENERALIZATION Class
 * https://phpmusings.blog/2021/02/21/uml-in-action-part-1/
 */

class aPhone{
    public function dial(){
        //dial logic
    }
    public function text(){
        //text logic
    }
}

class oldPhone extends aPhone{
    private num;
    public function __construct($num){
       $this->num = $num;
    }

    public function dial(){
        //override dial logic here
    }

    public function ring(){
        //ring logic here
    }
}
?>