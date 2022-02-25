<?php

if (isset($_POST["submit"])) {
  
  $fullname = $_POST["fullname"];
  $email = $_POST["email"];
  $phonenumber = $_POST["phonenumber"];
  $gender = $_POST["gender"];

  echo "Full name is $fullname and gender is $gender <br>";
  echo "Email address is $email and phone number is $phonenumber <br>";
}
