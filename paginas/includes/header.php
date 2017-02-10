<!DOCTYPE html>
<html lang="pt-br">
<head>

	<!--http://www.tutorialwebdesign.com.br/tag/css/ 
		https://www.logaster.com.br/blog/
	-->
	<title>WEB WAGNER</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- pesonalizações próprias css-->
	<link rel="stylesheet" type='text/css' href="<?php echo BASE.'/css/style.css'?>">
	<link rel="stylesheet" type='text/css' href="<?php echo BASE.'/css/fonts.css'?>">
	<link rel='stylesheet' type='text/css' href="<?php echo BASE.'/css/style.menu.css'?>"> 
	
		<!-- jQuery (required) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo BASE.'/js/jquery.js' ?>"><\/script>')</script>
	<script  type='text/javascript'  src="<?php echo BASE.'/js/jquery.ui.datepicker-pt-BR.js' ?>"></script>  
	<script  type='text/javascript'  src="<?php echo BASE.'/js/jquery-ui.js' ?>"></script>
	
	<link  rel="stylesheet" href="<?php echo BASE.'/css/jquery-ui.css' ?>">
	<link  rel="stylesheet" href="<?php echo BASE.'/css/jquery-ui.theme.css' ?>">

	<link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Open+Sans">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- plugin galeria de silde show com videos  -->
	<link  rel="stylesheet" href="<?php echo BASE.'/js/plugins/AnythingSlider/demos/css/page.css' ?>">
	<link  rel="stylesheet" href="<?php echo BASE.'/js/plugins/AnythingSlider/css/theme-cs-portfolio.css' ?>">
	<script src="<?php echo BASE.'/js/plugins/AnythingSlider/js/anythingslider.js' ?>"></script>
	<!-- plugin anythingslider-->	
	<link  rel="stylesheet" href="<?php echo BASE.'/js/plugins/AnythingSlider/css/w_anythingslider.css' ?>">
	<script src="<?php echo BASE.'/js/plugins/AnythingSlider/js/w_cofiguracoes_anythingslider.js' ?>"></script>

	<!-- pesonalizações próprias js-->
	<script type='text/javascript' src="<?php echo BASE.'/js/script.menu.js' ?>"></script>  
	<script type='text/javascript' src="<?php echo BASE.'/js/controller.js' ?>"></script>  

	<!-- SyntaxHighlighter //sintaxes de linguagens// -->
	<script type="text/javascript" src="<?php echo BASE.'/js/plugins/syntaxhighlighter_3.0.83/scripts/shCore.js' ?>"></script>
	<script type="text/javascript" src="<?php echo BASE.'/js/plugins/syntaxhighlighter_3.0.83/scripts/shBrushJScript.js'?>"></script>
	<script type="text/javascript" src="<?php echo BASE.'/js/plugins/syntaxhighlighter_3.0.83/scripts/shBrushCss.js'?>"></script>
	<script type="text/javascript" src="<?php echo BASE.'/js/plugins/syntaxhighlighter_3.0.83/scripts/shBrushPhp.js'?>"></script>
	<script type="text/javascript" src="<?php echo BASE.'/js/plugins/syntaxhighlighter_3.0.83/scripts/shBrushXml.js'?>"></script>
	<!-- SyntaxHighlighter //themes// -->
	<link type="text/css" rel="stylesheet" href="<?php echo BASE.'/js/plugins/syntaxhighlighter_3.0.83/styles/shCoreDefault.css'?>"/>
		<!-- SyntaxHighlighter //inicializar// -->
	<script type="text/javascript">SyntaxHighlighter.all();</script>

	

	<!-- http://www.w3schools.com/w3css/tryw3css_templates_social.htm -->
</head>
<body>
		<!-- Navbar -->
	<nav id="w_nav-header"> 
			<?php  
				$link = strip_tags(trim(($_GET['url']))) ? strip_tags(trim(($_GET['url']))) : "home" ;
				$link = explode('/', $link);
			?>

			<div class="header">	
				<div class="logo">
				</div>
				<ul class="menu"> 
					<li><a href="<?php echo BASE.'/home' ?>" alt="home" class="<?php if(in_array('home', $link))echo 'active' ?>">HOME</a>
						<ul class="submenu">
							<li><a href="">HTML5 </a></li> 
							<li><a href="">CSS3</a></li> 
							<li><a href="">Java Script</a></li> 
							<li><a href="">Ver todos tutorias</a></li> 
						</ul> 
					</li>
					<li><a href="<?php echo BASE.'/frontend' ?>" alt="frontend" class="<?php if(in_array('frontend', $link))echo 'active' ?>">FRONT END </a>
						<ul class="submenu">
							<li><a href="">HTML5 </a></li> 
							<li><a href="">CSS3</a></li> 
							<li><a href="">Java Script</a></li> 
							<li><a href="">Ver todos tutorias</a></li> 
						</ul> 
					</li> 
					<li><a href="<?php echo BASE.'/backend' ?>" alt="backend" class="<?php if(in_array('backend', $link))echo 'active' ?>">BACK END</a></li> 
					<li><a href="<?php echo BASE.'/mysql' ?>" alt="mysql" class="<?php if(in_array('mysql', $link))echo 'active' ?>">MY SQL</a></li> 	 
					<li><a href="<?php echo BASE.'/portifolio' ?>" alt="portifolio"  class="<?php if(in_array('portifolio', $link))echo 'active' ?>">PORTIFÓLIO</a></li> 	 	 
					<li><a href="<?php echo BASE.'/sobre' ?>" alt="sobre"  class="<?php if(in_array('sobre', $link))echo 'active' ?>">SOBRE</a></li> 	 	 
					<li><a href="<?php echo BASE.'/contato' ?>" alt="contato"  class="<?php if(in_array('contato', $link))echo 'active' ?>">CONTATO</a></li> 
					<li class="slider"></li> 
				</ul> 
			</div>

				
			
				

	</nav>  <!-- End Navbar -->






