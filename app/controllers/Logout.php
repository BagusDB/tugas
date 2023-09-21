<?php

class Logout {
	public function logout(){
		session_start();
		session_unset();
		session_destroy();
		header('location: '. base_url . '/login');
		exit;
	}
}