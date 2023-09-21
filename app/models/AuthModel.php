<?php

class AuthModel {
	
	private $table = 'tbl_user';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function checkLogin($data)
	{
		$query = "SELECT * FROM tbl_user WHERE username = :username AND password = :password AND level = :level";
		$this->db->query($query);
		$this->db->bind('username', $data['username']);
		$this->db->bind('password', $data['password']);
		$this->db->bind('level', $data['level']);
		//$this->db->execute();
		//return $this->db->rowCount();
		$data =  $this->db->single();
		return $data;
	}
	public function checkKasir($data)
	{
		$query = "SELECT * FROM tbl_user WHERE username = :username AND password = :password";
		$this->db->query($query);
		$this->db->bind('username', $data['username']);
		$this->db->bind('password', $data['password']);
		//$this->db->execute();
		//return $this->db->rowCount();
		$data =  $this->db->single();
		return $data;
	}

}