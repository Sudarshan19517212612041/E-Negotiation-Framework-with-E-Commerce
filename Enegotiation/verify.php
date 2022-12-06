<!DOCTYPE html>
<html>
<head>
	<title>vendordash</title>
	<link rel="stylesheet" type="text/css" href="dash.css">
	<style type="text/css">
		img
		{
			height: 100px;
			width: 120px;
		}
	</style>
</head>
<body>
<div class="menu">
	<div class="leftmenu">
	<h2>Bilateral E-Negotiation</h2>
	</div>
	<div class="rightmenu">
		<ul>
			<li onclick="logout()"><a href="login.php">Log Out</a></li>
		</ul>
	</div>	
</div>

<div class="sidebar">
	<header>MENU</header>
	<ul>
		<li><a href="vendordash.php"><i class="fas fa-home"></i>Home</a></li>
		<li><a href="vsale.php"><i class="fa fa-list-alt"></i>Sale</a></li>
	  <li><a href="verify.php"><i class="fa fa-copy"></i>Verify Adds</a></li>
		<li><a href="vendorchat.php"><i class="fas fa-chat"></i>Queries</a></li>
	</ul>
	
</div>
<section>
<center>
	<form>
	<table align="center" border="1">
	<tr>
		<th>Image</th>
		<th>Item Type</th>
		<th>Item Name</th>
		<th>Item Price</th>
		<th colspan="3">Status</th>
	</tr>
	
		<?php

include_once "connect.php";
$sqlquery="select* from viewadd";
	 $result= mysqli_query($conn,$sqlquery);
	 if(mysqli_num_rows($result)>0)
	 {
	 	while($row=mysqli_fetch_assoc($result))
	 	{

echo'
				<tr>
				<td colspan="1">
					<img src="addview/'.$row["path"].'">
				</td>
				<td>
					<h3>'.$row["type"].'</h3>
				</td>

				<td>
				<h3>'.$row["items"].'</h3>
				</td>

				<td>
				<h3>'.$row["Prices"].'</h3>
				</td>
				
				<td><button1><a href="accept.php?id='.$row['id'].'">Accept</a></button></td>
				<td><button2><a href="delete.php?id='.$row['id'].'">Reject</button></a></td>
				
			</tr>
			';
		}
	}

   
?>
	
	</table>
</form>	
</center>
</section>

</body>
</html>

