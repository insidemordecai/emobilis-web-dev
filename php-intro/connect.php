<?php

$link = mysqli_connect("localhost", "root", "", "vivaldi");

if ($link == true) {
  echo "Connection was successful <br>";
} else {
  echo "Error connecting " . mysqli_connect_error($link) . "<br>";
}
