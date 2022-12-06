<!DOCTYPE html>
<html>
<head>
	<title>bidprice</title>
</head>
<body>
<center><form method="post">
	<table>
		<tr>
					<td><h3><center>Bid Price</center></h3></td>
					<td><h3><input type="number" name="bprice" placeholder=" price"></h3></td>
		</tr>
	</table>
	<center><button type="submit" name="save">Save</button></center>
</form>
</center>
</body>
</html>
<?php
include_once 'connect.php';
if(isset($_POST['save']))
{
	$id=$_GET['id'];

	$bprice=$_POST['bprice'];
	$query="update viewadd set bidprice='".$bprice."' where id= $id";
	if($conn->query($query))
	{
		echo '<script>
			alert ("completed");
			window.location.href=("home.php");</script>';

	}

	

}
?>