<?php 
require_once 'vendor/autoload.php';
// ------------------------------------ 1st Tutorial ------------------------------------------------//
echo "<b>Tutorial-1 (class,property and method) : </b>";
$call = new App\src\Class_1();
$call->age='19.';
$call ->personNameAge();
$call ->marketplace('Fiverr');
echo "<br/>";
?>
<br>
<!------------------------------------- 2nd Tutorial ---------------------------------------------------->
<b>Tutorial-2 (A initial project by Class_1) : </b>
<form action="" method="POST"> 
    <table> 
        <tr> 
            <td> Type The First Number : </td>
            <td> <input type="number" name="num1"/> </td>
        </tr>
        <tr> 
            <td> Type The Second Number :</td> 
            <td> <input type="number" name="num2"/> </td>
        </tr>
        <tr> 
            <td></td>
            <td> <input type="submit" name="submit" value="Calculate"/> </td>
        </tr>
    </table>
</form>

<?php
if (isset($_REQUEST['submit'])) {
    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];
}
if (!empty($num1) && !empty($num2)) {
    $call = new App\src\class_2();
    $call->sum($num1, $num2);
    $call->sub($num1, $num2);
    $call->mul($num1, $num2);
    $call->div($num1, $num2);
} else {
    echo "<span style='color:tomato'> Field must not be empty</span>";
}
?>
<br>

<!------------------------------------ Tutorial-3 --------------------------------------------------->
<b> Tutorial-3 (Use of contractor) : </b> <br/>
<?php 

$call = new App\src\class_3('Rezwan','20');
$call ->person_details();

?>
<br/><br/>
<!-------------------------------- Tutorial-4+5 (class_4) ---------------------------------------------------->
<b>Tutorial- (4+5),(Construct & Destruct) : </b>
<br/>
<?php
$username = "Rezwan Hossain Sajeeb";
$password = "1234";
$call = new App\src\class_4($username, $password);
?>
<br/><br/>
<!------------------------------- Tutorial-6+7 = class_5 ----------------------------------------------------->
<b>Tutorial-(6+7) (Constance & Static)</b> <br/> 

<?php 
App\src\class_5::person();
?>
<br/>
<!------------------------------------- Tutorial-8 ------------------------------------------------->
<br/>
<b> Tutorial-(8),(Inheritance)</b> <br/>
<?php
$username = "Rezwan";
$password = 1234;

$call = new App\src\class_7($username, $password);

echo $call->Admin("2nd");
?>

<br/>
<!------------------------------------- Tutorial-9+10 ------------------------------------------------->
<br/>
<b> Tutorial-(9+10),(final + Access Modifiers)</b> <br/>

<?php
// Final is use for limitation to use of a property or method. If you use final infront of a property or a method. You cannot access that property of method from a child class.So final is use for use limitatio for property or method;
$calls = new \App\src\class_8($username, $password);
echo $calls->visitor("1st");
$call_2 = $calls->Admin("1st");
echo $call_2->level;
?>


<br/>
<!------------------------------------- Tutorial-11 ------------------------------------------------->
<br/>
<b> Tutorial-(11),(Polymorphism)</b> <br/>

<?php 
echo "Actually polymorphism is like inherit constructor. Where define two same method in different two classes.But when create a object to call then work the child class but parent class not work then should use 'parent::class name'(see 12 no. tutorial) ";

?>


<br/>
<!------------------------------------- Tutorial-12 ------------------------------------------------->
<br/>
<b> Tutorial-(12),(inherit constructor,class_9)</b> <br/>
<?php 
$call = new \App\src\class_9();

?>


<br/>
<!------------------------------------- Tutorial-15 ------------------------------------------------->
<br/>
<b> Tutorial-(15),(abstract,class_10)</b> <br/>
<?php 
$call = new App\src\class_10_A();
$call ->test();
?>

<br/>
<!------------------------------------- Tutorial-16 ------------------------------------------------->
<br/>
<b> Tutorial-(16),(Interface & polymorphism,class_11)</b> <br/>
<?php //Polymorphism is actually different type of classes but method name are same like the below example..
$call = new App\src\A();
echo $call ->test();
echo "<br/>" ;
$call_2 = new App\src\B();
echo $call_2 ->test();
echo "<br/>";
$call_3 = new \App\src\C();
echo $call_3 ->lasttest("loading...");
?>

<br/>
<!------------------------------------- Tutorial-16 ------------------------------------------------->
<br/>
<b> Tutorial-(17),(Namespace,class_12)</b> <br/>
<?php

use App\src\class_12;

echo class_12::namespaces();

use App\src\sub_class_12;

echo sub_class_12::namespaces();
?>
