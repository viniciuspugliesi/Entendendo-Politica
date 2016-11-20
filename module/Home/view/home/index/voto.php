	<div class="imagem_principal_votos">
		<div class="imagem_principal_todo">
			
			<!-- INCLUDE NAV -->
			<?php echo $this->partial('includes/nav.php') ?>
		  		
			<div class="container">
        		
        		<div class="spacebox-extra_large"></div>
        		
        		<div class="row">
        			<div class="col s12 conteudo_principal">
        				<div class="titulo">Votos Políticos</div>
						
						<div class="subtitulo spacebox-large">Proporcional, Branco e Nulo</span> </div>
        			</div>
        		</div> <!-- .row -->
        		
        		<div class="spacebox-large"></div>
        	
        	</div>
		</div>
	</div>
	
	<div class="spacebox-small"></div>
	
		<div class="row">
	      	<ul class="tabs">
	        	<li class="tab col s3"><a href="#test1">Proporcional</a></li>
	        	<li class="tab col s3"><a href="#test2">Branco</a></li>
	        	<li class="tab col s3"><a href="#test3">Nulo</a></li>
	      	</ul>
	    	
	    	<div class="clear spacebox-large"></div>
	    	
	    	<div id="test1">
	    		<div class="container">
	    			<div class="row">
						<div class="col s12 l8">
							<h4>Como funciona o Sistema Proporcional?</h4>
							<blockquote class="green-quote">
						        <p class="justify">
						            <?= $this->voto->ds_como_funciona_proporcional ?>
						        </p>
		   					</blockquote>
						</div>
						<div class="col s12 l4 foto_home center hide-mobile">
							<a href="#!">
	    						<img src="imagens/votos/chart.jpg" class="obj-contain" />
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<h4>Etapas do sistema proporcional</h4>
						       <p class="justify">
						           <?= $this->voto->ds_etapas_sistema_proporcional ?>
						       </p>
						</div>
					</div>
					<div class="spacebox-small"></div>
					<div class="row">
						<div class="col s12 l4 foto_home center hide-mobile">
							<a href="#!">
								<img src="http://www12.senado.leg.br/noticias/materias/resolveuid/1f27f918-3a59-4e82-be69-fecf87aa1d1e" class="obj-contain" />
							</a>
						</div>
						<div class="col s12 l8">
							<h4>Quociente eleitoral</h4>
							<blockquote class="navy-blue-quote">
						       <p class="justify">
						           <?= $this->voto->ds_quociente_eleitoral_proporcional ?>
						       </p>
		   					</blockquote>
						</div>
					</div>
					<div class="spacebox-small"></div>
					<div class="row">
						<div class="col s12 l8">
							<h4>Quociente partidário</h4>
							<blockquote class="yellow-quote">
						       <p class="justify">
						           <?= $this->voto->ds_quociente_partidário_proporcional ?>
						       </p>
		   					</blockquote>
						</div>
						<div class="col s12 l4 foto_home center hide-mobile">
							<a href="#!">
	    						<img src="http://www12.senado.leg.br/noticias/materias/resolveuid/9f960bc9-dbe0-44df-922c-f7c6781839dd" class="obj-contain" />
							</a>
						</div>
					</div>
					<div class="spacebox-small"></div>
					<div class="row">
						<div class="col s12">
							<h4>Sobra de vagas</h4>
							<blockquote class="green-quote">
						       <p class="justify">
						           <?= $this->voto->ds_sobra_vagas_proporcional ?>
						       </p>
		   					</blockquote>
						</div>
					</div>
				</div>
	    	</div>
	    	
	    	<div id="test2">
	    		<div class="container">
	    			<div class="row">
						<div class="col s12">
						</div>
			
						<div class="col s12 l8">
							<h4>O que é?</h4>
		   					<blockquote class="gray-quote">
						       <p class="justify">
						           <?= $this->voto->ds_oque_e_branco ?>
						       </p>
		   					</blockquote>
						</div>
						<div class="col s12 l4 foto_home center hide-mobile">
							<a href="#">
								<img src="http://www.nv1.com.br/Portal/wp-content/uploads/2015/12/Falta-de-verba-para-urna-eletr%C3%B4nica-pode-fazer-voto-de-papel-ser-op%C3%A7%C3%A3o-em-2016.jpg" />
							</a>
						</div>
					</div>
					<div class="spacebox-small"></div>
			   		<div class="row">
			   			<div class="col s12 l4 foto_home center hide-mobile">
			   				<a href="#"><img src="http://i.cbc.ca/1.2006818.1381561728!/httpImage/image.jpg_gen/derivatives/16x9_620/li-small-biz-num-620-istock.jpg"></a>
			   			</div>
			   			<div class="col s12 l8">
			   				<h4>Voto em Branco vai para algum Candidato?</h4>
			   				<blockquote class="green-quote">
						       <p class="justify">
						           <?= $this->voto->ds_vai_para_candidato_branco ?>
						       </p>
			   				</blockquote>
			   			</div>
			   		</div>
			   		<div class="spacebox-small"></div>
			   		<div class="row">
			
						<div class="col s12">
							<h4>Consequências dos votos em branco</h4>
		   					<blockquote class="red-quote">
						       <p class="justify">
						           <?= $this->voto->ds_consequencia_voto_branco ?>
						       </p>
		   					</blockquote>
						</div>
						
					</div>
				</div>
	    	</div>
	    	
	    	<div id="test3">
	    		<div class="container">
	    			<div class="row">
						<div class="col s12 l8">
							<h4>O que é?</h4>
							<blockquote class="navy-blue-quote">
						       <p class="justify">
						           <?= $this->voto->ds_oque_e_nulo ?>
						       </p>
		   					</blockquote>
						</div>
	    				<div class="col s12 l4 foto_home center hide-mobile">
							<a href="#">
								<img src="http://thumb.mais.uol.com.br/15207762-xlarge.jpg?ver=1" />
							</a>
						</div>
					</div>
					<div class="spacebox-small"></div>
					<div class="row">
	    				<div class="col s12 l4 foto_home center hide-mobile">
							<a href="#">
								<img src="https://www.op-cc.ca/wp-content/uploads/2016/02/50-percent.png" />
							</a>
						</div>
						<div class="col s12 l8">
							<h4>E se houver mais de 50% de votos nulos?</h4>
							<blockquote class="gray-quote">
						       <p class="justify">
						           <?= $this->voto->ds_50_por_cento_nulo ?>
						       </p>
		   					</blockquote>
						</div>
					</div>
					<div class="spacebox-small"></div>
					<div class="row">
						<div class="col s12 l8">
							<h4>O que pode anular uma eleição?</h4>
							<blockquote class="red-quote">
						       <ul class="valor ul-votos">
						           <?= $this->voto->ds_anular_eleicao_nulo ?>
						       </ul>
		   					</blockquote>
						</div>
	    				<div class="col s12 l4 foto_home hide-mobile">
							<a href="#">
								<img src="http://asresvolcat.com/blog/wp-content/uploads/2015/08/anulado1.gif" />
							</a>
						</div>
					</div>
				</div>
	    	</div>
	  	</div>
	</div>
	
	<div class="spacebox-small"></div>