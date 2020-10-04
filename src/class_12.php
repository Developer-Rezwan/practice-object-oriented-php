<?php

namespace App\src;

class class_12 {
     const NAME = "Rezwan Hossain Sajeeb" ;
    public function namespaces(){
       
       echo self::NAME . "<br/>";
      

    }
}


class sub_class_12 {
    public static $name;
    public static $basic;
    public function namespaces(){
        self::$name = "Rezwan";
        self::$basic = "this is namespace function!";
       $connect = "Database is connected!";
        $connect;
       echo self::$name;
       echo self::$basic;

    }
}
