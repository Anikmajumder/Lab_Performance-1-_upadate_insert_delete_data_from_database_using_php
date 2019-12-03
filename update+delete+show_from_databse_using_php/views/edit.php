
<?php

include("db.php");
error_reporting(0);



?>

<html>
<head>
	<title>Edit/update user</title>
</head>
<body>
<form method="POST" >
<center>
<table border="1" width="50%" height="50%">
	<tr>
		<td align="left"><a>X Company</a></td>
		<td align="right"><a href="home.php">Home</a> | <a href="logout.php">Logout</a> </td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<br>
			<fieldset>
				<legend><h3>Update User</h3></legend>
				
					<table border="0" width="80%">
						
						<tr>
							<td>
								<p>ID</p>
							</td>
							<td align="right">
								:<input type="text" name="id" value="<?php echo $_GET['id']; ?>">
							</td>
						</tr>
						<tr>
							<td colspan="2"><hr></td>
						</tr>
						<tr>
							<td>
								<p>Name</p>
							</td>
							<td align="right">
								:<input type="text" name="uname" value="<?php echo $_GET['ur']; ?>">
							</td>
						</tr>
						<tr>
							<td colspan="2"><hr></td>
						</tr>
						<tr>
							<td>
								Email
							</td>
							<td align="right">
								:<input type="email" name="email" value="<?php echo $_GET['em'];?>">
							</td>
						</tr>
						<tr>
							<td colspan="2"><hr></td>
						</tr>
						
						
						<tr>
							<td>
								Password
							</td>
							<td align="right">
								:<input type="password" name="pass" value="<?php echo $_GET['ps'];?>">
							</td>
						</tr>
						
						
						
						<!--<tr>
							<td colspan="2">
								<fieldset>
									<legend><h4>GENDER</h4></legend>
									<input type="checkbox" name="gender">Male<input type="checkbox" name="gender">Female<input type="checkbox" name="gender">Other
								</fieldset>
							</td>
						</tr>-->
						<tr>
							<td colspan="2"><hr></td>
						</tr>
						
						<tr>
							<td colspan="2"><hr></td>
						</tr>
						<tr>
							<td colspan="2"><input type="Submit" name="submit" value="UPDATE"> <input type="reset" name="reet"></td>
						</tr>
					</table>
			
			</fieldset>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">Copyright &copy; 2019</td>
	</tr>
</table>
</center>
	</form>
	<?php
	if($_POST['submit'])
	{
		$id=$_POST['id'];
		$name=$_POST['uname'];
		$email=$_POST['email'];
		$password=$_POST['pass'];
		
		$query="UPDATE users SET username='$name',email='$email',password='$password' WHERE id='$id'";
	$conn = getConnection();	
	$data=mysqli_query($conn,$query);
	if($data){
		echo"<font color=green>record update seccessfuly. <a href='userlist.php'>Cheak employee details</a>";
		
		
	}
	else{
		
		echo"record don't update";
		
	}
	}
	else{
		
		echo"something wrong";
		
	}
	
	?>
</body>
</html>


