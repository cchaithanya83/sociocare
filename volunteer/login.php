<?php
$conn = mysqli_connect("localhost", "root", "", "hack");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
 $Cust_name="";
 $password="";
 $Password1="";
 $temp=0;
 $Cust_name=$_POST['Cust_name'];
$password=$_POST['Password'];
  $query="select password from register where   Cust_name='$Cust_name'";
 $result=$conn->query($query);
while($row=mysqli_fetch_array($result))
{ 
	
	 $Password1=$row['password'];
	
	 if($Password1 == $password)
	 {
		  $temp=1;
	 }
}
	 
	if($temp=="1")
	{
		header("location:main.php? varname=$Cust_name ");
	}
	else
	{
		echo "Invalid data";
		
	
	}
		

?>