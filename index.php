<?php
require __DIR__ . '/vendor/autoload.php';

use Classmap\Number as Number;


$i = 100;
// iterate from 0 to N 
for ($num = 0; $num < $i; $num++) {
    $number = new Number($num);
    $number->print();  
}
