<?php

	include("../conexao.php");


	//RECEBENDO AS VARIAVEIS

	$numero = (int) $_POST['nNumero'];
	$andar = (int) $_POST['nAndar'];
	$tipo = (int) $_POST['nTipo'];

	$disponivel = 1;
	if(isset($_POST['nDisp'])){
		$disp = (int) $_POST['nDisp'];
	}

	$vista = 0;
	if(isset($_POST['nVista'])){
		$vista = (int) $_POST['nVista'];
	}

	$hidro = 0;
	if(isset($_POST['nHidro'])){
		$hidro = (int) $_POST['nHidro'];
	}


	$obs = $_POST['nObs'];


	//RECEBENDO E VALIDANDO IMAGEM
	$foto = $_FILES['nFot']['name'];
	$extenValidas = array("jpg", "png", "jpeg");
	$extensao = explode(".", $foto);
	$extensao = strtolower(end($extensao));
	$destino = '../imagens/';

	if(array_search($extensao, $extenValidas) === false){

		$sql = "insert into quartos (numero, andar, tipo, disponivel, vista_mar, hidromassagem, obs) values ($numero, $andar, $tipo, $disponivel, $vista, $hidro, '$obs')";
		$insere = mysqli_query($conexao, $sql);

		if(mysqli_affected_rows($conexao) > 0){
			echo "<script>
					alert('Quarto cadastrado sem imagem. Favor, enviar arquivos com as seguintes extensões: jpg, jpeg, png.');
					window.location.href='http://localhost/hotel/administrativo.php?link=7';
				</script>";
		}else{
			echo "<script>
					alert('Ocorreu algum erro ao cadastrar o quarto. Favor, tente novamente.');
					window.location.href='http://localhost/hotel/administrativo.php?link=6';
				</script>";
		}

		

	}else{

		//RENOMEIA E TENTA ENVIAR O ARQUIVO

		$newnome = md5(time()) . '.' . $extensao;

		if(move_uploaded_file($_FILES['nFot']['tmp_name'], $destino . $newnome)){

			//ARQUIVO ENVIADO COM SUCESSO!
			$sql = "insert into quartos (numero, andar, tipo, disponivel, vista_mar, hidromassagem, obs, imagem) values ($numero, $andar, $tipo, $disponivel, $vista, $hidro, '$obs', '$newnome')";
			$insere = mysqli_query($conexao, $sql);

			if(mysqli_affected_rows($conexao) > 0){
				echo "<script>
					alert('Quarto cadastrado com sucesso!');
					window.location.href='http://localhost/hotel/administrativo.php?link=7';
				</script>";
			}else{
				echo "<script>
					alert('Ocorreu algum erro ao cadastrar o quarto. Favor, tente novamente.');
					window.location.href='http://localhost/hotel/administrativo.php?link=6';
				</script>";
			}
			
		}else{
			$sql = "insert into quartos (numero, andar, tipo, disponivel, vista_mar, hidromassagem, obs) values ($numero, $andar, $tipo, $disponivel, $vista, $hidro, '$obs')";
			$insere = mysqli_query($conexao, $sql);

			if(mysqli_affected_rows($conexao) > 0){
				echo "<script>
						alert('Quarto cadastrado sem imagem. Favor, verifique o arquivo enviado.');
						window.location.href='http://localhost/hotel/administrativo.php?link=7';
					</script>";
		}else{
			echo "<script>
					alert('Ocorreu algum erro ao cadastrar o quarto. Favor, tente novamente.');
					window.location.href='http://localhost/hotel/administrativo.php?link=6';
				</script>";
			}
		}

	}
	

		
	/*

	echo "$numero<br>";
	echo "$andar<br>";
	echo "$tipo<br>";
	echo "$disponivel<br>";
	echo "$vista<br>";
	echo "$hidro<br>";
	echo "$obs<br>";
	echo "$foto<br>";


*/

	

?>