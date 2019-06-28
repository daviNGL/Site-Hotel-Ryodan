<?php
	
	include_once("seguranca.php");
	include("conexao.php");

	$id = $_GET['id'];

	$sql = "select id, nome, login, senha, email from usuarios where id=$id LIMIT 1";
	$selecao = mysqli_query($conexao, $sql);
	$result = mysqli_fetch_assoc($selecao);

?>




	
  
	
    <div class="container theme-showcase" role="main">  

	    <div class="page-header">

	    	<h1>Visualização de Usuário</h1>

	    </div>


	    <table class="table">

	    	<tr>
	    		<th>Nome</th>
	    		<td><?=$result['nome'];?></td>
	    	</tr>

	    	<tr>
	    		<th>Login</th>
	    		<td><?=$result['login'];?></td>
	    	</tr>

	    	<tr>
	    		<th>Senha</th>
	    		<td><?=$result['senha'];?></td>
	    	</tr>

	    	<tr>
	    		<th>E-mail</th>
	    		<td><?=$result['email'];?></td>
	    	</tr>
	    	
	    </table>

	    <a href="administrativo.php?link=3"><button type="button" class="btn btn-primary">Voltar</button></a>
		<a href="administrativo.php?link=4&id=<?=$id;?>"><button type="button" class="btn btn-success">Editar</button></a>
		<a href="deletar-usuario.php?id=<?=$id;?>"><button type="button" class="btn btn-danger">Apagar</button></a>
	    

	</div>
