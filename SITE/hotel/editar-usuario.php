 
<?php

	$id = $_GET['id'];

	$sql = "select id, nome, login, senha, email from usuarios where id=$id LIMIT 1";
	$selecao = mysqli_query($conexao, $sql);
	$result = mysqli_fetch_assoc($selecao);


?>



  
	
    <div class="container theme-showcase" role="main">      
      <div class="page-header">
        <h1>Cadastrar Usuario</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
         
		 <form method="post" action="processa/att_usuario.php" >
			  <div class="form-group">
				<label for="iNome">Nome</label>
				<input type="text" class="form-control" id="iNome" value="<?=$result['nome'];?>" name="nNome" required>
			  </div>
			  
			  
			   <div class="form-group">
				<label for="iLogin">Login</label>
				<input type="text" class="form-control" id="iLogin" value="<?=$result['login'];?>" name="nLogin" required>
			  </div>
			  
			   <div class="form-group">
				<label for="iSenha">Senha</label>
				<input type="text" class="form-control" id="iSenha" value="<?=$result['senha'];?>" name="nSenha" required>
			  </div>

			  <div class="form-group">
				<label for="iEmail">Email</label>
				<input type="email" class="form-control" id="iEmail" value="<?=$result['email'];?>" name="nEmail" required>
			  </div>


			  <input type="hidden" name="nId" value="<?=$id;?>">
			  
			
		
			<button type="submit" class="btn btn-primary">Salvar</button>
		
			
		</form>
		 
        </div>
		</div>
    </div> <!-- /container -->

