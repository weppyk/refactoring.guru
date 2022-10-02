<?php
/** PROMBLEM **/
function printOwing() {
    $this->printBanner();
  
    // Print details.
    print("name:  " . $this->name);
    print("amount " . $this->getOutstanding());
}

/** SOLUTION Extract Method **/
function printOwing() {
    $this->printBanner();
    $this->printDetails($this->getOutstanding());
  }
  
  function printDetails($outstanding) {
    print("name:  " . $this->name);
    print("amount " . $outstanding);
  }
  