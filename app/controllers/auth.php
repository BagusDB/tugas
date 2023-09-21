<?php

class Auth extends Controller {
	
	public function index()
	{
		if($_SESSION['session_login'] == 'sudah_login'){
			header('location: '. base_url . '/home');
			exit;
		}else{
			$data['title'] = 'Halaman Login';	
			$this->view('auth/login', $data);
		}
	}

	public function prosesLogin() {
		$user = $this->model('AuthModel')->checkLogin($_POST);

		if($user){
			$_SESSION['username'] = $user['username'];
			$_SESSION['session_login'] = "sudah_login";

			header('location: '. base_url . '/home');
			exit;
		}else{
			Flasher::setMessage('Username / Password','salah.','danger');
			header('location: '. base_url . '/auth');
			exit;
		}
	}

	public function logout(){
		session_start();
		session_unset();
		session_destroy();
		header('location: '. base_url . '/auth');
		exit;
	}
}