<?php
include("db.php");
$query="SELECT * FROM users  ";
$conn = getConnection();
$data= mysqli_query($conn,$query);
$total=mysqli_num_rows($data);



?>

<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

	<h2>User List</h2>
	<a href="home.php">Back</a> |
	<a href="logout.php">logout</a>

	<br>
	<br>

	<table border="1" >
		<tr>
		     <th>ID</th>
			<th>UserName</th>
			<th>Email</th>
			<th>Password</th>
			
			<th>Type</th> 
		</tr>
		
		<?php
		while($result=mysqli_fetch_assoc($data))
		{
			echo "<tr>
		     <td>".$result['id']."</td>
			<td> ".$result['username']."</td>
			<td>".$result['email']."</td>
			<td>".$result['password']."</td>
			
			<td>".$result['type']."</td>
			<td><a href='edit.php?id=$result[id]&ur=$result[username]&em=$result[email]&ps=$result[password]&tp=$result[type]'>EDIT</a></td>
			<td><a href='delete.php?id=$result[id]'>DELETE</a></td>
			</tr>";
				
		}
				?>
			
		</tr>
		
	
	</table>
</body>
</html>