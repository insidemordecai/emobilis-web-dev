<?php

$a = 12;
$b = 13;
$c = 45;
$d = 89;

echo "<hr>";
echo "<h4> Arithmetic Operators </h4>";

$sum = $a + $b;
echo "The sum of $a and $b is $sum <br>";

$diff = $d - $c;
echo "The difference of $d and $c is $diff <br>";

$prod = $a * $c;
echo "The product of $a and $c is $prod <br>";

$quo = $c / $a;
echo "The quotient of $c and $a is $quo <br>";

$rem = $b % $a;
echo "The remainder when $b divides $a is $rem <br>";

echo "<hr>";
echo "<h4> Assignment Operators </h4>";

$num1 = 12;
$num2 = 40;

echo "Value of num1 is $num1 <br>";

$num1 += $num2;
echo " New value of num1 after += is $num1 <br>";

$num1 -= $num2;
echo "New value of num1 after -= is $num1 <br>";

$num1 *= $num2;
echo "New value of num1 after *= is $num1 <br>";

echo "<hr>";
echo "<h4>Comparison Operators</h4>";

$age = 13;

if ($age > 18) {
  echo "You are an adult <br>";
} else {
  echo "You are a minor <br>";
}

if ($a == $num1) {
  print("It's true, a is equal to num1 <br>");
} else {
  print("False, a is not equal to num1 <br>");
}

$x = 16;
$y = 16;

if ($x === $y) {
  print("It's true, they are equal <br>");
  print("False,they are not equal <br>");
}

if ($a != $num1) {
  print("It's true, they are not equal <br>");
} else {
  print("False, they are not equal <br>");
}

if ($age >= 20 and $age < 100) {
  echo "You are an adult <br>";
} elseif ($age >= 12 and $age < 20) {
  echo "You are a teenager <br>";
} elseif ($age > 0 and $age < 12) {
  echo "You are a child <br>";
} else {
  echo "No such age <br>";
}

echo "<hr>";
echo "<h4>Assessments</h4>";
/* write a program in php that grades students 
80 - 100 = A
Marks between 0 - 100
*/

$grade = 80;

if ($grade >= 80 and $grade <= 100) {
  echo "You have an A <br>";
} elseif ($grade >= 70 and $grade < 80) {
  echo "You have a B <br>";
} elseif ($grade >= 60 and $grade < 70) {
  echo "You have a C <br>";
} elseif ($grade >= 50 and $grade < 60) {
  echo "You have a D <br>";
} elseif ($grade >= 0 and $grade < 50) {
  echo "Sorry, you have an F! <br>";
} else {
  echo "Invalid Grade!";
}

/* Code to calculate gross salary
Salary = 100k

BS <= 10k, Med Allowance - 20%, House Allowance = 50%, Tax - 10%
BS <= 20k, 25%, 60%, 10%
BS <= 30k, 30%, 65%, 12%
BS > 40k, 40%, 70%, 12%
 */

$salary = 50000;

if ($salary <= 10000 and $salary >= 0) {
  $med = 0.2 * $salary;
  $house = 0.5 * $salary;
  $tax = 0.1 * $salary;

  $gross = $salary + $med + $house - $tax;

  echo "Gross salary is $gross";
} elseif ($salary <= 20000 and $salary > 10000) {
  $med = 0.25 * $salary;
  $house = 0.6 * $salary;
  $tax = 0.1 * $salary;

  $gross = $salary + $med + $house - $tax;

  echo "Gross salary is $gross";
} elseif ($salary <= 30000 and $salary > 20000) {
  $med = 0.3 * $salary;
  $house = 0.65 * $salary;
  $tax = 0.12 * $salary;

  $gross = $salary + $med + $house - $tax;

  echo "Gross salary is $gross";
} elseif ($salary <= 40000 and $salary > 30000) {
  $med = 0.35 * $salary;
  $house = 0.68 * $salary;
  $tax = 0.12 * $salary;

  $gross = $salary + $med + $house - $tax;

  echo "Gross salary is $gross";
} elseif ($salary >= 40000) {
  $med = 0.4 * $salary;
  $house = 0.7 * $salary;
  $tax = 0.12 * $salary;

  $gross = $salary + $med + $house - $tax;

  echo "Gross salary is $gross";
} else {
  echo "Invalid Salary!";
}

echo "<hr>";
echo "<h4>The Swith Statement</h4>";

$day = "Fri";

switch ($day) {
  case "Mon":
    echo "Today is Monday, I declare it Tuesday. Happy Tuesday everybody - Garfield";
    break;
  case "Tue":
    echo "Today is Tuesday,read a book";
    break;
  case "Wed":
    echo "Today is Wednesday, do some coding";
    break;
  case "Thur":
    echo "Today is Thursday, go for that singing practice";
    break;
  default:
    echo "Paaartaaay, it's the weekend";
    break;
}

echo "<hr>";
echo "<h4>Loops</h4>";

echo "<h4>While Loop </h4>";

$a = 1;

while ($a < 10) {
  echo "The value of a is $a <br>";
  $a++;
}

echo "<br>";
echo "<h4>Do While Loop</h4>";

$b = 1;

do {
  echo "The value of b is $b <br>";
  $b++;
} while ($b <= 5);

echo "<br>";
echo "<h4>For Loop</h4>";

for ($i = 10; $i > 1; $i--) {
  echo "The value of i is $i <br>";
}

echo "<br>";
echo "<h4>Odd and Even Numbers</h4>";

/*
print even numbers between 0 - 50
print odd numbers between 0-50
 */

$oddCounter = 1;

echo "These are the odd numbers: ";
for ($oddCounter; $oddCounter <= 50; $oddCounter++) {
  if ($oddCounter % 2 == 1) {
    echo "$oddCounter ";
  }
}

$evenCounter = 1;

echo "<br>";
echo "These are the even numbers: ";
for ($evenCounter; $evenCounter <= 50; $evenCounter++) {
  if ($evenCounter % 2 == 0) {
    echo "$evenCounter ";
  }
}

echo "<br>";
echo "<h4>Right Angled Triangle</h4>";
/*
print this pattern using a loop

*
**
***
****
*****
******

*/
