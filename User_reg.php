<?php
include("config1.php");
$result=mysqli_query($mysql2,"SELECT * from user ORDER by id DESC");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

		<form action="user_insert.php" method="POST">
		 User Name<input type="text" name="Uname"><br>
		contactdetails<input type="text" name="contact_details"><br>
		convention center name<input type="text" name="name"><br>
			occasion date<input type="date" name="occ_date"><br>
            capacity<input type="text" name=" capacity"><br>
			<input type="submit" name="submit">
		</form>
	<table border="1">
	
</table>
</body>
</html>