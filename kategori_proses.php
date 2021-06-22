<?php 

include_once "app/Kategori.php";

$kategori = new Kategori();

if ($_GET['delete-id']) {
	$kategori->delete($_GET['delete-id']);
	header("location:index.php");
}

?>