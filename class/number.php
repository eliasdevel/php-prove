<?php

namespace Classmap;

use Interfaces\Number as InterfacesNumber;



class Number implements InterfacesNumber
{

    private $value;

    function __construct($value)
    {
        $this->value = $value;
    }

    function isDivisibleByThree()
    {
        return (($this->value % 3) == 0) && $this->value > 0;
    }

    function isDivisibleByFive()
    {
        return (($this->value % 5) == 0) && $this->value > 0;
    }

    function isDivisibleByThwo()
    {
        return (($this->value % 2) == 0) && $this->value > 0;
    }

    function isDivisibleByThreeAndFive()
    {
        return ((($this->value % 3) == 0) && (($this->value % 5) == 0)) && $this->value > 0;
    }



    function getValue()
    {
        return $this->value;
    }

    function print()
    {
        $divisibles = [
            "Three and Five \n" => 'isDivisibleByThreeAndFive',
            "Three \n" => 'isDivisibleByThree',
            "Five \n" => 'isDivisibleByFive',
        ];

        foreach ($divisibles as $string => $function) {
            if ($this->$function()) {
                echo $string;
                return true;
            }
        }
        echo $this->value.PHP_EOL;
        return true;
    }
}
