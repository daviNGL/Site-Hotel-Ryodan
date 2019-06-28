
<?php

	
	if(isset($_GET['id'])){

		include("conexao.php");

		$id = $_GET['id'];

		$sql = "delete from funcionarios where id=$id LIMIT 1";
		$apaga = mysqli_query($conexao, $sql);


		if(mysqli_affected_rows($conexao) != 0){
			echo "<script> 
					alert('Funcionario apagado com sucesso!');
					window.location.href='http://localhost/hotel/administrativo.php?link=20';
				</script>";
		}else{
			echo "<script> 
					alert('Ocorreu algum erro ao tentar deletar o funcionario.');
					window.location.href='http://localhost/hotel/administrativo.php?link=20';
				</script>";
		}


	}else{

		header("Location: administrativo.php?link=20");

	}


?>