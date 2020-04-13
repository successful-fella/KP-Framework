<?php
	/**
	 * Welcome to routes file.
	 * This file is to understand URL and open requested page.
	 * Date: 29/07/19 @ 14:13
	 * @author Kawalpreet Singh Juneja
	 * 
	 */

	# Now get request from the URL and call that function in Controller
	$controller_to_call = $_SERVER['REQUEST_URI'];

	# Seperate GET requests first, we don't need it
	$uri_seperate = explode('?', $controller_to_call);
	$dirs = explode('/', $uri_seperate[0]);

	/*
	# Uncomment if you would like to use get() instead of $_GET[]
	if(!empty($uri_seperate[1])) {
		$get_req = $uri_seperate[1];
		function get($return_what) {
			$var_val = explode('&', $GLOBALS['get_req']);
			$gets = array();
			foreach ($var_val as $value) {
				$inner = explode('=', $value);
				$gets[$inner[0]] = $inner[1];
			}
			return urldecode($gets[$return_what]);
		}
	}*/

	# Calculate dir skipper
	$skipper = explode('/', preg_replace("(^https?://)", "", $web_url));
	$skipper_count = count($skipper) - 1;

	# Now call the controller
	if(empty($dirs[$skipper_count])) {
		require __DIR__.'/../'.$controller_directory.'/'.$index_controller.'.php';
	} else if(file_exists(__DIR__.'/../'.$controller_directory.'/'.$dirs[$skipper_count].'.php')) {
		require __DIR__.'/../'.$controller_directory.'/'.$dirs[$skipper_count].'.php';
	} else {
		require __DIR__.'/errors/not_found.php';
		exit;
	}

	/**
	 * A redirect function is needed to transfer between controller function
	 *
	 * @param      string  $redirect_to  where to redirct
	 */
	function redirect($redirect_to) {
		header("Location: ".$GLOBALS['web_url'].$redirect_to);
	}

	# Now open index function if next bar is empty
	if(empty($dirs[$skipper_count+1])) {
		index();
	} else {
		# If not empty, open requested function if it exists
		if(function_exists($dirs[$skipper_count+1])) {
			# Do we have parameters?
			if(empty($dirs[$skipper_count+2])) {
				# Nope
				call_user_func($dirs[$skipper_count+1]);
			} else {
				# Yeah
				call_user_func_array($dirs[$skipper_count+1], array_slice($dirs, $skipper_count+2));
			}
		} else {
			require __DIR__.'/errors/not_found.php';
			exit;
		}
	}