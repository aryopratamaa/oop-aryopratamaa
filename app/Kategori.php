<?php 

class Kategori {
	private $db;
	public function __construct()
	{
		try {
			$this->db = new PDO("mysql:host=localhost;dbname=oop-aryopratamaa", "root", "");
		} catch (PDOException $e) {
			die ("Error " . $e->getMessage());
		}
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

	public function delete($id)
	{
		$sql = "DELETE FROM tb_category WHERE cat_id=:cat_id";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":cat_id", $id);
		$stmt->execute();

		return false;
	}

}
