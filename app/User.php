<?php

include "app/Koneksi.php";

class User extends Koneksi{

	public function __construct()
	{
		parent::__construct();
	}

	public function tampil()
	{
		$sql= "SELECT * FROM tb_users";
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
		$email = $_POST['user_email'];
		$password = $_POST['user_password'];
		$nama = $_POST['user_nama'];
		$hp = $_POST['user_hp'];
		$role = $_POST['user_role'];

		$sql = "INSERT INTO tb_users (user_email, user_password, user_nama, user_hp, user_role) VALUES
			(:user_email, :user_password, :user_nama, :user_hp, :user_role)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":user_email", $email);
		$stmt->bindParam(":user_password", $password);
		$stmt->bindParam(":user_nama", $nama);
		$stmt->bindParam(":user_hp", $hp);
		$stmt->bindParam(":user_role", $role);
		$stmt->execute();

		return false;
	}

	}

?>