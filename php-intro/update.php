<?php

include "connect.php";

if (isset($_POST["submit"])) {
  $id = $_POST["id"];

  $up_fullname = $_POST["fullname"];
  $up_email = $_POST["email"];
  $up_phonenumber = $_POST["phonenumber"];
  $up_gender = $_POST["gender"];

  $up_sql = "UPDATE `detail` SET `fullname`='$up_fullname',`email`='$up_email',`phonenumber`='$up_phonenumber',`gender`='$up_gender' WHERE id = $id";

  $up_result = mysqli_query($link, $up_sql);

  if ($up_result){
    echo "Record has been updated";
    header("location: select.php");
  } else {
    echo "Error executing query $up_sql ". mysqli_error($link);
  }
} else {

  if (isset($_GET["id"]) and !empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM `detail` WHERE id =$id";
    $result = mysqli_query($link, $sql);

    if ($result) {
      $data = mysqli_num_rows($result);

      if ($data == 1) {
        $row = mysqli_fetch_array($result);

        $fullname = $row["fullname"];
        $email = $row["email"];
        $phonenumber = $row["phonenumber"];
        $gender = $row["gender"];
      }
    } else {
      echo "Error executing query $sql" . mysqli_error($link);
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
</head>

<body>
  <h3>Update This Record</h3>

  <form action="update.php" method="post">
    <div>
      <label>Id</label>
      <input type="text" name="id" value="<?php echo $_GET["id"]; ?>">
    </div>
    <div>
      <label>Full Name</label>
      <input type="text" name="fullname" value="<?php echo $fullname; ?>">
    </div>
    <div>
      <label>Email Address</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div>
      <label>Phone Number</label>
      <input type="text" name="phonenumber" value="<?php echo $phonenumber; ?>">
    </div>
    <div>
      <label>Gender</label>
        <select name="gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
    </div>

    <div>
      <input type="submit" value="Update" name="submit">
    </div>
  </form>
</body>

</html>