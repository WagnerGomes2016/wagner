/*
	document.getElementsByClassName('sia')[0].onclick = function(){//alert('cliquei');};
	document.getElementsByName('sia')[0].onclick = function(){//alert('cliquei');};

*/
$(document).ready(function(){
	var debug = $('a[href="debug"]');  //alert(debug);
	var post  = $('.posts');
	var dados ='';
	$('body').on('click', '.pagination a', function(){

		//var txt = (window.location.href);
		var pgAtual = $(this).attr('href');
		pgAtual = pgAtual.replace('?page=', '');
		dados = 'page='+pgAtual+'&acao=post';
		enviarDados(dados);
		
		return false;
	});

	function enviarDados(dados){
		debug.empty().text(dados);
		$.ajax({
			url: 			'ajax/postagens.php',
			type: 			'get',
			dataType: 		'',
			data: 			dados,
			beforeSend: 	'',
			errorkey: 		'', 
			success: 		function(resposta){ 
				post.empty().append(resposta);
				//debug.text(resposta);
			},
			complete: 		''
		})
	}
	enviarDados();

});