<?php
/** Decompose Conditional */
define("SUMMER_START",6);
define("SUMMER_END",9);

/** Problem */

if ($date->before(SUMMER_START) || $date->after(SUMMER_END)) {
    $charge = $quantity * $winterRate + $winterServiceCharge;
  } else {
    $charge = $quantity * $summerRate;
  }

/** Solution */
if (isSummer($date)) {
    $charge = summerCharge($quantity);
  } else {
    $charge = winterCharge($quantity);
}


function isSummer($date) {
    return $date->before(SUMMER_START) || $date->after(SUMMER_END);
}
function summerCharge($quantity) {
    $summerRate = 0.1;
    return $quantity * $summerRate;
}
function winterCharge($quantity) {
    $winterRate = 0.2;
    $winterServiceCharge = 0.1;
    return $quantity * $winterRate + $winterServiceCharge;
}