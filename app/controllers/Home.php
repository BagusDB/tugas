<?php

class Home extends Controller {
	public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. base_url . '/auth');
			exit;
		}
	} 
	public function index()
	{
		$data['title'] = 'Halaman Dashboard';
		$data['username'] = $_SESSION['username'];
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('templates/topbar', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
		
	}
}