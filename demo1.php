<?php
/**
 * Created by PhpStorm.
 * User: lenovo E440
 * Date: 6/4/2019
 * Time: 10:34 AM
 */
#Php Condition statements[Its case sensitive]
//1.If statement :Executes some code if ONE condition is true
//2. If...else :Executes if part if true and else part if false
//3.If...elseif...else :Executes code as normal but if only the above part is false :
//If if is true it will be ran if false the elseif part will ran
//if the elseif part is true it will ran if false the else will  now ran
//4.switch

/*
 if(condition){
    code to execute
}
*/
$gender = "Female";

if ($gender == "Female"){
    echo "Happy Women's day";
}

echo"<br>";

if ($gender == "Female"){
    echo "Happy Women's day";
}
else{
    echo "Happy Men's day";
}

echo "<br>";

if ($gender == "Other"){
    echo "Happy women's day";
}
elseif($gender == "Other"){
    echo "Happy Others day";
}
else{
    echo "You're not from this planet, Haha!";
}
echo "<br>";

$t = date("H");
echo $t;
echo "<br>";

if ($t <= "10"){
    echo"Good Morning";
}elseif($t == "12"){
    echo"Good Afternoon";
}elseif ($t >= "12" and $t <="17"){
    echo"Good Evening";
}else{
    echo"Have a Good Night";
}
echo "<br>";
/*Write a program which iterates the integers from 1 -100
for multiples of three print "Fizz" instead of the number
and for the multiples of five print  "Buzz"
for numbers which are multiples of both three and five print "FizzBuzz"
*/

#The switch statement is used to perform different actions based on different conditions.
//Use the switch statement to select one of many blocks to be executed

//syntax
/*
switch(n){
    case label1:
        code to be executed;
        break;//to prevent running the rest of the code if the first condition has been met

    case label2:
        code to be executed;
        break;

    case label3:
        code to be executed;
        break;
    default:
        code to run if no condition has been met above; n is different from labels
}
plus it is case sensitive
*/

switch('Male'){
    case 'Male':
        echo 'I am a male';
        break;

    case 'Female':
        echo 'I am female';
        break;

    case 'Other':
        echo 'I am an alien';
        break;

    default:
        echo 'None of the above';



}
