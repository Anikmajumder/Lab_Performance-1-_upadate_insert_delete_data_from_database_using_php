<?php
include("db.php");
$id=$_GET['id'];
$query="DELETE FROM users WHERE id='$id'";
$conn=getConnection();

$data=mysqli_query($conn,$query);
if($data){
	echo "Data delete succesfully";
	
}
else{
	echo"something wrong";
}
?>