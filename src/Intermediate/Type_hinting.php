<?php

class Type_hinting {
    public $x ;
    public function method_1(array $a){
        foreach($a as $value){
       echo $value[0]." ";
       echo $value[1]." ";
       echo $value[2]."<br/>";

        }
     
    }
}
