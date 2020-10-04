<?php


namespace App\src;

class class_8 extends class_7{
    public function visitor($x){
        echo "Use of <b>protected</b> from a child class : ".$this->rank;
         echo "Use of <b>private</b> from a child class : (Not working)".$this->range;
    }
}
