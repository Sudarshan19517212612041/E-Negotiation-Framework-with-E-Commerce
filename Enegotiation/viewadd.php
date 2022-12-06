<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>view table</title>
	<style type="text/css">
		img
{
	width: 80px;
	height: 80px;
}
	</style>
	<link rel="stylesheet" type="text/css" href="dash.css">
	<link rel="stylesheet" type="text/css" href="viewpost.css">
	<script src="http://kit.fontawesome.com/a076d05399.js"></script>
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
		<li><a href="home.php"><i class="fas fa-home"></i>Home</a></li>
		<li><a href="addpost.php"><i class="fa fa-list-alt"></i>Add Post</a></li>
		<li><a href="viewadd.php"><i class="fa fa-copy"></i>View Post</a></li>
		<li><a href="clientchat.php"><i class="fas fa-chat"></i>Query</a></li>
	</ul>
	
</div>
<section>
	<form method="post">
	<table align="center">
		<tr>
			<th>Item Type</th>
			<th>Item Name</th>
			<th>Item Price</th>
			<th>Item Picture</th>
			<th>Update</th>
			<th>Delete</th> 
		</tr>
<?php
   include_once 'connect.php';

    $id =$_SESSION["ACTIVE_ID"];

   $sqlquery="SELECT * FROM `viewadd` WHERE UId='".$id."' ";

   $result=mysqli_query($conn,$sqlquery);

		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				echo'
						<tr>
						<th>'.$row["type"].'</th>
						<th>'.$row["items"].'</th>
						<th>'.$row["Prices"].'</th>
						<th colspan="1"><img src="addview/'.$row["path"].'"></th>
						<th><button1><a href="updateadd.php?id='.$row['id'].'"> UPDATE </a> </button></th>
						<th><button2><a href="deleteadd.php?id='.$row['id'].'"> DELETE </a> </button></th>
						</tr>
					
	
					';
			}
		}			


  
  ?>
	</table>
	</form>
</section>

</body>
</html>

