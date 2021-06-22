<?php

namespace app;

class Login extends Koneksi {

    public function __construct()
	{
        parent::__construct();
        session_start();
    }
    
    public function login($user_email, $user_password)
    {
        if (!empty($user_email) && !empty($user_password)) {
            $stmt = $this->db->prepare("select * from tb_users where user_email=? AND user_password=?");
            $stmt->bindParam(1, $user_email);
            $stmt->bindParam(2, $user_password);
            $stmt->execute();
            $data = $stmt->fetchAll();
            foreach ($data as $rows_user) {
                $_SESSION['user_id'] = $rows_user['user_id'];
                $_SESSION['user_email'] = $rows_user['user_email'];
                $_SESSION['user_password'] = $rows_user['user_password'];
                $_SESSION['user_nama'] = $rows_user['user_nama'];
            }


            if ($stmt->rowCount() == 1) {

                echo "<script>alert('Berhasil Masuk');</script>";
                echo "<script>location='index.php';</script>"; 
            } else {
                echo "<script>alert('Email atau Password Anda Salah');</script>";
                echo "<script>location='login.php';</script>";
            }
        } else {
            echo "<script>alert('Input Email dan Password Terlebih Dahulu');</script>";
            echo "<script>location='login.php';</script>";
        }
    }
}
