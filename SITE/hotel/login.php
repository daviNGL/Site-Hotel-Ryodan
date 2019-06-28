<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página para realizar login">
    <meta name="author" content="Davi Alencar">
    <link rel="icon" href="imagens/dlc.jpg">

    <title>Área de Login - Hotelaria Hyodan</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>
  
  <?php
  
		unset($_SESSION['id']);
		unset($_SESSION['nome']);
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		unset($_SESSION['email']);
  ?>
  

  <body>
	
    <div class="container">		
      <form class="form-signin" method="POST" action="valida_login.php">
        <h2 class="form-signin-heading text-center">Área Restrita.</h2>
		<center><h4>Favor, para continuar efetue o login.</h4><center>
        <label for="inputEmail" class="sr-only">Usuário</label>
		
        <input type="text" name="login" class="form-control" placeholder="Digitar o Usuário" required autofocus><br />
		
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite a Senha" required >
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
      </form>
    </div> <!-- /container -->
	
	<?php
		
		if(isset($_SESSION['msg'])){
			echo "<center>" . $_SESSION['msg'] . "</center>";
			unset($_SESSION['msg']);
		}	
		
	?>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>