<?php
require __DIR__ . '/vendor/autoload.php';

use Classmap\Number as Number;

for ($num = 1; $num <= 100; $num++) {
    $number = new Number($num);
    $number->print();  
}
