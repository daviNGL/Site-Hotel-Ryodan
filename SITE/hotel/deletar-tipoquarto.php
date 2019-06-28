<?php

	include("conexao.php");


	if(!(isset($_GET['id']))){
		
		header("Location: administrativo.php?link=11");

	}else{

		$id = (int) $_GET['id'];

		$sql = "delete from tiposQuartos where idtipo=$id";
		$apaga = mysqli_query($conexao, $sql);

		if(mysqli_affected_rows($conexao) > 0){
			echo "<script>

					alert('Categoria removida com sucesso!');
					window.location.href='http://localhost/hotel/administrativo.php?link=11';

				 </script>";
		}else{
			echo "<script>

					alert('Ocorreu algum erro ao remover a categoria.');
					window.location.href='http://localhost/hotel/administrativo.php?link=11';

				 </script>";
		}
	}

?>