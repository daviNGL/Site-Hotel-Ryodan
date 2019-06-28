<?php


	if(!(isset($_POST['kId']))){
		die ("<b> DEU<br>RUIM </b>");
	}else{

	// RECEBENDO VARIAVEIS
	
	$id						=$_POST['kId'];
	$nome					=$_POST['nome'];
	$cpf					=(int)$_POST['cpf'];
	$rg						=(int)$_POST['rg'];
	$dataNasc				=$_POST['dataNasc'];
	$nacionalidade			=$_POST['nacionalidade'];
	$email					=$_POST['email'];
	$ddd					=(int)$_POST['ddd'];
	$tel					=(int)$_POST['tel'];
	$cep					=(int)$_POST['cep'];
	$endereco				=$_POST['endereco'];
	$complemento			=$_POST['complemento'];
	$uf						=$_POST['uf'];
	$cidade					=$_POST['cidade'];

	
	// VALIDAÇÃO DOS CAMPOS
	
	if (strlen ($nome) < 3)
		die ("<script>
				alert ('Informe um nome com no mínimo 3 caracteres!');
				window.location.href='http://localhost/hotel/administrativo.php?link=16';
			  </script>");
	
	if (strlen($cpf < 11))
		die ("<script>
				alert ('CPF deve conter 11 dígitos!');
				window.location.href='http://localhost/hotel/administrativo.php?link=16';
			  </script>");
			  
	if (strlen($rg < 8))
		die ("<script>
				alert ('RG deve conter no mínimo 8 dígitos!');
				window.location.href='http://localhost/hotel/administrativo.php?link=16';
		</script>");
	
	if (!empty ($dataNasc))
		if (!strtotime($dataNasc))
			die ("<script>
					alert ('Data de nascimento inválida!');
					window.location.href='http://localhost/hotel/administrativo.php?link=16';
				  </script>");
		
	if (strlen ($email) < 13)
		die ("<script>
				alert ('E-mail mutio curto!');
				window.location.href='http://localhost/hotel/administrativo.php?link=16';
			 </script>");
	
	if (strlen($ddd < 2))
		die ("<script>
				alert ('DDD deve conter apenas 2 dígitos!');
				window.location.href='http://localhost/hotel/administrativo.php?link=16';
			 </script>");
	
	if (strlen($tel < 8))
		die ("<script>
				alert ('Informe um telefone com no mínimo 8 dígitos!');
				window.location.href='http://localhost/hotel/administrativo.php?link=16';
		</script>");
		
	if (strlen($cep < 8))
		die ("<script>
				alert ('CEP deve conter 8 dígitos!');
				window.location.href='http://localhost/hotel/administrativo.php?link=16';
		</script>");
		
	}
	
	// CONEXÃO AO SQL
	
	$con = mysqli_connect ('localhost', 'root', '');
		
	$enter = mysqli_select_db ($con, 'hotel');
	
	// ALTERANDO DADOS SQL
	
	$sql = "update clientes set nome='$nome', cpf=$cpf, rg=$rg, dataNasc='$dataNasc', nacionalidade='$nacionalidade', 
			email='$email', ddd=$ddd, tel=$tel, cep=$cep, endereco='$endereco', complemento='$complemento', uf='$uf', cidade='$cidade' where idcliente=$id";
	
	if (mysqli_query ($con, $sql))
			echo "<script>
					alert('Cadastro alterado com sucesso!');
					window.location.href='http://localhost/hotel/administrativo.php?link=17';
				</script>";
	else
		echo ("<b>ERROR: </b>" . mysqli_error($con));
?>
	