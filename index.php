	<!DOCTYPE html>
	
	<html lang="pt-br">
	
		<nav id="menu">
			<h2>Menu Principal</h2>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="noticias.html"> Noticias</a></li>
				<li><a href="reserva.html"> Reservas</a></li>
				<li><a href="contas.html"> Prestação de contas</a></li>
				<li><a href="fale.html"> Fale conosco </a></li>
			</ul>
		</nav>

		<head> 
			<title>Site Teste</title>
			<link rel="icon" type="image/gif" href="animated_favicon1.gif">
			<!-- <link rel="shortcut icon" href="favicon.ico"> --> 
			<meta charset="UTF-8"/>
			<link rel="stylesheet" type="text/css" href="css/styles.css"/>
			<link rel="stylesheet" href="css/gallery.min.css">
			<link rel="stylesheet" href="css/gallery.css">
		</head>

		<body> 
		<div id="interface">
		<header>
		<figure class="foto-logo">
			<img src="imagens/residencial-mar-azul-logo.jpg"/>
			<figcaption>
				<h2>Bem Vindo ao Mar Azul<h2>
			</figcaption>
		</figure>
		
		<nav id="imagens">
	<div class="gallery autoplay items-4">
		<div id="item-1" class="cotrol-operator"></div>
		<div id="item-2" class="cotrol-operator"></div>
		<div id="item-3" class="cotrol-operator"></div>
		<div id="item-4" class="cotrol-operator"></div>
		
		<figure class="item">
			<img src="imagens/manutencao-site.png"/>
		</figure>	
		
		<figure class="item">
			<img src="imagens/mar-azul-logo.jpg"/>
		</figure>

		<figure class="item">
			<img src="imagens/mar-azul-aerea.jpg"/>
		</figure>
		
		<figure class="item">
			<img src="imagens/mar-azul-plata-condominio.jpg"/>
		</figure>
		
		
		<div class="controls">
		<a href="#item-1" class="control-button">•</a>
		<a href="#item-2" class="control-button">•</a>
		<a href="#item-3" class="control-button">•</a>
		<a href="#item-4" class="control-button">•</a>
		</div>
	</div>
		</nav>
		
		<!--
		<figure class="foto-legenda">
			<img src="imagens/manutencao-site.png"/>		
			<figcaption>
			<h3>Página de Teste</h3>
			<p>Está página está sendo construida para aprendizado, todos os testes aqui são possiveis.</p>			
			</figcaption>
		</figure>
		-->
		</header>
		</br></br></br>
			<?php

	         echo "Hello World!";

	        ?>
			
		</body>

	</html>

