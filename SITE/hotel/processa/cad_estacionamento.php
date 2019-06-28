<?php

include("../conexao.php");

$dataEnt = $_POST ["DataEntrada"];
$dataSai = $_POST ["DataSaida"];
$fabricante = $_POST ["Fabricante"];
$modelo = $_POST ["Modelo"];
$placa = $_POST ["Placa"];
$uf = $_POST ["UF"];
$horaEnt = $_POST ["HoraEntrada"];
$horaSai = $_POST ["HoraSaida"];
$valor = $_POST ["Valor"];
$vaga = $_POST ["NumeroVaga"];
$obs = $_POST ["Obs"];
	
	$servidor="localhost";
	$usuario="root";
	$senha="";
	$banco="hotel";
	
 	$con = mysqli_connect ($servidor, $usuario, $senha);

		mysqli_select_db ($con , $banco) or
			die ("Erro na abertura/seleção do banco hotel:"
				. mysqli_error($con) );
				
	if($dataSai != "" && $horaSai != ""){
		$comandoSQL = "INSERT INTO estacionamento (DataEntrada, DataSaida, Fabricante, Modelo, Placa, UF, HoraEntrada, HoraSaida, Valor, NumeroVaga, Obs) 
					VALUES 
					('$dataEnt', '$dataSai', '$fabricante', '$modelo', '$placa', '$uf', '$horaEnt', '$horaSai', '$valor', '$vaga', '$obs')";
	}else{

		$comandoSQL = "INSERT INTO estacionamento (DataEntrada, DataSaida, Fabricante, Modelo, Placa, UF, HoraEntrada, HoraSaida, Valor, NumeroVaga, Obs) 
					VALUES 
					('$dataEnt', NULL, '$fabricante', '$modelo', '$placa', '$uf', '$horaEnt', NULL, '$valor', '$vaga', '$obs')";

}
			
			$insere = mysqli_query($conexao, $comandoSQL);		
			$linhas = mysqli_affected_rows($conexao);	
			
			echo $comandoSQL;

			if($linhas != 0){

					echo "<script> 

							alert('Novo veiculo cadastrado com sucesso!');
							window.location.href='http://localhost/hotel/administrativo.php?link=23';

						</script>";

				}else{

					echo "<script> 

							alert('Algum erro ocorreu ao tentar cadastrar um veiculo!');
							window.location.href='http://localhost/hotel/administrativo.php?link=22';
							

						</script>";

				}
?>