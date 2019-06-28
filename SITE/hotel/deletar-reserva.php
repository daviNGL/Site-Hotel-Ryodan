<?php

	if(isset($_GET['id'])){

		$id = $_GET['id'];
		include("conexao.php");

		//SELECIONA A RESERVA
		$sqlSelect = "select * from reservas where idreserva=$id limit 1";
		$selecao = mysqli_query($conexao, $sqlSelect);
		$resultado = mysqli_fetch_assoc($selecao);
		$codQuarto = $resultado['idquarto'];
		
		//CONFERE SE A DISPONIBILIDADE PRECISA SER ALTERADA
		$buscaQuarto = "select * from quartos where idquarto=$codQuarto limit 1";
		$exec = mysqli_query($conexao, $buscaQuarto);
		$resultQuarto = mysqli_fetch_assoc($exec);

		if($resultQuarto['disponivel'] == 0){
		
				//ALTERA A DISPONIBILIDADE DO QUARTO
				$upQuarto = "update quartos set disponivel=1 where idquarto=$codQuarto";
				$atualiza = mysqli_query($conexao, $upQuarto);
				

				//VERIFICA SE ALTEROU A DISPONIBILIDADE, SE SIM EXCLUI A RESERVA
				if(mysqli_affected_rows($conexao) != 0){


						//DELETA RESERVA
						$sql = "delete from reservas where idreserva=$id";
						$deleta = mysqli_query($conexao, $sql);

						if(mysqli_affected_rows($conexao) != 0){
							echo "<script>
									alert('Reserva deletada com sucesso!');
									window.location.href='http://localhost/hotel/administrativo.php?link=14';
								</script>";
						}else{
							echo "<script>
									alert('Ocorreu algum erro ao tentar deletar a reserva.');
									window.location.href='http://localhost/hotel/administrativo.php?link=14';
								</script>";
						}
				}else{	//NÃO ALTEROU A DISPONIBILIDADE DO QUARTO, ENTAO NAO EXCLUI A RESERVA
						echo "<script>
								alert('Ocorreu algum erro ao tentar deletar a reserva. s2');
								window.location.href='http://localhost/hotel/administrativo.php?link=14';
							</script>";
				}
		}else{
						//DELETA RESERVA DIRETO
						$sql = "delete from reservas where idreserva=$id";
						$deleta = mysqli_query($conexao, $sql);

						if(mysqli_affected_rows($conexao) != 0){
							echo "<script>
									alert('Reserva deletada com sucesso!');
									window.location.href='http://localhost/hotel/administrativo.php?link=14';
								</script>";
						}else{
							echo "<script>
									alert('Ocorreu algum erro ao tentar deletar a reserva.');
									window.location.href='http://localhost/hotel/administrativo.php?link=14';
								</script>";
						}
		}

	}else{
		header("Location: administrativo.php?link=14");
	}
?>