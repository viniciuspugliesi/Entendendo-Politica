	<div class="imagem_principal_cargos">
		<div class="imagem_principal_todo">
			
			<!-- INCLUDE NAV -->
			<?php echo $this->partial('includes/nav.php') ?>
		  		
			<div class="container">
        		
        		<div class="spacebox-extra_large"></div>
				
        		<div class="row">
        			<div class="col s12 conteudo_principal">
        				<div class="titulo">Cargos Políticos</div>
						
						<div class="subtitulo spacebox-large">Executivo, Legislativo e Judiciário</span> </div>
        			</div>
        		</div> <!-- .row -->
				
				<div class="spacebox-extra_large"></div>
				
        	</div>
		</div>
	</div>
	
	<div class="spacebox-small"></div>
	
	<div class="row">
	   	<div class="col s12 img-abas">
	   		<div class="col s4">
	   			<div class="center hide-mobile">
	   				<a href="#tab-executivo"><img src="imagens/executivo.png" /></a>
	   			</div>
	   		</div>
	   		<div class="col s4">
	   			<div class="center hide-mobile">
	   				<a href="#tab-legislativo"><img src="imagens/legislativo.png" /></a>
	   			</div>
	   		</div>
	   		<div class="col s4">
	   			<div class="center hide-mobile">
	   				<a href="#tab-judiciario"><img src="imagens/judiciario.png" /></a>
	   			</div>
	   		</div>
	   		
	     	<ul class="tabs">
	       		<li class="tab col s3"><a href="#tab-executivo" >Executivo</a></li>
	       		<li class="tab col s3"><a href="#tab-legislativo" class="active" >Legislativo</a></li>
	       		<li class="tab col s3"><a href="#tab-judiciario">Judiciário</a></li>
	     	</ul>
	   	</div>
	   	
	   	<div class="clear spacebox-large"></div>
	   	
	   	<div id="tab-executivo" class="col s12">
	   		<div class="container">
	   			<ul id="id-list-executivo" class="efeito-list">
		          	<li>
		          		<div class="row center">
        					<div class="col s12 l4">
								<a href="#modal_prefeito" data-target="modal_prefeito" class="modal-trigger btn-floating btn-circle-large waves-effect waves-light grey">
							 		Prefeito
								</a>
							</div>
						
        					<div class="col s12 l4">
								<a href="#modal_governador" data-target="modal_governador" class="modal-trigger btn-floating btn-circle-large btn-circle-large waves-effect waves-light blue">
									Governador
								</a>
							</div>
						
        					<div class="col s12 l4">
								<a href="#modal_presidente" data-target="modal_presidente" class="modal-trigger btn-floating btn-circle-large btn-circle-large waves-effect waves-light green">
									Presidente
								</a>
							</div>

        				</div> <!-- .row -->
        			</li>
		       	</ul>
	   		</div>
	   	</div>
	   	
	   	<div id="tab-legislativo" class="col s12">
	   		<div class="container">
	   			<ul id="id-list-legislativo" class="efeito-list">
		          	<li>
		            <div class="row center">
        					<div class="col s12 l3">
								<a href="#modal_vereador" data-target="modal_vereador" class="modal-trigger btn-floating btn-circle-large waves-effect waves-light grey">
							 		Vereador
								</a>
							</div>
						
        					<div class="col s12 l3">
								<a href="#modal_deputado_estadual" data-target="modal_deputado_estadual" class="modal-trigger btn-floating btn-circle-large btn-circle-large waves-effect waves-light blue">
									Deputado Estadual
								</a>
							</div>
						
        					<div class="col s12 l3">
								<a href="#modal_deputado_federal" data-target="modal_deputado_federal" class="modal-trigger btn-floating btn-circle-large btn-circle-large waves-effect waves-light green">
									Deputado Federal
								</a>
							</div>
						
        					<div class="col s12 l3">
								<a href="#modal_senador" data-target="modal_senador" class="modal-trigger btn-floating btn-circle-large btn-circle-large waves-effect waves-light yellow">
									Senador
								</a>
							</div>
						
        				</div> <!-- .row -->
		          	</li>
		       	</ul>
	   		</div>
	   	</div>
	   	
	   	<div id="tab-judiciario" class="col s12">
	   		<div class="container">
	   			<ul id="id-list-judiciario" class="efeito-list">
		          	<li>
		            	<div class="row center">
        					<div class="col s12 l4">
								<a href="#modal_promotor" data-target="modal_promotor" class="modal-trigger btn-floating btn-circle-large waves-effect waves-light grey">
							 		Promotor
								</a>
							</div>
						
        					<div class="col s12 l4">
								<a href="#modal_juiz" data-target="modal_juiz" class="modal-trigger btn-floating btn-circle-large btn-circle-large waves-effect waves-light blue">
									Juiz
								</a>
							</div>
						
        					<div class="col s12 l4">
								<a href="#modal_desempargador" data-target="modal_desempargador" class="modal-trigger btn-floating btn-circle-large btn-circle-large waves-effect waves-light green">
									Desembargador
								</a>
							</div>

        				</div> <!-- .row -->
		          	</li>
		       	</ul>
	    	</div>
	   	</div>
	</div>
	
	<div class="spacebox-extra_large"></div>
	
	<!-- INCLUDE MODAL  -->
	<?= $this->partial('includes/modal_cargo.php') ?>