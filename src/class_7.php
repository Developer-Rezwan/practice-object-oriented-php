<?php

namespace App\src;

class class_7 extends class_6 {

    public $level;
    private $range = "2";
    protected $rank = "top";

    public function Admin($x) {
        return "My name is " . $this->username . ".My password is " . $this->password . " and my authentication code is " . $this->user() . " and user level is " . $level = $x." now my range is <b>(Use of Private from inside of a class = {$this->range} )</b>".$this->range." and my raking is <b>(Use of Protected from inside of a class = {$this -> rank})</b>".$this -> rank;
    }

}
