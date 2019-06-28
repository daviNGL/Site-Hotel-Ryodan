
<?php
	
	if(isset($_GET['id'])){

		$id = $_GET['id'];

		$sql = "select q.numero, q.andar, q.tipo, q.disponivel, q.vista_mar, q.hidromassagem, q.imagem, q.obs, t.nome from quartos as q join tiposquartos as t on tipo=idtipo where idquarto=$id";
		$seleciona = mysqli_query($conexao, $sql);
		$result = mysqli_fetch_assoc($seleciona);

		$numero = $result['numero'];
		$andar = $result['andar'];
		$tipo = $result['tipo'];
		$tipoName = $result['nome'];
		$disp = $result['disponivel'];
		$vista = $result['vista_mar'];
		$hidro = $result['hidromassagem'];
		$img = $result['imagem'];
		$obs = $result['obs'];

	}else{
		header("Location: administrativo.php?link=7");
	}

?>


<div class="container theme-showcase" role="main">

	<div class="page-header">
		<h1>Visualização de Quarto</h1>
	</div>


	<div class="med">

		<div class="foto-quarto">
  			<img src="imagens/<?=$img;?>" alt="<?=$img;?>" title="<?=$img;?>">
  		</div>

 	 	<div class="infos">

    		<table class="table">
    			
    			<tr>
    				<th>Número do quarto: </th>
    				<td><?=$numero;?></td>
    			</tr>

    			<tr>
    				<th>Andar do quarto: </th>
    				<td><?=$andar;?></td>
    			</tr>

    			<tr>
    				<th>Tipo do quarto: </th>
    				<td><?=$tipoName;?></td>
    			</tr>

    			<tr>
    				<th>Disponibilidade: </th>
    				<td>
    					<?php
    						if($disp == 0){ ?>
    							<span class="text-danger">Indisponível</span>
    						<?php
    						}else{ ?>
    							<span class="text-primary">Disponível</span>
    						<?php
    						}
    					?>
    				</td>
    			</tr>

                <?php
                    if($disp == 0){

                        //BUSCA O COD DO CLIENTE NA RESERVA
                        $selecReserva = "select * from reservas where idquarto=$id";
                        $selecao = mysqli_query($conexao, $selecReserva);
                        $associado = mysqli_fetch_assoc($selecao);
                        $codCliente = $associado['idcliente'];

                        //BUSCA O REGISTRO DO CLIENTE PARA PEGAR SEU NOME
                        $selecCliente = "select * from clientes where idcliente=$codCliente";
                        $selecao2 = mysqli_query($conexao, $selecCliente);
                        $associad = mysqli_fetch_assoc($selecao2);
                        $nome = $associad['nome'];

                        echo "<tr>
                                <th>Cliente:</th>
                                <td>$nome</td>
                            </tr>";
                    }
                ?>

    			<tr>
    				<th>Vista para o mar: </th>
    				<td>
    					<?php
    						if($vista == 0){ ?>
    							<span class="text-danger">Não</span>
    						<?php
    						}else{ ?>
    							<span class="text-primary">Sim</span>
    						<?php
    						}
    					?>
    				</td>
    			</tr>

    			<tr>
    				<th>Hidromassagem: </th>
    				<td>
    					<?php
    						if($hidro == 0){ ?>
    							<span class="text-danger">Não</span>
    						<?php
    						}else{ ?>
    							<span class="text-primary">Sim</span>
    						<?php
    						}
    					?>
    				</td>
    			</tr>

    			<tr>
    				<th>Imagem: </th>
    				<td><?=$img;?></td>
    			</tr>

    			<tr>
    				<th>Observações: </th>
    				<td><?=$obs;?></td>
    			</tr>

    		</table>

  		</div>

  		<div id="cancela">
  			
  			<a href="administrativo.php?link=7"><button type="button" class="btn btn-primary">Voltar</button></a>
			<a href="administrativo.php?link=8&id=<?=$id;?>"><button type="button" class="btn btn-success">Editar</button></a>
			<a href="deletar-quarto.php?id=<?=$id;?>"><button type="button" class="btn btn-danger">Apagar</button></a>

  		</div>

	</div>


</div>