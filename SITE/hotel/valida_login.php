<?php
		
	session_start();
	include("conexao.php");
	
	
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	
	$sql = "select * from usuarios where login='$login' and senha='$senha' LIMIT 1";
	$busca = mysqli_query($conexao, $sql);
	$result = mysqli_fetch_assoc($busca);
	
	if(empty($result)){
		$_SESSION['msg'] = "<p style='color: red;'>Login ou Senha incorretos!</p>";
		header("Location: login.php");
	}else{
		
		$_SESSION['id'] = $result['id'];
		$_SESSION['nome'] = $result['nome'];
		$_SESSION['login'] = $result['login'];
		$_SESSION['senha'] = $result['senha'];
		$_SESSION['email'] = $result['email'];
		
		header("Location: administrativo.php");
		
	}
	
	
?>