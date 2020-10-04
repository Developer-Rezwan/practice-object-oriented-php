<?php

class main_magic_method {
    public function method_1(){
        echo "This is the tutorial of ->".__CLASS__."<br/>";
        echo "This is the also tutorial of -> ".get_class($this);
    }
}

class magic_method extends main_magic_method{
    public function method_2(){
    echo "This is child class magic method test =".__CLASS__."<br/>";
    echo "This is child class magic method test =" .get_class($this);
    
    }
    public function method_3(){
        parent::method_1();
    }
}