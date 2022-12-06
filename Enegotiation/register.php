<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
	</head>
	<link rel="stylesheet" type="text/css" href="register.css">
<body>
	<center><h1>REGISTER</h1></center>
	<form method="post">
		<table>
			<tr>
				<th>User_Type</th>
				<td>
					<select name="utype">
					<option value="vendor">Vendor</option>
					<option value="customer">Customer</option>
				</select>
				</td>
			</tr>
			
			<tr>
				<th>Name</th>
				<td><input type="text" name="uname" required></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="email" name="maill" required></td>
			</tr>
			
			<tr>
				<th>Contact</th>
				<td><input type="number" name="contact" onblur="phonenumber(this);"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password" name="pass" required></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><input type="text" name="add" required></td>
			</tr>
			<tr>
			<td></td>
			<td><button type="submit" name="save">Register</button></td>
			</tr>
			<tr>
				<td></td>
				<td><a href="login.php">Back to Login</a></td>
			</tr>
		</table>

	</form>
</body>
</html>
<script>
	
  function phonenumber(inputnumber) 
  {
  var phone = (/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/);
  if(inputnumber.value.match(phone)) {
    return true;
  }
  else {
    alert("invalid contact");
    return false;
  }
}
</script>
<?php
include_once 'connect.php';
if(isset($_POST['save']))
{	
	$utype=$_POST['utype'];
	$uname=$_POST['uname'];
	$email=$_POST['maill'];
	$contact=$_POST['contact'];
 	$password=$_POST['pass'];
 	$address=$_POST['add'];

 	

	  if($_POST['utype']=="vendor")
	 {
	 	

 	$id= "V_".rand(0,50);
		$sqlquery="INSERT INTO `register`(`User_type`,`id`,`Name`, `Email`, `Pass`, `Contact`, `Address`) VALUES (?,?,?,?,?,?,?)";
		$stmt=$conn->prepare($sqlquery);
	 	$stmt->bind_param("sssssss",$utype,$id,$uname,$email,$password,$contact,$address);
	}
	 else
	  {
	  	//echo "utype".$utype."<br>uname<br>".$uname."<br>email<br>".$email."<br>contact<br>".$contact."<br>password<br>".$password."<br>address".$address;

	 	$id= "C_".rand(0,50);
	 	$sqlquery="INSERT INTO `register`(`User_type`,`id`,`Name`, `Email`, `Pass`, `Contact`, `Address`) VALUES (?,?,?,?,?,?,?)";
	 			$stmt=$conn->prepare($sqlquery);

	 	$stmt->bind_param("sssssss",$utype,$id,$uname,$email,$password,$contact,$address);
	 }

	

 	 $stmt=$conn->prepare("insert into register(User_type,Id,Name,Email,Pass,Contact,Address)values(?,?,?,?,?,?,?)");
 	 $stmt->bind_param("sssssss",$utype,$id,$uname,$email,$password,$contact,$address);

 	 $stmt->execute();
 		echo '<script>
		 	alert("Register succesfully");
 		</script>';
 }
 ?>