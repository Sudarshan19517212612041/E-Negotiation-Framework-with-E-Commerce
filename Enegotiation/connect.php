<?php

	$conn = new mysqli('localhost','root','','enegotiation');
	
	if(!$conn)
	{
		$conn->connect_error;
	}
	else
	{
		//echo "success";
	}
?>