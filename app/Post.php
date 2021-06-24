<?php

include "app/Koneksi.php";

class Post extends Koneksi {

	public function __construct(){
		parent::__construct();
	}

	public function tampil()
	{
		$sql= "SELECT * FROM tb_post 
		JOIN tb_category ON tb_post.cat_id = tb_category.cat_id";
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
		$kategori = $_POST['cat_id'];
		$tanggal = $_POST['post_date'];
		$slug = $_POST['post_slug'];
		$judul = $_POST['post_title'];
		$ket = $_POST['post_ket'];

		$sql = "INSERT INTO tb_post (cat_id, post_date, post_slug, post_title, post_text) VALUES
			(:cat_id, :post_date, :post_slug, :post_title, :post_text)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":cat_id", $kategori);
		$stmt->bindParam(":post_date", $tanggal);
		$stmt->bindParam(":post_slug", $slug);
		$stmt->bindParam(":post_title", $judul);
		$stmt->bindParam(":post_text", $ket);
		
		$stmt->execute();

		return false;
	}


	public function edit($id)
	{
		$sql = "SELECT * FROM tb_post WHERE post_id=:post_id";
		$stmt= $this->db->prepare($sql);
		$stmt->bindParam(":post_id", $id);
		$stmt->execute();
		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{
		$kategori = $_POST['cat_id'];
		$tanggal = $_POST['post_date'];
		$slug = $_POST['post_slug'];
		$judul = $_POST['post_title'];
		$ket = $_POST['post_ket'];
		$id = $_POST['post_id'];

		$sql = "UPDATE tb_post SET cat_id=:cat_id, post_date=:post_date, post_slug=:post_slug, post_title=:post_title, post_text=:post_text WHERE post_id=:post_id";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":cat_id", $kategori);
		$stmt->bindParam(":post_date", $tanggal);
		$stmt->bindParam(":post_slug", $slug);
		$stmt->bindParam(":post_title", $judul);
		$stmt->bindParam(":post_text", $ket);
		$stmt->bindParam(":post_id", $id);

		$stmt->execute();

		return false;
	}

	public function delete($id)
	{
		$sql = "DELETE FROM tb_post WHERE post_id=:post_id";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":post_id", $id);
		$stmt->execute();

		return false;
	}
}

 ?>