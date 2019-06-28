<?php

	if(isset($_GET['id'])){

		$id = $_GET['id'];
		include("../conexao.php");


		//SELECIONA A RESERVA
		$sqlSelect = "select * from reservas where idreserva=$id limit 1";
		$selecao = mysqli_query($conexao, $sqlSelect);
		$resultado = mysqli_fetch_assoc($selecao);
		$codQuarto = $resultado['idquarto'];

		//ALTERA A DISPONIBILIDADE DO QUARTO
		$upQuarto = "update quartos set disponivel=1 where idquarto=$codQuarto";
		$atualiza = mysqli_query($conexao, $upQuarto);

		//VERIFICA SE ALTEROU A DISPONIBILIDADE, SE SIM EXCLUI A RESERVA
		if(mysqli_affected_rows($conexao) > 0){


			$sql = "update reservas set check_out=NOW() where idreserva=$id";
			$registra = mysqli_query($conexao, $sql);

			if(mysqli_affected_rows($conexao) > 0){
				echo "<script>
						alert('Check-out registrado com sucesso!');
						window.location.href='http://localhost/hotel/administrativo.php?link=14';
					</script>";
			}else{
				echo "<script>
						alert('Falha ao registrar Check-out, tente novamente mais tarde.');
						window.location.href='http://localhost/hotel/administrativo.php?link=14';
					</script>";
			}

		}else{

			echo "<script>
						alert('Falha ao registrar Check-out, tente novamente mais tarde.');
						window.location.href='http://localhost/hotel/administrativo.php?link=14';
				</script>";

		}



	}else{

		header("Location: ../administrativo.php?link=14");
	}

?>