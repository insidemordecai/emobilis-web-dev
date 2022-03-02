<?php

include "connect.php";

if (isset($_POST["submit"])) {

  $id = $_POST["id"];

  $sql = "DELETE FROM `detail` WHERE id = '$id' ";
  $result = mysqli_query($link, $sql);

  if ($result) {
    echo "Record deleted";
    header("location: select.php");
  } else {
    echo "Error executing deletion query $sql" . mysqli_error($link);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>
  <h4>Are you sure you want to delete this record?</h4>
  <form action="delete.php" method="post">
    <div>
      <input type="text" name="id" value="<?php echo $_GET["id"]; ?>">
    </div>
    <div>
      <input type="submit" value="YES" name="submit">
      <a href="select.php">NO</a>
    </div>
  </form>
</body>

</html>