<!DOCTYPE html>
<html>
<head>
	<title>Entendendo Política - <?= $title ?></title>
	<meta charset="utf-8">
	
		<!-- AJUSTE MOBILE -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<!-- FONT's -->
		<!-- Fonts do Google -->
		<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet" />
		
		<!-- Material icons -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
		
		<!-- Fonts Awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
	
		<!-- CSS Materialize -->
		<link rel="stylesheet" href="plugins/materialize/css/materialize.min.css" />
		
		<!-- Nosso css -->
		<link rel="stylesheet" href="css/style.css" />
</head>
<body>
        
    <?= $this->content; ?>

<footer class="page-footer">
   	<div class="container">
        <div class="row">
           	<div class="col l6 s12 mobile-center">
               	<h5 class="white-text mobile-font-20">MENU</h5>
            	<div class="col l6 s6">
	               	<p class="grey-text text-lighten-4"><a href="Home" class="white-text mobile-font-15">Home</a></p>
	               	<p class="grey-text text-lighten-4"><a href="Eleicoes" class="white-text mobile-font-15">Eleições</a></p>
	               	<p class="grey-text text-lighten-4"><a href="Votos" class="white-text mobile-font-15">Votos</a></p>
	            </div>
	            <div class="col l6 s6">
	               	<p class="grey-text text-lighten-4"><a href="Cargos" class="white-text mobile-font-15">Cargos</a></p>
	               	<p class="grey-text text-lighten-4"><a href="Poderes" class="white-text mobile-font-15">Poderes</a></p>
	            </div>
            </div>
            <div class="col l4 offset-l2 s12 mobile-center social-media">
	        	<h5 class="white-text mobile-font-20">Redes Sociais</h5>
	        	<!--<a class="grey-text text-lighten-3 img-facebook" href="#!"><img class="responsive-img img-footer" src="imagens/redes-sociais/facebook.png"></a>-->
				<!--<a class="grey-text text-lighten-3" href="#!"><img class="responsive-img img-footer" src="imagens/redes-sociais/instagram.png" ></a>-->
				<!--<a class="grey-text text-lighten-3" href="#!"><img class="responsive-img img-footer" src="imagens/redes-sociais/linkedin.png" ></a>-->
				<!--<a class="grey-text text-lighten-3" href="#!"> <img class="responsive-img img-footer" src="imagens/redes-sociais/youtube.png" ></a>-->
	            <div class="social-media center">    
	                <a class="grey-text text-lighten-3" href="#!"><div class="img-footer facebook-icon col 14 s3"><span class="fa fa-facebook" aria-hidden="true"></span></div></a>
	               	<a class="grey-text text-lighten-3" href="#!"><div class="img-footer instagram-icon col 14 s3"><span class="fa fa-instagram" aria-hidden="true"></span></div></a>
	                <a class="grey-text text-lighten-3" href="#!"><div class="img-footer linkedin-icon col 14 s3"><span class="fa fa-linkedin" aria-hidden="true"></span></div></a>
	                <a class="grey-text text-lighten-3" href="#!"><div class="img-footer youtube-icon col 14 s3"><span class="fa fa-youtube" aria-hidden="true"></span></div></a>
	        	</div>
	        </div>
       	</div>
    </div>
    <div class="footer-copyright">
       	<div class="container center">
			© 2016, Entendendo Política. TODOS OS DIREITOS RESERVADOS
        </div>
    </div>
</footer>
	<!-- SCRIPT's -->
		<!-- jQuery -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	
		<!-- JS - Materialize -->
		<script type="text/javascript" src="plugins/materialize/js/materialize.min.js"></script>
	
		<!-- Nosso javascript -->
		<script type="text/javascript" src="js/script.js"></script>
</body>
</html>