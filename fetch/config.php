<?php
	define("Host","localhost");	//  localhost
	define("User","root");	//  root
	define("Password",""); //
	define("Db_Name","javascript_tutorial");	//  myshoptwo
	define("Conn_error","could not connect to server at this time"); // all of the rest below may be defined later
	define("db_conn_error","<div id='oops'>
							<h1 id='oops_h1'>Oops!!!</h1>
							<h1>We are sorry</h1>
							<h3>Data could not be fetched at this time</h3>
							</div>
							");
	
	//connecting to server
	$connect=mysqli_connect(Host,User,Password,Db_Name);
	
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$data_select=mysqli_select_db($connect,Db_Name) or die(db_conn_error);		
	
	
	?>