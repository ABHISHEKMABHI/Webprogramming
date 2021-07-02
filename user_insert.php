<?php
	    include("config1.php");
		if(isset($_POST['submit']))
		{
			$Uname=$_POST['Uname'];
			$contact_details=$_POST['contact_details'];
			$name=$_POST['name'];
			$occ_date=$_POST['occ_date'];
			$capacity=$_POST['capacity'];
					$result=mysqli_query($mysql2,"INSERT into convention_center values('','$Uname','$contact_details','$name','$occ_date','$capacity')");
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