<?php
	if(isset($_GET['id'])){

		$id = $_GET['id'];

		$sql = "select * from funcionarios where id=$id";
		$selecao = mysqli_query($conexao, $sql);
		$results = mysqli_fetch_assoc($selecao);
		
    
	$nome= $results ['nome'];
	$dNascimento = $results ['dNascimento'];
	$cpf = $results ['cpf'];
	$cargo = $results ['cargo'];
	$dAdmissao = $results ['dAdmissao'];
	$sal = $results ['sal'];
	$folga = $results ['folga'];
	$hEntrada = $results ['hEntrada'];
	$hSaida = $results ['hSaida'];
	$obs   = $results ['obs'];
	


	}else{
		header("Location: administrativo.php?link=20");
	}


?>



<div class="container theme-showcase" role="main">      
      <div class="page-header">
        <h1>Editar dados do Funcionário</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
         
		 <form method="post" class="form-horizontal"  action="processa/att_funcionario.php" >
		 
		<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" id="nome" value="<?=$results['nome'];?>" maxlength="30"  name="nome" required>
			  </div>
		
		<div class="form-group">
				<label for="dNascimento">Data de Nascimento:</label>
				<input type="date" class="form-control" id="dNascimento" value="<?=$results['dNascimento'];?>"  name="dNascimento" required>
			  </div>
		
		<div class="form-group">
				<label for="cpf">CPF:</label>
				<input type="text" class="form-control" id="cpf" value="<?=$results['cpf'];?>" maxlength="11"  name="cpf" required>
			  </div>
		
		<div class="form-group">
				<label for="cargo">Cargo:</label>
				<input type="text" class="form-control" id="cargo" value="<?=$results['cargo'];?>" maxlength="20"  name="cargo" required>
			  </div>
		
		<div class="form-group">
				<label for="dAdmissao">Data de Admissão:</label>
				<input type="date" class="form-control" id="dAdmissao"  value="<?=$results['dAdmissao'];?>" name="dAdmissao" required>
			  </div>
		
		<div class="form-group">
				<label for="sal">Salário</label>
				<input type="number" class="form-control" id="sal"  value="<?=$results['sal'];?>"   name="sal"  required>
			  </div>
		
		<div class="form-group">
				<label for="folga">Folga</label>
				<input type="text" class="form-control" id="folga"  value="<?=$results['folga'];?>" maxlength="20" name="folga">
			  </div>
		
		<div class="form-group">
				<label for="hEntrada">Horario de Entrada:</label>
				<input type="time" class="form-control" id="hEntrada" value="<?=$results['hEntrada'];?>"  name="hEntrada" required>
			  </div>
		
		<div class="form-group">
				<label for="hSaida">Horário de Saída:</label>
				<input type="time" class="form-control" id="hSaida"  value="<?=$results['hSaida'];?>"  name="hSaida" required>
			  </div>
		
	 <div class="form-group">
      <label for="obs">Observações: </label>
      <textarea class="form-control" rows="5" id="obs" value="<?=$results['obs'];?>"  name="obs"></textarea>
		
	
			
		<br><br>
		
			<input type="hidden" name="id" value="<?=$id;?>">
			
			<button type="submit" class="btn btn-primary" >Salvar Alterações</button>
		
			
		</form>
		 
        </div>
		</div>
    </div> <!-- /container -->
