<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/b5d69b6602.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet"/>
	<meta name="keywords" content="Palavras-chave,do,meu website">
	<meta name="description" content="Descrição do meu website">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">	
	<title>Projeto 01</title>
</head>
<body>

	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'depoimentos':
				echo '<target target="depoimentos"/>';
				break;

			case 'servicos':
				echo '<target target="servicos"/>';
				break;
			
		}


	?>

	<header>
		<div class="center">
		<div class="logo left"><a href="/">Logomarca</a></div><!--Logo-->
		<nav class="desktop right">
			<ul>
				<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
			</ul>
		</nav>
			<nav class="mobile right">
				<div class="botao-menu-mobile"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></div>
				<ul>
				<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div><!--center-->
	</header>

	<?php
		

		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');

		}else{

			if($url != 'depoimentos' && $url != 'servicos'){
				$pagina404 = true;
				include('pages/404.php');

			}else{
				include('pages/home.php');

			}

		}
	?>

	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="center">
		<p>Todos os direitos reservados</p>
	</div><!--center-->
	</footer>
	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.min.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
	<?php 
		if($url == 'contato'){
		

	?>

	<script defer src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
	<script defer src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4&callback=Function.prototype'></script>
	<?php } ?> 
</body>
</html>