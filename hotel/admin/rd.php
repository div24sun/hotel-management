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
		<div style="background-image: url('img/i1.jpg');background-size: 100% 710px;  width: 100%; height: 710px;">
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
		<div id="banner"><br><br><br>
		<center><h1 style="color: white">Welcome Admin</h1>	<br><br>
			<div style="background-color: rgba(255,255,255,0.5);">
			<table>
				<tr>
					<th width="25%" height="50px">Room NO.</th>
					<th width="25%" height="50px">Room Type</th>
					<th width="25%" height="50px">Price</th>
					<th width="25%" height="50px">status</th>
					
				</tr>
				<?php
					$q1="select * from room";
					$run=mysqli_query($a,$q1);
					while($row=mysqli_fetch_array($run))
					{
						$rno=$row['rno'];
						$type=$row['type'];
						$price=$row['price'];
						$status=$row['status'];
						
				?>
				<tr>
					<td width="25%" height="50px"><center><?php echo $rno; ?></center></td>
					<td width="25%" height="50px"><center><?php echo $type; ?></center></td>
					<td width="25%" height="50px"><center><?php echo $price; ?></center></td>
					<td width="25%" height="50px"><center><?php echo $status; ?></center></td>
					
				</tr>
				<?php
					}
				?>
			</table>
			</div>
		</center>
		</div>
	
	</div>
	</div>
</body>
</html>