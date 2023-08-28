<?php

class CustomerModel {
	
	private $table = 'tbl_customer';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllCustomer()
	{
		$this->db->query("SELECT * FROM " . $this->table );
		return $this->db->resultSet();
	}

	public function getCustomerById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_customer=:id_customer');
		$this->db->bind('id_customer',$id);
		return $this->db->single();
	}

	public function tambahCustomer($data)
	{
		$query = "INSERT INTO tbl_customer (id_customer, nama_customer) VALUES(:id_customer, :nama_customer)";
		$this->db->query($query);
		$this->db->bind('id_customer', $data['id_customer']);
		$this->db->bind('nama_customer', $data['nama_customer']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataCustomer($data)
	{
		$query = "UPDATE tbl_customer SET id_customer=:id_customer, nama_customer=:nama_customer WHERE id_customer=:id_customer";
		$this->db->query($query);
		$this->db->bind('id_customer', $data['id_customer']);
		$this->db->bind('nama_customer', $data['nama_customer']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteCustomer($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id_customer=:id_customer');
		$this->db->bind('id_customer',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	// public function cariBuku()
	// {
	// 	$key = $_POST['key'];
	// 	$this->db->query("SELECT * FROM " . $this->table . " WHERE judul LIKE :key");
	// 	$this->db->bind('key',"%$key%");
	// 	return $this->db->resultSet();
	// }
}