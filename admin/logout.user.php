<?php
session_start();

if (!isset($_SESSION['userSession'])) {
	header("Location: login.user.php");
} else if (isset($_SESSION['userSession'])!="") {
	header("Location: index_user.php");
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['userSession']);
	header("Location: login.user.php");
}
