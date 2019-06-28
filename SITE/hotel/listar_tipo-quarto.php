<?php

	$sql = "select * from tiposquartos";
	$selecao = mysqli_query($conexao, $sql);


?>


  
  
	
    <div class="container theme-showcase" role="main">  

	    <div class="page-header">

	    	<h1>Lista de Categorias de Quartos</h1>

	    </div>
	
	
	<table class="table table-striped">
		
		<thead>
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>Valor Diária</th>
				<th><center>Ações</center></th>
			</tr>
		</thead>


		<tbody>

			<?php
				while($results = mysqli_fetch_assoc($selecao)){

					$id = $results['idtipo'];
					$nome = $results['nome'];
					$diaria = $results['diaria'];
			?>

			<tr>
				<td><?= $id;?></td>
				<td><?= $nome;?></td>
				<td><?= $diaria;?></td>


				<td>
					<center>
						<a href="administrativo.php?link=12&id=<?=$id;?>"><button type="button" class="btn btn-success">Editar</button></a>
						<a href="deletar-tipoquarto.php?id=<?=$id;?>"><button type="button" class="btn btn-danger">Apagar</button></a>
					</center>


				</td>

			</tr>

			<?php }?>

		</tbody>

	</table>
		
      
    </div> 

