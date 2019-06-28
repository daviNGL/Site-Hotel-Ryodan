<?php
	
	if(isset($_GET['id'])){

		include("conexao.php");
		$id = $_GET['id'];

		$sql = "delete from quartos where idquarto=$id";
		$apaga = mysqli_query($conexao, $sql);

		if(mysqli_affected_rows($conexao) > 0){
			echo "<script> 
					alert('Quarto deletado com sucesso!');
					window.location.href='http://localhost/hotel/administrativo.php?link=7';
			 	</script>";
		}else{
			echo "<script> 
					alert('Ocorreu algum erro ao tentar deletar o quarto.');
					window.location.href='http://localhost/hotel/administrativo.php?link=7';
			 	</script>";
		}

	}else{
		header("Location: administrativo.php?link=7");
	}

?>