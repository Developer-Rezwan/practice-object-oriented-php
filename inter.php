<?php
//Nicher 4 niyome autoload kora jay...
spl_autoload_register(function($class_name) {

    require_once 'src/intermediate/' . $class_name . '.php';
});
/*
  require_once ("vendor/autoload.php");
  require_once 'src/intermediate/method_chain.php';

  function __autoload($class_name){
  require_once 'src/intermediate/'.$class_name.'.php';
  }
 */
?>
<br>
<!------------------------------------ Tutorial-15 --------------------------------------------------->
<b> Tutorial-15 (Class & Method existence) : </b> <br/>
<?php
if (class_exists("existence")) {
    $call = new existence();
    if (method_exists($call, 'test')) {
        $call->test();
    }else {echo "Method not found!";}
} else {
    echo "Class Not found!";
}
?>
<br>
<br>
<!------------------------------------ Tutorial-16-17 --------------------------------------------------->
<b> Tutorial-16-17 (Autoload and Method Chain) : </b> <br/>
<?php
$call = new method_chain();
 $call->method_1()->method_2(4,4)->method_3();
?>

<br>
<br>
<!------------------------------------ Tutorial-19 --------------------------------------------------->
<b> Tutorial-18 (Type hinting) : </b> <br/>
<?php 
$cal = new Type_hinting();
$type = array(
       array('Rezwan','Hossain','Sajeeb'),
       array('Shamima','Akhter','Rinu')
     );
$cal->method_1($type);

?>

<br>
<!------------------------------------ Tutorial-19 --------------------------------------------------->
<b> Tutorial-19 (Iteration) : </b> <br/>

<?php 
$call = new Iteration();
foreach ($call as $key ) {
    echo $key."<br/>";
    
}
$call->iterator();

?>

<br>
<!------------------------------------ Tutorial-21 --------------------------------------------------->
<b> Tutorial-21 (Iteration) : </b> <br/>

<b> Traits is like both the Abstract and Interface . Traits give us all the of Abstract and Interface in a single time ..</b>
<br/>
    <?php

$call = new traits();
echo $call->interface_ex();
echo "<br/>";
echo $call->abstract_ex();

?>

<br>
<!------------------------------------ Tutorial-22 --------------------------------------------------->
<b> Tutorial-22 (Magic Method __CLASS__ and get_class) : </b> <br/>
<?php
$call = new magic_method();
 $call->method_1();
echo "<hr/>";
 $call ->method_2();
 echo "<hr/>";
 $call->method_3();
 
 ?>