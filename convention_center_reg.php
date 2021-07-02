<?php
include("config1.php");
$result=mysqli_query($mysql2,"SELECT * from convention_center ORDER by id DESC");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

		<form action="function_insert.php" method="POST">
		Name<input type="text" name="name"><br>
			Details<input type="text" name="details"><br>
			Location<input type="text" name="location"><br>
			Capacity<input type="text" name="capacity"><br>
            Available date<input type="date" name=" available_date"><br>
            Contact details<input type="text" name="contact_details"><br>
			<input type="submit" name="submit">
		</form>
	<table border="1">
	
</table>
</body>
</html>