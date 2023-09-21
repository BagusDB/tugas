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
		$secret_key = "6LeYzz8oAAAAAL7oe9lVhqI8RlBxhRqjhsMlkpiF";
		$verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
		$response = json_decode($verify);

		$user = $this->model('AuthModel')->checkLogin($_POST);

		if($user){
			if($response->success){
				$_SESSION['username'] = $user['username'];
				$_SESSION['session_login'] = "sudah_login";
				
				header('location: '. base_url . '/home');
				exit;
			}else{
				Flasher::setMessage('Captcha','salah.','danger');
				header('location: '. base_url . '/auth');
				exit;
			}
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