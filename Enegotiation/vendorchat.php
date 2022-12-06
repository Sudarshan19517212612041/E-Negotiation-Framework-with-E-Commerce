<!DOCTYPE html>
<html>
<head>
	<title>vendorchat</title>
	<link rel="stylesheet" type="text/css" href="dash.css">
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
	<table class="chat2">
		<tr>
			<th>Name</th>
			<th>Description</th>
			<th>Solution</th>
		</tr>
					<?php
	include_once 'connect.php';

	$sqlquery="select* from clientchatboard";
	 $result= mysqli_query($conn,$sqlquery);
	 if(mysqli_num_rows($result)>0)
	 {
	 	while($row=mysqli_fetch_assoc($result))
	 	{

echo'
			<form method="post">
			<tr>
			
	<td><input type="text" name="id" value="'.$row["id"].'" readonly/></td>	
	<td><input type="text" name="name" value="'.$row["Name"].'" readonly/></td>
	<td><input type="text" name="des" value="'.$row["Description"].'" readonly/></td>
		<td><input type="text" name="sol" placeholder=""/></td>
				<td><input type="submit" name="update"/></td>
			</tr>
			</form>
		';
		
		}
	}

?>	
	</table>

<?php
	include_once 'connect.php';
	if(isset($_POST['update']))
	{
	echo $sqlquery="UPDATE `clientchatboard` SET `solution`='".$_POST['sol']."' WHERE id=".$_POST['id'];
	if($conn->query($sqlquery))
	{
		echo '<script>
				alert("Solution Updated....!")
				window.location.replace("vendorchat.php");
			</script>
		';
	}
}


?>
</center>
</section>

</body>
</html>





