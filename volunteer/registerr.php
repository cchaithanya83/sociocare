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
input{
	width: 20vw;
	text-align: left;
	padding-left: 1vw;
	border: 0;
	border-color: none;
	border-radius: 10px;
	background-color: #e3eefa;
	height: 5vh;
}
form{
	margin-top: 10vh;
	background-color: white;
	/* width: 27vw;
	height: 45vh; */
	width: max-content;
	padding: 2vh;
	border-radius: 10px;
}
h1{
	text-align: left;
}
body{
	background-color: #03d3fc ;
	display: block;
}
 		</style>
</head>
<body>
		<div class="topnav">
 <font face="Harlow Solid Italic" size="10px" color="white">Volunteer</font>
  <a href="#news">Info</a>
  <a href="#contact">Contact</a>

   <a class="active" href="../index.html">Home</a>
</div> <center>

<form  action="registernew.php" autocomplete="on" method="post">
	 
				<h1 style="padding-left: 7vw;"> Sign up </h1> 

				<p> 
					<!-- <label for="Cust_name" class="Cust_name" data-icon="u">Username:</label> -->
					<input id="Cust_name" name="Cust_name" required="required" type="text" placeholder="UserName" />
				</p>
				<p> 
					<!-- <label for="Age" class="Age" data-icon="u">Age:</label> -->
					<input id="Age" name="Age" required="required" type="text" placeholder="Age" />

				</p>
				<p> 
					<!-- <label for="Email" class="Email" data-icon="e" >Email:</label> -->
					<input id="Email" name="Email" required="required" type="email" placeholder="Email Address"/> 

				</p>
				<p> 
					
					<!-- <label for="phone" class="Phone" data-icon="u">Phone:</label> -->
					<input id="Phone" name="Phone" required="required" type="text" placeholder="Phone Number" />
				</p>
					<p> 
					
					<!-- <label for="toi" class="toi" data-icon="u">Area of interest:</label> -->
					<input id="toi" name="toi" required="required" type="text" placeholder="Area of interest" />
				</p>
				<p> 
					<!-- <label for="Password" class="Password" data-icon="p">Password: </label> -->
					<input id="Password" name="Password" required="required" type="password" placeholder="Password"/>
				</p>
				<p> 
					
				</p>
				<p class="signin button"> 
					<input type="submit" value="Sign up" style="text-align: center;"/> 
				</center>
	</body>
</html>