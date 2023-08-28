<?php

class SupplierModel {
	
	private $table = 'tbl_supplier';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllSupplier()
	{
		$this->db->query("SELECT * FROM " . $this->table );
		return $this->db->resultSet();
	}

	public function getSupplierById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_supplier=:id_supplier');
		$this->db->bind('id_supplier',$id);
		return $this->db->single();
	}

	public function tambahSupplier($data)
	{
		$query = "INSERT INTO tbl_supplier (id_supplier, nama_supplier, alamat_supplier, kontak_supplier) VALUES(:id_supplier, :nama_supplier, :alamat_supplier, :kontak_supplier)";
		$this->db->query($query);
		$this->db->bind('id_supplier', $data['id_supplier']);
		$this->db->bind('nama_supplier', $data['nama_supplier']);
		$this->db->bind('alamat_supplier', $data['alamat_supplier']);
		$this->db->bind('kontak_supplier', $data['kontak_supplier']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataSupplier($data)
	{
		$query = "UPDATE tbl_supplier SET id_supplier=:id_supplier, nama_supplier=:nama_supplier, alamat_supplier=:alamat_supplier, alamat_supplier=:alamat_supplier WHERE id_supplier=:id_supplier";
		$this->db->query($query);
		$this->db->bind('id_supplier', $data['id_supplier']);
		$this->db->bind('nama_supplier', $data['nama_supplier']);
		$this->db->bind('alamat_supplier', $data['alamat_supplier']);
		$this->db->bind('kontak_supplier', $data['kontak_supplier']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteSupplier($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id_supplier=:id_supplier');
		$this->db->bind('id_supplier',$id);
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