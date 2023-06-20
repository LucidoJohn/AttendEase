<?php 

if (isset($_POST['student_id']))
 {
	$output ='';

	require_once'config/connection.php';
	$query ="SELECT * FROM date_status where id = '".$_POST["student_id"]. "'";
	$result = mysqli_query($connection,$query);


	$output .='
	<div class="table-responsive">
		<table class="table table-bordered">';
	while ($row = mysqli_fetch_array($result))
	 {
		$output .='
		<tr>
			
			<td width="70%">'.$row["plea"].'</td>
		</tr>
		';}
		$output .="</table></div>";
		echo $output;
	}


