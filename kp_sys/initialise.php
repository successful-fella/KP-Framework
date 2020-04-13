<?php

	/**
	 * Welcome to initialisation file.
	 * This file is to initialise the framework and go to decided file.
	 * Date: 29/07/19 @ 13:34
	 * @author Kawalpreet Singh Juneja
	 * 
	 */

	# Include default basic files
	require_once("loader.php");

	# Including all functional files from $kp_use array given by user.
	foreach($kp_use as $file) {
		require_once($file.".php");
	}

	# Maybe they wanna include something non-globally?
	function kp_use($helper_name) {
		require_once($helper_name.".php");
	}

	# Now include final routes
	require_once("routes.php");