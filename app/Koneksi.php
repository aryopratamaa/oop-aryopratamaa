<?php

namespace App;
use PDO;

class Koneksi {

    protected object $db;

    public function __construct() {
		try {
			$this->db = new PDO ("mysql:host=localhost;dbname=oop-aryopratamaa", "root", "");
		} catch (\Exception $e) {
			die ("error! " . $e->getMessage());
		}
	}
}