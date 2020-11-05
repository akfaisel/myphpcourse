<?php
// output string
echo "<h1>Hello 'PHP' world!</h1><br>";
echo 'Single <small>"quote"</small> testing<br>';
print("String printed using print function<br>");
?>

<?php
// variables
// syntax: $var_name =  value;
$num1 = 20;
$num2 = 50;
$result = $num1 % $num2;
echo $result;

$str1 = 'My Name is ';
$str2 = "Prakash";
$name = $str1.$str2;
print($name);
?>

<?php
// Arrays
$names = ["Arun", "Karthik", "Valli"]; // type 1
$marks = array(500, 650, 820); // type 2
echo '<br> Name is '.$names[1];
echo '<br> Marks obtained is '.$marks[1];
echo '<br>'.$names[2].' has secured '.$marks[2];
print_r($marks);

// associative array
$userdata =  ["name" => "Kumar", 
            "marks" => 560, 
            "bgroup" => 'o+ve', 
            "std" => '+2'];
echo '<br>';
echo $userdata['name'].' has a blood group of '.$userdata['bgroup'];
print_r($userdata);
?>

<?php
// operators
// arithmetic  + - * / %
$a = 50;
$b = 5;
$c = $a / $b;
print_r('Result is '. $c);

//condition > < >= <= == != && ||
$marks = 100;
if($marks > 450) {
    echo 'He is eligible for college admission';
}
elseif($marks > 250 && $marks < 450) {
    echo 'He is in waiting list';
}
else {
    echo 'He is not eligible for admission';
}
?>
<br>
<?php
// Looping
$names = ["Arun", "Karthik", "Valli", "Ashok"];

for($i=0; $i < count($names); $i++){
    $name = $names[$i];
    echo $name.'<br>';
}

foreach($names as $name){
    echo $name.'<br>';
}
?>

<?php
// this is single line comment

/*
This is multiple
lines
comments
*/
?>
<br>
<?php
function addition($num1, $num2){
    //$result = $num1 + $num2;
    return $num1 + $num2;
}

$res = addition(45, 5);
echo 'Result of function is '.$res; // this is the result
?>
<br>
<?php
// function to check if the student is pass or not
function checkEligibility($mark){
    if($mark >= 35){
        return true;
    }
    elseif($mark < 35){
        return false;
    }
}

//call the function
$result  = checkEligibility(100);

if($result){
    echo 'He is PASS';
}
elseif(!$result){
    echo 'He is FAIL';
}

// naming conventions
// variable name and function name should start with small letter
// class name should start with Caps
// any name should not start with a number 
// variable names can have _ example, $user_data , $check_eligibility
// camel casing: example, checkEligibility, isStudentPassOrFail
?>

<?php
// classes
// a class is a collection of variables and functions - properties and methods
class Class_name {

    public $var_name1;
    public $var_name2;

    public function function1(){

    }

    public function function2(){

    }

}
// include or link the class file
require 'arithmetic.php';

// create an instance of the class
$object = new Arithmetic();

// set the properties or variables
$object->num1 = 60;
$object->num2 = 40;

// call the function
$result = $object->addition();
echo '<br>Result of addition is '.$result;

// call subtraction function
$result = $object->subtraction();
echo '<br>Result of subtraction is '.$result;


//$userObject = new UserModel();
//echo $userObject->email;

// OOP - Object Oriented Programming
?>