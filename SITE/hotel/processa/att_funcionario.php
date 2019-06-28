<?php
	
	include("../conexao.php");
	
	$id = $_POST ['id'];
	$nome= $_POST ['nome'];
	$dNascimento = $_POST ['dNascimento'];
	$cpf = $_POST ['cpf'];
	$cargo = $_POST ['cargo'];
	$dAdmissao = $_POST ['dAdmissao'];
	$sal = $_POST ['sal'];
	$folga = $_POST ['folga'];
	$hEntrada = $_POST ['hEntrada'];
	$hSaida = $_POST ['hSaida'];
	$obs   = $_POST ['obs'];
	


	
	
	
	if (strlen ($nome) < 3)
		die ("<script>
				alert ('Informe um nome com ao menos 3 caracteres !');
				window.location.href='http://localhost/hotel/administrativo.php?link=21';
			  </script>");
	
			  
	if (!empty ($dNascimento))
		if (!strtotime($dNascimento))
			die ("<script>
					alert ('Data de nascimento inválida!');
					window.location.href='http://localhost/hotel/administrativo.php?link=21';
				  </script>");
		
	if (strlen($cpf) <11)
		die ("<script>
				alert ('CPF inválido!');
				window.location.href='http://localhost/hotel/administrativo.php?link=21';
			  </script>");
			  
	if (strlen ($cargo) <1)
		die ("<script>
				alert ('Insira o cargo do funcionário!');
				window.location.href='http://localhost/hotel/administrativo.php?link=21';
			 </script>");
	
	
		
	

	$con = mysqli_connect ('localhost', 'root', '');
		
	$enter = mysqli_select_db ($con, 'hotel');
	
	
	
	$sql = "update funcionarios set nome='$nome', dNascimento='$dNascimento', cpf='$cpf', cargo='$cargo', dAdmissao='$dAdmissao', sal='$sal',
		 	folga='$folga', hEntrada='$hEntrada', hSaida='$hSaida', obs='$obs' where id=$id";
	
	if (mysqli_query ($con, $sql))
			echo "<script>
					alert('Dados do funcionário alterado com sucesso!');
					window.location.href='http://localhost/hotel/administrativo.php?link=20';
				</script>";
	else
		echo ("<b>Algo deu errado: </b>" . mysqli_error($con));

?>
