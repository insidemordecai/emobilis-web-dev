<?php

function getSum($num1, $num2, $num3){
  $sum = $num1 + $num2 + $num3;
  echo "The sum is $sum <br>";
}

// calling the function 
getSum(12,10,20);
getSum(num1: 60, num2: 20, num3: 82);

echo "<hr>";

function greet($name){
  echo "Hello $name <br>";
}

greet("Jane");
greet("John");

echo "<hr>";
// create a fn that calculates your age given the YOB