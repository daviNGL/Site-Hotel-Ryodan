<?php

	$sql = "select * from funcionarios";
	$selecao = mysqli_query($conexao, $sql);


?>

    <div class="container theme-showcase" role="main">  

	    <div class="page-header">

	    	<h1>Lista de Funcionários Ryodan Hotel</h1>

	    </div>
	
	
	<table class="table table-striped">
		
		<thead>
			<tr>
				<th>id</th>
				<th>nome</th>
				<!--- <th>dNascimento</th> -->
				<th>cpf</th>
				<th>cargo</th>
				<th>dAdmissao</th>
				<th>sal</th>
				<th>folga</th>
				<th>hEntrada</th>
				<th>hSaida</th>
				<th><center>obs</center></th>
				<th><center>Ações</center></th>
			</tr>
		</thead>


		<tbody>

			<?php
				while($results = mysqli_fetch_assoc($selecao)){

					$id = $results['id'];
					$nome = $results['nome'];
					$dNascimento = $results['dNascimento'];
					$cpf = $results['cpf'];
					$cargo = $results['cargo'];
					$dAdmissao = $results['dAdmissao'];
					$sal = $results['sal'];
					$folga = $results['folga'];
					$hEntrada = $results['hEntrada'];
					$hSaida = $results['hSaida'];
					$obs = $results['obs'];
			?>

			<tr>
				<td><?= $id;?></td>
				<td><?= $nome;?></td>
				<!-- <td><?= $dNascimento;?></td> -->
				<td><?= $cpf;?></td>
				<td><?= $cargo;?></td>
				<td><?= $dAdmissao;?></td>
				<td><?= $sal;?></td>
				<td><?= $folga;?></td>
				<td><?= $hEntrada;?></td>
				<td><?= $hSaida;?></td>
				<td><?= $obs;?></td>


				<td>
					<center>
						<a href="administrativo.php?link=21&id=<?=$id;?>"><button type="button" class="btn btn-success">Editar</button></a>
						<a href="deletar-funcionario.php?id=<?=$id;?>"><button type="button" class="btn btn-danger">Apagar</button></a>
					</center>


				</td>

			</tr>

			<?php }?>

		</tbody>

	</table>
		
      
    </div> 

