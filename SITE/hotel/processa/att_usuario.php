<?php
	
	include("../conexao.php");

	$id = $_POST['nId'];
	$nome = $_POST['nNome'];
	$login = $_POST['nLogin'];
	$senha = $_POST['nSenha'];
	$email = $_POST['nEmail'];


	if(!(empty($id)) && !(empty($nome)) && !(empty($login)) && !(empty($senha)) && !(empty($email))){

		$sql2 = "update usuarios set nome='$nome', login='$login', senha='$senha', email='$email' where id=$id";
		$att = mysqli_query($conexao, $sql2);

		if(mysqli_affected_rows($conexao) != 0){
			echo "<script> 

					alert('Dados alterados com sucesso!');
					window.location.href='http://localhost/hotel/administrativo.php?link=3';

				</script>";
		}else{
			
			echo "<script> 

					alert('Não foi possivel atualizar os dados :(');
					window.location.href='http://localhost/hotel/administrativo.php?link=3';

				</script>";
			
		}

	}else{
		
		echo "<script> 

					alert('Não deixe campos em branco!');
					window.location.href='http://localhost/hotel/administrativo.php?link=3';

				</script>";
		
	}

?>