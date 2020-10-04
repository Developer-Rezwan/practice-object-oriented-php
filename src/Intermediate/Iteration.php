<?php

class Iteration {

    public $name = "Rezwan Hossain Sajeeb";
    public $age = 20;
    public $class = "HSC";
    private $email = "rezwan@gmail.com";
    protected $phone = "01797840513";
    
    public function iterator() {
         echo "This is Iterator function <br/>";
        foreach ($this as $key) {
           
            echo $key . "<br/>";
        }
    }

}
