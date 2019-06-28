<?php

	$sql = "select * from clientes";
	$selecao = mysqli_query($conexao, $sql);


?>

    <div class="container theme-showcase" role="main">  

	    <div class="page-header">

	    	<h1>Lista de Clientes Ryodan Hotel</h1>

	    </div>
	
	
	<table class="table table-striped">
		
		

		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>CPF</th>
				<th>RG</th>
				<th>E-mail</th>
				
				<th><center>Ações</center></th>
			</tr>
		</thead>


		<tbody>

			<?php
				while($results = mysqli_fetch_assoc($selecao)){

					$comandoSQL = "select idcliente, nome, cpf, rg, email from clientes;";

					$id = $results['idcliente'];
					$nome = $results['nome'];
					$cpf = $results['cpf'];
					$rg = $results['rg'];
					$email = $results['email'];
					
			?>

			<tr>
				<td><?= $id;?></td>
				<td><?= $nome;?></td>
				<td><?= $cpf;?></td>
				<td><?= $rg;?></td>
				<td><?= $email;?></td>
				


				<td>
					<center>
						<a href="administrativo.php?link=28&id=<?=$id;?>"><button type="button" class="btn btn-primary">Vizualizar</button></a>
						<a href="administrativo.php?link=18&id=<?=$id;?>"><button type="button" class="btn btn-success">Editar</button></a>
						<a href="deletar-clientes.php?id=<?=$id;?>"><button type="button" class="btn btn-danger">Apagar</button></a>
					</center>


				</td>

			</tr>

			<?php }?>

		</tbody>

	</table>
		
      
    </div> 


