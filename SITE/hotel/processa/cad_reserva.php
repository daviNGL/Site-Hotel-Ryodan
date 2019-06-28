<?php

	$codCliente = (int)$_POST['nCliente'];
	$codQuarto = (int)$_POST['nQuarto'];
	$entrada = $_POST['nCheck-in'];
	$obs = $_POST['nObs'];


	if(($codQuarto != "") && ($codCliente != "") && ($entrada != "")){

		include("../conexao.php");

		//TESTA SE O ID DO QUARTO É VALIDO
		$testQuarto = "select * from quartos where idquarto=$codQuarto LIMIT 1";
		$teste1 = mysqli_query($conexao, $testQuarto);
		if(mysqli_num_rows($teste1) != 1){
			echo "<script>
						alert('Codigo de quarto inválido! Favor informar o codigo de um quarto existente.');
						window.location.href='http://localhost/hotel/administrativo.php?link=13';
				</script>";
				die();
		}

		//TESTE SE O ID DO CLIENTE É VALIDO
		$testCliente = "select * from clientes where idcliente=$codCliente LIMIT 1";
		$teste2 = mysqli_query($conexao, $testCliente);
		if(mysqli_num_rows($teste2) != 1){
			echo "<script>
						alert('Codigo de cliente inválido! Favor informar o codigo de um cliente existente.');
						window.location.href='http://localhost/hotel/administrativo.php?link=13';
				</script>";
				die();
		}

		//TESTA SE O QUARTO ESTÁ DISPONIVEL
		$testDisponivel = "select * from quartos where idquarto=$codQuarto LIMIT 1";
		$teste3 = mysqli_query($conexao, $testDisponivel);
		$result = mysqli_fetch_assoc($teste3);
		if($result['disponivel'] == 0){
			echo "<script>
						alert('O quarto informado já está em uso! Oferecer outro ao cliente.');
						window.location.href='http://localhost/hotel/administrativo.php?link=13';
				</script>";
				die();
		}



			$sql = "insert into reservas (idquarto, idcliente, check_in, check_out, obs) values ($codQuarto, $codCliente, '$entrada', NULL, '$obs')";
			$insere = mysqli_query($conexao, $sql);


			if(mysqli_affected_rows($conexao) > 0){

				//ALTERA A DISPONIBILIDADE DO QUARTO
				$sqlQuarto = "update quartos set disponivel=0 where idquarto=$codQuarto";
				$alteraDisp = mysqli_query($conexao, $sqlQuarto);

				echo "<script>
						alert('Reserva cadastrada com sucesso!');
						window.location.href='http://localhost/hotel/administrativo.php?link=14';
					</script>";
			}else{
				echo "<script>
						alert('Ocorreu algum erro ao cadastrar a reserva.');
						window.location.href='http://localhost/hotel/administrativo.php?link=14';
					</script>";
			}

		


	}else{

		echo "<script>

				alert('Não deixe campos requeridos em branco!');
				window.location.href='http://localhost/hotel/administrativo.php?link=13';

			</script>";

	}

?>