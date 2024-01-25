<?php
require("config.php");

echo("<div class='box_after_header_post'>");
		
	$post = mysqli_query($connect,"SELECT * FROM spin_value  ORDER BY created_at DESC LIMIT 0 , 1") or die(db_conn_error);
		
	while($post_question = mysqli_fetch_array($post)){
			
	echo('<div class="clearfix" style="margin-bottom:20px;">');
				
		echo('<h5>'.$post_question['value'].'<h5>');
			
	echo("</div>");	
			}

echo("</div>");
?>