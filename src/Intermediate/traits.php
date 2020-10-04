<?php

trait trait_1 {

public function interface_ex(){
    echo "I love....";
}
}

trait trait_2 {

    public function abstract_ex() {
        echo "I love PHP";
    }

}

class traits{
    use trait_1,trait_2;
public function interface_ex() {
   echo "I also love java";
}
}
