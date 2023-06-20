<?php
	require_once 'config/connection.php';
	
	$id = $_GET['id'];
	
	$sql = "DELETE FROM entity_information WHERE id='$id'";	
	$result = mysqli_query($connection, $sql);
	
	if ($result == TRUE) 
		{
			header('location: studentRecords.php');
			exit();
		}
?>