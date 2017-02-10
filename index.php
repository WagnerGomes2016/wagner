<?php include_once("dts/config.php") ; ?>
<?php 
	$pag = (isset($_GET['url']) ? htmlentities(strip_tags($_GET['url'])) : "home");
	$pag = explode('/', $pag);
	$pasta = 'paginas';
	
	include_once("paginas/includes/header.php") ; 
?>
	
	<!-- Page Container -->
<main class="w_container" >    

	<?php 

		/* paginas  com queryString */

		//$pag = (isset($_GET['url']) ? htmlentities(strip_tags($_GET['url'])) : "home");
		//$pag = explode('/', $pag);
		$pasta = 'paginas';
		//$permitida = array('frontend','backend','mysql','portifolio','sobre','contato');
		//print_r ($pag);
		
		//requeste de 
		if(isset($_GET['busca']) && $_GET['busca'] != "" ){
			include "paginas/busca.php";
		}
		elseif(file_exists('paginas/'.$pag[0].'.php')){
			include_once('paginas/'.$pag[0].'.php');
		}
		elseif(file_exists($pasta.'/'.$pag[1].'/'.$pag[2].'.php')){
			require_once  ($pasta.'/'.$pag[1].'/'.$pag[2].'.php') ;
		}
		else{
			 require_once('paginas/404.php');
		}
	

		
	?>
	

</main><!-- End Page Container -->

</body>
</html> 
