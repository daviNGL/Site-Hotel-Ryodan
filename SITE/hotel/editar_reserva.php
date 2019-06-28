<?php

		if(!(isset($_GET['id']))){
			header("Location: administrativo.php?link=14");
		}else{

			include("conexao.php");

			$id = $_GET['id'];
			$sql = "select * from reservas where idreserva=$id LIMIT 1";
			$selecao = mysqli_query($conexao, $sql);
			$result = mysqli_fetch_assoc($selecao);

			$codQuarto = $result['idquarto'];
			$codCliente = $result['idcliente'];
			$entrada = $result['check_in'];
			$saida = $result['check_out'];
			$obs = $result['obs'];

		}

?>
  
	
    <div class="container theme-showcase" role="main">      
      <div class="page-header">
        <h1>Edição de Reserva</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
         
		 <form method="post" action="processa/att_reserva.php">

			  <div class="form-group">
				<label for="iCliente">Codigo do Cliente</label>
				<input type="number" class="form-control" id="iCliente"  value="<?=$codCliente;?>" name="nCliente" required>
			  </div>
			  
			  <div class="form-group">
				<label for="iQuarto">Codigo do Quarto</label>
				<input type="number" class="form-control" id="iQuarto"  value="<?=$codQuarto;?>" name="nQuarto" required>
			  </div>

			  <div class="form-group">
				<label for="iCheck-in">Check-in</label>
				<input type="date" class="form-control" id="iCheck-in" name="nCheck-in" value="<?=$entrada;?>" required>
			  </div>

			  <div class="form-group">
				<label for="iCheck-out">Check-out</label>
				<input type="date" class="form-control" id="iCheck-out" name="nCheck-out" value="<?=$saida;?>">
			  </div>

			  <div class="form-group">
				<label for="iObs">Observações</label>
				<textarea class="form-control" name="nObs" id="iObs"><?=$obs;?></textarea>
			  </div>

			  <div class="form-group">
				<input type="hidden" name="id" value="<?=$id;?>">
			  </div>
			   

		
			<button type="submit" class="btn btn-primary">Alterar</button>
		
			
		</form>
		 
        </div>
		</div>
    </div> <!-- /container -->