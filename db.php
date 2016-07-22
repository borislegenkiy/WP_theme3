<?php
	require_once("php-mysql.php");

	//Database Host Name
	$DB_HOSTNAME	= '127.0.0.1';
	
	//Wordpress Database Name, Username and Password
	$DB_WP_USERNAME	= 'boris3';
	$DB_WP_PASSWORD	= 'yNlOosNe';
	$DB_WORDPRESS	= 'po_bd';
	//Table Prefix
	$DB_WORDPRESS_PREFIX = 'wp_';
	
	//Create Connection Array for Drupal and Wordpress
	$wordpress_connection	= array("host" => "127.0.0.1","username" => $DB_WP_USERNAME,"password" => $DB_WP_PASSWORD,"database" => $DB_WORDPRESS);

	//Create Connection for Drupal and Wordpress
	$wc = new DB($wordpress_connection);

	//Check if database connection is fine
	$wcheck = $wc->check();
	if (!$wcheck){
		echo "This $DB_WORDPRESS service is UNAVAILABLE"; die();
	}
?>