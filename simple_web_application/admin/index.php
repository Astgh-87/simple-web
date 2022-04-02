<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=">
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- INPUT MASK-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.3/jquery.inputmask.bundle.min.js"></script>

 <link rel="stylesheet" media="all" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <title>Managing Page</title>
</head>

<script>
$(document).ready(function(){
  $(":input").inputmask();
});
</script>

<body>
	<form action="file.php" method="POST">
		<input type="text" name="firstname" placeholder="First Name" required>
		<br>
		<input type="text" name="lastname" placeholder="Last Name" required>
		<br>
		<input type="text" name="dateofbirth" placeholder="Date of Birth" required>
		<br>
		<input type="text" name="email" placeholder="Email Address" required>
		<br>
		<input type="text" name="phone" data-masked="" data-inputmask="'mask': '(999) 999-9999'" placeholder="Phone number" required>
		
		<input type="submit" name="send">
		<br>
	</form>

<table align='center' cellspacing=2 cellpadding=5 id="data_table" border=1>

		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Date of Birth</th>
			<th>Email Address</th>
			<th>Phone Number</th>
		</tr>
<?php
include "connect.php";

$sql = "SELECT *  FROM `user` ";

$result = mysqli_query ($con, $sql);
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)){

$date = date_create($row["dateofbirth"]); 
?>

<tr id="row1">
    <td id="fname_row1"><?php echo $row["firstname"] ?></td>
	<td id="lname_row1"><?php echo $row["lastname"] ?></td>
	<td id="age_row1"><?php echo date_format($date, 'd/m/Y')?></td>
	<td id="email_row1"><?php echo $row["email"]?></td>
	<td id="phone_row1"><?php echo $row["phone"]?></td>


<td>
    <input type="button" id="edit_button1" value="Edit" class="edit" onclick="edit_row('1')">
    <input type="button" id="save_button1" value="Save" class="save" onclick="save_row('1')">
</td>
	<td> <form method="POST" action='delete.php ?id=<?php echo $row["id"] ?> '>
	<input type="submit" name="delete" value="Delete">
	</form>
    </td>
    </tr>
<?php
 }
	}
?>
	</table>

</body>
<script type="text/javascript" src="script.js"></script>

</html>