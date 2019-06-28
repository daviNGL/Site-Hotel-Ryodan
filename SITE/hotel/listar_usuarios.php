<?php 


	include_once("seguranca.php"); 


	$sql = "select * from usuarios";
	$selecao = mysqli_query($conexao, $sql);


?>

  


  
	
    <div class="container theme-showcase" role="main">  

	    <div class="page-header">

	    	<h1>Listagem de Usuários</h1>

	    </div>
	
	
	<table class="table table-striped">
		
		<thead>
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>Login</th>
				<th>Senha</th>
				<th>E-mail</th>
				<th><center>Ações</center></th>
			</tr>
		</thead>


		<tbody>

			<?php

				while($exibirRegis = mysqli_fetch_array($selecao)){

					$id = $exibirRegis[0];
					$nome = $exibirRegis[1];
					$login = $exibirRegis[2];
					$senha = $exibirRegis[3];
					$email = $exibirRegis[4];

			?>

			<tr>
				<td><?= $id;?></td>
				<td><?= $nome;?></td>
				<td><?= $login;?></td>
				<td><?= $senha;?></td>
				<td><?= $email?></td>
				<td>
					<center>
				 		<a href="administrativo.php?link=5&id=<?=$id;?>"><button type="button" class="btn btn-primary">Visualizar</button></a>
						<a href="administrativo.php?link=4&id=<?=$id;?>"><button type="button" class="btn btn-success">Editar</button></a>
						<a href="deletar-usuario.php?id=<?=$id;?>"><button type="button" class="btn btn-danger">Apagar</button></a>
					</center>
				</td>
			</tr>

			<?php } ?>

		</tbody>

	</table>
		
      
    </div> 
	
   
