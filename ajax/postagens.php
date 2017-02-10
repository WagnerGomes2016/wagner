<?php
	include_once("../dts/conn.php");
	/*
		 htmlentities() ->
	*/

	$acao = isset($_GET['acao']) ? htmlentities($_GET['acao']) : "post";

	$maxLinks = 4;
	$pgAtual  = isset($_GET['page']) ? (int)$_GET['page'] : 1;
	$max 	  = (isset($_GET['max'])) ? (int)$_GET['max'] : 3;	
	$inicio   = (( $max * $pgAtual) - $max);


	//total de registros no banco de dados
	$totRegitros = $conn->query("SELECT * FROM posts");
	$total = $totRegitros->rowCount();

	//definir número de páginas
	$numPag = ceil($total/$max);

	switch($acao){

		case 'teste':
			echo "teste OK";
		break;

		case "post":

			$sql = "SELECT * FROM posts LIMIT $inicio, $max";
			try{
				$query = $conn->prepare($sql);
				$query->execute();
				if($query->rowCount() > 0 ){

					while($post = $query->fetch(PDO::FETCH_OBJ)){
					
						echo '<div class="articles ">';
							echo ' <figure>';
								echo '<img src="images/articles/'.$post->imagem.'" alt="" title="" width="164" height="164">';
							echo '</figure>';

							echo '<div class="descrition">';
								echo '<header>';
									echo '<h3><span class="icon-speech-bubble"></span>'.utf8_encode($post->titulo).'</h3>';
									echo '<ul>';
										echo '<li> <span class="icon-calendar10"> </span> 22/01/2017 </li>';
										echo '<li> <span class="icon-user7"> </span> Wagner G. </li>';
										echo '<li> <span class="icon-file-text2"> </span> '.$post->slug.' </li>';
									echo '</ul>';
								echo '</header>';
								echo '<p>'.utf8_encode($post->descricao).' </p>';
							echo '<a href="paginas/detalhes/'.utf8_encode($post->link).'"> <button> Saiba mais... </button></a>';
						echo '</div> ';
						echo '<div class="clearfix"></div>';
						echo '<hr> ';
					

					}//fim while
					
					echo' <div class="center" style="margin:30px 0px 0px 330px;">';
			        	echo' <ul class="pagination">';
			                echo '<li><a href="?page=1">«</a></li>';

			              	//paginação dos 4 link anterirores
			              	for($i=$pgAtual - $maxLinks; $i<=$pgAtual-1; $i++){
			              		if($i>=1){echo '<li><a href="'.$i.'"> '.$i.' </a></li> ';}  
			              	}
			              	//mostra paginação atual
			                echo '<li class="active"><a href="'.$i.'"> '.$pgAtual.'</a></li>';

			                //mostra paginação dos 4 links  poteriores
			                for($i= $pgAtual + 1; $i <= $pgAtual + $maxLinks; $i++){
								if($i <= $numPag){echo '<li><a href="?page='.$i.' "> '.$i.' </a></li> ';}		
							}
							//mostra a ultima pagina
			                echo '<li><a href="?page='.$numPag.'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
			            echo '</ul>';
			        echo '</div>';
			       
				}
				else{
					//echo "Não existe registro";
				}
			}
			catch(PDOException $e){
				echo "Erro:".$e->getMessage();
			}
		break;

		default:
			print "Erro";
		break;
	}// fim switch

?>

          
	           