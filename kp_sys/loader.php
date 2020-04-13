<?php
	
	/**
	 * Welcome to loader file
	 * This file will load in views and models into the system
	 * Date: 09/08/19 @ 14:42 (Updated)
	 * @author Kawalpreet Singh Juneja
	 */


	/**
	 * Function to load views file into the DOM
	 *
	 * @param      string  $filename  Which file to open
	 * @param      array   $data      Varibles made by user
	 */
	function show($filename, $data = array()) {
		if(file_exists(__DIR__.'/../output/'.$filename)) {
			extract($data);
			foreach ($GLOBALS as $key => $value) {
				$$key = $value;
			}
			require(__DIR__.'/../output/'.$filename);
		} else {
			include __DIR__.'/errors/not_found.php';
		}
	}


	function function_load($filename) {
		if(file_exists(__DIR__.'/../function/'.$filename)) {
			require(__DIR__.'/../function/'.$filename);
		} else {
			$error = "The function file given doesn't exists. Please create a file and define function.";
			include __DIR__.'/errors/framework_errors.php';
			exit;
		}
	}
	