<?php

	/**
	 * Welcome to session file
	 * We're gonna save our users from all the trouble they have with session.
	 * Date: 07/08/19 @ 20:38
	 * @author Kawalpreet Singh Juneja
	 */

	# File globally included, start session
	session_start();

	/**
	 * Function to generate session, also generate cookies if user asked
	 *
	 * @param      string  $session_name   The session name
	 * @param      string  $session_value  The session value
	 * @param      boolean  $stay_forever   Cookies or not
	 */
	function set_stay($session_name, $session_value, $stay_forever = false) {
		$_SESSION[$session_name] = $session_value;
		if($stay_forever) {
			setcookie($session_name, $session_value, time() + (86400 * 360), '/');
		}
	}

	/**
	 * Function to get session value
	 *
	 * @param      string  $session_name  The session name
	 *
	 * @return     string  Session name's value
	 */
	function stay($session_name) {
		if(isset($_SESSION[$session_name])) {
			return $_SESSION[$session_name];
		} else if(isset($_COOKIE[$session_name])) {
			$_SESSION[$session_name] = $_COOKIE[$session_name];
			setcookie($session_name, $_COOKIE[$session_name], time() + (86400 * 360), '/');
			return $_SESSION[$session_name];
		} else {
			return false;
		}
	}

	/**
	 * Function to destroy session and cookie (if any)
	 *
	 * @param      string  $session_name  The session name
	 */
	function unstay($session_name) {
		session_destroy();
		setcookie($session_name, "", time()-3600, '/');
	}


	