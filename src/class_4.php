<?php

namespace App\src;

class class_4 {

    public $username;
    public $password;

    public function __construct($x, $y) {
        $this->username = $x;
        $this->password = $y;

        echo "My name is {$this->username}.My password is {$this->password}.";
    }
    public function __destruct() {
        $this->username;
        $this->password;
    }
}
