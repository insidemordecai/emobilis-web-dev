<?php

include "connect.php";

$sql = "SELECT * FROM `detail`";

// execute query
$result = mysqli_query($link, $sql);

if ($result) {
  // check for data
  $data = mysqli_num_rows($result);

  if ($data > 0) {
    while ($row = mysqli_fetch_array($result)) {
      echo " " . $id = $row['id'] . ".";
      echo " " . $fullname = $row['fullname'];
      echo " " . $email = $row['email'];
      echo " " . $phonenumber = $row['phonenumber'];
      echo " " . $gender = $row['gender'];

      echo "<hr>";
    }
  } else {
    echo "No records were found in the database. <br>";
  }
} else {
  echo "Error executing query $sql " . mysqli_error($link);
}
