<?php

		$conn = mysqli_connect("localhost", "root", "", "hack");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

// SQL query to select data from database
$sql = "SELECT * FROM register ORDER BY Cust_id ASC ";
$result = $conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>GFG User Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: white;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: white;
			border: 1px solid black;
		}
		th {
			background-color: white;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: black;
		}
			 body{
  				background: url(14.jpg);
  				background-repeat: no-repeat;
 				 background-size:cover}
 				 			.topnav {
  background-color: #333;
  overflow: hidden;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
body{
	background-color: #56baed;
}
.org{
	padding : 4vh;
	margin-left:50px ;
}
.tb{
	border: 1px;
	border-color: black;
}	
th{
	border-radius:12% ;
}
td{
	border-radius: 12%;
}
	</style>
</head>

<body>
		<div class="topnav">
 <font face="Harlow Solid Italic" size="10px" color="white"class="org">Organiser</font>
  <a href="mainpage.php"><-back</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
   <a class="active" href="../index.html">Home</a>
</div>  
<center>
	<p style="color:white"><h1>Volunteer Info</h1></p>
	<section>
		
		<!-- TABLE CONSTRUCTION-->
		<table class="tb">
			<tr>
				<th>Vol_id</th>
				<th>Vol_name</th>
				<th>Age</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Area of interest</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['Cust_id'];?></td>
				<td><?php echo $rows['Cust_name'];?></td>
				<td><?php echo $rows['Age'];?></td>
				<td><?php echo $rows['Email'];?></td>
				<td><?php echo $rows['Phone'];?></td>
				<td><?php echo $rows['Toi'];?></td>
				
				
				
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>