<!DOCTYPE html>
<html>

<head>
	<title>Customer</title>
</head>

<body>
	<center>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "hack");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		$Cust_id="";	
		$Cust_name = $_REQUEST['Cust_name'];
		$Age = $_REQUEST['Age'];
		$Email= $_REQUEST['Email'];
		$Phone= $_REQUEST['Phone'];
		$Toi= $_REQUEST['toi'];
		$noh= $_REQUEST['noh'];
		$Password=$_REQUEST['Password'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO register VALUES ('$Cust_id','$Cust_name','$Age','$Email','$Phone','$Toi','$noh','$Password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Registration is successful
				</h3>";


			echo "<a href='loginhtml.html'>CLick here to login</a>";
			

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
