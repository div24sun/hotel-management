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
		<div id="bg" style="background-image: url('img/i3.jpg');width: 100%; height: 750px;">
		<div id="header">
			<div id="logo">
				<h1><font color="white">My Project</font></h1>
			</div>
			<div id="nav">
				<ul>
					<li><a href="ahome.php">Home</a></li>
					<li><a href="room.php">Room Update</a></li>
					<li><a href="booking.php">Booking</a></li>
					<li><a href="rd.php">Room Details</a></li>
					<li><a href="acontact.php">Contact us</a></li>
				</ul>
			</div>
		</div>
		<div id="banner">
			<div id="form">
			
				<form action="room.php" method="POST">
			<table>
				
				<tr>
					<td>Room No</td>
					<td><input type="text" name="rno" placeholder="Enter Room No" title="Enter Room No"></td>
				</tr>
				<tr>
					<td>Room Type</td>
					<td><input type="text" name="type" placeholder="Enter Room Type" title="Enter Room Type"></td>
				</tr>
				<tr>
					<td>Room Price</td>
					<td><input type="text" name="price" placeholder="Enter Room Price" title="Enter Room Price"></td>
				</tr>
					<td><td><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.8;" type="submit" name="submit" value="submit"></td></td>
			</table>
		</form>
		<?php
			If(isset($_POST['submit']))
			{
				$rno=$_POST['rno'];
				$type=$_POST['type'];
				$p=$_POST['price'];
				if(mysqli_query($a,"insert into room(rno,type,price) values('$rno','$type','$p')"))
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

</body>
</html>