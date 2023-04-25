<?php
$conn = mysqli_connect("localhost", "root", "", "hack");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
 $org_name="";
 $password="";
 $Password1="";
 $temp=0;
 $org_name=$_POST['org_name'];
$password=$_POST['Password'];
  $query="select password from organiser where   org_name='$org_name'";
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
		header("location:sleforg.php? varname=$org_name");
	}
	else
	{
		echo "Invalid data";
		
	
	}
		

?>