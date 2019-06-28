<?php

	if(isset($_GET['id'])){

		$id = $_GET['id'];

		$sql = "select * from quartos where idquarto=$id LIMIT 1";
		$selecao = mysqli_query($conexao, $sql);
		$result = mysqli_fetch_assoc($selecao);

		$num = $result['numero'];
		$andar = $result['andar'];
		$tipo = $result['tipo'];
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
        <h1>Editar Quarto</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
         
		 <form method="post" action="processa/att_quarto.php" enctype="multipart/form-data">
			  <div class="form-group">
				<label for="iNumero">Número (Não pode repetir)</label>
				<input type="number" class="form-control" id="iNumero"  value="<?=$num;?>" name="nNumero" required>
			  </div>
			  
			   <div class="form-group">
				<label for="iAndar">Andar</label>
				<input type="number" class="form-control" id="iAndar"  value="<?=$andar;?>" name="nAndar" min="1" required>
			  </div>

			 

			  <div class="form-group">
				<label for="iTipo">Tipo</label>
				<select class="form-control" id="iTipo" name="nTipo">
				<?php
					$sql2 = "select idtipo, nome from tiposquartos";
					$exec = mysqli_query($conexao, $sql2);

					while($tipos = mysqli_fetch_assoc($exec)){
				?>
					<option value="<?=$tipos['idtipo'];?>"><?=$tipos['nome'];?></option>

				<?php } ?>
				</select>

			  </div>

			  <input type="checkbox" class="form-check-input" id="iDisp" name="nDisp" value="1" <?php if($disp == 1){ echo "checked";}?>>
   		 	  <label class="form-check-label" for="iDisp">Disponível</label> <br>


   		 	  <input type="checkbox" class="form-check-input" id="iVista" name="nVista" value="1" <?php if($vista == 1){ echo "checked";}?>>
   		 	  <label class="form-check-label" for="iVista">Vista para o mar</label> <br>


   		 	  <input type="checkbox" class="form-check-input" id="iHidro" name="nHidro" value="1" <?php if($hidro == 1){ echo "checked";}?>>
   		 	  <label class="form-check-label" for="iHidro">Hidromassagem</label> <br>

   		 	  <div class="form-group">
				<label for="iFot">Foto</label>
				<input type="file" class="form-control" id="iFot" name="nFot">
				<span><b>Atual: </b>
				<?php
					if(!(empty($img))){
						echo $img;
					}else{
						echo "Nenhuma foto cadastrada atualmente";
					}
				?>
				</span>
			  </div>


			  <div class="form-group">

				<label for="iObs">Observações</label>
				<textarea class="form-control" name="nObs" id="iObs"><?=$obs;?></textarea>

			  </div>

			  <div class="form-group">
				<input type="hidden" class="form-control" id="iId"  value="<?=$id;?>" name="nId">
				<input type="hidden" class="form-control" id="iAtual"  value="<?=$img;?>" name="nImg">
			  </div>
		
			<button type="submit" class="btn btn-primary">Atualizar</button>
		
			
		</form>
		 
        </div>
		</div>
    </div> <!-- /container -->

