<?php 
	include "hea.php";
	include "db.php";
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
			<div class="content_right_l">
				<h3>Profile</h3>
				<?php
				

					$sql = "SELECT id, name, username, email,password FROM users WHERE username='".$_SESSION["uname"]."'";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						// output data of each row
						echo "<table>";
						while($row = $result->fetch_assoc()) {
							echo "<tr>";
							echo "<td>Id :</td>";
							echo "<td>".$row["id"]."</td>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<td>Name :</td>";
							echo "<td>".$row["name"]."</td>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<td>Email :</td>";
							echo "<td>".$row["email"]."</td>";
							echo "</tr>";
							
							echo "<tr>";
							echo "<td>Username :</td>";
							echo "<td>".$row["username"]."</td>";
							echo "</tr>";
							

						}
						echo "</table>";
					} else {
						echo "0 results";
					}

					$conn->close();
					
					
				 ?>
			</div>
			
		</div>


 </div>
 </body>
 </html>



 <?php 
 	include "foo.php";
  ?>