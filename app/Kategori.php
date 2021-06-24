<?php

include "app/Koneksi.php";

class Kategori extends koneksi {

	public function __construct() {
		parent::__construct();
	}


	public function tampil()
	{
		$sql= "SELECT * FROM tb_category";
		$stmt= $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($rows = $stmt->fetch()){
			$data[] = $rows;
		}

		return $data;
	}
	
	public function input()
	{
		$nama = $_POST['cat_name'];
		$ket = $_POST['cat_ket'];

		$sql = "INSERT INTO tb_category (cat_name, cat_text) VALUES
			(:cat_name, :cat_text)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":cat_name", $nama);
		$stmt->bindParam(":cat_text", $ket);
		
		$stmt->execute();

		return false;
	}

	public function edit($id)
	{
		$sql = "SELECT * FROM tb_category WHERE cat_id=:cat_id";
		$stmt= $this->db->prepare($sql);
		$stmt->bindParam(":cat_id", $id);
		$stmt->execute();
		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{
		$nama = $_POST['cat_name'];
		$ket = $_POST['cat_ket'];
		$id = $_POST['cat_id'];

		$sql = "UPDATE tb_category SET cat_name=:cat_name, cat_text=:cat_text WHERE cat_id=:cat_id";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":cat_name", $nama);
		$stmt->bindParam(":cat_text", $ket);
		$stmt->bindParam(":cat_id", $id);

		$stmt->execute();

		return false;
	}

	public function delete($id)
	{
		$sql = "DELETE FROM tb_category WHERE cat_id=:cat_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":cat_id", $id);
		$stmt->execute();

		return false;
	}
}

 ?>