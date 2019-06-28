<?php
		
		session_start();
		session_destroy();
	
		unset($_SESSION['id']);
		unset($_SESSION['nome']);
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		unset($_SESSION['email']);
		
		header("Location: login.php");


?>