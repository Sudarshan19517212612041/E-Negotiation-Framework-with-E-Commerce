<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" type="text/css" href="dash.css">
</head>
<style type="text/css">
	input
	{
		width:50px;
	
	}
</style>
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
		<li><a href="home.php"><i class="fas fa-home"></i>Home</a></li>
		<li><a href="addpost.php"><i class="fa fa-list-alt"></i>Add Post</a></li>
		<li><a href="viewadd.php"><i class="fa fa-copy"></i>View Post</a></li>
		<li><a href="clientchat.php"><i class="fas fa-chat"></i>Query</a></li>
	</ul>
	
</div>
<section>
<?php
 include_once 'connect.php';
 $sqlquery="SELECT * FROM `viewadd` WHERE status='accept'";
	 $result= mysqli_query($conn,$sqlquery);
	 if(mysqli_num_rows($result)>0)
	 {
	 	while($row=mysqli_fetch_assoc($result))
	 	{

echo'
				<table cellpadding="20px">
				<tr>
					<td colspan="2"><img src="addview/'.$row["path"].'"></td>
				</tr>

				<tr>
					<td><h3><center>Item Type</center></h3></td>
					<td><h3>'.$row["type"].'</h3></td>
				</tr>

				<tr>
					<td><h3><center>Item Name<center></h3></td>
					<td><h3>'.$row["items"].'</h3></td>
				</tr>

				<tr>
					<td><h3><center>Price</center></h3></td>
					<td><h3>'.$row["Prices"].'</h3></td>
				</tr>
				<tr>
					<td><h3><center>Bid Price</center></h3></td>
					<td><h3><center><a href="bprice.php?id='.$row['id'].'"><button>Set Price</button></a></center></td>
				</tr>
				
			</table>
			';
		}
	}
   
?>	
</section>

</body>
</html>