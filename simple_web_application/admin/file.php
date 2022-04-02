<?php 
include "connect.php";

$firstname    = $_POST["firstname"];
$lastname     = $_POST["lastname"];
$dateofbirth  = $_POST["dateofbirth"];
$email        = $_POST["email"];
$phone        = $_POST["phone"];

$sql = "INSERT INTO `user` (`firstname`, `lastname`,`dateofbirth`, `email`, `phone`)
VALUES ('$firstname', '$lastname','$dateofbirth','$email','$phone')";

if (mysqli_query($con, $sql)) {
  header("Location:index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);


?>




