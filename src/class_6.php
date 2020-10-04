<?php
namespace App\src;

class class_6 {
    public $username;
    public $password;
    public function __construct($x,$y) {
        $this->username = $x ;
        $this->password = $y ;
    }
    public function user(){
       $authentication = ($this->username.$this->password) ;
       return $authentication ;
    }
}

