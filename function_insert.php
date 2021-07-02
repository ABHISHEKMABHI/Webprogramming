<?php
	    include("config1.php");
		if(isset($_POST['submit']))
		{
			$name=$_POST['Name'];
			$details=$_POST['Details'];
			$location=$_POST['Location'];
			$capacity=$_POST['Capacity'];
			$available_date=$_POST['Available_date'];
			$contact_details=$_POST['Contact_details'];

			$result=mysqli_query($mysql2,"INSERT into convention_center values('','$name','$details','$location','$capacity','$available_date','$contact_details')");
			if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //you need to exit the script, if there is an error
    exit();
}
			if($result)
			{   
				header("location:function_insert.php");
				echo "Sucess";
			}
			else
			{
				echo "Failed";
			}
		}
		?>