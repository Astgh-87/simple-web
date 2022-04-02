<?php 	
include "connect.php";
if(isset($_POST["delete"])){
	$id=$_GET["id"];

	$sql = "DELETE FROM `user` WHERE id=$id";

if (mysqli_query($con, $sql)) {
  header("Location:index.php");
} else {
  echo "Error deleting record: " . mysqli_error($con);
}

mysqli_close($con);
}


 ?>