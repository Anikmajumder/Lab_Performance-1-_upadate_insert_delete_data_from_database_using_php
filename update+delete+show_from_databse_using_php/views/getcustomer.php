 <?php
$mysqli = new mysqli('localhost', 'root', '', 'webtech1');
if($mysqli->connect_error) {
  exit('Could not connect');
}
	

$sql = "SELECT * FROM users WHERE type = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid, $cname, $name, $adr, $city);
$stmt->fetch();
$stmt->close();
?> 

<table border="1">
<body>
<tr>
<th>CustomerID</th>
<th>CompanyName</th>
<th>Contact</th>
<th>password</th>
<th>type</th>
</tr>
<?php
echo "<tr>

<td>" . $cid . "</td>
<td>". $cname . "</td>
<td>" . $name . "</td>
<td>" . $adr . "</td>
<td>" . $city . "</td>

</tr>";
?> 
</body>
</table>
