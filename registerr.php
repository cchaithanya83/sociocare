<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
			 body{
  				background: url(8.jpg);
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
 		</style>
</head>
<body>
		<div class="topnav">
 <font face="Harlow Solid Italic" size="10px" color="white">Shady Shipping Agency Ltd</font><img src="logo2.png" alt="logo" style="width:70px;height:50px;">
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
   <a class="active" href="#home">Home</a>
</div> <center>
<form  action="registernew.php" autocomplete="on" method="post"> 
				<h1> Sign up </h1> 
				
				<p> 
					<label for="Cust_name" class="Cust_name" data-icon="u">Username:</label>
					<input id="Cust_name" name="Cust_name" required="required" type="text" placeholder="" />
				</p>
				<p> 
					<label for="Age" class="Age" data-icon="u">Age:</label>
					<input id="Age" name="Age" required="required" type="text" placeholder="" />

				</p>
				<p> 
					<label for="Email" class="Email" data-icon="e" >Email:</label>
					<input id="Email" name="Email" required="required" type="email" placeholder="mysupermail@mail.com"/> 

				</p>
				<p> 
					
					<label for="phone" class="Phone" data-icon="u">Phone:</label>
					<input id="Phone" name="Phone" required="required" type="text" placeholder="" />
				</p>
					<p> 
					
					<label for="toi" class="toi" data-icon="u">Phone:</label>
					<input id="toi" name="toi" required="required" type="text" placeholder="" />
				</p>
				<p> 
					<label for="Password" class="Password" data-icon="p">Password: </label>
					<input id="Password" name="Password" required="required" type="password" placeholder="eg. X8df!90EO"/>
				</p>
				<p> 
					
				</p>
				<p class="signin button"> 
					<input type="submit" value="Sign up"/> 
				</center>
	</body>
</html>