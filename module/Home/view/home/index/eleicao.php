	<div class="imagem_principal_elecoes">
		<div class="imagem_principal_todo">
			
			<!-- INCLUDE NAV -->
			<?php echo $this->partial('includes/nav.php') ?>
		  		
			<div class="container">
        		
        		<div class="spacebox-extra_large"></div>
				
        		<div class="row">
        			<div class="col s12 conteudo_principal">
        				<div class="titulo">Eleições Políticas</div>
						
						<div class="subtitulo spacebox-large">Municipais, Estaduais, Presidenciais</div>
        			</div>
        		</div> <!-- .row -->
        		
        		<div class="spacebox-large"></div>
        		
        	</div>
		</div>
	</div> 
	
	<div class="spacebox-small"></div>
	
		<div class="row">
	      	<ul class="tabs">
	        	<li class="tab col s3"><a href="#test1">Municipais</a></li>
	        	<li class="tab col s3"><a href="#test2">Estaduais</a></li>
	        	<li class="tab col s3"><a href="#test3">Presidenciais</a></li>
	      	</ul>
	    	
	    	<div class="clear spacebox-small"></div>
	    	
	    	<div id="test1">
	    		<div class="container">
	    			<div class="row">
						
						<div class="col s12 l8">
							<h4>Como funcionam as Eleições Municipais?</h4>
		   					<blockquote class="gray-quote blockquote-right">
				        		<p class="justify">
				        		    <?= $this->eleicao->ds_como_funciona_municipais ?>
				        		</p>
		   					</blockquote>
						</div>
			
						<div class="col s12 l4">
							<div class="hide-mobile">
								<div class="spacebox-medium"></div>
			      				<img src="imagens/eleicoes2016.jpg">
							</div>
						</div>
		
						<div class="spacebox-small"></div>
					</div>
		
					<div class="row">
						<div class="col s12 l4">
							<div class="sombra_imagem1 hide-mobile">
						      	<img src="imagens/mayor_quimby.jpg">
							</div>
						</div>
						
						<div class="col s12 l8">
							<h4>Como os candidatos são eleitos?</h4>
		   					<blockquote class="yellow-quote">
				        		<p class="justify">
				        		    <?= $this->eleicao->ds_candidatos_eleitos_municipais ?>
				        		</p>
		   					</blockquote>
						</div>
						
					</div>
				</div>
	    	</div>
	    	
	    	<div id="test2">
	    		<div class="container">
	    			<div class="row">
	    				
	    				<div class="col s12 20 center">
							<div class="hide-mobile">
			      				<img src="imagens/bandeiras-estaduais.png" class="img_bandeiras_estaduais">
							</div>
						</div>
	    				
	    				<div class="col s12 20 center">
							<h4 class="teal-text accent-4">Como funcionam as Eleições Estaduais?</h4>
				        	<p class="justify">
				        	    <?= $this->eleicao->ds_como_funciona_estaduais ?>
				        	</p>
						</div>
			
					</div>
		
					<div class="row">
						<div class="col s12 l3">
							<div class="sombra_imagem hide-mobile">
						      	<img src="imagens/partidos-vector.jpg">
							</div>
						</div>
			
						<div class="col s12 l8">
							<h4>Como os candidatos são eleitos?</h4>
							
							<blockquote class="teal-quote">
					        	<p class="justify">
					        	    <?= $this->eleicao->ds_candidatos_eleitos_estaduais ?>
					        	</p>
		   					</blockquote>
							<p class="justify">
								
							</p>
						</div>
					</div>
				</div>
	    	</div>
	    	
	    	<div id="test3">
	    		<div class="container">
	    			<div class="row">
						<div class="col s12 l8">
							<h4>Como funcionam as Eleições Presidenciais?</h4>
					        <p class="justify">
					            <?= $this->eleicao->ds_como_funciona_presidenciais ?>
					        </p>
						</div>
			
						<div class="col s12 l4">
							<div class="imagem_ilustrativa hide-mobile">
								<div class="spacebox-medium"></div>
			      				<img src="imagens/engrenagem.png">
							</div>
						</div>
		
						<div class="spacebox-small"></div>
					</div>
		
					<div class="row">
						<div class="col s12 l4">
							<div class="imagem_ilustrativa hide-mobile">
								<div class="spacebox-medium"></div>
						      	<img src="imagens/candidatos.png">
							</div>
						</div>
			
						<div class="col s12 l8">
							<h4>Como os candidatos são eleitos?</h4>
					        <p class="justify">
					            <?= $this->eleicao->ds_candidatos_eleitos_presidenciais ?>
					        </p>
						</div>
					</div>
				</div>
	    	</div>
	  	</div>
	</div>
		
    <div class="spacebox-small"></div>
	
	<!-- INCLUDE FOOTER  -->
	<?php //include("includes/footer.php"); ?>