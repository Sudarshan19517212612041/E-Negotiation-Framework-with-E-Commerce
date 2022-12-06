<?php

include 'connect.php';

$id = $_GET['id'];

 $query = " DELETE FROM `viewadd` WHERE id = $id ";

mysqli_query($conn, $query);

echo'<script>
    alert("Deleted successfully!!!");
     window.location.href=("verify.php");
</script>';
//header('location:display.php');
   
//
?>