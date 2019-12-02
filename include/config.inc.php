<?php

	// defines the default title of the website 
	define('SITENAME','inside out | STEP 205');

	// defines the default page of the website 
	define('DEFUALT_PAGE','home');
	
	
	if($_SERVER['SERVER_NAME'] === 'localhost'){
		/* Database credentials. server with default setting 
		(user 'root' with no password) */
		define( 'DB_SERVER', 'localhost' );
		define( 'DB_USERNAME', 'root' );
		define( 'DB_PASSWORD', '' );
		define( 'DB_NAME', 'web230app_step205' );
	}else{
		/* Database credentials. server with default setting 
		(user 'root' with no password) */
		define( 'DB_SERVER', 'localhost' );
		define( 'DB_USERNAME', 'rcarver545_205' );
		define( 'DB_PASSWORD', 'letme!n' );
		define( 'DB_NAME', 'rcarver545_205' );
	}

	/* Attempt to connect to MySQL database */
	$link = mysqli_connect( DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME );

	// Check connection
	if ( $link === false ) {
		die( "ERROR: Could not connect. " . mysqli_connect_error() );
	
	}

?>

