<?php

	$sql = "select q.idquarto, q.numero, q.andar, q.tipo, q.disponivel, q.vista_mar, q.hidromassagem, q.imagem, q.imagem, q.obs, t.nome, t.idtipo from quartos as q join tiposquartos as t on q.tipo = t.idtipo ORDER BY q.idquarto";
	$selecao = mysqli_query($conexao, $sql);


?>


  
  
	
    <div class="container theme-showcase" role="main">  

	    <div class="page-header">

	    	<h1>Lista de Quartos</h1>

	    </div>
	
	
	<table class="table table-striped">
		
		<thead>
			<tr>
				<th>Id</th>
				<th>Número</th>
				<th>Andar</th>
				<th>Tipo</th>
				<th>Disponível</th>
				<th>Vista para o mar</th>
				<th>Hidromassagem</th>
				<th>Observações</th>
				<th><center>Ações</center></th>
			</tr>
		</thead>


		<tbody>

			<?php
				while($results = mysqli_fetch_assoc($selecao)){

					$id = $results['idquarto'];
					$num = $results['numero'];
					$andar = $results['andar'];
					$tipo = $results['nome'];
					$disp = $results['disponivel'];
					$vista = $results['vista_mar'];
					$hidro = $results['hidromassagem'];
					$obs = $results['obs'];
					$foto = $results['imagem'];

				
			?>

			<tr>
				<td><?= $id;?></td>
				<td><?= $num;?></td>
				<td><?= $andar;?></td>
				<td><?= $tipo;?></td>


				<td><?php

					if($disp == 0){
						echo "<span class='alert text-danger'>Não</span>";
					}else{
						echo "<span class='alert text-primary'>Sim</span>";
					}

				?></td>

				<td><?php

					if($vista == 0){
						echo "<span class='alert text-danger'>Não</span>";
					}else{
						echo "<span class='alert text-primary'>Sim</span>";
					}

				?></td>
				
				<td><?php

					if($hidro == 0){
						echo "<span class='alert text-danger'>Não</span>";
					}else{
						echo "<span class='alert text-primary'>Sim</span>";
					}

				?></td>

				<td><?= $obs;?></td>

				<td>
					<center>
						<a href="administrativo.php?link=9&id=<?=$id;?>"><button type="button" class="btn btn-primary">Visualizar</button></a>
						<a href="administrativo.php?link=8&id=<?=$id;?>"><button type="button" class="btn btn-success">Editar</button></a>
						<a href="deletar-quarto.php?id=<?=$id;?>"><button type="button" class="btn btn-danger">Apagar</button></a>
					</center>


				</td>

			</tr>

			<?php }?>

		</tbody>

	</table>
		
      
    </div> 

