

<div class="container theme-showcase">
	
	<div class="page-header">
		<h1>Listagem de Reservas</h1>
	</div>

	<table class="table table-striped">
		
		<thead>
			<tr>
				<th>Codigo Reserva</th>
				<th>Cliente</th>
				<th>Quarto</th>
				<th>Check-in</th>
				<th>Check-out</th>
				<th><center>Observações</center></th>
				<th><center>Ações</center></th>
			</tr>
		</thead>

		<tbody>
			
			<?php

				include("conexao.php");

				$sql = "select r.idreserva, c.nome, q.numero, r.check_in, r.check_out, r.obs from reservas as r join quartos as q join clientes as c on r.idquarto=q.idquarto and r.idcliente=c.idcliente order by r.idreserva";
				$selecao = mysqli_query($conexao, $sql);

				while($result = mysqli_fetch_assoc($selecao)){ 

					$id = $result['idreserva'];
					$nomeCliente = $result['nome'];
					$numQuarto = $result['numero'];
					$checkin = $result['check_in'];
					$checkout = $result['check_out'];
					$obs = $result['obs'];

				?>

					<tr>
						<td><?=$id;?></td>
						<td><?=$nomeCliente;?></td>
						<td><?=$numQuarto;?></td>
						<td><?=$checkin;?></td>
						<td><?=$checkout;?></td>
						<td><center><?=$obs;?></center></td>

						<td>
							<center>

								<a href="processa/checkout-reserva.php?id=<?=$id;?>"><button <?php if($checkout == ""){ echo "class='btn btn-primary'"; }else{ echo "class='btn btn-info' disabled"; } ?> >Registrar Check-out</button></a>

								<a href="administrativo.php?link=15&id=<?=$id;?>"><button class="btn btn-success">Editar</button></a>

								<a href="deletar-reserva?id=<?=$id;?>"><button class="btn btn-danger">Deletar</button></a>

							</center>
						</td>
					</tr>

				<?php
				}

			?>

		</tbody>

	</table>

</div>