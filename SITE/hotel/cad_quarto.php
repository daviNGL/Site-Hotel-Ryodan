
  
	
    <div class="container theme-showcase" role="main">      
      <div class="page-header">
        <h1>Cadastrar Quarto</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
         
		 <form method="post" action="processa/cad_quarto.php" enctype="multipart/form-data">
			  <div class="form-group">
				<label for="iNumero">Número (Não pode repetir)</label>
				<input type="number" class="form-control" id="iNumero"  placeholder="Digite o número do quarto" name="nNumero" required>
			  </div>
			  
			  
			   <div class="form-group">
				<label for="iAndar">Andar</label>
				<input type="number" class="form-control" id="iAndar"  placeholder="Digite o andar do quarto" name="nAndar" min="1" required>
			  </div>

			 

			  <div class="form-group">
				<label for="iTipo">Tipo</label>
				<select class="form-control" id="iTipo" name="nTipo">
				<?php
					include("conexao.php");

					$sql = "select * from tiposQuartos";
					$selecao = mysqli_query($conexao, $sql);

					while($resultados = mysqli_fetch_assoc($selecao)){ ?>

						<option value="<?=$resultados['idtipo'];?>"><?=$resultados['nome'];?></option>

					<?php
					}

				?>
					
					
				</select>
			  </div>

			  <input type="checkbox" class="form-check-input" id="iDisp" name="nDisp" value="1" checked>
   		 	  <label class="form-check-label" for="iDisp">Disponível</label> <br>


   		 	  <input type="checkbox" class="form-check-input" id="iVista" name="nVista" value="1">
   		 	  <label class="form-check-label" for="iVista">Vista para o mar</label> <br>


   		 	  <input type="checkbox" class="form-check-input" id="iHidro" name="nHidro" value="1">
   		 	  <label class="form-check-label" for="iHidro">Hidromassagem</label> <br>

   		 	  <div class="form-group">
				<label for="iFot">Foto</label>
				<input type="file" class="form-control" id="iFot" name="nFot" require>
			  </div>


			  <div class="form-group">

				<label for="iObs">Observações</label>
				<textarea class="form-control" name="nObs" id="iObs">

				</textarea>

			  </div>

			
		
			<button type="submit" class="btn btn-primary">Cadastrar</button>
		
			
		</form>
		 
        </div>
		</div>
    </div> <!-- /container -->

