<?php

	/**
	 * Welcome to KP Framework
	 * 
	 * The MVC Based Framework Designed for Beginners for Rapid Developement
	 * 
	 * Staging start date: 28/07/2019 @ 15:18
	 * 
	 * The content is released under WTFPL License (http://www.wtfpl.net/txt/copying/)
	 * 
	 * @package KP Framework
	 * @author Kawalpreet Singh Juneja
	 * @copyright Copyright (c) 2019, Kawalpreet Singh Juneja (https://kp.zingalbox.com/)
	 * 
	 */

	/////////////////////////////// KP FRAMEWORK DEVELOPER CONFIGS ///////////////////////////////

	/*
	|--------------------------------------------------------------------------
	| Website URL
	|--------------------------------------------------------------------------
	|
	| URL to your project root WITH a trailing slash:
	|
	|	http://example.com/
	|
	| If you will change your server where your URL will change, you'll
	| just have to edit this variable and it'll be available all over
	| the project.
	|
	*/
	$web_url = "http://localhost/kp-framework/";

	/*
	|--------------------------------------------------------------------------
	| Framework Directories
	|--------------------------------------------------------------------------
	|
	| Below is defined path of working directory, change accordingly if
	| customisation to folders is needed. Please do not edit if not needed.
	|
	| This won't be affecting security in anyway since everything will be routed
	| from index.php file only.
	|
	*/
	$model_directory = "function"; # All functions
	$view_directory = "output"; # All DOM visible files
	$controller_directory = "input"; # All connectives from models to views and vice versa
	$system_path = "kp_sys"; # This is where all functionalities of KP Framework exists, you don't need to open it.


	/*
	|--------------------------------------------------------------------------
	| Default Controller
	|--------------------------------------------------------------------------
	|
	| When your base URL, the one that is in $web_url is entered, the index function of
	| assigned controller file will be executed.
	|
	| You can delete default.php and put name of new controller file in below variable.
	|
	*/
	$index_controller = "default";
	

	/*
	|--------------------------------------------------------------------------
	| Modules Includer
	|--------------------------------------------------------------------------
	|
	| To use any KP Framework functionalities globally, please add them to below array
	|
	|	Some examples: templates, sessions, preloader, api, web_scrape, etc.
	|
	| More list and usage available in documentation
	|
	*/
	$kp_use = array('database', 'preloader', 'sessions');


	/*
	|--------------------------------------------------------------------------
	| Working Environment
	|--------------------------------------------------------------------------
	|
	| Set your working environment from following:
	|	* development
	|	* production
	|
	| Accordingly, errors will be shown/hidden.
	|
	*/
	$working_env = "development";


	/*
	|--------------------------------------------------------------------------
	| Database Settings
	|--------------------------------------------------------------------------
	|
	| If you've included database in $kp_use, you will need to define connectivity
	| below since it is going to be global.
	|
	| If not included, please ignore or comment below four variables.
	| 
	| Supported database server: cubrid, ibase, mssql, mysql, mysqli, oci8, odbc,
	| pdo, postgre, sqlite, sqlite3, sqlsrv
	|
	*/
	$database_server = "mysqli";
	$database_host = "localhost";
	$database_username = "root";
	$database_password = "";
	$database_name = "amigoshub";

	/*
	|--------------------------------------------------------------------------
	| API Authentication
	|--------------------------------------------------------------------------
	|
	| If you've included api in $kp_use, you will need to define authentication
	| key. Please purchase key from website for the same.
	|
	| As for a bit info, KP Framework currently provides below APIs:
	|	* Post message to Telegram channel
	|	* Send message to Telegram user
	|	* Send DM to Instagram user from your ID
	|	* Emailing API
	|	* Transactional Text Message API
	|
	| If not included, please ignore or comment the variable.
	|
	*/
	$api_auth_key = "SAMPLE_KEY";

	

	/////////////////////////////// DEVELOPER CONFIGS ENDS ///////////////////////////////


	# Let's go
	require_once $system_path."/initialise.php";