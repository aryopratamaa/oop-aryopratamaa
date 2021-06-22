<?php 

include_once "app/Koneksi.php";
include_once "app/Kategori.php";

$kategori = new app\Kategori();

if ($_POST['simpan']){
	$kategori->tambah();
	header("location:kategori.php");
}

if ($_POST['edit']){
	$kategori->update();
	header("location:kategori.php");
}


if ($_GET['delete-id']) {
	$kategori->hapus($_GET['delete-id']);
	header("location:kategori.php");
}

?>