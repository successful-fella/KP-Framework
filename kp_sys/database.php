<?php

	/**
	 * Welcome to database file
	 * All database related functions will exist here
	 * Date: 29/07/19 @ 13:39
	 * @author Kawalpreet Singh Juneja
	 */

	# If config not set, die for this user
	if(!isset($database_server)) {
		echo "Please set database settings";
		die;
	}

	# KP Framework uses CI DB Query Builder. Let's include it and make DB instance
	define('BASEPATH', realpath(dirname(__FILE__)).'/');
	include_once("database/DB.php");

	# Function outside db.php so define them empty
	function log_message() {}
	function show_error() {}	

	# Magic connection string passed to above function
	$conn = "$database_server://$database_username:$database_password@$database_host/$database_name";

	# Reserve a function for DB instance
	function db() {
		# Make connection
		$database = DBCI($GLOBALS['conn'], true);
		return $database;
	}