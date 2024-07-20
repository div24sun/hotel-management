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
		<div style="background-image: url('img/i14.jfif');background-size: 100% 710px;  width: 100%; height: 710px;">
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
					<th width="10%" height="50px">Name</th>
					<th width="10%" height="50px">Id No.</th>
					<th width="10%" height="50px">City</th>
					<th width="10%" height="50px">District</th>
					<th width="10%" height="50px">State</th>
					<th width="10%" height="50px">Check In Date</th>
					<th width="10%" height="50px">Check Out Date</th>
					<th width="10%" height="50px">Member</th>
				</tr>
				<?php
					$q1="select * from f1";
					$run=mysqli_query($a,$q1);
					while($row=mysqli_fetch_array($run))
					{
						$name=$row['name'];
						$idno=$row['idno'];
						$city=$row['city'];
						$dis=$row['dis'];
						$state=$row['state'];
						$cidate=$row['cidate'];
						$codate=$row['codate'];
						$m=$row['m'];
				?>

				<tr>
					<td width="10%" height="50px"><center><?php echo $name; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $idno; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $city; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $dis; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $state; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $cidate; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $codate; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $m; ?></center></td>
				</tr>
				<?php
					}
				?>
			</table>
			</div>
		</center>
		</div>
	<center>
		
	</center>
	</div>
	</div>
</body>
</html>