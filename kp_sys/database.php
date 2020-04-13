<?php

	/**
	 * Welcome to database file
	 * All database related functions will exist here
	 * Date: 29/07/19 @ 13:39
	 * @author Kawalpreet Singh Juneja
	 */

	# If this file was included globally, we need to set up DB connection
	$db_config = [
		"env" => $working_env,
		"development" => [
							"host" => $database_host,
							"database" => $database_name,
							"username" => $database_username,
							"password" => $database_password
						 ],
		"production"  => [
							"host" => $database_host,
							"database" => $database_name,
							"username" => $database_username,
							"password" => $database_password
						 ]
	];

	# KP Framework uses Marei DB Query Builder. Let's include it and make DB instance
	include "DB.php";

	# Reserve a function for DB instance
	function db() {
		return DB::getInstance();
	}