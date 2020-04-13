<?php

	function index() {
		if(stay('tempanone')) {
			redirect('user/profile');
		} else if(stay('anone')) {
			$query = db()->table('student')
						->where('enroll', stay('anone'))
						->get()
						->toArray();
			if($query[0]['psw'] != $_POST['psw']) {
				redirect("user/signin?error=Password may be wrong");
			} else if($query[0]['status'] != 1) {
				redirect("user/signin?error=You're not verified");
			} else {
				set_stay('tempanone', stay('anone'));
				redirect('signin');
			}
		} else {
			show("signin.php"); 
		}
	}