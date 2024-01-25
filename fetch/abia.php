<?php
require("config.php");
	
$post = mysqli_query($connect,"SELECT * FROM spin_value  ORDER BY created_at DESC LIMIT 0 , 1") or die(db_conn_error);
		
$data = mysqli_fetch_array($post);

echo json_encode($data);
?>