<?php
	
	$nome			= $_POST["nome"];
	$dNascimento	= $_POST["dNascimento"];
	$cpf			=  $_POST["cpf"];
	$cargo   		= $_POST["cargo"];
	$dAdmissao      = $_POST ["dAdmissao"];
	$sal   		    = (float) $_POST["sal"];
	$folga 			=  $_POST["folga"];
	$hEntrada       = $_POST ["hEntrada"];
	$hSaida         = $_POST ["hSaida"];
	$obs	        = $_POST ["obs"];
	
	
	
	// dados
	if ( strlen($nome) <2 ){

		echo "<script>
				alert('Informe nome com no minimo 2 caracteres.');
				window.location.href='http://localhost/hotel/administrativo.php?link=19';
			</script>";

	}


	
	if ( $dNascimento == ""){
		
		echo "<script>
				alert('Informe a data de nascimento.');
				window.location.href='http://localhost/hotel/administrativo.php?link=19';
			</script>";

	}



	if (strlen($cpf) <11){
			
			echo "<script>
				alert('CPF invalido, insira novamente.');
				window.location.href='http://localhost/hotel/administrativo.php?link=19';
			</script>";

	}

		
	if (!empty ($dNascimento)){
			if (!strtotime ($dNascimento)){
				echo "<script>
						alert('Data de nascimento invalida, tente novamente.');
						window.location.href='http://localhost/hotel/administrativo.php?link=19';
					</script>";
			}
	}


	if ( $cargo == "" ){
		echo "<script>
						alert('Informe o cargo do funcionario.');
						window.location.href='http://localhost/hotel/administrativo.php?link=19';
			</script>";
	}

	
	if ( $hEntrada == ""){
		echo "<script>
						alert('Inserir o horario de entrada.');
						window.location.href='http://localhost/hotel/administrativo.php?link=19';
			</script>";
	}
	
	if ( $hSaida == ""){

			echo "<script>
						alert('Inserir o horario de saida.');
						window.location.href='http://localhost/hotel/administrativo.php?link=19';
			</script>";

	}
		
	
	
		//INSERINDO O NO BANCO


		include("../conexao.php");
		
		$comandoSQL = "INSERT INTO funcionarios
			(nome, dNascimento, cpf, cargo, dAdmissao, sal, folga, hEntrada, hSaida, obs) 
			VALUES 
			('$nome', '$dNascimento', '$cpf', '$cargo', '$dAdmissao', '$sal', '$folga', '$hEntrada', '$hSaida', 'obs')";
	
			$insere = mysqli_query ($conexao, $comandoSQL);

			if(mysqli_affected_rows($conexao) > 0){

				echo "<script>
						alert('Funcionario inserido com sucesso.');
						window.location.href='http://localhost/hotel/administrativo.php?link=20';
					</script>";

			}else{

				echo "<script>
						alert('Falha ao tentar inserir funcionario, tente novamente.');
						window.location.href='http://localhost/hotel/administrativo.php?link=19';
					</script>";

			}
	
?> 