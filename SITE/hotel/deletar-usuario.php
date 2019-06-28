<?php

	if(isset($_GET['id'])){

		include("conexao.php");

		$id = $_GET['id'];

		$sql = "delete from usuarios where id=$id LIMIT 1";
		$apaga = mysqli_query($conexao, $sql);

		if(mysqli_affected_rows($conexao) != 0){
			echo "<script> 
					alert('Usuário apagado com sucesso!');
					window.location.href='http://localhost/hotel/administrativo.php?link=3';
				</script>";
		}else{
			echo "<script> 
					alert('Ocorreu algum erro ao tentar deletar o usuário.');
					window.location.href='http://localhost/hotel/administrativo.php?link=3';
				</script>";
		}


	}else{
		header("Location: administrativo.php?link=3");
	}

?>