<?php

	include("../conexao.php");

	$nome = $_POST['nNome'];
	$diaria = (float) $_POST['nDiaria'];


	if((!empty($nome)) && (!empty($diaria))){

		$sql = "insert into tiposQuartos (nome, diaria) values ('$nome', $diaria)";
		$insersao = mysqli_query($conexao, $sql);

		if(mysqli_affected_rows($conexao) > 0){
			echo "<script> 
					alert('Categoria de quarto inserida com sucesso!');
					window.location.href='http://localhost/hotel/administrativo.php?link=11';
				</script>";
		}else{
			echo "<script> 
					alert('Algum erro ocorreu durante a inserção de nova categoria.');
					window.location.href='http://localhost/hotel/administrativo.php?link=11';
				</script>";
		}

	}else{

		echo "<script> 
					alert('Não deixe campos em branco!');
					window.location.href='http://localhost/hotel/administrativo.php?link=10';
			</script>";
	}

?>