<?php
	session_start();
	setcookie(userID, $_SESSION['username'], time() - (86400 * 30), "/");
	unset($_SESSION['username']);
	session_destroy();
	
	header("Location: index.php");
	exit();
?>