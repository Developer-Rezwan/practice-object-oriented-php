<?php

namespace App\src;

interface class_11 { //akhane joto gulo method ullekh thakbe  implements korar somoy sei sob method e ullekh then fixed method ti niye kaj korte hobe..And method er vitore kono parameter na thakle new kore kono parameter add kora jebe na...
                     // akhane property all time Constant hobe..
    public function test();

    public function lasttest($a);
}

class A implements class_11 {

    public function lasttest($a) {
        ;
    }

    public function test() {
        echo "1st Interface is successfully loading.....";
    }

}

class B implements class_11 {

    public function lasttest($a) {
        ;
    }

    public function test() {
        echo "2nd Interface class is successfully loading...";
    }

}

class C implements class_11 {

    public function test() {
        ;
    }

    public function lasttest($a) {
        echo '3rd Interface class is successfully ' . $a;
    }

}
