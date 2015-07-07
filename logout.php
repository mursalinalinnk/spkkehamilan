<?
	session_start();
	unset($_SESSION['username']);
	header("Location: " . dirname($_SERVER['REQUEST_URI']) . "");
?>