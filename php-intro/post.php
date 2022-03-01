<?php

include "connect.php";

if (isset($_POST["submit"])) {

  $fullname = $_POST["fullname"];
  $email = $_POST["email"];
  $phonenumber = $_POST["phonenumber"];
  $gender = $_POST["gender"];

  $sql = "INSERT INTO `detail`(`fullname`, `email`, `phonenumber`, `gender`) VALUES ('$fullname','$email','$phonenumber','$gender')";
  $result = mysqli_query($link, $sql);

  if ($result) {
    echo "Data has been added successfully <br>";
    header("location: select.php");
  } else {
    echo "Error adding this record $sql " . mysqli_error($link) . "<br>";
  }
}
