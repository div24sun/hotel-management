<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home (Hotel Management)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/hm.png" type="img/icon" rel="icon">
</head>
<body>
	<div id="full">
		<div id="bg" style="background-image: url('img/i12.jpg'); height: 900px;">
		<div id="header">
			<div id="logo">
				<h1><font color="white">My Project</font></h1>
			</div>
			<div id="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="brands.php">Our Hotel</a></li>
					<li><a href="r1.php">BOOK MY STAY</a></li>
					<li><a href="#">PICTURES</a></li>
					<li><a href="contact.php">Contact us</a></li>
				</ul>
			</div>
		</div>
		<div id="banner">
			<div id="form">
				<form action="r1.php" method="POST">
					<table>
					
				
				<tr>
					<td>Status</td>
					<td><input type="text" name="Status" value="available" title="Status"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" placeholder="Enter name" title="Name"></td>
					<td>Id no.</td>
					<td><input type="text" name="idno" placeholder="Enter Id" title="Id"></td>
				</tr>
				
				<tr>
					<td>City</td>
					<td><select name="city">
						<option>--Select</option>
						<option>--delhi</option>
						<option>--bhopal</option>
						<option>--kolkata</option>
						<option>--mumbai</option>
					</select></td>
				</tr>
				<tr>
					<td>District</td>
					<td><select name="dis">
						<option>--Select</option>
						<option>--delhi</option>
						<option>--bhopal</option>
						<option>--kolkata</option>
						<option>--mumbai</option>
					</select></td>
				</tr>
				<tr>
					<td>State</td>
					<td><select name="state">
						<option>--Select</option>
						<option>--delhi</option>
						<option>--Madhya Pradesh</option>
						<option>--West Bengal</option>
						<option>--Maharastra</option>
					</select></td>
				</tr>
				<tr>
					<td>Enter E-mail</td>
					<td><input type="text" name="email" placeholder="Enter E-mail" title="E-mail"></td>
				</tr>
				<tr>
					<td>Check In Date</td>
					<td><input type="text" name="cin" value="" title="Check in"></td>
							
					<td>Check Out Date</td>
					<td><input type="text" name="cout" value="" title="Check out"></td>
				</tr>
				<tr>
					<td>Enter Members</td>
					<td><input type="text" name="Members" placeholder="Enter Members" title="Members"></td>
				</tr>

				<td>
					<td><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.8;" type="submit" name="submit" value="submit"></td>
				</td>

								
			</table>
		</form>
		<?php
		if(isset($_POST['submit']))
		{
			$name=$_POST['name'];
			$idno=$_POST['idno'];
			$city=$_POST['city'];
			$dis=$_POST['dis'];
			$state=$_POST['state'];
			$email=$_POST['email'];
			$cin=$_POST['cin'];
			$cout=$_POST['cout'];
			$m=$_POST['Members'];
		
				
					if(mysqli_query($a,"insert into f1(name,city,dis,state,email,cidate,codate,m,idno) value('$name','$city','$dis','$state','$email','$cin','$cout','$m','$idno')"))
					{
						echo "data insert";
					}
					else
					{
					echo "data not insert";
					}
		}
		
		?>
			</div>
		</div>
		</div>
	</div>
	<center>
		
	</center>

</body>
</html>