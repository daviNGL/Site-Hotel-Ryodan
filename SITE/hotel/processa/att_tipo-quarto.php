<?php
	
	include("../conexao.php");

	if(!(isset($_POST['id']))){
		header("Location: ../administrativo.php?link=11");
	}else{


		$id = (int) $_POST['id'];
		$nome = $_POST['nNome'];
		$diaria = (int) $_POST['nDiaria']; 

		if(($nome != "") && ($diaria != "")){
			//echo "altera";

			$sql = "update tiposQuartos set nome='$nome', diaria=$diaria where idtipo=$id";
			$altera = mysqli_query($conexao, $sql);

			if(mysqli_affected_rows($conexao) > 0){

				echo "<script> 
					alert('Dados alterados com sucesso!');
					window.location.href='http://localhost/hotel/administrativo.php?link=11';
				</script>";

			}else{
				echo "<script> 
					alert('Ocorreu algum erro ao alterar os dados.');
					window.location.href='http://localhost/hotel/administrativo.php?link=11';
				</script>";
			}

		}else{
			echo "<script> 
					alert('Não deixe campos em branco!');
					window.location.href='http://localhost/hotel/administrativo.php?link=12&id=$id';
				</script>";
		}


	}

?>