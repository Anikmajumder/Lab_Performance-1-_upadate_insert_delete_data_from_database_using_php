<?php

	function getConnection(){
		$conn = mysqli_connect('localhost', 'root', '', 'webtech1');
		return $conn;
	}
?>