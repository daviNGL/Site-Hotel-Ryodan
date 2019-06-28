<?php
	
	$con = mysqli_connect('localhost', 'root', '');
	
	$enter = mysqli_select_db ($con, 'hotel');
	
	if (!isset($GET['id'])) 
		echo "<script>
				alert ('Cliente excluído com sucesso!')
				window.location.href='http://localhost/hotel/administrativo.php?link=17';
			 </script>";
				 
		$sql = "delete from clientes where idcliente=" . $_GET['id'];
		
		if (mysqli_query($con, $sql))
			echo "<script>
					alert ('Não foi possível excluir o cliente. Cliente sem Id!')
					window.location.href='http://localhost/hotel/administrativo.php?link=17';
				 </script>";
?>