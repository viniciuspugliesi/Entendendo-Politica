<!DOCTYPE html>
<html>
<head>
	<title>Admin - Entendendo Política</title>
	<meta charset="utf-8">
	
	<!-- AJUSTE MOBILE -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<!-- ICON -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<!-- FONT's -->
	<!-- CSS Materialize -->
	<link rel="stylesheet" href="https://zendframework2-viniciuspugliesi.c9users.io/plugins/materialize/css/materialize.min.css" />
		
	<!-- Nosso css -->
	<link rel="stylesheet" href="https://zendframework2-viniciuspugliesi.c9users.io/css/style.css" />
</head>
<body>
    <nav>
        <div class="nav-wrapper menu_admin">
            <a href="https://zendframework2-viniciuspugliesi.c9users.io/Admin" class="brand-logo"><img src="https://zendframework2-viniciuspugliesi.c9users.io/imagens/entendendo-politica.png"></a>
			<ul class="right hide-on-med-and-down">
		     	<li><a class="sair" href="https://zendframework2-viniciuspugliesi.c9users.io/Admin/Sair">SAIR</a></li>
			 </ul>
        </div>
    </nav>
  
	<div class="row">
        <div class="spacebox-small"></div>
        
        <div class="col s12 l3">
        
            <ul class="collapsible" data-collapsible="accordion">
             	<li>
                	<a href="https://zendframework2-viniciuspugliesi.c9users.io/Admin"><div class="collapsible-header menu-height-large"><i class="material-icons">home</i>HOME</div>
                	<div class="collapsible-body"></div></a>
                </li>
                <li>
                    <a href="https://zendframework2-viniciuspugliesi.c9users.io/Admin/Eleicoes"><div class="collapsible-header menu-height-large"><i class="material-icons">thumb_up</i>ELEIÇÕES</div>
                	<div class="collapsible-body"></div></a>
                </li>
                <li>
                    <a href="https://zendframework2-viniciuspugliesi.c9users.io/Admin/Votos"><div class="collapsible-header menu-height-large"><i class="material-icons">play_for_work</i>VOTOS</div>
                    <div class="collapsible-body"></div></a>
                </li>
                <li>
                    <a href="https://zendframework2-viniciuspugliesi.c9users.io/Admin/Cargos"><div class="collapsible-header menu-height-large"><i class="material-icons">perm_identity</i>CARGOS</div>
                    <div class="collapsible-body"></div></a>
                </li>
                <li>
                    <a href="https://zendframework2-viniciuspugliesi.c9users.io/Admin/Poderes"><div class="collapsible-header menu-height-large"><i class="material-icons">language</i>PODERES</div>
                    <div class="collapsible-body"></div></a>
                </li>
            </ul>
        </div>
        
        <?= $this->content; ?>
    
    </div>
	<!-- SCRIPT's -->
		<!-- jQuery -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	
		<!-- JS - Materialize -->
		<script type="text/javascript" src="https://zendframework2-viniciuspugliesi.c9users.io/plugins/materialize/js/materialize.min.js"></script>
	
		<!-- Nosso javascript -->
		<script type="text/javascript" src="https://zendframework2-viniciuspugliesi.c9users.io/js/script.js"></script>
</body>
</html>