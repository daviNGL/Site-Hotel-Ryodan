<?php 
	
	include("../conexao.php");

	$nome = $_POST['nNome'];
	$login = $_POST['nLogin'];
	$senha = $_POST['nSenha'];
	$email = $_POST['nEmail'];


	if(($nome != "") and ($login != "") and ($senha != "") and ($email != "")){

		$sql = "insert into usuarios (nome, login, senha, email) values ('$nome', '$login', '$senha', '$email')";
		$insere = mysqli_query($conexao, $sql);
		$linhas = mysqli_affected_rows($conexao);

				if($linhas != 0){

					echo "<script> 

							alert('Novo usuario inserido com sucesso!');
							window.location.href='http://localhost/hotel/administrativo.php?link=3';

						</script>";

				}else{

					echo "<script> 

							alert('Algum erro ocorrou ao tentar inserir novo usuario, favor tente mais tarde.');
							window.location.href='http://localhost/hotel/administrativo.php?link=3';

						</script>";

				}

	}else{

		echo "<script> 

				alert('Não deixe campos em branco!');
				window.location.href='http://localhost/hotel/administrativo.php?link=2';

			</script>";

	}

?>


