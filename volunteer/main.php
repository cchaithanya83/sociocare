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
$var_value = $_GET['varname'];

?>
<!DOCTYPE html>
<html>

<head>
	<title>Add task</title>
    <style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: black;
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
	background-image: url("https://images.pexels.com/photos/3704989/pexels-photo-3704989.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
}
h1{
	color: white;
	text-align: center;
}
.task{
	width :480px;
}
.org{
	padding : 4vh;
	margin-left:50px ;
}
	</style>
</head>

<body>   
	
<div class="topnav">
 <font face="Harlow Solid Italic" size="10px" color="white"class="org">Volunteer</font>
  <a href="loginhtml.html"><-back</a>
  <a href="#contact">Contact</a>
   <a class="active" href="../index.html">Home</a>
</div>  
		<!-- TABLE CONSTRUCTION-->
        <p ><h1>Volunteer Info</h1></p>
		<table>
			<tr>
				<th>Vol_id</th>
				<th>Vol_name</th>
				<th>Age</th>
				<th>Email</th>
				<th>Phone</th>
				
				<th>Area of interest</th>
				<th>No of hour in week</th>
				<th>Task</th>
				<th>progress</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
                    if($rows['Cust_name']==$var_value){

                    
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
				<td><?php echo $rows['noh'];?></td>
				<td><?php echo $rows['task'];?></td>
				<td><?php echo $rows['progress'];?></td>
				
				
			</tr>
			<?php
                    }}
			?>
        </table>

      
	 
		
	</center>
</body>

</html>
