<?php

if (isset($_GET["submit"])) {

  $fullname = $_GET["fullname"];
  $email = $_GET["email"];
  $phonenumber = $_GET["phonenumber"];
  $gender = $_GET["gender"];

  echo "Full name is $fullname and gender is $gender <br>";
  echo "Email address is $email and phone number is $phonenumber <br>";
}
