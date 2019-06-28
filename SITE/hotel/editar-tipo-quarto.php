<?php

	include("conexao.php");

	if(isset($_GET['id'])){

		$id = (int) $_GET['id'];

		$sql = "select idtipo, nome, diaria from tiposQuartos where idtipo=$id LIMIT 1";
		$selecao = mysqli_query($conexao, $sql);
		$result = mysqli_fetch_assoc($selecao);

		$nome = $result['nome'];
		$diaria = $result['diaria'];

	}else{

		header("Location: administrativo.php?link=11");

	}

?>
  
	
    <div class="container theme-showcase" role="main">      
      <div class="page-header">
        <h1>Cadastrar Tipo de Quarto</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
         
		 <form method="post" action="processa/att_tipo-quarto.php">
			  <div class="form-group">
				<label for="iNome">Nome</label>
				<input type="text" class="form-control" id="iNome"  value="<?=$nome;?>" name="nNome" required>
			  </div>
			  

			  
			   <div class="form-group">
				<label for="iDiaria">Valor Diária</label>
				<input type="number" class="form-control" id="iDiaria"  value="<?=$diaria;?>" name="nDiaria" min="1" max="999,99" required>
			  </div>

			  <div class="form-group">
				<input type="hidden" name="id" value="<?=$result['idtipo'];?>">
			  </div>

		
			<button type="submit" class="btn btn-primary">Cadastrar</button>
		
			
		</form>
		 
        </div>
		</div>
    </div> <!-- /container -->

