<?php
       

		$conn = mysqli_connect("localhost", "root", "", "hack");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
    
		$progress=$_REQUEST['progress'];
        

        $sql = "SELECT * FROM register ORDER BY Cust_id ASC ";
       
        ?>
        
<!DOCTYPE html>
<html>

<head>
	<title>Customer</title>
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
.task{
    margin-top: 5vh;
}
body{
	background-image: url("https://images.pexels.com/photos/4068379/pexels-photo-4068379.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
}
.org{
	padding : 4vh;
	margin-left:50px ;
}
	</style>
</head>

<body>
<div class="topnav">
 <font face="Harlow Solid Italic" size="10px" color="white"class="org">Organiser</font>
  <a href="progress1.php"><-back</a>
  <a href="#contact">Contact</a>
   <a class="active" href="../index.html">Home</a>
</div>  
	<center>


    <?php
$var_value = $_GET['varname'];

$sql = "UPDATE register SET progress = '$progress' WHERE Cust_id = $var_value";

// Execute the query
if(mysqli_query($conn, $sql)){
    echo '<span style ="color: #AFA;">task added successfully</span>';				
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
