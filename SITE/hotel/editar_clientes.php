<?php

	if(isset($_GET['id'])){

		$id = $_GET['id'];

		$sql = "select * from clientes where idcliente=$id";
		$selecao = mysqli_query($conexao, $sql);
		$results = mysqli_fetch_assoc($selecao);

			$Nome = $results['nome'];
			$Cpf = $results['cpf'];
			$Rg = $results['rg'];
			$Data = $results['datanasc'];
			$Nacionalidade = $results['nacionalidade'];
			$Email = $results['email'];
			$Ddd = $results['ddd'];
			$Tel = $results['tel'];
			$Cep = $results['cep'];
			$Endereco = $results['endereco'];
			$Complemento = $results['complemento'];
			$Uf = $results['uf'];
			$Cidade = $results['cidade'];


	}else{
		header("Location: administrativo.php?link=17");
	}

?>
	
    <div class="container theme-showcase" role="main">      
      <div class="page-header">
        <h1>Editar Cliente</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
         
		 <form method="post" action="processa/att_clientes.php">
			
			<b>Nome Completo:</b> 
			<input type="text"
				   name="nome"
				   maxlength="30" 
				   value="<?=$results['nome'];?>"
				   class="form-control" 
				   placeholder="Nome"required><br>
				   
			<b>CPF:</b>
			<input type="number"
				   name="cpf"
				   value="<?=$results['cpf'];?>"
				   min="1"
				   class="form-control" 
				   placeholder="CPF"required><br>
				   
			<b>RG:</b>
			<input type="number"
				   name="rg"
				   min="1"
				   value="<?=$results['rg'];?>"
				   class="form-control"
				   placeholder="RG" required><br>
				   
			<b>Data de Nascimento:</b>
			<input type="date"
				   name="dataNasc" 
				   class="form-control"
				   value="<?=$results['datanasc'];?>"
				   placeholder="Data de Nascimento" required><br>
				   
			<b>Nacionalidade:</b>
			<input type="text"
				   name="nacionalidade"
				   maxlength="20"
				   value="<?=$results['nacionalidade'];?>"
				   class="form-control"
				   placeholder="Nacionalidade"><br>
				   
			<b>E-mail:</b>
			<input type="email"
				   name="email"
				   maxlength="50"
				   value="<?=$results['email'];?>"
				   class="form-control" 
				   placeholder="E-mail" required><br>
				   
			<b>Telefone:</b>
			<input type="number"
				   name="ddd"
				   value="<?=$results['ddd'];?>"
				   min="1"
				   class="form-control"
				   placeholder="DDD"><br>
				   
			<input type="number"
				   name="tel"
				   min="1"
				   value="<?=$results['tel'];?>"
				   class="form-control"required
				   placeholder="Número"><br>

			<b>Endereço:</b>
			<input type="number"
				   name="cep"
				   value="<?=$results['cep'];?>"
				   min="1"
				   class="form-control"
				   placeholder="CEP"><br>
			
			<input type="text"
				   name="endereco"
				   maxlength="40"
				   value="<?=$results['endereco'];?>"
				   class="form-control"
				   placeholder="Endereço"><br>
				   
			<input type="text"
				   name="complemento"
				   maxlength="30"
				   value="<?=$results['complemento'];?>"
				   class="form-control"
				   placeholder="Complemento"><br>
				   
			<b>Estado:</b>
			<input type="text"
				   name="uf"
				  value="<?=$results['uf'];?>"
				   maxlength="2"
				   placeholder="UF"
				   class="form-control"><br>
				   
			<b>Cidade:</b>
			<input type="text"
				   name="cidade"
				  value="<?=$results['cidade'];?>"
				   maxlength="10"	
				   class="form-control"
				   placeholder="Cidade"><br>
				   
			<input type="hidden" class="form-control" id="uId"  value="<?=$id;?>" name="kId">	   
			<button type="submit" class="btn btn-primary">Atualizar</button>
			<a href="administrativo.php?link=17"><button type="button" class="btn btn-success">Voltar</button></a>
		
			
		</form>
		 
        </div>
		</div>
    </div> <!-- /container -->

