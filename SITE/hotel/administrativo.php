<?php
	
	include_once("seguranca.php");
	include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página Administrativa Hotel Hyodan">
    <meta name="author" content="Davi Alencar">
    <link rel="icon" href="imagens/dlc.jpg">

    <title>Administrativo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

    
    <link href="css/mystyle.css" rel="stylesheet">

  </head>

  <body role="document">

  
	<?php
	   include("menu.php");
		
		
		if(isset($_GET['link'])){
            $link = $_GET['link'];

            $pag[1] = "bemvindo.php";

            //PAGINAS DAVI - USUARIOS
            $pag[2] = "cad_usuario.html";
            $pag[3] = "listar_usuarios.php";
            $pag[4] = "editar-usuario.php";
            $pag[5] = "visual-usuario.php";

            //PAGINAS DAVI - QUARTOS
            $pag[6] = "cad_quarto.php";
            $pag[7] = "listar_quartos.php";
            $pag[8] = "editar-quarto.php";
            $pag[9] = "visual-quarto.php";


            //PAGINAS DAVI - TIPOS QUARTOS
            $pag[10] = "cad_tipo-quarto.html";
            $pag[11] = "listar_tipo-quarto.php";
            $pag[12] = "editar-tipo-quarto.php";

            //PAGINAS DAVI - RESERVAS
            $pag[13] = "cad_reserva.html";
            $pag[14] = "listar_reservas.php";
            $pag[15] = "editar_reserva.php";


            //PAGINA VICTOR
            $pag[16] = "cad_clientes.html";
            $pag[17] = "listar_clientes.php";
            $pag[18] = "editar_clientes.php";
            $pag[28] = "visual-clientes.php";


            //PAGINA GABRIEL
            $pag[19] = "cad_funcionarios.html";
            $pag[20] = "listar_funcionarios.php";
            $pag[21] = "editar_funcionarios.php";


            //PAGINA DANIEL
            $pag[22] = "cad_estacionamento.html";
            $pag[23] = "listar_vagas.php";
            $pag[24] = "editar_estacionamento.php";


            //PAGINA YASMIN
            $pag[25] = "cad_servico.html";
            $pag[26] = "listar_servico.php";
            $pag[27] = "editar_servico.php";

            

            if(file_exists($pag[$link])){
                include($pag[$link]);
            }else{
                include("bemvindo.php");
            }
		
		}else{
            include("bemvindo.php");
        }
		
	?>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
