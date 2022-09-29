<?php
/** Directed ASSOCIATION
 * https://phpmusings.blog/2021/03/01/uml-in-action-part-2-association/
 */

class Client{
    private $client;
    public function __construct($client){
        $this->client = $client;
    }
}
class Server{
    private $client;
    public function __construct(Client $client){
        $this->client = $client;
    }
}

