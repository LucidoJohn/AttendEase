<?php
	require_once 'config/connection.php';
	
	$id = $_GET['id'];
	
	$sql = "UPDATE entity_information SET type_id = 2 WHERE id='$id'";	
	$result = mysqli_query($connection, $sql);
	
	if ($result == TRUE) 
		{
			header('location: adminRecords.php');
			exit();
		}
?>