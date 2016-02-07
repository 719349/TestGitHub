<?php	

	/*
	This file will hold the connection name, server, password, the coonection proccese and the connection to
	specific database. 
	*/
	
	$conn_error = 'Not connected'; // this is to display us the problem issue to prevent the server show
	
	// the user some valuble information that could harm the database and prevented it from being hacked into.
	
	$db_name = "employees"; // this is the database name we created inside the phpmyadmin
	
	$un = 'root1'; // this is the username to chose for the list which username we have created our database.
	
	$pw = 'root'; // we have to have password in order to create database on the server for extra security
	
	$host = 'localhost';  // this is the host servername which is needed to connect to the server.
	
	@mysql_connect($host, $un, $pw) or die(mysql_error($conn_error)); 
	//echo('Connected to my SQL DataBase User ');
	
	/*
	this to connect us to the database server 
	
	and to show us if there was any problem during the call between the server and the connection.
	*/
	
	@mysql_select_db($db_name) or die (mysql_error()); 
	//echo("<br/>Connected to DataBase ".$db_name);
	
	/*
	 this is to the database that we aiming to use 
	
	 and to show us if there were any issues during the connection call.
	 
	 */
	
?>
