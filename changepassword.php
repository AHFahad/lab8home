<?php 
	include "hea.php";
	include "db.php";

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "xdb";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}
					$sql="UPDATE users SET name='".$_POST["name"]."',email='".$_POST["email"]."',username= '".$_POST["uname"]."' WHERE id='".$eid."'";
					//$sql = "INSERT INTO products (product_name, description, quantity)
					//VALUES ('".$_POST["pname"]."', '".$_POST["description"]."', '".$_POST["quantity"]."')";

					if ($conn->query($sql) === TRUE) {
						echo "New record created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

					$conn->close();
			$_SESSION["uname"]=$_POST["uname"];
			header("Location:profile.php");	
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
			<h3>Change Password</h3>
			<?php
				

				$sql = "SELECT id, name, username, email,password FROM users WHERE username='".$_SESSION["uname"]."'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					
					while($row = $result->fetch_assoc()) {
						$eid=$row["id"];
						$ename=$row["name"];
						$eemail=$row["email"];
						$uuname=$row["username"];
						$epass=$row["password"];
					}
					
				} else {
					echo "0 results";
				}

				$conn->close();
				
				
			 ?>
		<form method="post">
		<table>
			<tr>
				<td><b>Current password :</b></td>
				<td><input type="text" name="oldpass" /></td>
				
			</tr>
			<tr>
				<td><b>New password :</b></td>
				<td><input type="text" name="newpass"/></td>
				
			</tr>
			
			<tr>
				<td><b>Retype New Password :</b></td>
				<td><input type="text" name="renewpass"/></td>
				
			</tr>
			
			
			
			
			<tr>
				<td align="center" colspan="2"><input type="submit" value="Submit" /></td>
				
			</tr>
			
		</table>
		
			
		
	</form>
			
		</div>


 </div>
 </body>
 </html>



 <?php 
 	include "foo.php";
  ?>