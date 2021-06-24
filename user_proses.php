<?php

include_once "app/User.php";

$user = new User();

if ($_POST['btn_tambah']) {
	$user->input();
    header("location:login.php");
}

if ($_POST['btn_edit']) {
	$user->update();
}

if ($_GET['delete-id']) {
	$user->delete($_GET['delete-id']);
}