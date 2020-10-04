<?php

namespace App\src;

class class_3 {

    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
public function person_details(){
     echo "I'm Developer {$this->name}. My age is {$this->age}.";
}

}
