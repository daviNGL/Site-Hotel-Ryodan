<?php

	$sql = "select * from estacionamento";
	$selecao = mysqli_query($conexao, $sql);


?>
    <div class="container theme-showcase" role="main">  

	    <div class="page-header">

	    	<h1>Lista de Veículos</h1>

	    </div>
	
	<table class="table table-striped">
		
		<thead>
			<tr>
				<th>ID</th>
				<th>Data de Entrada</th>
				<th>Data de Saída</th>
				<th>Fabricante</th>
				<th>Modelo</th>
				<th>Placa</th>
				<th>UF</th>
				<th>Hora de Entrada</th>
				<th>Hora de Saída</th>
				<th>Valor Pago</th>
				<th>Numero da Vaga</th>
				<th>Obs</th>
				<th><center>Ações</center></th>
			</tr>
		</thead>

		<tbody>

			<?php
				while($results = mysqli_fetch_assoc($selecao)){
					
					$id = $results ['id'];
					$dataEnt = $results ['DataEntrada'];
					$dataSai = $results ['DataSaida'];
					$fabricante = $results ['Fabricante'];
					$modelo = $results ['Modelo'];
					$placa = $results ['Placa'];
					$uf = $results ['UF'];
					$horaEnt = $results ['HoraEntrada'];
					$horaSai = $results ['HoraSaida'];
					$valor = $results ['Valor'];
					$vaga = $results ['NumeroVaga'];
					$obs = $results ['Obs'];
			?>

			<tr>
				<td><?= $id;?></td>
				<td><?= $dataEnt;?></td>
				<td><?= $dataSai;?></td>
				<td><?= $fabricante;?></td>
				<td><?= $modelo;?></td>
				<td><?= $placa;?></td>
				<td><?= $uf;?></td>
				<td><?= $horaEnt;?></td>
				<td><?= $horaSai;?></td>
				<td><?= $valor;?></td>
				<td><?= $vaga;?></td>
				<td><?= $obs;?></td>

				<td>
					<center>
						<a href="administrativo.php?link=24&id=<?=$id;?>"><button type="button" class="btn btn-success">Editar</button></a>
						<a href="deletar-vagas.php?id=<?=$id;?>"><button type="button" class="btn btn-danger">Apagar</button></a>
					</center>


				</td>

			</tr>

			<?php }?>

		</tbody>

	</table>
		
      
    </div> 