

$(document).ready(function(){

	//alert('nav');

	var menu = $(" #w_nav-header .header .menu li:not('.slider')  ");


	menu.hover(function(e){
		// 1 - Capturando a ação de click da UL e executando a função 
		// Verificando se a tab estava pressionada 
	  	// * O metodo "index" me retorna um inteiro com base na posicação do elemento clicado 
		var tabreference = $(this).index(); 

		// 2 - add moviemnto ao slider
		// Efeito de deslizamento - 160px da largura do elemento x a posição do clique 
	  	var sliding =  130  * tabreference  ; 

	  	// A nova posição do slider será baseada no valor da var anterior 
		$('.slider ').css({
			left: 	(sliding)+ "px" ,
			color:  '#000'

		});
	});

	menu.click(function(e){ 
 		
		// 3 - Efeito Ripple button 
	  
   	  	// Remove as ações anteriores do ripple 
   	  	$(".ripple").remove(); 
  
 	  	// Configurações 
	  	// o metodo offset envia coordenadas dos elementos, neste caso as posições do clique 
	  	var posX = $(this).offset().left;
		posY = $(this).offset().top;
		buttonWidth = $(this).width(); 
		buttonHeight = $(this).height(); 
  
		// Add the element 
		// o metodo prepend funciona como um "before" do CSS3 
		$(this).prepend("<span class='ripple'></span>"); 

		// Fazendo o efeito ficar dinâmico 
		if (buttonWidth >= buttonHeight) { 
			buttonHeight = buttonWidth; 
		} 
		else { 
			buttonWidth = buttonHeight; 
		} 
	 
		// Capturar o centro do elemento 
		var x = e.pageX - posX - buttonWidth / 2; 
		var y = e.pageY - posY - buttonHeight / 2; 
		// Add os novos atribuidos ao efeito ripple 
		$(".ripple").css({ 
			width: 		buttonWidth, 
			height: 	buttonHeight, 
			top: 	 	y + 'px', 
			left: 		x + 'px' 
		}).addClass("rippleBtn"); 


		//class ativando menu
		
		
	
    }); 

}); 



/*

$(function(){
	var men = $(" #w_nav-header .header .menu li:not('.slider')  ");

	men.hover(function(){
		$('#w_nav-header .header .menu li a').removeClass('active');

 		$(this).find('a').addClass('active');

		var element = $(this).find('a').attr('id');

		//alert(element)

		var submenu = $('.w_backend[name!="'+element+'"] ').fadeOut(0, function(){
			//alert(this);
			$('.w_backend[name="'+element+'"]').fadeIn();
		});

	});

});



*/

