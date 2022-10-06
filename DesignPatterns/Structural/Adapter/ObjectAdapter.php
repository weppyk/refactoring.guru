<?php
/**
 * OBJECT ADAPTER
 * https://refactoring.guru/design-patterns/adapter
 */

 /** The Client Interface describes a protocol that other classes must follow to be able to collaborate with the client code. */
 interface ClientInterface
 {
    public function method($data);
 }

 /** The Client is a class that contains the existing business logic of the program. */
 class Client
 {
    
 }

 /** The Service is some useful class (usually 3rd-party or legacy). The client can’t use this class directly because it has an incompatible interface. */
 class Service
 {
    public function serviceMethod($specialData)
    {
    }
 }
 
/** The Adapter makes the Service interface compatible with the Client interface. */
class Adapter implements ClientInterface
{
    private $adaptee;

    public function __construct(Service $service)
    {
        $this->adaptee = $service;
    }

    public function method($data)
    {
        $specialData = $this->convertToServiceFormat($data);
        $this->adaptee->serviceMethod($specialData);
    }

    private function convertToServiceFormat($data)
    {
        return $data;
    }
}
