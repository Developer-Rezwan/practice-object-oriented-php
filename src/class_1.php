<?php
namespace App\src;
// All in one to use a all property of class ideas.
class Class_1 {
   public $name = ' Rezwan Hossain Sajeeb. ' ; 
   public $age ; 
   public $year ;
   public $workplace ; 
   
   public function personNameAge(){
       echo "I'm a Developer". $this -> name;
       echo " My total age is ".$this -> age;
       echo " I just start my work as a Developer from ".$this -> year = '2020 .';
      
   }
   public function marketplace($value){
        echo "At first I was start my work in ". $this -> workplace = $value ." marketplace.";
   }
}
