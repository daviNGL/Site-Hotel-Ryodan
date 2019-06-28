
<?php

	
	if(isset($_GET['id'])){

		include("conexao.php");

		$id = $_GET['id'];

		$sql = "delete from estacionamento where id=$id LIMIT 1";
		$apaga = mysqli_query($conexao, $sql);


		if(mysqli_affected_rows($conexao) != 0){
			echo "<script> 
					alert('Registro apagado com sucesso!');
					window.location.href='http://localhost/hotel/administrativo.php?link=23';
				</script>";
		}else{
			echo "<script> 
					alert('Ocorreu algum erro ao tentar deletar o registro.');
					window.location.href='http://localhost/hotel/administrativo.php?link=23';
				</script>";
		}


	}else{

		header("Location: administrativo.php?link=23");

	}


?>