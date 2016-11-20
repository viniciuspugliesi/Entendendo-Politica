	<div class="imagem_principal_poderes">
		<div class="imagem_principal_todo">
			
			<!-- INCLUDE NAV -->
			<?php echo $this->partial('includes/nav.php') ?>
		  		
			<div class="container">
        		
        		<div class="spacebox-extra_large"></div>
        		
        		<div class="row">
        			<div class="col s12 conteudo_principal">
        				<div class="titulo">Poderes Políticos</div>
						
						<div class="subtitulo spacebox-large">Executivo, Legislativo e Judiciário</span> </div>
        			</div>
        		</div> <!-- .row -->
        		
        		<div class="spacebox-large"></div>
        		
			</div>
		</div>
	</div>
	
	<div class="spacebox-small"></div>
	
	<div class="row">
	   	<div class="col s12 img-abas">
	   		<div class="col s4">
	   			<div class="center hide-mobile">
	   				<a href="#test1"><img src="imagens/executivo.png" /></a>
	   			</div>
	   		</div>
	   		<div class="col s4">
	   			<div class="center hide-mobile">
	   				<a href="#test2"><img src="imagens/legislativo.png" /></a>
	   			</div>
	   		</div>
	   		<div class="col s4">
	   			<div class="center hide-mobile">
	   				<a href="#test3"><img src="imagens/judiciario.png" /></a>
	   			</div>
	   		</div>
	   		
	     	<ul class="tabs">
	       		<li class="tab col s3 green-tab"><a href="#test1">Executivo</a></li>
	       		<li class="tab col s3"><a href="#test2" class="active" >Legislativo</a></li>
	       		<li class="tab col s3"><a href="#test3">Judiciário</a></li>
	     	</ul>
	   	</div>
	   	
	   	<div class="clear spacebox-large"></div>
	   	
	   	<div id="test1" class="col s12">
	   		<div class="container">
	   			<div class="row">
	   				<div class="col s12 l8">
	   					<h4>Executar e administrar</h4>
	   					<blockquote class="yellow-quote">
						    <?= $this->poder->ds_oque_e_executivo ?>
	   					</blockquote>
	   				</div>
	   			<div class="spacebox-medium"></div>
	   				<div class="col s12 l4 foto_home center hide-mobile">
	   					<a href="#"><img src="imagens/votos/manager.jpg"></a>
	   				</div>
	   			</div>
	   			<div class="spacebox-small"></div>
	   			<div class="row">
	   				<div class="col s12 l4 foto_home center hide-mobile">
	   					<a href="#"><img src="imagens/votos/prefeitura.jpg" /></a>
	   				</div>
	   				<div class="col s12 l8">
	   					<h4>Poder Executivo Municipal</h4>
	   					<blockquote class="navy-blue-quote">
						   	<?= $this->poder->ds_oque_faz_executivo_municipal ?>
						    
	   					</blockquote>
	   				</div>
	   			</div>
	   			<div class="spacebox-small"></div>
	   			<div class="row">
	   				<div class="col s12 l8">
	   					<h4>Poder Executivo Estadual</h4>
	   					<blockquote class="green-quote">
						    <?= $this->poder->ds_oque_faz_executivo_estadual ?>
	   					</blockquote>
	   				</div>
	   				<div class="col s12 l4 foto_home center hide-mobile">
	   					<a href="#"><img src="imagens/votos/executivo-estado.png" class="obj-contain"></a>
	   				</div>
	   			</div>
	   			<div class="spacebox-small"></div>
	   			<div class="row">
	   				<div class="col s12 l4 foto_home center hide-mobile">
	   					<a href="#"><img src="http://2.bp.blogspot.com/-GLt4fgt6UTo/T7rtiAccD7I/AAAAAAAAAI4/Fvpj4bIVk2s/s1600/brasao-republica.gif"></a>
	   				</div>
	   				<div class="col s12 l8">
	   					<h4>Poder Executivo Federal</h4>
	   					<blockquote class="yellow-quote">
							<p class="justify">
						    	<?= $this->poder->ds_oque_faz_executivo_federal ?>
						    </p>
	   					</blockquote>
	   				</div>
	   			</div>
	   		</div>
	   	</div>
	   	
	   	<div id="test2" class="col s12">
	   		<div class="container">
	   			<div class="row">
	   				<div class="col s12 l8">
	   					<h4>O que é?</h4>
	   					<blockquote class="green-quote">
							<p class="justify">
						    	<?= $this->poder->ds_oque_e_legislativo ?>
						    </p>
	   					</blockquote>
	   				</div>
	   				
	   				<div class="col s12 l4 foto_home center hide-mobile">
	   					<a href="#"><img src="http://questaodecoaching.com.br/wp-content/uploads/2014/02/interroga%C3%A7%C3%A3o.jpg"></a>
	   				</div>
	   			</div>
	   			<div class="spacebox-small"></div>
	   			<div class="row">
	   				<div class="col s12 l4 foto_home center hide-mobile">
	   					<a href="#"><img src="http://dotgroup.com.br/wp-content/uploads/2013/11/questionamento.jpg"></a>
	   				</div>
	   				<div class="col s12 l8">
	   					<h4>O que faz?</h4>
	   					<blockquote class="yellow-quote">
							<p class="justify">
						    	<?= $this->poder->ds_oque_faz_legislativo ?>
						    </p>
	   					</blockquote>
	   				</div>
	   			</div>
	   			<div class="spacebox-medium"></div>
	   			
	   			<h4>Deveres e responsabilidades</h4>
	   			
	   			<div class="spacebox-medium"></div>
	   			<div class="row">
		   			<div class="col l4 s12">
			   			<div class="col l10 s12">
			   				<div class="card">
		    					<div class="card-image waves-effect waves-block waves-light">
		      						<img class="activator" src="imagens/criar-leis.png">
		    					</div>
		    					<div class="card-content">
		      						<span class="card-title activator grey-text text-darken-4 font-20">Criar leis<i class="small material-icons right">import_export</i></span>
		    					</div>
		    					<div class="card-reveal">
		      						<span class="card-title grey-text text-darken-4 font-20">Criar leis<i class="material-icons right">close</i></span>
									<p class="justify">
						    			<?= $this->poder->ds_criar_leis_legislativo ?>
								    </p>
		    					</div>
		  					</div>
			   			</div>
		   			</div>
		   			
		   			<div class="col l4 s12">
			   			<div class="col l10 s12">
			   				<div class="card">
		    					<div class="card-image waves-effect waves-block waves-light">
		      						<img class="activator" src="imagens/orçamento.png">
		    					</div>
		    					<div class="card-content">
		      						<span class="card-title activator grey-text text-darken-4 font-20">Orçamental<i class="small material-icons right">import_export</i></span>
		    					</div>
		    					<div class="card-reveal">
		      						<span class="card-title grey-text text-darken-4 font-20">Política Orçamental<i class="material-icons right">close</i></span>
									<p class="justify">
						    			<?= $this->poder->ds_orcamental_legislativo ?>
								    </p>
		    					</div>
		  					</div>
			   			</div>
		   			</div>
		   			
		   			<div class="col l4 s12">
			   			<div class="col l10 s12">
			   				<div class="card">
		    					<div class="card-image waves-effect waves-block waves-light">
		      						<img class="activator" src="imagens/guerra-ou-paz.png" style="width: 83%; margin: auto;">
		    					</div>
		    					<div class="card-content">
		      						<span class="card-title activator grey-text text-darken-4 font-20">Guerra ou Paz<i class="small material-icons right">import_export</i></span>
		    					</div>
		    					<div class="card-reveal">
		      						<span class="card-title grey-text text-darken-4 font-20">Guerra ou Paz<i class="material-icons right">close</i></span>
									<p class="justify">
						    			<?= $this->poder->ds_guerra_paz_legislativo ?>
								    </p>
		    					</div>
		  					</div>
			   			</div>
		   			</div>
		   		</div>
	   		</div>
	   	</div>
	   	
	   	<div id="test3" class="col s12">
	   		<div class="container">
	    		<h4>Julgar e Interpretar</h4>
	    		<div class="row">
		    		<div class="col s12 l6">
		   				<blockquote class="blue-quote">
							<p class="justify">
						    	<?= $this->poder->ds_oque_e_judiciario ?>
							</p>
		   				</blockquote>
		    		</div>
		    		<div class="col s12 l6 center">
		    			<iframe width="100%" height="250px" src="https://www.youtube.com/embed/StY0wa7I3J4" frameborder="0" allowfullscreen></iframe>
		    		</div>
	    		</div>
	    		
	    		<div class="spacebox-medium"></div>
	    		
	    		<div class="row">
	    			
		    		<div class="col s12 l12">
		    			
	    				<h4>Princípios e garantias da magistratura</h4>
	    			
		   				<blockquote class="yellow-quote">
							<p class="justify">
						    	<?= $this->poder->ds_principios_garantias_judiciario ?>
							</p>
		   				</blockquote>
		    		</div>
		    		<div class="col s12 l6">
	    				
		    		</div>
	    		</div>
	    		
	    		<div class="spacebox-medium"></div>
	    		
	    		<h4>Orgões judiciários</h4>
	    		<div class="row">
		    		<div class="col s12 l12">
		    			<ul class="collapsible" data-collapsible="accordion">
							<li>
						      	<div class="collapsible-header" style="background: #ddd">
						      		<i class="material-icons">keyboard_arrow_down</i>
						      		Supremo Tribunal Federal, ou Suprema Corte em alguns países
						      	</div>
						      	<div class="collapsible-body">
									<p class="justify">
						    			<?= $this->poder->ds_principios_garantias_judiciario ?>
									</p>
						      	</div>
						    </li>
							<li>
						      	<div class="collapsible-header">
						      		<i class="material-icons">keyboard_arrow_down</i>
						      		Superior Tribunal de Justiça
						      	</div>
						      	<div class="collapsible-body">
									<p class="justify">
						    			<?= $this->poder->ds_tribunal_justica_judiciario ?>
									</p>
						      	</div>
						    </li>
							<li>
						      	<div class="collapsible-header" style="background: #ddd">
						      		<i class="material-icons">keyboard_arrow_down</i>
						      		Tribunais Regionais Federais
						      	</div>
						      	<div class="collapsible-body">
									<p class="justify">
						    			<?= $this->poder->ds_tribunal_regional_judiciario ?>
									</p>
						      	</div>
						    </li>
							<li>
						      	<div class="collapsible-header">
						      		<i class="material-icons">keyboard_arrow_down</i>
						      		Tribunais do Trabalho, sob a figura dos juízes do trabalho
						      	</div>
						      	<div class="collapsible-body">
									<p class="justify">
						    			<?= $this->poder->ds_tribunal_trabalho_judiciario ?>
									</p>
						      		</p>
						      	</div>
						    </li>
							<li>
						      	<div class="collapsible-header" style="background: #ddd">
						      		<i class="material-icons">keyboard_arrow_down</i>
						      		Tribunais Eleitorais, sob a figura dos juízes eleitorais
						      	</div>
						      	<div class="collapsible-body">
									<p class="justify">
						    			<?= $this->poder->ds_tribunal_eleitoral_judiciario ?>
									</p>
						      	</div>
						    </li>
							<li>
						      	<div class="collapsible-header">
						      		<i class="material-icons">keyboard_arrow_down</i>
						      		Tribunais Militares, sob a figura dos juízes militares
						      	</div>
						      	<div class="collapsible-body">
									<p class="justify">
						    			<?= $this->poder->ds_tribunal_militar_judiciario ?>
									</p>
						      	</div>
						    </li>
						</ul>
		    		</div>
	    		</div>
	    		
	    		<div class="spacebox-medium"></div>
	   			
	    	</div>
	   	</div>
	</div>
	
	<!-- INCLUDE FOOTER  -->
	<?php //include("includes/footer.php"); ?>