<?php
	$id = $_GET['id'];

	$sql = "select id, DataEntrada, DataSaida, Fabricante, Modelo, Placa, UF, HoraEntrada, HoraSaida, Valor, NumeroVaga, Obs from estacionamento where id=$id LIMIT 1";
	$selecao = mysqli_query($conexao, $sql);
	$result = mysqli_fetch_assoc($selecao);
?>
	
    <div class="container theme-showcase" role="main">      
      <div class="page-header">
        <h1>Editar Dados</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
         
		 <form method="post" action="processa/att_estacionamento.php" >
			  <div class="form-group">
				<label for="dataEnt">Data de Entrada</label>
				<input type="date" class="form-control" id="dataEnt" value="<?=$result['DataEntrada'];?>" name="DataEntrada" required>
			  </div>
			    
			   <div class="form-group">
				<label for="dataSai">Data de Saída</label>
				<input type="date" class="form-control" id="dataSai" value="<?=$result['DataSaida'];?>" name="DataSaida" >
			  </div>
			  
			   <div class="form-group">
				<label for="fabricante">Fabricante</label>
				<input type="text" class="form-control" id="fabricante" value="<?=$result['Fabricante'];?>" name="Fabricante" required>
			  </div>

			  <div class="form-group">
				<label for="modelo">Modelo</label>
				<input type="text" class="form-control" id="modelo" value="<?=$result['Modelo'];?>" name="Modelo" required>
			  </div>
			  
			   <div class="form-group">
				<label for="placa">Placa</label>
				<input type="text" class="form-control" id="placa" maxlength="8" value="<?=$result['Placa'];?>" name="Placa" required>
			  </div>
			  
			   <div class="form-group">
				<label for="uf">UF</label>
				<input type="text" class="form-control" id="uf" maxlength="2" value="<?=$result['UF'];?>" name="UF" required>
			  </div>
			  
			   <div class="form-group">
				<label for="horaEnt">Hora de Entrada</label>
				<input type="time" class="form-control" id="horaEnt" value="<?=$result['HoraEntrada'];?>" name="HoraEntrada" required>
			  </div>
			  
			   <div class="form-group">
				<label for="horaSai">Hora de Saída</label>
				<input type="time" class="form-control" id="horaSai" value="<?=$result['HoraSaida'];?>" name="HoraSaida">
			  </div>
			  
			   <div class="form-group">
				<label for="valor">Valor</label>
				<input type="number" class="form-control" id="valor" step="any" value="<?=$result['Valor'];?>" name="Valor">
			  </div>
			  
			   <div class="form-group">
				<label for="vaga">Numero da Vaga</label>
				<input type="number" class="form-control" id="vaga" min="001" max="999" value="<?=$result['NumeroVaga'];?>" name="NumeroVaga" required>
			  </div>
			  
			   <div class="form-group">
				<label for="obs">Observações</label>
				<textarea class="form-control" id="obs" rows="3" cols="80" value="<?=$result['Obs'];?>" name="Obs"></textarea>
			  </div>
			  


			  <input type="hidden" name="id" value="<?=$id;?>">
			  
			
		
			<button type="submit" class="btn btn-primary">Salvar</button>
		
			
		</form>
		 
        </div>
		</div>
    </div> <!-- /container -->

