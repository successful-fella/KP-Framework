<?php

	/**
	 * Welcome to API File
	 * All API related functions will exist here
	 * An API key will be needed to add to get started
	 * Date: 20/09/19 @ 09:54
	 * @author Kawalpreet Singh Juneja
	 */

	# Uncomment and define your $api_auth_key if you're using this file individually
	# $api_auth_key = "YOUR_KEY";

	# Check if API key have some values, if no value throw exception
	if(empty($api_auth_key)) {
		exit('Please define $api_auth_key in index file before using, or remove api from $kp_use');
	}

	# Defining function for email API
	function sendEmail($to, $subject, $html, $name, $from) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://api.zingalbox.com/communication/sendEmail.php");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, array(
			'key' => $GLOBALS['api_auth_key'],
			'to' => $to,
			'from' => $name,
			'return_to' => $from,
			'subject' => $subject,
			'html' => $html
		));
		$return_data = curl_exec($ch);
		curl_close($ch);
	}