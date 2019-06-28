<?php

	include("../conexao.php");

	if(!(isset($_POST['nId']))){
		header("Location: ../login.php");
	}else{

		$id = $_POST['nId'];
		$numero = (int) $_POST['nNumero'];
		$andar = (int) $_POST['nAndar'];
		$tipo = (int) $_POST['nTipo'];

		

		$disponivel = 0;
		if(isset($_POST['nDisp'])){
			$disponivel = (int) $_POST['nDisp'];
		}

		$vista = (int) 0;
		if(isset($_POST['nVista'])){
			$vista = (int) $_POST['nVista'];
		}

		$hidro = 0;
		if(isset($_POST['nHidro'])){
			$hidro = (int) $_POST['nHidro'];
		}

		$foto = $_POST['nImg'];
		if(isset($_FILES['nFot']) && !empty($_FILES['nFot']['name'])){
			$foto = $_FILES['nFot']['name'];
		}

		$obs = $_POST['nObs'];

	}


		

		if((!empty($numero)) && (!empty($andar)) && (!empty($tipo))){

			$sql = "update quartos set numero=$numero, andar=$andar, tipo=$tipo, disponivel=$disponivel, vista_mar=$vista, hidromassagem=$hidro, imagem='$foto', obs='$obs' where idquarto=$id";
			$altera = mysqli_query($conexao, $sql);

			if(mysqli_affected_rows($conexao) > 0){
				echo "<script> 
						alert('Dados alterados com sucesso!');
						window.location.href='http://localhost/hotel/administrativo.php?link=7';
					</script>";
			}else{
				echo "<script> 
						alert('Ocorreu algum erro ao tentar atualizar os dados.');
						window.location.href='http://localhost/hotel/administrativo.php?link=7';
					</script>";
			}
		}else{
			echo "<script> 
						alert('Não deixe campos requeridos em branco!');
						window.location.href='http://localhost/hotel/administrativo.php?link=8&id=<?=$id;?>';
					</script>";
		}
		




?>