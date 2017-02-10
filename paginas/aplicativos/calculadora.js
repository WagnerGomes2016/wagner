/* JavaScript */

window.onload = function () 
{



	// LIMPAR TELA
	document.getElementsByTagName("div")[2].getElementsByTagName("span")[0].onclick = function()
	{
		document.getElementsByTagName("input")[0].value =  "0";
	}

	// SEPARADOR DECIMAL
	document.getElementsByTagName("div")[1].getElementsByTagName("span")[0].onclick = function()
	{
		document.getElementsByTagName("input")[0].value +=  ".";
	}
	
	// = RESULTADO
	document.getElementsByTagName("div")[1].getElementsByTagName("span")[1].onclick = function()
	{
		var tela = document.getElementsByTagName("input")[0].value ;

		document.getElementsByTagName("input")[0].value = "";

		document.getElementsByTagName("input")[0].value +=  eval(tela);
	}
	


	// OPERADOR MULTIPLICAR
	document.getElementsByTagName("div")[2].getElementsByTagName("button")[0].onclick = function(innerHTML)
	{
		document.getElementsByTagName("input")[0].value +=  this.innerHTML ;
	}

	// OPERADOR DIVISÃO
	document.getElementsByTagName("div")[2].getElementsByTagName("button")[1].onclick = function(innerHTML)
	{
		document.getElementsByTagName("input")[0].value +=  this.innerHTML ;
	}

	// OPERADOR SUBTRAÇÃO
	document.getElementsByTagName("div")[2].getElementsByTagName("button")[2].onclick = function(innerHTML)
	{
		document.getElementsByTagName("input")[0].value +=  this.innerHTML ;
	}

	// OPERADOR ADIÇÃO
	document.getElementsByTagName("div")[2].getElementsByTagName("button")[3].onclick = function(innerHTML)
	{
		document.getElementsByTagName("input")[0].value +=  this.innerHTML ;
	}
	

	var button = document.getElementsByTagName("div")[1].getElementsByTagName("button");

	for( var i = 0 ; i <= button.length ; i++ )
	{
		button[i].onclick = function(innerHTML)
		{ 
			if(document.getElementsByTagName("input")[0].value == "0")
			{
				document.getElementsByTagName("input")[0].value = "";
			}

			if(document.getElementsByTagName("input")[0].value == " 0.")
			{
				document.getElementsByTagName("input")[0].value +=  + parseFloat(this.innerHTML);
			}

			document.getElementsByTagName("input")[0].value +=  + parseFloat(this.innerHTML);
		}
	}

}

