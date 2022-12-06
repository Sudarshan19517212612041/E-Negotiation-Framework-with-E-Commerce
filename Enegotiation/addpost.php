<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<title>addpost</title>
	<link rel="stylesheet" type="text/css" href="addpost.css">
	<link rel="stylesheet" type="text/css" href="dash.css">
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
	
	<form method="post" enctype="multipart/form-data">
		<h4><center>ADD POST</center></h4>
	<table>
		<tr>
			<td>ID</td>
	<td><input type="text" name="id" value="<?php echo $_SESSION["ACTIVE_ID"]; ?>" readonly></td>
		</tr>
		<tr>
			<td>Category</td>
			<td><select name="category">
				<option>Home Appliances</option>
				<option>Furniture</option>
				<option>Car</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Item</td>
			<td><input type="text" name="item" placeholder="enter item name"></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="number" name="price" placehlder="enter price"></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="img"></td>
		</tr>
	</table>
	<center><button type="submit" name="save">Save</button></center>
	
	<?php
	include_once 'connect.php';

 if(isset($_POST['save']))
 {
 	$Cid=$_POST['id'];
 	$Ctype=$_POST['category'];
 	$Citem=$_POST['item'];
 	$Cprice=$_POST['price'];
 	$Cimg=$_FILES['img']['name'];
 	
 	$stmt=$conn->prepare("insert into viewadd(Uid,type,items,Prices,path) values(?,?,?,?,?)");

 	$stmt->bind_param("sssss",$Cid,$Ctype,$Citem,$Cprice,$Cimg);

 	$uploaddir='addview/';
 	$uploadfile=$uploaddir.basename($_FILES['img']['name']);

 	if(move_uploaded_file($_FILES['img']['tmp_name'],$uploadfile))
 	{
 		//echo"saved";
 	}
 	else
 	{
 		//echo"not saved";
 	}
 	$stmt->execute();

 	echo'<script>
			alert ("completed");</script>';
}
?>
</section>
</body>
</html>