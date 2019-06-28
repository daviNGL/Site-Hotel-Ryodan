<?php
	
	if(isset($_GET['id'])){

		$id = $_GET['id'];

		$sql = "select * from clientes where idcliente=$id";
		$seleciona = mysqli_query($conexao, $sql);
		$results = mysqli_fetch_assoc($seleciona);

			$nome = $results['nome'];
			$cpf = $results['cpf'];
			$rg = $results['rg'];
			$data = $results['datanasc'];
			$nacionalidade = $results['nacionalidade'];
			$email = $results['email'];
			$ddd = $results['ddd'];
			$tel = $results['tel'];
			$cep = $results['cep'];
			$endereco = $results['endereco'];
			$complemento = $results['complemento'];
			$uf = $results['uf'];
			$cidade = $results['cidade'];

	}else{
		die ("<b>DEU<br>RUIM</b>");
	}

?>

    <div class="container theme-showcase" role="main">  

	    <div class="page-header">

	    	<h1>Cliente Ryodan Hotel</h1>

	    </div>
	
	<table class="table">
		
			<tr>
				<th>ID</th>
				<td><?=$id;?></td>
			</tr>
			
			<tr>
				<th>Nome: </th>
				<td><?=$nome;?></td>
			</tr>
			
			<tr>
				<th>CPF:</th>
				<td><?=$cpf;?></td>
			</tr>
			
			<tr>
				<th>RG:</th>
				<td><?=$rg;?></td>
			</tr>
			
			<tr>
				<th>Data de Nascimento:</th>
				<td><?=$data;?></td>
			</tr>
			
			<tr>
				<th>Nacionalidade: </th>
				<td><?=$nacionalidade;?></td>
			</tr>
			
			<tr>
				<th>E-mail:</th>
				<td><?=$email;?></td>
			</tr>
			
			<tr>
				<th>DDD</th>
				<td><?=$ddd;?></td>
			</tr>
			
			<tr>
				<th>Telefone: </th>
				<td><?=$tel;?></td>
			</tr>
			
			<tr>
				<th>CEP:</th>
				<td><?=$cep;?></td>
			</tr>
			
			<tr>
				<th>Endereço:</th>
				<td><?=$endereco;?></td>
			</tr>
			
			<tr>
				<th>Complemento:</th>
				<td><?=$complemento;?></td>
			</tr>
			
			<tr>
				<th>Estado:</th>
				<td><?=$uf;?></td>
			</tr>
			
			<tr>
				<th>Cidade:</th>
				<td><?=$cidade;?></td>
			</tr>
			
				<td>
				
						<a href="administrativo.php?link=17"><button type="button" class="btn btn-primary">Voltar</button></a>
						<a href="administrativo.php?link=18&id=<?=$id;?>"><button type="button" class="btn btn-success">Editar</button></a>
						<a href="deletar-clientes.php?id=<?=$id;?>"><button type="button" class="btn btn-danger">Apagar</button></a>

				</td>
	
	</table>
		
      
    </div> 


