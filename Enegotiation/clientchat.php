<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<head>
		<title>chatboard</title>
	</head>
	<link rel="stylesheet" type="text/css" href="dash.css">
	<link rel="stylesheet" type="text/css" href="clientchat.css">

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
<center>
	<form method="post">
	<table class="chat1"  align="">
		<tr>
			<td>Name</td>
		   <td><input type="text" name="name" placeholder="enter your name" required></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><input type="text" name="desc" placeholder="Enter your query" required></td>
		</tr>
	</table>
	<button type="submit" name="save" align="left">Save</button>
</form>
	<?php
	include_once 'connect.php';
	if(isset($_POST['save']))
	{
		$Cname=$_POST['name'];
		$Cdesc=$_POST['desc'];
		$id =$_SESSION["ACTIVE_ID"];

		$stmt=$conn->prepare("insert into clientchatboard(Uid,Name,Description) values(?,?,?)");

		$stmt->bind_param("sss",$id,$Cname,$Cdesc);
		$stmt->execute();
		
		echo'<script>
			alert ("completed");</script>';
?>
<form>
	<table align="center" border="1">
		<tr>
			<th>Name</th>
			<th>Description</th>
			<th>Solution</th>
		</tr>
		<?php
$sqlquery="select * from clientchatboard WHERE Uid='".$id."' AND solution!=''";
		$result=mysqli_query($conn,$sqlquery);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				echo'
						<tr>
						<th>'.$row["Name"].'</th>
						<th>'.$row["Description"].'</th>
						<th>'.$row["solution"].'</th>
						</tr>
					';
			}
		}
		}						

?>	
	</table>
</form>
				
</center>
</section>

</body>
</html>
