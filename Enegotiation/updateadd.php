<!DOCTYPE html>
<html>
<head>
	<title>Update Post</title>
	<link rel="stylesheet" type="text/css" href="dash.css">
	<link rel="stylesheet" type="text/css" href="addpost.php">
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<table>
			<tr>
			<td>Category</td>
			<td><select name="category">
				<option>Home Appliances</option>
				<option>Furniture</option>
				<option>Car</option>
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
		<tr>
			<td><button type="submit" name="save">Save</button></td>
		</tr>
		</table>
	</form>
</body>
</html>

<?php
	include_once 'connect.php';
	if(isset($_POST['save']))
	{
		$id=$_GET['id'];
		//echo "User Id is ".$_GET['id'];
		$Ctype=$_POST['category'];
	 	$Citem=$_POST['item'];
	 	$Cprice=$_POST['price'];
	 	$Cimg=$_FILES['img']['name'];
			
		$query=" UPDATE `viewadd` SET `type`='".$Ctype."',`items`='".$Citem."',`Prices`='".$Cprice."',`path`= '".$Cimg."' WHERE id='".$id."'";

		$stmt=$conn->prepare($query);
		$stmt->bind_param("ssss",$Ctype,$Citem,$Cprice,$Cimg);

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

		//$sqlquery = mysqli_query($conn,$query);
	}

?>

