<?php


class method_chain {
    public $a ;
    public $b ;
    public $result ;
    public function method_1(){
        echo "Your solution is : ";
        return $this;
    }
    public function method_2($x,$y){
        $this->a = $x;
        $this->b = $y;
        return $this;
    }
        public function method_3(){
        $this->result = $this->a * $this->b ;
        echo $this->result;
    }
}
