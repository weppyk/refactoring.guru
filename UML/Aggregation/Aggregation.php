<?php
/**
 * AGREGATION
 * https://phpmusings.blog/2021/03/04/uml-in-action-part-3-aggregation-composition/
 */
class Car
{
    private $engine;
    private $body;
    public function __construct($engine, $body)
    {
        $this->engine = $engine;
        $this->body   = $body;
    }
}
class Engine
{
}
class Body
{
}

$engine = new Engine();
$body   = new Body();
$car    = new Car($engine, $body);
