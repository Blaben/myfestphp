<?php
//My first php programimg language

//Declaring my variable in PHP
//Note that in PHP we dont define the variable type

//so we start with a $ 

/*
$Username = "Benjamin";
$Password = "123error";

echo "your Username is ". $Username. " and the Password is ". $Password;

//To know the type of a Variable we use the function "var_dump(variable name)"

var_dump($Password);

//we need to add the echo to it inorder to get the printout

echo var_dump($Username); 

//Create a Condition statements
$var = 13;
if($var % 2 == 0 && $var % 3 == 0)
{
    echo $var . " Is divisible by both 2 and 3";
} 
elseif($var % 2 == 0){
    echo $var ." is divisible by 2";
}

elseif($var % 3 == 0){
    echo $var . " Is rather divisible by 3";
}

else {
    echo "Both numbers are not divisible ";
} 

//Using Switch Statement
//This makes the condition more easier and simple to use

$Grades = 9;

switch($Grades){

    case ($Grades >=90):
        echo "Grade A : Excellent";
    break;

    case ($Grades >=75):
        echo "Grade B : Very Good";
    break;

    case ($Grades >= 60):
        echo "Grade C : Good";
    break;

    case ($Grades >= 45):
        echo "Grade D : Pass";
    break;

    case ($Grades >=10):
        echo "Grade E : Faile";
    break;

    default:
    echo "We are sorry but you have to repeat the course again";
}
 


 //Loop Statement

 for($val = 2; $val <=10; $val++ ){
    echo "Number $val <br>";
 }
 */

 //Functions in PHP
 //We have two types thus 
 // Built in Functions and User defined function

 //Built in Function example is the echo

 //User defined function\
 
 function looping(){
    for($val=1; $val<=10; $val++){
        echo "Number :  $val <br>";
    }
 }

 //to call the function anywhere in your code just type the name of the function.
looping();
?>