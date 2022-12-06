<?php
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
     <form method="post">
     	<table>
     	<tr><td><h1>LOGIN</h1></td></tr>
     		<tr>
     		<td><select name="utype">
     			<option>--select--</option>
     			<option>Vendor</option>
     			<option>Customer</option>
     		</select></td>
     		</tr>
     		<tr>
     			<td><input type="text" name="maill" placeholder="enter mail"></td>
     		</tr>
     		<tr><td><input type="password" name="pass" placeholder="enter password"></td></tr>
     		<tr>
     		<td><button type="submit" name="save">Submit</button></td>
     		</tr>
     		<tr>
     			<td><a href="register.php">Register Here</a></td>
     		</tr>
     	</table>
     </form>
</body>
</html>

<?php
include_once 'connect.php';
	if(isset($_POST['save']))
	{
		$utype=$_POST['utype'];
		$email=$_POST['maill'];
		$password=$_POST['pass']; 

	    $sqlquery="select * from register where Email='".$email."' AND User_type='".$utype."'";



		$result= mysqli_query($conn,$sqlquery);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				if (strcmp($row['Pass'],$password)) 
				{
					echo '<script>
					alert("oops invalid crediantials");
					</script>';
				}
				else
				{
					//echo $_POST['utype'];	
					if(strcmp($_POST['utype'],"Vendor"))
					{
						$_SESSION["ACTIVE_ID"]=$row['Id'];
						echo 
						'<script>
							alert("Welcome");
							window.location.href =("home.php");
						</script>';		
					}
					else
					{
					   	    $_SESSION["ACTIVE_ID"]=$row['Id'];
							echo 
							'<script>
								alert("Welcome");
								window.location.href =("vendordash.php");
							</script>';
					}
				}
			}
		}	
		
		else
		{
			echo '<script>
			alert("Invalid Crediantials");
			</script>';
		}
		
	}

?>
