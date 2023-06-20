<?php
	require_once 'config/connection.php';
	
	$id = $_GET['id'];
	
	$sql = "UPDATE entity_information SET type_id = 1 WHERE id='$id'";	
	$result = mysqli_query($connection, $sql);
	
	if ($result == TRUE) 
		{
			header('location: studentRecords.php');
			exit();
		}
?>