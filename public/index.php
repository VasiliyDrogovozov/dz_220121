<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php

class User {
    private $name;

    public function setName($name) {
        return $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Employee extends User {
    private $salary;

    public function setSalary($salary) {
        return $this->salary = $salary;
    }

    public function getSalary() {
       return $this->salary; 
    }
}

class Student extends User {
    private $stipendia;

    public function setStipendia($stipendia) {
        $this->stipendia = $stipendia;
    }

    public function getStipendia() {
        $this->stipendia;
    }
}






    class StringFunction {
        public $str;
        public function __construct($str) {
            $this -> str = $str;
        }
        public function replace($search, $replace){
           echo str_replace($search, $replace, $this -> str);
        }
        public function firstPosition(){
            echo $this -> str[0];
        }
        public function stringLength(){
            echo strlen($this -> str);
        }
        public function contc(Concatenable $obj1, Concatenable $obj2) {
            return $obj1->value . $obj2->value;
        }
    }


class MathFunctions {
    public $value;

    public function summ(MathData $obj1, MathData $obj2) {
        return $this->value = $obj1->value + $obj2->value;
    }

    public function diff(MathData $obj1, MathData $obj2) {
        return $this->value = $obj1->value - $obj2->value;
    }

    public function multy(MathData $obj1, MathData $obj2) {
        return $this->value = $obj1->value * $obj2->value;
    }

    public function div(MathData $obj1, MathData $obj2) {
        return $this->value = $obj1->value / $obj2->value;
    }
}

abstract class MathData implements Concatenable {
    public function getValue() {
        return $this->value;
    }
}

class MathInt extends MathData {
    public $value;

    public function setValue($value) {
        return $this->value = $value;
    }
}

class MathFloat extends MathData {
    public $value;

    public function setValue($value) {
        return $this->value = $value;
    }
}

    class StringData  implements Concatenable{
        public function getValue() {
            return $this->value;
        }
    }

    interface Concatenable {
        public function getValue();
    }


    ?>
</body>
</html>
