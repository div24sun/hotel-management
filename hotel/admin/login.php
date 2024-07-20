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
					<li><a href="index.php">Home</a></li>
					<li><a href="brands.php">Our Hotel</a></li>
					<li><a href="r1.php">BOOK MY STAY</a></li>
					<li><a href="#">PICTURES</a></li>
					<li><a href="contact.php">Contact us</a></li>
				</ul>
			</div>
		</div>
		<div id="banner"><br><br><br><br><br><br><br><br><br><br><br>
			
		<center><div style="background: rgba(255,255,255,0.5); width: 50%">
		
		<form action="" method="post">
			<table>
			<tr>
				<td width="50%" height="50px">Username</td>
				<td width="50%" height="50px"><input type="text" name="un" placeholder="Enter Username" title="Enter Username"></td>
			</tr>
			<tr>
				<td width="50%" height="50px">Password</td>
				<td width="50%" height="50px"><input type="password" name="ps" placeholder="Enter Password" title="Enter Password"></td>
			</tr>
			<tr>
				<td><td colspan="2"><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.8;" type="submit" name="sub" value="Login"></td>
				</td>
			</tr>
			</table>
		</form>
		<?php
			if(isset($_POST['sub']))
			{
				$un=$_POST['un'];
				$ps=$_POST['ps'];
				$q1="select * From admin";
				$run=mysqli_query($a,$q1);
				$row=mysqli_fetch_array($run);
				$u=$row['un'];
				$p=$row['ps'];
				if($un==$u&& $ps==$p)
				{
					header("Location: ahome.php");
				}
				else
				{
					header("Location: index.php?wrong user");
				}
			}

		?>
		</div>
		</center>
	
		</div>
	
	</div>
	</div>
</body>
</html>