<?php

require_once "inc/config.php";

if (isset($_SESSION['user_name'])) {
    require_once "layout/dashboard.php";
} else {
    require_once "layout/index.php";
}
