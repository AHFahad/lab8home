<?php 
	include "hea.php";
	include "db.php";
	session_start();
	$username=$_SESSION["uname"];
	
	if(!isset($_SESSION["uname"]))
	{
		header("location:h.php");
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>

 	<title>Home page</title>

 	<style type="text/css">
 			*{
 				margin: 0;
 				padding: 0;
 			}

 		.footer{
 			text-align: center;
 			background-color: blue;
 			padding: 25px 0 ;
 			color: white;

 		}

 		.header{
 			width: 100%;
 			//background-color: blue;
 			
 			
 		}
 		.header .left{
 			width: 40%;
 			float: left;

 		}

 		.header .right{
 			width: 60%;
 			float: right;

 		}

 		.header .right ul{
 			list-style: none;
 			text-align: right;
 			
 		}

 		.header .right ul li{
 			display: inline-block;
 			padding: 15px;
 			color:red;
 			background-color: blue;

 		}
		a{
			color:red;
		}
		.body{
			height: 500px;
		
		}

 		

 	</style>
  </head>
 <body>
 <div class="body">
 	<div class="content_left">
			<h3>Account</h3>
			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="profile.php">View Profile</a></li>
				<li><a href="editprofile.php">Edit Profile</a></li>
				<li><a href="changepicture.php">Change Profile Picture</a></li>
				<li><a href="changepassword.php">Change Password</a></li>
			</ul>
		</div>
		<div class="content_right">
			<h2>Welcome <?php echo $username; ?></h2>
			
		</div>
 </div>
 </body>
 </html>



 <?php 
 	include "foo.php";
  ?>