<?php
	
	session_start();
	
	if($_SESSION['id'] == "" || $_SESSION['nome'] == "" || $_SESSION['login'] == "" || $_SESSION['senha'] == "" || $_SESSION['email'] == ""){
		
		
		unset($_SESSION['id']);
		unset($_SESSION['nome']);
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		unset($_SESSION['email']);
		
		$_SESSION['msg'] = "<p style='color: red;'>Área restrita! Efetuar o login!</p>";
		header("Location: login.php");
	}

?>