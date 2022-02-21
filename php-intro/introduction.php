<?php

echo "Welcome to PHP Intro";

$username = "Francis Atwoli";
$USERNAME = "Jane Kamau";
$userName = "John Kimani";

$_age = 12;
$age1 = 13;
$age2 = 14;

echo "<hr>";

echo "The client name is $username";
echo "<br>";
echo "The other client name is $USERNAME";
echo "<br>";

// constants
define("WEB_URL","http://localhost/dashboard/");
define("PROFIT", 0.3);

echo "This is the link to our server dashboard " .WEB_URL;
echo "<br>";

$payment = 10000*PROFIT;

echo "Your payment is $payment";
echo "<br>";

print "We have printed this item using print()";

print "<hr>";

// DATA Types
// var_dump is used to show the data type on the browser side

// strings
$a = "This is a String";
$b = "A";

var_dump($a); 
print "<br>";
var_dump($b);
print "<br>";

// integers
$c = 1234;
$d = -12;

var_dump($c);
print "<br>";
var_dump($d);
print "<br>";

// floats
$e = 12.34;
$f = -12.34;

var_dump($e);
print "<br>";
var_dump($f);
print "<br>";

// booleans
$g = true;
$h = false;

var_dump($g);
print "<br>";
var_dump($h);
print "<br>";

// null
$y = null;

var_dump($y);
print "<br>";

// arrays
$colors = array("Red", "Orange", "Yellow");

var_dump($colors);
print "<br>";