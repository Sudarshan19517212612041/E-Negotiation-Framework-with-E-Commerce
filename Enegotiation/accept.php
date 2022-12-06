<?php
 include_once 'connect.php';
 $id=$_GET['id'];
  
	 $sqlquery="UPDATE `viewadd` SET `status`='accept' WHERE id= $id";
	 if($conn->query($sqlquery))
		{
			echo '<script>
					alert("verified succesfully!!!!")
					window.location.replace("verify.php");
				</script>
			';
		}

?>
