	<div class="imagem_principal_home">
		<div class="imagem_principal_todo">
			
			<!-- INCLUDE NAV -->
			<?php echo $this->partial('includes/nav.php') ?>
		  		
			<div class="container">
        		
        		<div class="spacebox-large"></div>
        		
        		<div class="row">
        			<div class="col s12 conteudo_principal">
        				<div class="titulo">Entendendo Política</div>
						
						<div class="subtitulo spacebox-small">de <span class="clear spacebox-small">A à Z</span> </div>
        			</div>
        		</div> <!-- .row -->
        		
        		<div class="spacebox-medium"></div>
        		
        		<div class="row">
        			<div class="col s12 group_circulo hide-mobile">
        				<div class="col l3">
							<a href="#modal_senado" data-target="modal_senado" class="modal-trigger">
								<div class="circulo">
									Senado
								</div>
							</a>
						</div>
						
        				<div class="col l3">
							<a href="#modal_camara" data-target="modal_camara" class="modal-trigger">
								<div class="circulo">
									Câmara
								</div>
							</a>
						</div>
						
        				<div class="col l3">
							<a href="#modal_supremo" data-target="modal_supremo" class="modal-trigger">
								<div class="circulo">
									Supremo Tribunal
								</div>
							</a>
						</div>
						
        				<div class="col l3">
							<a href="#modal_presidente" data-target="modal_presidente" class="modal-trigger">
								<div class="circulo">
									Presidente
								</div>
							</a>
						</div>
						
        			</div>  <!-- .group_circulo -->
        		</div> <!-- .row -->
      		</div> <!-- .container -->
      		
        	<div class="spacebox-small"></div>
        	
		</div> <!-- .imagem_principal_todo -->
	</div> <!-- .imagem_principal -->
	
	<div class="spacebox-small"></div>
	
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<h3>Quem Somos?</h3>
						
				<p class="justify">
					Universitários cursando a area de Tecnologia da Infomação, que buscando aprendizado nas técnicas
					obtidas no curso, desenvolvemos soluções com valores sociais e corporativas. Somos motivados por 
					desafios e não paramos até termos superado todos os obstaculos que encontramos. 
				</p>
			</div>
			
			<div class="col s12 l6">
				<div class="foto_pessoal center hide-mobile">
			      	<a href="https://br.linkedin.com/in/viniciuspugliesi" target="_black"><img src="imagens/perfil/vinicius.png"></a>
				</div>
			</div>
		</div>
		
		<div class="spacebox-small"></div>
		
		<div class="row">
			<div class="col s12 l6">
				<div class="foto_pessoal center hide-mobile">
			      	<a href="#"><img src="imagens/perfil/jorge.png"></a>
				</div>
			</div>
			
			<div class="col s12 l6">
				<h3>O que fazemos?</h3>
				
				<p class="justify">
					Desenvolvemos aplicações que possam auxiliar nas obrigações diárias da sociedade brasileira
					comtemplando desde sustentabiliade à concientização social. Somos adeptos da inclusão digital,
					adaptando todos nossos projetos para que qualquer pessoa possa ter acesso ao conteúdo disponivel. 
				</p>
			</div>
		</div>
        		
    	<div class="spacebox-small"></div>
	
		<div class="row">
			<div class="col s12 l6">
				<h2>Nossas metas</h2>
				
				<p class="justify">
					<ul class = "valor">
						<li>Garantir acessibilidade ao conteúdo que é fornecido.
						<li>Fornecer conteúdo de qualidade excepcional.
						<li>Dar ao usuário uma experiência de excelência.
						</li>
					</ul>
				</p>
			</div>
			
			<div class="col s12 l6">
				<div class="foto_pessoal center hide-mobile">
			      	<a href="#"><img src="imagens/perfil/ingrid.png"></a>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col s12 l6">
				<div class="foto_pessoal center hide-mobile">
			      	<a href="#"><img src="imagens/perfil/cicero.png"></a>
				</div>
			</div>
			
			<div class="col s12 l6">
				<h3>Valores</h3>
				
				<p class="justify">
					<ul class = "valor">
						<li>Companheirismo.
						<li>Comprometimento.
						<li>Conhecimento.
						<li>Celsitude.
						<li>Competencia.
						<li>Certeza.
						</li>
					</ul>
				</p>
			</div>
		</div>
		
		<div class="row">
			<div class="col s12 l6">
				<h3>Agradecimentos</h3>
				
				<p class="justify">
					Aos professores, colegas de equipe e a instituição de ensino que nos deu as bases para desenvolver tal ferramenta.
					Especialmente ao professor Vilanni que nos orientou na concepção desse projeto.
				</p>
			</div>
			
			<div class="col s12 l6">
				<div class="foto_pessoal center hide-mobile">
			      	<a href="#"><img src="imagens/perfil/luiz.png"></a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="spacebox-small"></div>

	<!-- INCLUDE MODAL  -->
	<?= $this->partial('includes/modal_home.php') ?>