<?php
	
	/**
	 * Welcome to upload helper file
	 * This file get file to be uploaded return path where it is uploaded
	 * Date: 26/08/19 @ 19:42 (Updated)
	 * @author Kawalpreet Singh Juneja
	 */


	/**
	 * Uploads a file.
	 *
	 * @param      string          $file_name     The file name
	 * @param      array          $allowed_ext   The allowed extent
	 * @param      array          $allowed_mime  The allowed mime
	 * @param      int          $max_size      The maximum size in bytes
	 * @param      string          $location      Where to store file
	 *
	 * @return     boolean|string  Location of file
	 */
	function upload_file($file_name, $allowed_ext, $allowed_mime, $max_size, $location) {
		$ext = pathinfo($_FILES[$file_name]['name'], PATHINFO_EXTENSION);
		if ((in_array($_FILES[$file_name]['type'], $allowed_mime))
		&& (in_array(strtolower($ext), $allowed_ext)) 
		&& (@getimagesize($_FILES[$file_name]['tmp_name']) !== false)
		&& ($_FILES[$file_name]['size'] <= $max_size)) {
			$md5 = substr(md5_file($_FILES[$file_name]['tmp_name']), 0, 7);
			$newname = time().$md5.'.'.$ext;
			move_uploaded_file($_FILES[$file_name]['tmp_name'], __DIR__.'/../'.$location.'/'.$newname);
			return $location.'/'.$newname;
		} else {
			return false;
		}
	}


	function upload_image($file_name, $max_size, $location) {
		$allowed_ext = array('png', 'jpg', 'jpeg', 'gif');
		$allowed_mime = array('image/png', 'image/jpeg', 'image/pjpeg', 'image/gif');
		$ext = pathinfo($_FILES[$file_name]['name'], PATHINFO_EXTENSION);
		if ((in_array($_FILES[$file_name]['type'], $allowed_mime))
		&& (in_array(strtolower($ext), $allowed_ext)) 
		&& (@getimagesize($_FILES[$file_name]['tmp_name']) !== false)
		&& ($_FILES[$file_name]['size'] <= $max_size)) {
			$md5 = substr(md5_file($_FILES[$file_name]['tmp_name']), 0, 7);
			$newname = time().$md5.'.'.$ext;
			move_uploaded_file($_FILES[$file_name]['tmp_name'], __DIR__.'/../'.$location.'/'.$newname);
			return $location.'/'.$newname;
		} else {
			return false;
		}
	}
	