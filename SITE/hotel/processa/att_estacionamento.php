<?php
	
	include("../conexao.php");
	
	$id = $_POST ['id'];
	$dataEnt = $_POST ['DataEntrada'];
	$dataSai = $_POST ['DataSaida'];
	$fabricante = $_POST ['Fabricante'];
	$modelo = $_POST ['Modelo'];
	$placa = $_POST ['Placa'];
	$uf = $_POST ['UF'];
	$horaEnt = $_POST ['HoraEntrada'];
	$horaSai = $_POST ['HoraSaida'];
	$valor = $_POST ['Valor'];
	$vaga = $_POST ['NumeroVaga'];
	$obs = $_POST ['Obs'];


	if(!(empty($id)) && !(empty($dataEnt)) && !(empty($fabricante)) && !(empty($modelo)) && !(empty($placa)) 
		&& !(empty($uf)) && !(empty($horaEnt)) && !(empty($valor)) && !(empty($vaga))){

		if($dataSai != "" && $horaSai != ""){

			$sql2 = "update estacionamento set DataEntrada='$dataEnt', DataSaida='$dataSai', Fabricante='$fabricante', Modelo='$modelo', Placa='$placa',
		 	UF='$uf', HoraEntrada='$horaEnt', HoraSaida='$horaSai', NumeroVaga='$vaga', Obs='$obs' where id=$id";

		}else{

			$sql2 = "update estacionamento set DataEntrada='$dataEnt', DataSaida=NULL, Fabricante='$fabricante', Modelo='$modelo', Placa='$placa',
		 	UF='$uf', HoraEntrada='$horaEnt', HoraSaida=NULL, NumeroVaga='$vaga', Obs='$obs' where id=$id";

		}


		$att = mysqli_query($conexao, $sql2);

		if(mysqli_affected_rows($conexao) != 0){
			echo "<script> 

					alert('Dados alterados com sucesso!');
					window.location.href='http://localhost/hotel/administrativo.php?link=23';
					

				</script>";
		}else{
			echo "Erro na alteração";
		}

	}else{
		echo ":(";
	}

?>
