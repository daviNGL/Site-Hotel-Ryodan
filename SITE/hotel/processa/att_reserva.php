<?php
	
	$id = (int)$_POST['id'];
	$codCliente = (int)$_POST['nCliente'];
	$codQuarto = (int)$_POST['nQuarto'];
	$entrada = $_POST['nCheck-in'];
	$saida = $_POST['nCheck-out'];
	$obs = $_POST['nObs'];


	if(($codCliente != "") && ($codQuarto != "") && ($entrada != "")){

		include("../conexao.php");


		//	VERIFICA SE O CODIGO DE QUARTO EXISTE
		$testQuarto = "select * from quartos where idquarto=$codQuarto LIMIT 1";
		$teste1 = mysqli_query($conexao, $testQuarto);
		if(mysqli_num_rows($teste1) != 1){
			echo "<script>
						alert('Codigo de quarto inválido! Favor informar o codigo de um quarto existente.');
						window.location.href='http://localhost/hotel/administrativo.php?link=15&id=$id';
				</script>";
		}

		// VERIFICA SE O CODIGO DE CLIENTE EXISTE 
		$testCliente = "select * from clientes where idcliente=$codCliente LIMIT 1";
		$teste2 = mysqli_query($conexao, $testCliente);
		if(mysqli_num_rows($teste2) != 1){
			echo "<script>
						alert('Codigo de cliente inválido! Favor informar o codigo de um cliente existente.');
						window.location.href='http://localhost/hotel/administrativo.php?link=15&id=$id';
				</script>";
		}

		//VERIFICA SE O CHECKOUT ESTA NULL OU PREENCHIDO
		if($saida != ""){

			$sql = "update reservas set idquarto=$codQuarto, idcliente=$codCliente, check_in='$entrada', check_out='$saida', obs='$obs' where idreserva=$id";
			$att = mysqli_query($conexao, $sql);
			if(mysqli_affected_rows($conexao) != 0){
				echo "<script>
						alert('Dados atualizados com sucesso!');
						window.location.href='http://localhost/hotel/administrativo.php?link=14';
					</script>";
			}else{
				echo "<script>
						alert('Ocorreu algum erro ao atualizar os dados.');
						window.location.href='http://localhost/hotel/administrativo.php?link=14';
					</script>";
			}

		}else{

			$sql = "update reservas set idquarto=$codQuarto, idcliente=$codCliente, check_in='$entrada', check_out=NULL, obs='$obs' where idreserva=$id";
			$att = mysqli_query($conexao, $sql);
			if(mysqli_affected_rows($conexao) != 0){
				echo "<script>
						alert('Dados atualizados com sucesso!');
						window.location.href='http://localhost/hotel/administrativo.php?link=14';
					</script>";
			}else{
				echo "<script>
						alert('Ocorreu algum erro ao atualizar os dados.');
						window.location.href='http://localhost/hotel/administrativo.php?link=14';
					</script>";
			}
		}


	}else{

		echo "<script>
				alert('Não deixe campos requeridos em branco!');
				window.location.href='http://localhost/hotel/administrativo.php?link=15&id='<?=$id;?>';
			</script>";

	}

?>